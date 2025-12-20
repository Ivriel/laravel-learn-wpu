@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success">
                    <i data-feather="arrow-left" style="width: 20px; height: 20px; margin-right: 5px; vertical-align: -3px;"></i>
                    Back to all my posts
                </a>

                <a href="" class="btn btn-warning">
                    <i data-feather="edit" style="width: 20px; height: 20px; margin-right: 5px; vertical-align: -3px;"></i>
                    Edit
                </a>

                <a href="" class="btn btn-danger">
                    <i data-feather="x-circle" style="width: 20px; height: 20px; margin-right: 5px; vertical-align: -3px;"></i>
                    Delete
                </a>

                    <img src="https://picsum.photos/1200/800" alt="{{ $post->category->name }}" class="img-fluid mt-3">

                    <article class="my-3 fs-5">
                {!! $post->body !!}
                    </article>
            </div>
        </div>
    </div>

@endsection