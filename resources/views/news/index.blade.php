@extends('layouts.app')

@section('content')
<h1>Latest News</h1>
@foreach($news as $item)
    <div>
        <h2>{{ $item->title }}</h2>
        <p>{{ $item->content }}</p>
        @if($item->image)
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="max-width: 200px;">
        @endif
    </div>
@endforeach

{{ $news->links() }} <!-- Pagination -->
@endsection
