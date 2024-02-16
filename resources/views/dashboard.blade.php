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
    <x-slot name="header" class="flex justify-between ">

        <nav id="sidebar"
            class="bg-[#18c29c] z-50 h-screen fixed top-16 left-0 min-w-[250px] py-6 px-4 font-[sans-serif] overflow-auto hidden">

            <ul class="space-y-3 mt-2">
                <li>
                    <a href="javascript:void(0)"
                        class="text-gray-800 text-sm flex gap-4 items-center hover:bg-gray-100 rounded px-4 py-3 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                            class="cursor-pointer fill-[#333] hover:fill-[#077bff]" viewBox="0 0 511 511.999">
                            <path
                                d="M498.7 222.695c-.016-.011-.028-.027-.04-.039L289.805 13.81C280.902 4.902 269.066 0 256.477 0c-12.59 0-24.426 4.902-33.332 13.809L14.398 222.55c-.07.07-.144.144-.21.215-18.282 18.386-18.25 48.218.09 66.558 8.378 8.383 19.44 13.235 31.273 13.746.484.047.969.07 1.457.07h8.32v153.696c0 30.418 24.75 55.164 55.168 55.164h81.711c8.285 0 15-6.719 15-15V376.5c0-13.879 11.293-25.168 25.172-25.168h48.195c13.88 0 25.168 11.29 25.168 25.168V497c0 8.281 6.715 15 15 15h81.711c30.422 0 55.168-24.746 55.168-55.164V303.14h7.719c12.586 0 24.422-4.903 33.332-13.813 18.36-18.367 18.367-48.254.027-66.633zm-21.243 45.422a17.03 17.03 0 0 1-12.117 5.024h-22.72c-8.285 0-15 6.714-15 15v168.695c0 13.875-11.289 25.164-25.168 25.164h-66.71V376.5c0-30.418-24.747-55.168-55.169-55.168H232.38c-30.422 0-55.172 24.75-55.172 55.168V482h-66.71c-13.876 0-25.169-11.29-25.169-25.164V288.14c0-8.286-6.715-15-15-15H48a13.9 13.9 0 0 0-.703-.032c-4.469-.078-8.66-1.851-11.8-4.996-6.68-6.68-6.68-17.55 0-24.234.003 0 .003-.004.007-.008l.012-.012L244.363 35.02A17.003 17.003 0 0 1 256.477 30c4.574 0 8.875 1.781 12.113 5.02l208.8 208.796.098.094c6.645 6.692 6.633 17.54-.031 24.207zm0 0"
                                data-original="#000000" />
                        </svg>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('PaHistory') }}"
                        class=" text-gray-800 text-sm flex gap-4 items-center hover:bg-gray-100 rounded px-4 py-3 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                            class="cursor-pointer fill-[#333] hover:fill-[#007bff] inline-block" viewBox="0 0 64 64">
                            <path
                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                data-original="#000000" />
                        </svg>
                        <span>Favoris</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-gray-800 text-sm flex items-center hover:bg-gray-100 rounded px-4 py-3 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                            viewBox="0 0 371.263 371.263">
                            <path
                                d="M305.402 234.794v-70.54c0-52.396-33.533-98.085-79.702-115.151.539-2.695.838-5.449.838-8.204C226.539 18.324 208.215 0 185.64 0s-40.899 18.324-40.899 40.899c0 2.695.299 5.389.778 7.964-15.868 5.629-30.539 14.551-43.054 26.647-23.593 22.755-36.587 53.354-36.587 86.169v73.115c0 2.575-2.096 4.731-4.731 4.731-22.096 0-40.959 16.647-42.995 37.845-1.138 11.797 2.755 23.533 10.719 32.276 7.904 8.683 19.222 13.713 31.018 13.713h72.217c2.994 26.887 25.869 47.905 53.534 47.905s50.54-21.018 53.534-47.905h72.217c11.797 0 23.114-5.03 31.018-13.713 7.904-8.743 11.797-20.479 10.719-32.276-2.036-21.198-20.958-37.845-42.995-37.845a4.704 4.704 0 0 1-4.731-4.731zM185.64 23.952c9.341 0 16.946 7.605 16.946 16.946 0 .778-.12 1.497-.24 2.275-4.072-.599-8.204-1.018-12.336-1.138-7.126-.24-14.132.24-21.078 1.198-.12-.778-.24-1.497-.24-2.275.002-9.401 7.607-17.006 16.948-17.006zm0 323.358c-14.431 0-26.527-10.3-29.342-23.952h58.683c-2.813 13.653-14.909 23.952-29.341 23.952zm143.655-67.665c.479 5.15-1.138 10.12-4.551 13.892-3.533 3.773-8.204 5.868-13.353 5.868H59.89c-5.15 0-9.82-2.096-13.294-5.868-3.473-3.772-5.09-8.743-4.611-13.892.838-9.042 9.282-16.168 19.162-16.168 15.809 0 28.683-12.874 28.683-28.683v-73.115c0-26.228 10.419-50.719 29.282-68.923 18.024-17.425 41.498-26.887 66.528-26.887 1.198 0 2.335 0 3.533.06 50.839 1.796 92.277 45.929 92.277 98.325v70.54c0 15.809 12.874 28.683 28.683 28.683 9.88 0 18.264 7.126 19.162 16.168z"
                                data-original="#000000"></path>
                        </svg>
                        <span>Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-gray-800 text-sm flex items-center hover:bg-gray-100 rounded px-4 py-3 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                            viewBox="0 0 512 512">
                            <path
                                d="M122.39 165.78h244.87c10.49 0 19-8.51 19-19s-8.51-19-19-19H122.39c-10.49 0-19 8.51-19 19s8.51 19 19 19zm164.33 99.44c0-10.49-8.51-19-19-19H122.39c-10.49 0-19 8.51-19 19s8.51 19 19 19h145.33c10.49 0 19-8.51 19-19z"
                                data-original="#000000" />
                            <path
                                d="M486.63 323.71c2.04-22.33 3.41-48.35 3.44-78.68-.06-57.07-4.85-98.86-9.96-129.57-8.94-50.6-54.9-96.56-105.5-105.5C343.9 4.85 302.11.06 245.03 0c-57.07.06-98.87 4.85-129.58 9.96C64.86 18.9 18.9 64.86 9.96 115.46 4.85 146.17.07 187.96 0 245.03c.07 57.07 4.85 98.87 9.96 129.58 8.94 50.6 54.9 96.56 105.5 105.5 30.71 5.11 72.5 9.89 129.58 9.96 30.32-.03 56.34-1.4 78.66-3.44 19.84 15.87 45 25.37 72.38 25.37 64.02 0 115.93-51.9 115.93-115.92 0-27.38-9.5-52.54-25.37-72.37zM245.04 452.07c-45.02-.05-85.3-3.13-123.13-9.41-16.81-3.01-33.84-12.44-47.95-26.55s-23.53-31.13-26.55-47.95c-6.28-37.79-9.35-78.07-9.41-123.13.05-45.04 3.13-85.32 9.41-123.13 3.01-16.81 12.44-33.83 26.55-47.94s31.13-23.53 47.95-26.55C159.72 41.13 200 38.06 245.04 38c45.02.05 85.3 3.13 123.13 9.41 16.81 3.01 33.83 12.44 47.95 26.55 14.11 14.11 23.53 31.13 26.55 47.95 6.28 37.83 9.35 78.1 9.41 123.13-.02 16.9-.48 33.11-1.36 48.79-16.28-8.72-34.88-13.66-54.64-13.66-64.02 0-115.93 51.9-115.93 115.92 0 19.76 4.95 38.35 13.66 54.63-15.68.88-31.89 1.34-48.78 1.35zM396.08 474c-42.97 0-77.93-34.95-77.93-77.92s34.96-77.92 77.93-77.92 77.93 34.95 77.93 77.92S439.05 474 396.08 474z"
                                data-original="#000000" />
                            <path
                                d="M406.28 418.24c-2.42-.4-5.71-.78-10.2-.78s-7.78.38-10.2.78c-3.98.7-7.6 4.32-8.31 8.31-.4 2.42-.78 5.71-.78 10.2s.38 7.78.78 10.2c.7 3.98 4.32 7.6 8.31 8.31 2.42.4 5.71.78 10.2.78s7.78-.38 10.2-.78c3.98-.7 7.6-4.32 8.31-8.31.4-2.42.78-5.71.78-10.2s-.38-7.78-.78-10.2c-.7-3.98-4.32-7.6-8.31-8.31zm-10.21-12.61c10.49 0 19-8.51 19-19v-31.7c0-10.49-8.51-19-19-19s-19 8.51-19 19v31.7c0 10.49 8.51 19 19 19z"
                                data-original="#000000" />
                        </svg>
                        <span>My Consultations</span>
                    </a>
                </li>



            </ul>
        </nav>
    </x-slot>
  
    <button id="toggleButton">
        <svg xmlns="http://www.w3.org/2000/svg" class=" absolute top-24 bg-white w-8 h-8 shadow-lg rounded-md  left-10"
            height="25" viewBox="0 -960 960 960" width="25" fill="gray">
            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
        </svg>
    </button>
    <form action="{{ route('dashboard') }}" method="GET" class="max-w-sm mt-20 mx-auto  gap-10 flex justify-center">

        <label class="sr-only" for="speciality">Underline select</label>
        <select name="specialityId" id="speciality"
            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option selected>Choose a Speciality:</option>
            @foreach ($specialities as $speciality)
                <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
            @endforeach
        </select>

        <button class="text-gray-500 font-medium bg-white shadow-lg px-4 rounded-md" type="submit">Searsh</button>
    </form>
<div class="w-full text-red-600 pt-8 text-center  text-md">   @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif</div>
    <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-8 max-sm:justify-center  m-12">
        @foreach ($filtreddoctors as $doctor)
            <div class="w-full max-w-sm rounded p-4 bg-gray-50 shadow-[0_6px_24px_-12px_rgba(0,0,0,0.2)] mx-auto">
                <div class="flex flex-wrap items-center cursor-pointer w-full bg-gray-100 p-2 rounded">
                    <img src="{{ asset('storage/images/' . $doctor->photo) }}" class="w-14 h-14 rounded-full" />
                    <div class="ml-4 flex-1">
                        <p class="text-base text-gray-800 font-semibold">Dr . {{ $doctor->name }}</p>
                        <p class="text-xs text-gray-700">Email : {{ $doctor->email }}</p>
                        <p class="text-xs text-gray-700">Phone : {{ $doctor->numTel }}</p>

                    </div>
                </div>
                <div class="my-8">
                    <div class="flex space-x-2">
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                    </div>
                    <p class="text-sm text-gray-700 mt-4">{{ $doctor->desc }}</p>
                 
                </div>
                <div class="flex items-center justify-between ">
                    @foreach ($favorites->get() as $favorite)
                    @if (($favorite->Medecin === $doctor->id) & ((int) $favorite->favori === 1))
                        <form action="/favorit" class="mt-8" method="POST">
                            @csrf
                            <input type="hidden" name="favori" value="1">
                            <input type="hidden" name="Medecin" value="{{ $doctor->id }}">
                            <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2"
                                    data-name="Layer 1" width="34" height="34" viewBox="0 0 122.88 107.39">
                                    <defs>
                
                                    </defs>
                                    <title>red-heart</title>
                                    <path class="fill-[#ed1b24]  hover:fill-[#cccccc]"
                                        d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                                </svg> </button>
                        </form>
                    @endif
                @endforeach
                
                @if (!$favorites->get()->contains('Medecin', $doctor->id))
                    <form action="/favorit" class="mt-8" method="POST">
                        @csrf
                        <input type="hidden" name="favori" value="1">
                        <input type="hidden" name="Medecin" value="{{ $doctor->id }}">
                        <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2"
                                data-name="Layer 1" width="34" height="34" viewBox="0 0 122.88 107.39">
                                <defs>
                
                                </defs>
                                <title>red-heart</title>
                                <path class="hover:fill-[#ed1b24]  fill-[#cccccc]"
                                    d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                            </svg> </button>
                    </form>
                @endif
                
                    <button type="button"
                        class="px-4 py-2 mt-6 rounded  text-[#218063] border-[#218063] text-base font-medium border-[1px] border-solid  outline-none reserveButton">
                        Reserve
                    </button>
                    <div id="reservationModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="bg-white p-8 rounded-lg z-10">
                            <h2 class="text-lg font-bold mb-4">Select a Time Slot</h2>
                            <div class="grid grid-cols-3 gap-4">
                             
                                @foreach ($hours as $hour)
                                @php
                                    $startTime = Carbon\Carbon::parse($hour['start']);
                                    $startHour = $startTime->hour;
                                    $startMinute = $startTime->minute;
                                @endphp
                            
                                <form action="/reservation" method="post"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                    @csrf
                                    <input type="hidden" name="date" value="{{ $hour['label'] }}">
                                    <input type="hidden" name="Medecin" value="{{ $doctor->id }}">
                                    <button type="submit"  onclick="checkTime({{ $startHour }}, {{ $startMinute }})">
                                        {{ $hour['label'] }}
                                    </button>
                                </form>
                            @endforeach
                            
                            </div>
                            <div class="mt-4 flex justify-end">
                                <button id="closeModal" class="text-gray-500 hover:text-gray-700">Close</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
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

    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleButton');

    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
    });

    document.addEventListener('click', (event) => {
        if (!sidebar.contains(event.target) && event.target !== toggleButton) {
            sidebar.classList.add('hidden');
        }
    });

    toggleButton.addEventListener('click', (event) => {
        sidebar.classList.remove('hidden');
        event.stopPropagation();
    });

    function checkTime(startHour, startMinute) {
    var now = new Date();
    var currentHour = now.getHours();
    var currentMinute = now.getMinutes();

    if (currentHour > startHour || (currentHour === startHour && currentMinute >= startMinute)) {
        alert('This time slot has already passed. Please select a different slot.');
        event.preventDefault();
    }
}


</script>
</body>

</html>