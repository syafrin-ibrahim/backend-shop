@extends('layouts.default')
@section('content')
      <div class="card">
        <div class="card-header">
            <strong>Edit Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
            <div class="form-group">
                <label for="name">Nama Barang</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $item->name }}">
                @error('name') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="type">Tipe Barang</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') ? old('type') : $item->type }}">
               @error('type') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="price">Harga Barang</label>
                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{  old('price') ?  old('price') : $item->price }}">
               @error('price') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="quantity">Stock Barang</label>
                <input type="number" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') ? old('quantity') : $item->quantity }}">
               @error('quantity') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Barang</label>
                <textarea name="description" id="editor" class="form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $item->description }}</textarea>
                 @error('description') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <button class="btn-primary btn-block" type="submit">
                    update
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection