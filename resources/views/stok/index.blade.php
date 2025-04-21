@extends('layouts.template')

@section('title', 'Daftar Stok')

@section('content')
    {{-- @if (isset($breadcrumb))
        @include('layouts.breadcrumb')
    @endif --}}

    <section class="content">
        <div class="container-fluid">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $page->title }}</h3>
                    <div class="card-tools">
                        <button onclick="modalAction('{{ url('/stok/create') }}')" class="btn btn-sm btn-success mt-1">Tambah</button>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <table class="table table-bordered table-striped table-hover table-sm" id="table_stok">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Supplier</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>User</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
    </section>
@endsection

@push('js')
<script>
    function modalAction(url = '') {
        $('#myModal').load(url, function() {
            $('#myModal').modal('show');
        });
    }

    var dataStok;
    $(document).ready(function() {
        dataStok = $('#table_stok').DataTable({
            serverSide: true,
            responsive: true,
            ajax: {
                url: "{{ url('stok/list') }}",
                dataType: "json",
                type: "POST", // Pastikan menggunakan POST
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                },
                error: function(xhr, error, thrown) {
                    console.log('AJAX Error: ', xhr.responseText);
                    alert('Terjadi kesalahan saat mengambil data stok. Cek console untuk detail.');
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
                    data: "barang",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "supplier",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "stok_jumlah",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "stok_tanggal",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "user",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "aksi",
                    className: "",
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        return `<button onclick="modalAction('${data.delete}')" class="btn btn-danger btn-sm">Hapus</button>`;
                    }
                }
            ]
        });
    });
</script>
@endpush