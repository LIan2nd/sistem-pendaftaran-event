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
                                    These all your <span class="fw-bold">Events</span>, wanna make a new Event?
                                </p>

                                @if ($events->count())
                                    <a href="/dashboard/events/create" class="btn btn-sm btn-outline-primary"><i
                                            class='bx bx-plus'></i> Create new
                                        Event</a>
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
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong><i class='bx bx-cut'></i> {{ session('success') }} <i class='bx bxs-radiation'></i></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($events->count())
            <div class="card">
                <h5 class="card-header">All events</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($events as $event)
                                <tr>
                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $loop->iteration }}</strong>
                                    </td>
                                    <td>{{ $event->name }}</td>
                                    <td>
                                        {{ $event->category->name }}
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-outline-info" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true"
                                            title="<i class='bx bx-info-circle'></i>&nbsp; <span>Event Detail</span>"
                                            href="/dashboard/events/{{ $event->slug }}"><span class="badge me-2"><i
                                                    class="bx bx-detail me-1"></i></span></a>
                                        <a class="btn btn-outline-warning" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true"
                                            title="<i class='bx bx-edit'></i>&nbsp; <span>Event Edit</span>"
                                            href="/dashboard/events/{{ $event->slug }}/edit"><span class="badge me-2"><i
                                                    class="bx bx-edit-alt me-1"></i></span></a>
                                        <form action="/dashboard/events/{{ $event->slug }}" class="d-inline"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger d-inline" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                title="<i class='bx bx-message-alt-x'></i>&nbsp; <span>Event Delete</span>"
                                                onclick="return confirm('Are You sure u want to DESTROYY this event?')"
                                                type="submit"><span class="badge me-2"><i
                                                        class="bx bx-trash me-1"></i></span></button>
                                        </form>
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
                            <p class="card-text">You haven't an Event yet, Let's make some <storng>Event</strong>.</p>
                            <a href="events/create" class="btn btn-primary">Create an Event</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
