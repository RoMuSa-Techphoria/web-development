@extends('admin.layouts.app')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Service</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        value="{{ $service->name }}" required>
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock"
                        value="{{ $service->stock }}" required>
                </div>
                @error('stock')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="note">Note</label>
                    <input type="text" class="form-control @error('note') is-invalid @enderror" id="note" name="note"
                        value="{{ $service->note }}" required>
                </div>
                @error('note')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group" hidden>
                    <label for="partner_id">Partner</label>
                    <input type="text" class="form-control @error('partner_id') is-invalid @enderror" id="partner_id"
                        name="partner_id" value="{{ Auth::user()->id }}" required>
                </div>
                @error('partner_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach ($categories as $row)
                            <option value="{{ $row->id }}">{{ $row->service_name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
