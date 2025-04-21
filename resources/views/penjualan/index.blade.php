@extends('layouts.template')

@section('title', 'Daftar Penjualan')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page->title }}</h3>
                    <div class="card-tools">
                        <button onclick="modalAction('{{ url('/penjualan/create') }}')" class="btn btn-sm btn-success mt-1">Tambah</button>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <table class="table table-bordered table-striped table-hover table-sm" id="table_penjualan">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Penjualan</th>
                                <th>Pembeli</th>
                                <th>Tanggal</th>
                                <th>Barang</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-white">
                    <!-- Modal content will be loaded here -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
<script>
    function modalAction(url = '') {
        $.get(url)
            .done(function(response) {
                $('#myModal .modal-content').html(response);
                $('#myModal').modal('show');
            })
            .fail(function(xhr) {
                alert('Error: ' + (xhr.responseJSON?.error || 'Terjadi kesalahan pada server'));
            });
    }

    var dataPenjualan;
    $(document).ready(function() {
        dataPenjualan = $('#table_penjualan').DataTable({
            serverSide: true,
            responsive: true,
            ajax: {
                url: "{{ url('penjualan/list') }}",
                dataType: "json",
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                error: function(xhr, error, thrown) {
                    console.log('AJAX Error: ', xhr.responseText);
                    alert('Terjadi kesalahan saat mengambil data penjualan. Cek console untuk detail.');
                }
            },
            columns: [
                {
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "penjualan_kode",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "pembeli",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "penjualan_tanggal",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "barang",
                    className: "",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "total_harga",
                    className: "",
                    orderable: true,
                    searchable: false
                },
                {
                    data: "aksi",
                    className: "",
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        return `<button onclick="modalAction('${data.show}')" class="btn btn-info btn-sm">Detail</button>`;
                    }
                }
            ]
        });
    });
</script>
@endpush