@extends('layouts.default')
@section('content')
      <div class="card">
        <div class="card-header">
            <strong>Edit Transaksi</strong>
            <small>{{ $item->uuid }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
            <div class="form-group">
                <label for="name">Nama Pemesan</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name') : $item->name }}">
                @error('name') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ? old('email') : $item->email }}">
               @error('email') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="number">Nomor Hp</label>
                <input type="text" name="number" id="number" class="form-control @error('number') is-invalid @enderror" value="{{  old('number') ?  old('number') : $item->number }}">
               @error('number') <div class="text-muted">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="address">Alamat Pemesan</label>
                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') ? old('address') : $item->address }}">
               @error('address') <div class="text-muted">{{ $message }}</div>@enderror
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