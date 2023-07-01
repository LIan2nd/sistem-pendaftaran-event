@extends('layout.main')
@section('content')
    @foreach ($events as $event)
        <ul class="list-none py-4 px-2">
            <li>Event ID. {{ $event->id }}</li>
            <li>Nama Event :<a href="events/{{ $event->slug }}" @style(['text-decoration: none'])>
                    {{ $event->name }}</a></li>
            <li>Category : {{ $event->category->name }}</li>
            <li>Tanggal Event: {{ $event->date }}</li>
            <li>Detail : {{ $event->description }}</li>
        </ul>
        <hr>
    @endforeach
    <div class="text-center">
        {{ $events->links() }}
    </div>
@endsection
