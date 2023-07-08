@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Registration History</h2>
                        <div class="bt-option">
                            <a class="text-decoration-none" href="/">Home</a>
                            <span>Histories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    @if ($registrations->where('user_id', Auth::user()->id)->count())
        <div class="container mb-5">
            @php $no = 1; @endphp
            @foreach ($registrations->where('user_id', Auth::user()->id) as $registration)
                <ul class="list-none">
                    <li>ID Registrasi : {{ $registration->id }}</li>
                    <li>Nama Event :<a href="events/{{ $registration->event->slug }}" @style(['text-decoration: none'])>
                            {{ $registration->event->name }}</a></li>
                    <li>Category Event : {{ $registration->event->category->name }}</li>
                    <li>Tanggal Pendaftaran : {{ $registration->created_at->format('l, d-m-Y') }}</li>
                </ul>
                <hr>
            @endforeach
        </div>
    @else
        <div class="text-center mb-5">
            <p><i class="fa-regular fa-face-meh-blank"></i> You haven't registered to any event, <a
                    class="text-decoration-none text-black" href="/registration"><strong>Register Here!</strong></a>
            </p>
        </div>
    @endif
@endsection
