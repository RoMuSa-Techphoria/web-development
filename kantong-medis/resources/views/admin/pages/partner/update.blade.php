@extends('admin.layouts.app')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Partner</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        name="username" value="{{ $partner->username }}" required>
                </div>
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        value="{{ $partner->name }}" required>
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                        name="address" value="{{ $partner->address }}" required>
                </div>
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                        value="{{ $partner->phone }}" required>
                </div>
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="map">Link Map</label>
                    <input type="text" class="form-control @error('map') is-invalid @enderror" id="map" name="map"
                        value="{{ $partner->map }}" required>
                </div>
                @error('map')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
                        name="image">
                </div>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="active" @if ($partner->status == 'active')
                    checked
                    @endif>
                    <label class="form-check-label" for="inlineRadio1">Aktif</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="inactive"
                        @if ($partner->status == 'inactive')
                    checked
                    @endif>
                    <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label><br>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
