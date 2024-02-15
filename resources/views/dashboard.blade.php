<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

</body>

</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <form action="{{ route('dashboard') }}" method="GET"  class="max-w-sm mt-8 mx-auto  gap-10 flex justify-center">
        
        <label class="sr-only" for="speciality">Underline select</label>
        <select name="specialityId" id="speciality" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option selected>Choose a Speciality:</option>
            @foreach ($specialities as $speciality)
         <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
            @endforeach
        </select>

        <button class="text-gray-500 font-medium bg-gray-50 px-4 rounded-md" type="submit">Searsh</button>
    </form>

    <div class="font-[sans-serif] text-[#333]">
        <div class="max-w-5xl max-lg:max-w-3xl mx-auto">
            <div class="grid lg:grid-cols-2 sm:grid-cols-2 gap-12 max-sm:justify-center text-center m-12">
                @foreach ($filtreddoctors as $doctor)
                    <div class="bg-white rounded-md border overflow-hidden">
                        <div class="bg-[#218063] h-28"></div>
                        <img src="{{ asset('storage/images/' . $doctor->photo) }}"
                        class="w-36 h-36 border-4 border-white rounded-full -mt-16 shadow-xl inline-block" />
                        <div class="p-4">
                            <h4 class="text-base font-bold">{{ $doctor->name }}</h4>
                            <p class="text-xs font-semibold mt-1">{{ $doctor->email }}</p>
                            <p class="text-xs font-semibold mt-1">{{ $doctor->numTel }}</p>

                            <p class="mt-4">{{ $doctor->desc }}</p>
                            <div class="flex justify-between">
                                <div class="flex justify-between items-center ">
                               
                                        <form action="/favorit" method="POST">
                                            @csrf
                                            <input type="hidden" name="favori" value="1">
                                            <input type="hidden" name="Medecin" value="{{ $doctor->id }}">
                                            <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    id="Layer_2" data-name="Layer 1" width="34" height="34"
                                                    viewBox="0 0 122.88 107.39">
                                                    <defs>

                                                    </defs>
                                                    <title>red-heart</title>
                                                    <path class="hover:fill-[#ed1b24]  fill-[#cccccc]"
                                                        d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                                                </svg> </button>
                                        </form>
                        
                                </div>
                                <button type="button"
                                    class="px-4 py-2 mt-6 rounded text-[#218063] text-sm border-[#218063] border-solid border outline-none reserveButton">
                                    Reserve
                                </button>
                                <div id="reservationModal"
                                    class="fixed inset-0 z-50 flex items-center justify-center hidden">
                                    <div class="absolute inset-0 bg-black opacity-50"></div>
                                    <div class="bg-white p-8 rounded-lg z-10">
                                        <h2 class="text-lg font-bold mb-4">Select a Time Slot</h2>
                                        <div class="grid grid-cols-3 gap-4">
                                            <form action="/reservation" method="post"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                @csrf
                                                <input type="hidden" name="date" value="8h-9h">
                                                <input type="hidden" name="Medecin" value="{{ $doctor->id }}">

                                                <button type="submit">
                                                    8h-9h
                                                </button>
                                            </form>
                                            <form action="/reservation" method="post"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                @csrf
                                                <input type="hidden" name="date" value=" 9h-10h">
                                                <input type="hidden" name="Medecin" value="{{ $doctor->id }}">

                                                <button type="submit">
                                                    9h-10h
                                                </button>
                                            </form>
                                            <form action="/reservation" method="post"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                @csrf
                                                <input type="hidden" name="date" value="10h-11h">
                                                <input type="hidden" name="Medecin" value="{{ $doctor->id }}">

                                                <button type="submit">
                                                    10h-11h
                                                </button>
                                            </form>
                                            <form action="/reservation" method="post"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                @csrf
                                                <input type="hidden" name="date" value="11h-12h">
                                                <input type="hidden" name="Medecin" value="{{ $doctor->id }}">

                                                <button type="submit">
                                                    11h-12h
                                                </button>
                                            </form>
                                            <form action="/reservation" method="post"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                @csrf
                                                <input type="hidden" name="date" value="14h-15h">
                                                <input type="hidden" name="Medecin" value="{{ $doctor->id }}">

                                                <button type="submit">
                                                    14h-15h
                                                </button>
                                            </form>
                                            <form action="/reservation" method="post"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                @csrf
                                                <input type="hidden" name="date" value="15h-16h">
                                                <input type="hidden" name="Medecin" value="{{ $doctor->id }}">

                                                <button type="submit">
                                                    15h-16h
                                                </button>
                                            </form>


                                        </div>
                                        <div class="mt-4 flex justify-end">
                                            <button id="closeModal"
                                                class="text-gray-500 hover:text-gray-700">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <a href="{{ route('PaHistory') }}" class="block text-center mt-6 text-blue-500 hover:text-blue-700">View Favorite Doctors</a>

</x-app-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const reservationModal = document.getElementById('reservationModal');
        const closeModal = document.getElementById('closeModal');

        document.querySelectorAll('.reserveButton').forEach(item => {
            item.addEventListener('click', event => {
                reservationModal.classList.remove('hidden');
            });
        });

        closeModal.addEventListener('click', function() {
            reservationModal.classList.add('hidden');
        });
    });


    document.querySelectorAll('.reserveButton').forEach(button => {
        button.addEventListener('click', () => {
            const doctorId = button.closest('.bg-white').querySelector('input[name="Medecin"]').value;
            document.querySelectorAll('#reservationModal form').forEach(form => {
                form.querySelector('input[name="Medecin"]').value = doctorId;
            });
            document.getElementById('reservationModal').classList.remove('hidden');
        });
    });

    document.getElementById('closeModal').addEventListener('click', () => {
        document.getElementById('reservationModal').classList.add('hidden');
    });
</script>
