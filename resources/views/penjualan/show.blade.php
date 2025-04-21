<div class="modal-header">
    <h5 class="modal-title">Detail Penjualan</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body" style="background-color: white">
    <p><strong>Kode Penjualan:</strong> {{ $penjualan->penjualan_kode }}</p>
    <p><strong>Pembeli:</strong> {{ $penjualan->pembeli }}</p>
    <p><strong>Tanggal:</strong> {{ $penjualan->penjualan_tanggal }}</p>
    <p><strong>Barang:</strong></p>
    <ul>
        @foreach ($penjualan->details as $detail)
            <li>{{ $detail->barang->barang_nama }} ({{ $detail->jumlah }}) - Rp {{ number_format($detail->barang->harga_jual * $detail->jumlah, 2, ',', '.') }}</li>
        @endforeach
    </ul>
    <p><strong>Total Harga:</strong> Rp {{ number_format($penjualan->total_harga, 2, ',', '.') }}</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>