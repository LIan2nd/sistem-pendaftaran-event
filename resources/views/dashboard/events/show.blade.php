@extends('dashboard.layouts.main')
@section('content')
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">
                    {{ $post['title'] }}
                </h1>
                <a href="/dashboard/posts" class="btn btn-success"><i class='bx bx-left-arrow-alt'></i> Back to All Posts</a>
                <a href="" class="btn btn-warning"><i class="bx bx-edit"></i> Edit Post</a>
                <a href="" class="btn btn-danger"><i class="bx bx-trash"></i> Delete Post</a>

                <img src="{{ asset('img' . '/' . $post->category->name) . '.jpg' }}" alt="{{ $post->category->name }}"
                    class="image-fluid mt-4" style="width: 100%; height: 400px">
                <article @class(['my-3', 'fs-5'])>
                    <p>{!! $post->body !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection
