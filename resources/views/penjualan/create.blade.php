    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page->title }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('penjualan.store') }}" method="POST" id="formPenjualan">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $userId }}">
                        <div class="form-group">
                            <label>Nama Pembeli:</label>
                            <input type="text" name="pembeli" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal:</label>
                            <input type="datetime-local" name="penjualan_tanggal" class="form-control" required>
                        </div>
                        <h4>Barang yang Dibeli</h4>
                        <div id="items">
                            <div class="item form-group">
                                <label>Barang:</label>
                                <select name="items[0][barang_id]" class="form-control barang-select" onchange="updateHarga(this)" required>
                                    <option value="">Pilih Barang</option>
                                    @foreach ($barangs as $barang)
                                        <option value="{{ $barang->barang_id }}" data-harga="{{ $barang->harga_jual }}">{{ $barang->barang_nama }}</option>
                                    @endforeach
                                </select>
                                <label>Jumlah:</label>
                                <input type="number" name="items[0][jumlah]" class="form-control jumlah" min="1" required oninput="updateHarga(this)">
                                <label>Harga Satuan:</label>
                                <input type="number" name="items[0][harga]" class="form-control harga" min="0" readonly>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary mt-2" onclick="addItem()">Tambah Barang</button>
                        <div class="form-group mt-3">
                            <label>Total Harga:</label>
                            <input type="number" id="totalHarga" class="form-control" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


<script>
    let itemCount = 1;

    function addItem() {
        const itemsDiv = document.getElementById('items');
        const newItem = document.createElement('div');
        newItem.className = 'item form-group';
        newItem.innerHTML = `
            <label>Barang:</label>
            <select name="items[${itemCount}][barang_id]" class="form-control barang-select" onchange="updateHarga(this)" required>
                <option value="">Pilih Barang</option>
                @foreach ($barangs as $barang)
                    <option value="{{ $barang->barang_id }}" data-harga="{{ $barang->harga_jual }}">{{ $barang->barang_nama }}</option>
                @endforeach
            </select>
            <label>Jumlah:</label>
            <input type="number" name="items[${itemCount}][jumlah]" class="form-control jumlah" min="1" required oninput="updateHarga(this)">
            <label>Harga Satuan:</label>
            <input type="number" name="items[${itemCount}][harga]" class="form-control harga" min="0" readonly>
            <button type="button" class="btn btn-danger btn-sm mt-2" onclick="removeItem(this)">Hapus</button>
        `;
        itemsDiv.appendChild(newItem);
        itemCount++;
        updateTotal();
    }

    function removeItem(button) {
        button.parentElement.remove();
        updateTotal();
    }

    function updateHarga(element) {
        const itemDiv = element.closest('.item');
        const select = itemDiv.querySelector('.barang-select');
        const hargaInput = itemDiv.querySelector('.harga');
        const selectedOption = select.options[select.selectedIndex];
        hargaInput.value = selectedOption.dataset.harga || '';
        updateTotal();
    }

    function updateTotal() {
        let total = 0;
        const items = document.querySelectorAll('.item');
        items.forEach(item => {
            const harga = parseFloat(item.querySelector('.harga').value) || 0;
            const jumlah = parseFloat(item.querySelector('.jumlah').value) || 0;
            total += harga * jumlah;
        });
        document.getElementById('totalHarga').value = total;
    }
</script>
