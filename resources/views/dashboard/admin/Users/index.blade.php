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
                                    Loyal <span class="fw-bold">Users-</span> of Your Website
                                </p>
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

        @if ($users->count())
            <div class="card">
                <h5 class="card-header">All Users</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $loop->iteration }}</strong>
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        @if ($user->role_id == 1)
                                            <button class="btn btn-secondary" style="min-width: 150px">
                                                <span class="badge me-2">{{ $user->role->name }}</span>
                                            </button>
                                        @elseif($user->role_id == 2)
                                            <button class="btn btn-info" style="min-width: 150px">
                                                <span class="badge me-2">{{ $user->role->name }}</span>
                                            </button>
                                        @elseif($user->role_id == 3)
                                            <button class="btn btn-primary" style="min-width: 150px">
                                                <span class="badge me-2">{{ $user->role->name }}</span>
                                            </button>
                                        @endif
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
                            <p class="card-text">No <storng>User</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
