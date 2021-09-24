@extends('admin.layouts.app')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="m-0 font-weight-bold text-primary">Data Kategori</span>
            <a class="btn btn-sm btn-success" href="{{ route('category.create') }}">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Kategori Service</th>
                        <th>Nama Service</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->service_category }}</td>
                            <td>{{ $row->service_name}}</td>
                            <td>
                                <form action="{{ route('category.destroy', $row->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('category.edit', $row->id) }}" class="btn btn-sm">
                                        <i class="fas fa-edit text-info"></i>
                                    </a>
                                    <button class="btn btn-sm" type="submit"
                                            onclick="return confirm('Apakah yakin ingin menghapus?')">
                                        <i class="fas fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
