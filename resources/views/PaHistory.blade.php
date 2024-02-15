<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PaHistory</title>
</head>
<body>
    <h1>Favorite Doctors</h1>
    <ul>
        @foreach ($favoriteDoctors as $favoriteDoctor)
            <li>{{ $favoriteDoctor->doctor->name }} - {{ $favoriteDoctor->doctor->email }} - {{ $favoriteDoctor->doctor->numTel }}</li>
        @endforeach
    </ul>
</body>
</html>
