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



<body class="text-gray-800 font-inter bg-gray-100">
    <section class="flex ">
        <div class="w-[30%]">
            <x-app-layout>

                @include('layouts/sideBarDoc')
            </x-app-layout>

        </div>
        <div class="w-full">
            <h2
                class="text-2xl mt-20   font-semibold text-[#333] inline-block relative after:absolute  after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-[#218063] after:rounded-full">
                Appointments</h2>
            <div class="grid h-screen  lg:grid-cols-3 sm:grid-cols-3 gap-6 mt-12 ">

                @foreach ($reservations as $reservation)
                    <div
                        class="w-full max-h-[45vh] max-w-sm rounded p-4 bg-gray-50 shadow-[0_6px_24px_-12px_rgba(0,0,0,0.2)] font-bold text-lg mx-auto">
                        <p>Patient : <span class="text-gray-500 font-medium text-base">{{ $reservation->patient_name }} </span></p>
                        <p>Email :  <span class="text-gray-500 font-medium text-base">{{ $reservation->patient_email }}  </span></p>
                        <p>Phone :  <span class="text-gray-500 font-medium text-base">{{ $reservation->patient_phone }}  </span></p>
                        <p>Reserved at :  <span class="text-gray-500 font-medium text-base">{{ $reservation->date }}  </span></p>
                        <p>Day:  <span class="text-gray-500 font-medium text-base">{{ $reservation->created_at->format('Y-m-d') }}  </span></p>

                        <button class="approve bg-orange-500 font-medium text-white rounded-lg px-4 py-1 mt-6" onclick="toggleModal('certif{{ $reservation->id }}')">Approve</button>
                        <div class="certif h-screen hidden flex justify-center items-center fixed left-0 right-0 top-0 bottom-0 bg-white/85"
                            id="certif{{ $reservation->id }}">
                            <form action="/certificat" method="POST" class="flex space-y-2 bg-gray-50 px-10 py-5 shadow-lg rounded-lg flex-col">
                                @csrf
                                <input class="hidden" value="{{ $reservation->id }}" name="ResrvData">
                                <label for="DayNum">Certificat Day Number</label>
                                <input class="rounded-lg" type="number" name="certifDays" required>
                                <div class="space-x-4 text-green-400">
                                    <button type="submit">Done</button>
                                    <button type="button" class="text-gray-600" onclick="toggleModal('certif{{ $reservation->id }}')">Close</button>
                                </div>
                            </form>
                            

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }
    </script>
</body>
