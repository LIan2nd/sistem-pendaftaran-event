<head>
    <title>Done ga, Bang?</title>
</head>
@if (Auth::user()->role->name == $role)
    Anda Sudah menjadi User <strong>{{ $role }}</strong>, Lord
@else
    Kamu siapaa????
@endif
