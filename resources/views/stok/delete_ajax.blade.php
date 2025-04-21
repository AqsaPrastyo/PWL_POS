<div class="modal-header">
    <h5 class="modal-title">Konfirmasi Hapus Stok</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <p>Apakah Anda yakin ingin menghapus stok ini?</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
    <button type="button" class="btn btn-danger" onclick="deleteData('{{ url('/stok/' . $stok->stok_id . '/delete_ajax') }}')">Hapus</button>
</div>

<script>
    function deleteData(url) {
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                _method: 'DELETE'
            },
            success: function(response) {
                if (response.status) {
                    $('#modalAction').modal('hide');
                    $('#stokTable').DataTable().ajax.reload();
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            }
        });
    }
</script>