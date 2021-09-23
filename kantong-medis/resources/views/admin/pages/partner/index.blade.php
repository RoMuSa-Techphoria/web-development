@extends('admin.layouts.app')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Partner</h6>
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
                                <td>{{ $row->map }}</td>
                                <td>
                                    <img src="{{ asset("storage/$row->image") }}" alt="error!" style="max-width: 200px;">
                                </td>
                                <td>{{ $row->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
