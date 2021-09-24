@extends('admin.layouts.app')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Kategori</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="service_category">Kategori Service</label>
                    <select class="form-control" id="service_category" name="service_category">
                        <option value="medicine" {{$category->service_category === 'medicine' ? 'selected' : ''}}>Obat-obatan</option>
                        <option value="vaccine" {{$category->service_category === 'vaccine' ? 'selected' : ''}}>Vaksin</option>
                        <option value="covidtest" {{$category->service_category === 'covidtest' ? 'selected' : ''}}>Test Covid-19</option>
                    </select>
                </div>
                @error('service_category')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="service_name">Nama Service</label>
                    <input type="text" class="form-control @error('service_name') is-invalid @enderror" id="service_name" name="service_name"
                           value="{{$category->service_name}}" required>
                </div>
                @error('service_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
