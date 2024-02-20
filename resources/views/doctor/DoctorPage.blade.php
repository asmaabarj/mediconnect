<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mediconnect</title>

</head>




<x-app-layout>
<body class="text-gray-800 font-inter">
    @include('layouts/sideBarDoc')

    @foreach ($medicaments as $medicament)

    <div>
    
        <p>{{ $medicament->name }}</p>
</div>
@endforeach
<form action="{{ route('medicament.update') }}" method="post">
    @csrf
    <input type="hidden" name="medicament_id" value="{{ $medicament->id }}">
    <input type="text" name="name" value="{{ $medicament->name }}">
    <button type="submit">Update</button>
</form>

<form action="{{ route('medicament.delete') }}" method="post">
    @csrf
    <input type="hidden" name="medicament_id" value="{{ $medicament->id }}">
    <button type="submit">Delete</button>
</form>

<form action="{{ route('medicament.add') }}" method="post">
    @csrf
    <input type="text" name="MedicamentName" placeholder="Medicament Name">
    <button type="submit">Add</button>
</form>

</body>
</x-app-layout>