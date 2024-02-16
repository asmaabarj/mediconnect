<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PaHistory</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <h2
        class="text-3xl mt-10 ml-20 font-semibold text-[#333] inline-block relative after:absolute  after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-[#218063] after:rounded-full">
        Favorite Doctors</h2>

    <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-8 max-sm:justify-center  m-12">
        @if ($favoriteDoctors && count($favoriteDoctors) > 0)
            @foreach ($favoriteDoctors as $favoriteDoctor)
                <div class="w-full max-w-sm rounded p-4 bg-gray-50 shadow-[0_6px_24px_-12px_rgba(0,0,0,0.2)] mx-auto">
                    <div class="flex flex-wrap items-center cursor-pointer w-full bg-gray-100 p-2 rounded">
                        <img src="{{ asset('storage/images/' . $favoriteDoctor->doctor->photo) }}"
                            class="w-14 h-14 rounded-full" />
                        <div class="ml-4 flex-1">
                            <p class="text-base text-gray-800 font-semibold">Dr . {{ $favoriteDoctor->doctor->name }}
                            </p>
                            <p class="text-xs text-gray-700">Email : {{ $favoriteDoctor->doctor->email }}</p>
                            <p class="text-xs text-gray-700">Phone : {{ $favoriteDoctor->doctor->numTel }}</p>

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
                        <p class="text-sm text-gray-700 mt-4">{{ $favoriteDoctor->doctor->desc }}</p>
                    </div>
                    <div class="flex items-center justify-between ">

                        @foreach ($favorites->get() as $favorite)
                            @if (($favorite->Medecin === $favoriteDoctor->doctor->id) & ((int) $favorite->favori === 1))
                                <form action="/favorit" class="mt-8" method="POST">
                                    @csrf
                                    <input type="hidden" name="favori" value="1">
                                    <input type="hidden" name="Medecin" value="{{ $favoriteDoctor->doctor->id }}">
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

                        @if (!$favorites->get()->contains('Medecin', $favoriteDoctor->doctor->id))
                            <form action="/favorit" class="mt-8" method="POST">
                                @csrf
                                <input type="hidden" name="favori" value="1">
                                <input type="hidden" name="Medecin" value="{{ $favoriteDoctor->doctor->id }}">
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
                                        <input type="hidden" name="Medecin" value="{{ $favoriteDoctor->doctor->id }}">
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
        @else
            <div class="w-screen text-center">
                <p>You Have No Favorit Doctor</p>
            </div>
        @endif
    </div>
</body>

</html>


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
