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
    
        <div class="flex h-screen justify-center items-center">
            @foreach ($reservations as $reservation)
                {{ $reservation->patient_name }} <br>
                {{ $reservation->date }} <br>
                {{ $reservation->patient_email }} <br>
                {{ $reservation->id }} <br>
                <button class="approve" onclick="toggleModal('certif{{ $reservation->id }}')">Approve</button>
                <div
                    class="certif h-screen hidden flex justify-center items-center fixed left-0 right-0 top-0 bottom-0 bg-white/40"
                    id="certif{{ $reservation->id }}">
                    <form action="/certificat" method="POST" class="flex space-y-2 flex-col">
                        @csrf
                        {{ $reservation->id }}
                        <input class="hidden" value="{{ $reservation->id }}" name="ResrvData">
                        <label for="DayNum">Certificat Day Number</label>
                        <input type="number" name="DayNum">
                        <div class="space-x-4"><button type="submit">Done</button>
                            <button type="button" onclick="toggleModal('certif{{ $reservation->id }}')">Close</button>
    
                        </div>
    
                    </form>
    
                </div>
            @endforeach
        </div>
        <script>
            function toggleModal(modalId) {
                const modal = document.getElementById(modalId);
                modal.classList.toggle('hidden');
            }
        </script>
    </body>
    
    
</x-app-layout>
