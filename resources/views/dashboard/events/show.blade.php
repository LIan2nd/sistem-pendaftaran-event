@extends('dashboard.layouts.main')
@section('content')
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">
                    {{ $event->name }}
                </h1>
                <a href="/dashboard/events" class="btn btn-success"><i class='bx bx-left-arrow-alt'></i> Back to All Events</a>
                <a href="/dashboard/events/{{ $event->slug }}/edit" class="btn btn-warning"><i class="bx bx-edit"></i> Edit
                    Event</a>
                <form action="/dashboard/events/{{ $event->slug }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger d-inline"
                        onclick="return confirm('Are You sure u want to DESTROYY this event?')" type="submit"><span><i
                                class="bx bx-trash me-1"></i></span> Delete</button>
                </form>
                @if (session('create'))
                    <div class="alert alert-success alert-dismissible mt-3" role="alert">
                        <i class='bx bx-list-plus'></i> {{ session('create') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session('update'))
                    <div class="alert alert-warning alert-dismissible mt-3" role="alert">
                        <i class='bx bxs-bookmarks'></i> {{ session('update') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <img src="{{ asset('user') }}/img/blog/{{ $event->category->slug }}.jpg" alt="{{ $event->category->name }}"
                    class="image-fluid mt-3" style="width: 100%; height: 400px">
                <article @class(['my-3', 'fs-5'])>
                    <p>{!! $event->description !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection
