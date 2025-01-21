@extends('berita_admin')

@section('content')
<h1>News List</h1>
<a href="{{ route('admin.news.create') }}">Add News</a>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
