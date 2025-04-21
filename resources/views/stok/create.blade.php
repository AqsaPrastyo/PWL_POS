@extends('layouts.template')

@section('title', 'Tambah Stok')

@section('content')
    {{-- @if (isset($breadcrumb))
        @include('layouts.breadcrumb')
    @endif --}}

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $page->title }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('stok.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Barang:</label>
                            <select name="barang_id" class="form-control" required>
                                <option value="">Pilih Barang</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->barang_id }}">{{ $barang->barang_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Supplier:</label>
                            <select name="supplier_id" class="form-control" required>
                                <option value="">Pilih Supplier</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->supplier_id }}">{{ $supplier->supplier_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jumlah:</label>
                            <input type="number" name="stok_jumlah" class="form-control" min="1" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal:</label>
                            <input type="datetime-local" name="stok_tanggal" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection