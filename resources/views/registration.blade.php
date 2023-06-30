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
            <form action="">
                <label for="event">Pilih Event : </label>
                <select name="event" id="event">
                    @foreach ($events as $event)
                        <option value="{{ $event->id }}">{{ $event->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
    {{-- @endforeach --}}
</body>

</html>
