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
        </x-slot>
        
        </section>
    
        <button type="button"
                class=" mb-40  flex gap-6 absolute right-8  top-28 px-4   py-2.5 rounded text-white text-sm  font-semibold border-none outline-none bg-red-600 hover:bg-red-700 active:bg-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"fill="white" class="w-6 h-6 "><path d="M480 96c17.7 0 32 14.3 32 32s-14.3 32-32 32l-208 0 0-64 208 0zM320 288c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0zm64-64c0 17.7-14.3 32-32 32l-48 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l48 0c17.7 0 32 14.3 32 32zM288 384c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0zm-88-96l.6 0c-5.4 9.4-8.6 20.3-8.6 32c0 13.2 4 25.4 10.8 35.6C177.9 364.3 160 388.1 160 416c0 11.7 3.1 22.6 8.6 32l-8.6 0C71.6 448 0 376.4 0 288l0-61.7c0-42.4 16.9-83.1 46.9-113.1l11.6-11.6C82.5 77.5 115.1 64 149 64l27 0c35.3 0 64 28.7 64 64l0 88c0 22.1-17.9 40-40 40s-40-17.9-40-40l0-56c0-8.8-7.2-16-16-16s-16 7.2-16 16l0 56c0 39.8 32.2 72 72 72z"/></svg><span class="">click here to take an emergency appointment</span>

            </button>
        <section class="w-[80vw] mt-24 absolute right-0 mx-auto">
            
            <form action="{{ route('dashboard') }}" method="GET"
                class="max-w-sm mt-20 mx-auto  gap-10 flex justify-center">

                <label class="sr-only" for="speciality">Underline select</label>
                <select name="specialityId" id="speciality"
                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected>Choose a Speciality:</option>
                    @foreach ($specialities as $speciality)
                        <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                    @endforeach
                </select>
                <button class="text-gray-500 font-medium bg-white shadow-lg px-4 rounded-md"
                    type="submit">Searsh</button>
            </form>

            <div class="w-full text-red-600 pt-8 text-center  text-md">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="grid lg:grid-cols-2 sm:grid-cols-2 gap-y-12 max-sm:justify-center w-60%  m-12">
                @foreach ($filtreddoctors as $doctor)
                    <div
                        class="w-full max-w-sm rounded p-4 bg-gray-50 shadow-[0_6px_24px_-12px_rgba(0,0,0,0.2)] mx-auto">
                        <div class="flex flex-wrap items-center cursor-pointer w-full bg-gray-100 p-2 rounded">
                            <img src="{{ asset('storage/images/' . $doctor->photo) }}" class="w-14 h-14 rounded-full" />
                            <div class="ml-4 flex-1">
                                <p class="text-base text-gray-800 font-semibold">Dr . {{ $doctor->name }}</p>
                                <p class="text-xs text-gray-700">Email : {{ $doctor->email }}</p>
                                <p class="text-xs text-gray-700">Phone : {{ $doctor->numTel }}</p>

                            </div>
                        </div>
                        <div class="my-3">
                            
                            <p class="text-sm text-gray-700">{{ $doctor->desc }}</p>
                            <div class="flex space-x-2 mt-4">
                                <div>
                                    <p class="flex gap-2 font-bold"><svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                    </svg> {{ $averageRatings[$doctor->id] ?? 'Not rated yet' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=" ">
                            @foreach ($favorites as $favorite)
                            @if ($favorite->Medecin === $doctor->id && (int) $favorite->favori === 1)
                                <form action="/favorit" class="mt-8" method="POST">
                                    @csrf
                                    <input type="hidden" name="favori" value="1">
                                    <input type="hidden" name="Medecin" value="{{ $doctor->id }}">
                                    <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2"
                                        data-name="Layer 1" width="34" height="34"
                                        viewBox="0 0 122.88 107.39">
                                        <defs>

                                        </defs>
                                        <title>red-heart</title>
                                        <path class="fill-[#ed1b24]  hover:fill-[#cccccc]"
                                            d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                                    </svg> </button>
                                </form>
                            @endif
                        @endforeach
                        
                        @if (!$favorites->contains('Medecin', $doctor->id))
                            <form action="/favorit" class="mt-8" method="POST">
                                @csrf
                                <input type="hidden" name="favori" value="1">
                                <input type="hidden" name="Medecin" value="{{ $doctor->id }}">
                                <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2"
                                    data-name="Layer 1" width="34" height="34"
                                    viewBox="0 0 122.88 107.39">
                                    <defs>

                                    </defs>
                                    <title>red-heart</title>
                                    <path class="hover:fill-[#ed1b24]  fill-[#cccccc]"
                                        d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z" />
                                </svg> </button>
                            </form>
                        @endif
                        


                           
                                <div class="my-4">
                                    <h3 class="text-lg font-semibold">Comments:</h3>
                                    <div class="bg-gray-200 rounded-lg p-[5px] mt-2 w-full">
                                        @foreach($commentsByDoctor[$doctor->id] as $comment)
                                        <div class="bg-white rounded-lg shadow-md p-3 mb-2">
                                                <p class="text-sm text-gray-700">{{$comment->content}}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                          
                         
                            

                            <button type="button" onclick="toggleModal('reservationModal{{ $doctor->id }}')"
                                class="px-4 py-2 mt-6 rounded   text-[#218063] border-[#218063] text-base font-medium border-[1px] border-solid  outline-none reserveButton">
                                Reserve
                            </button>
                            <div id="reservationModal{{ $doctor->id }}"
                                class="fixed inset-0 z-50 flex items-center justify-center hidden">
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
                                                class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
                                                @csrf
                                                <input type="hidden" name="date" value="{{ $hour['label'] }}">
                                                <input type="hidden" name="Medecin" value="{{ $doctor->id }}">
                                                <button type="submit"
                                                    onclick="checkTime({{ $startHour }}, {{ $startMinute }})">
                                                    {{ $hour['label'] }}
                                                </button>
                                            </form>
                                        @endforeach

                                    </div>
                                    <div class="mt-4 flex justify-end">
                                        <button id="closeModal{{ $doctor->id }}"
                                            onclick="toggleModal('reservationModal{{ $doctor->id }}')"
                                            class="text-gray-500 hover:text-gray-700">Close</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        </div>
    </x-app-layout>

    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }

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
