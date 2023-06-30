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
    @php $no = 1; @endphp
    {{-- @foreach ($events as $event) --}}
    <div class="mx-10 my-5">
        <div class="mb-5">
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
        </div>
        <div class="text-center">
            {{ $registrations->links() }}
        </div>
    </div>
    {{-- @endforeach --}}
</body>

</html>
