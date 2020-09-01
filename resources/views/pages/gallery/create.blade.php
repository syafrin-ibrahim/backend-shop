@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Foto Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product-gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Barang</label>
                <select name="products_id" id="" class="form-control @error('products_id') is-invalid @enderror">
                          <option value=""> :. Pilih Barang .: </option>
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                </select>
                  @error('products_id') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="photo">Foto Barang</label>
                <input type="file" name="photo" id="photo" accept="image/*" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo') }}">
               @error('photo') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="is_default" class="form-control-label">Default Foto</label>
                <br/>
                <label>
                    <input type="radio" name="is_default"  value="1" class="form-control"/> Ya 
                </label>
                &nbsp; &nbsp; &nbsp;
               <label>
                    <input type="radio" name="is_default" value="0"  class="form-control"/> No 
                </label>             
                @error('is_default') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <button class="btn-primary btn-block" type="submit">
                    simpan
                </button>
                
            </div>
            </form>
        </div>
    </div>
@endsection