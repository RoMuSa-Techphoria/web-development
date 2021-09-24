@extends('admin.layouts.app')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="m-0 font-weight-bold text-primary">Data Partner</span>
            <a class="btn btn-sm btn-success" href="{{ route('partner.create') }}">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Link Map</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partners as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->phone }}</td>
                                <td><a href="{{ $row->map }}" class="btn btn-primary"><i class="fa fa-map-marked"
                                            style="margin-right: 8px"></i>Lihat Map</a></td>
                                <td><a href="{{ asset("storage/$row->image") }}" class="btn btn-primary"><i
                                            class="fa fa-image" style="margin-right: 8px"></i>Lihat Gambar</a></td>
                                <td>{{ $row->status }}</td>
                                <td>
                                    <form action="{{ route('partner.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('partner.edit', $row->id) }}" class="btn btn-sm">
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
