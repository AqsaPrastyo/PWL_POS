<?php

namespace App\Http\Controllers;

use App\Models\PenjualanModel;
use App\Models\PenjualanDetailModel;
use App\Models\BarangModel;
use App\Models\StokModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PenjualanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Penjualan',
            'list' => ['Home', 'Penjualan']
        ];

        $page = (object) [
            'title' => 'Daftar Penjualan yang terdaftar di sistem'
        ];

        $activeMenu = 'penjualan';

        return view('penjualan.index', compact('breadcrumb', 'page', 'activeMenu'));
    }

    public function list(Request $request)
{
    $penjualans = PenjualanModel::select('penjualan_id', 'penjualan_kode', 'pembeli', 'penjualan_tanggal', 'total_harga')
        ->with('details.barang');

    return DataTables::of($penjualans)
        ->addIndexColumn()
        ->addColumn('barang', function ($penjualan) {
            return $penjualan->details->map(function ($detail) {
                return $detail->barang->barang_nama . ' (' . $detail->jumlah . ')';
            })->implode(', ');
        })
        ->addColumn('total_harga', function ($penjualan) {
            return number_format($penjualan->total_harga, 2, ',', '.');
        })
        ->addColumn('aksi', function ($penjualan) {
            return [
                'show' => url('/penjualan/' . $penjualan->penjualan_id . '/show_ajax'),
            ];
        })
        ->make(true);
}

    public function create()
    {
        try {
            $breadcrumb = (object) [
                'title' => 'Tambah Penjualan',
                'list' => ['Home', 'Penjualan', 'Tambah']
            ];

            $page = (object) [
                'title' => 'Tambah Penjualan Baru'
            ];

            $barangs = BarangModel::select('barang_id', 'barang_nama', 'harga_jual')->get();
            $user = Auth::user();
            $userId = $user->user_id;
            $activeMenu = 'penjualan';

            return view('penjualan.create', compact('breadcrumb', 'page', 'barangs', 'activeMenu', 'userId'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'user_id' => 'required|exists:m_user,user_id',
        'pembeli' => 'required|string|max:255',
        'penjualan_tanggal' => 'required|date',
        'items' => 'required|array',
        'items.*.barang_id' => 'required|exists:m_barang,barang_id',
        'items.*.jumlah' => 'required|integer|min:1',
    ]);

    DB::beginTransaction();
    try {
        // Generate kode penjualan
        $lastPenjualan = PenjualanModel::latest()->first();
        $lastId = $lastPenjualan ? (int) substr($lastPenjualan->penjualan_kode, 3) : 0;
        $newId = $lastId + 1;
        $penjualanKode = 'PJ' . str_pad($newId, 3, '0', STR_PAD_LEFT);

        // Hitung total harga
        $totalHarga = 0;
        foreach ($request->items as $item) {
            $barang = BarangModel::find($item['barang_id']);
            $totalHarga += $barang->harga_jual * $item['jumlah'];
        }

        // Simpan penjualan
        $penjualan = PenjualanModel::create([
            'user_id' => $request->user_id,
            'penjualan_kode' => $penjualanKode,
            'pembeli' => $request->pembeli,
            'penjualan_tanggal' => $request->penjualan_tanggal,
            'total_harga' => $totalHarga,
        ]);

        // Simpan detail penjualan
        foreach ($request->items as $item) {
            PenjualanDetailModel::create([
                'penjualan_id' => $penjualan->penjualan_id,
                'barang_id' => $item['barang_id'],
                'jumlah' => $item['jumlah'],
                'harga' => $barang->harga_jual,
            ]);
        }

        DB::commit();
        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil disimpan.');
    } catch (\Exception $e) {
        DB::rollback();
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

public function showAjax($id)
{
    try {
        $penjualan = PenjualanModel::with(['details.barang', 'user'])->findOrFail($id);
        return view('penjualan.show_ajax', compact('penjualan'));
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Terjadi kesalahan: ' . $e->getMessage()
        ], 500);
    }
}
}