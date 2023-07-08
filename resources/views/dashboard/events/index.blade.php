@extends('dashboard.layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Hii, {{ Auth::user()->name }} 🎉</h5>
                                <p class="mb-4">
                                    These all your <span class="fw-bold">Posts</span>, wanna make a new post?
                                </p>

                                @if ($posts->count())
                                    <a href="/dashboard/posts/create" class="btn btn-sm btn-outline-primary"><i
                                            class='bx bx-plus'></i> Create new
                                        Post</a>
                                @else
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('admin') }}/assets/img/illustrations/man-with-laptop-light.png"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-info alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($posts->count())
            <div class="card">
                <h5 class="card-header">All Posts</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $loop->iteration }}</strong>
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        {{ $post->category->name }}
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-outline-info" href="/dashboard/posts/{{ $post->slug }}"><span
                                                class="badge me-2"><i class="bx bx-detail me-1"></i></span></a>
                                        <a class="btn btn-outline-warning" href="/dashboardposts/update"><span
                                                class="badge me-2"><i class="bx bx-edit-alt me-1"></i></span></a>
                                        <a class="btn btn-outline-danger" href="/dashboardposts/delete"><span
                                                class="badge me-2"><i class="bx bx-trash me-1"></i></span></a>
                                    </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-none bg-transparent border border-info text-center mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-info">Ooppss!!</h5>
                            <p class="card-text">You haven't yet a Post, Let's make some <storng>Post</strong>.</p>
                            <a href="posts/create" class="btn btn-primary">Create a Post</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
