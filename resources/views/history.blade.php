@extends('layout.main')
@section('content')
    @php $no = 1; @endphp
    @foreach ($registrations as $registration)
        <ul class="list-none py-4 px-2">
            <li>No. {{ $no++ }}</li>
            <li>ID Registrasi : {{ $registration->id }}</li>
            <li>User yang daftar : {{ $registration->user->name }}</li>
            <li>Nama Event :<a href="events/{{ $registration->event->slug }}" @style(['text-decoration: none'])>
                    {{ $registration->event->name }}</a></li>
            <li>Category Event : {{ $registration->event->category->name }}</li>
            <li>Tanggal Pendaftaran : {{ $registration->created_at->format('l, d-m-Y') }}</li>
            <li>email user yang daftar : {{ $registration->user->email }}</li>
        </ul>
        <hr>
    @endforeach
    <div class="text-center">
        {{ $registrations->links() }}
    </div>
@endsection
