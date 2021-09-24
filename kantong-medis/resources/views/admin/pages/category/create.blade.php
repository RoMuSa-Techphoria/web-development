@extends('admin.layouts.app')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Kategori</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="service_category">Kategori Service</label>
                    <select class="form-control" id="service_category" name="service_category">
                        <option value="medicine">Obat-obatan</option>
                        <option value="vaccine">Vaksin</option>
                        <option value="covidtest">Test Covid-19</option>
                    </select>
                </div>
                @error('service_category')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="service_name">Nama Service</label>
                    <input type="text" class="form-control @error('service_name') is-invalid @enderror" id="service_name" name="service_name"
                           required>
                </div>
                @error('service_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
