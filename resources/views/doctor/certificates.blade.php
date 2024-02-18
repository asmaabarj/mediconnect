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


<body class="text-gray-800 font-inter">
    <x-app-layout>
    </x-app-layout>
    <section class="flex justify-between">
    <section class="w-[25%]">
    @include('layouts.sideBarDoc')
</section>
<section class="w-full">
    <div class="container mx-auto mb-20 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @foreach ($certificates as $certificate)
                <div class="bg-white shadow-md mx-20 mt-20   prounded px-10 py-14 border-[1px] border-[#218063]">
                    <div class="text-center mb-4">
                        <h3 class="text-xl font-bold text-[#218063]">Medical File</h3>
                    </div>
                    <div class="grid grid-cols-2  mt-12">
                        <div class="grid grid-cols-1 gap-y-7" >
                            <p ><strong>Patient Name:</strong> {{$certificate->patient_name}}</p>
                            <p><strong>Email:</strong> {{ $certificate->patient_email }}</p>
                            <p><strong>Phone:</strong> {{ $certificate->patient_phone }}</p>
                        </div>
                        <div class="grid grid-cols-1 gap-y-7">
                            <p><strong>Reservated at :</strong> {{ $certificate->date }}</p>
                            <p><strong>Day :</strong> {{ $certificate->created_at->format('Y-m-d')}}</p>

                            <p><strong>Number of Days (certificate) :</strong> {{ $certificate->certifDays }}</p>
                        </div>
                    </div>
                   
                </div>
            @endforeach
        </div>
    </div>
</section>
</section>
</body>


