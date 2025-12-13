

@extends("layouts.main")

@section('container')
    <article>
        <h1>{{ $post->title }}</h1>
        
            {!! $post->body !!}
    </article>

    <a href="/posts">Back to Posts</a>
@endsection
