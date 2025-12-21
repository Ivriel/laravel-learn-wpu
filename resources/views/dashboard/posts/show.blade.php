@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success">
                    <i data-feather="arrow-left"
                        style="width: 20px; height: 20px; margin-right: 5px; vertical-align: -3px;"></i>
                    Back to all my posts
                </a>

                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                    <i data-feather="edit" style="width: 20px; height: 20px; margin-right: 5px; vertical-align: -3px;"></i>
                    Edit
                </a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0"> <svg class="bi" aria-hidden="true"
                            onclick="return confirm('Are you sured')">
                            <use xlink:href="#trash"></use>
                        </svg>
                        Delete
                    </button>
                </form>

                @if ($post->image)

                    <div style="max-height:350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>

                @else
                    <img src="https://picsum.photos/1200/800" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>

@endsection