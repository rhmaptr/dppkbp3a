@extends('berita_admin')

@section('content')
<h1>Add News</h1>
<form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>
    <label>Content:</label>
    <textarea name="content" required></textarea>
    <label>Image:</label>
    <input type="file" name="image">
    <button type="submit">Submit</button>
</form>
@endsection