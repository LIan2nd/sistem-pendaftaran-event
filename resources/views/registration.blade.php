<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
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
