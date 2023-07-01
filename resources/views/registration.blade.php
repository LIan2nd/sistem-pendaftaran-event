@extends('layout.main')
@section('content')
    @php $no = 1; @endphp
    {{-- @foreach ($events as $event) --}}
    <form action="" class="comment-form contact-form">
        <label for="event">Pilih Event : </label>
        <select class="form-control" name="event" id="event">
            @foreach ($events as $event)
                <option value="{{ $event->id }}">{{ $event->name }}</option>
            @endforeach
        </select>
    </form>
@endsection
