<div class="modal-header">
    <h5 class="modal-title">Detail Penjualan</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <p><strong>Kode Penjualan:</strong> {{ $penjualan->penjualan_kode }}</p>
    <p><strong>Pembeli:</strong> {{ $penjualan->pembeli }}</p>
    <p><strong>Tanggal:</strong> {{ date('d-m-Y', strtotime($penjualan->penjualan_tanggal)) }}</p>
    <p><strong>User:</strong> {{ $penjualan->user->nama }}</p>
    <h6>Barang yang Dibeli:</h6>
    <ul>
        @foreach ($penjualan->details as $detail)
            <li>{{ $detail->barang->barang_nama }} ({{ $detail->jumlah }}) - Rp {{ number_format($detail->harga, 0, ',', '.') }}</li>
        @endforeach
    </ul>
    <p><strong>Total:</strong> Rp {{ number_format($penjualan->total_harga, 0, ',', '.') }}</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>