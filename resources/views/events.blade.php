<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>NF Fly Fest | {{ $title }}</title>
</head>

<body>
    <div class="mx-10 my-5">
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
        <div class="text-center mt-3">
            {{ $events->links() }}
        </div>
    </div>
</body>

</html>
