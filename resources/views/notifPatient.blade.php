<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <x-app-layout>
        <x-slot name="header" class=" ">
            <div class="flex justify-between">
                <section class="w-[30vw]">
                    @include('layouts/sideBarPatient')
                </section>
            </div>
        </x-slot>
    </x-app-layout>

    <section class="container mx-auto  px-4">
        <h2 class="text-2xl font-semibold text-[#333]">Notifications</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 my-8 ">
            @foreach ($certificates as $certificate)
            <a class="text-white mt-10 ml-64 w-28 rounded-lg font-semibold  px-3 py-2  bg-orange-600 " href="{{ $certificate->certificate_url }}" download="Certificate.pdf">
                <button class="">Télécharger</button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-white" viewBox="0 0 24 24">
                    <path
                      d="M12 16a.749.749 0 0 1-.542-.232l-5.25-5.5A.75.75 0 0 1 6.75 9H9.5V3.25c0-.689.561-1.25 1.25-1.25h2.5c.689 0 1.25.561 1.25 1.25V9h2.75a.75.75 0 0 1 .542 1.268l-5.25 5.5A.749.749 0 0 1 12 16zm10.25 6H1.75C.785 22 0 21.215 0 20.25v-.5C0 18.785.785 18 1.75 18h20.5c.965 0 1.75.785 1.75 1.75v.5c0 .965-.785 1.75-1.75 1.75z"
                      data-original="#000000"></path>
                  </svg>
            </a>            <div class="bg-white shadow-md ml-64   prounded px-10 py-14 border-[1px] border-[#218063]">
                <div class="text-center mb-4">
                    <h3 class="text-xl font-bold text-[#218063]">Medicale Certificate</h3>
                </div>
                <div class="grid grid-cols-2 mt-12">
                    <div class="grid grid-cols-1 gap-y-7">
                        <p><strong>Patient Name:</strong> {{$certificate->patient_name}}</p>
                        <p><strong>Email:</strong> {{ $certificate->patient_email }}</p>
                        <p><strong>Number of Days (certificate) :</strong> {{ $certificate->certifDays }}</p>
                    </div>
                    <div class="grid grid-cols-1 gap-y-7">
                        <p><strong>Doctor Name:</strong> {{$certificate->doctor_name}}</p>
                        <p><strong>Reservated at :</strong> {{ $certificate->date }}</p>
                        <p><strong>Day :</strong> {{ $certificate->created_at->format('Y-m-d')}}</p>
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <p class="text-[#218063] font-semibold">Certificate of Medical Consultation</p>
                    <p class="text-gray-500">This certificate is issued to certify that the above-named patient has undergone medical consultation with Dr. {{$certificate->doctor_name}} on {{$certificate->date}} for {{$certificate->certifDays}} days.</p>
                </div>
               
            </div>
            
        @endforeach
        

        </div>
    </section>

</body>

</html>
