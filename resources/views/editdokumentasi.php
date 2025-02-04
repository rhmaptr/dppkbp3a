@extends('layouts.app')

@section('content')
    <h1>Edit Berita</h1>

    <form action="{{ route('dokumentasi.edit', $dokumentasis->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Untuk method PUT pada route update -->
        
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ old('title', $dokumentasis->judul) }}">
        </div>

        <div class="form-group">
            <label for="konten">Konten</label>
            <input type="file" name="image" class="form-control">{{ old('image', $dokumentasis->konten) }}</inp>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
