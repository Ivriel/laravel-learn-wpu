@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    <div class="table-responsive col-lg-8 small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
                                <svg class="bi" aria-hidden="true">
                                    <use xlink:href="#eye"></use>
                                </svg>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning">
                                <svg class="bi" aria-hidden="true">
                                    <use xlink:href="#pencil"></use>
                                </svg>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-danger" onclick="return confirm('Yakin mau dihapus?')">
                                <svg class="bi" aria-hidden="true">
                                    <use xlink:href="#trash"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection