@extends('layout.app')

@section('content')

    <div class="m-3">
        <form action="{{ url('product/update/'.$products->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="id" placeholder="Masukkan Id" value="{{ $products->id }}" required="">
            <div class="col-sm-8 mt-2">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul" value="{{ $products->judul }}" required="">
            </div>
            <div class="col-sm-8 mt-2">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi" required="">{{ $products->deskripsi }}</textarea>
            </div>
            <div class="col-sm-8 mt-2">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" placeholder="Masukkan harga" value="{{ $products->harga }}" required="">
            </div>
            <div class="col-sm-8 mt-4">
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection
