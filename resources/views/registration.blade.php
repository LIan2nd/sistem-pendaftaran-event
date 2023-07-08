@extends('layouts.main')
@section('content')
    <div class="container my-5">
        @php $no = 1; @endphp
        {{-- @foreach ($events as $event) --}}
        <form action="" class="comment-form contact-form">
            <label for="name">Nama : </label>
            <input type="text" name="name" id="name">
            <label for="event">Pilih Event : </label>
            <select class="form-control form-select" name="event" id="event">
                <option value="none" disabled selected>-- EVENT LIST --</option>
                @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>
            <label for="nickname" class="mt-4">Nickname : </label>
            <input type="text" name="nickname" id="nickname">
            <label for="alamat">Alamat : </label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
            <div class="text-center">
                <a href="#" class="primary-btn text-decoration-none">Daftar</a>
            </div>
        </form>
    </div>
@endsection
