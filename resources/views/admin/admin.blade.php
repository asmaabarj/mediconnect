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
    <section class="w-full   bg-gray-50 min-h-screen transition-all main">
        <div class="py-2 px-6 bg-[#218063] flex items-center shadow-md shadow-black/5 sticky -top-0.5 left-0 z-30">
            <ul class="flex items-center text-sm ml-4">
                <li class="mr-2">
                    <a href="" class="text-gray-400 hover:text-gray-600 font-medium">Administration</a>
                </li>
                <li class="text-gray-300 mr-2 font-medium">/</li>
                <li class="text-white mr-2 font-medium">dashboard</li>
            </ul>
            
        </div>
        <div class="p-6">
            <div class="grid grid-cols-2 md:grid-cols-4  gap-6 mb-6">
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between ">
                        <div>
                            <div class="text-2xl font-semibold mb-1">{{$doctorCount}}</div>
                            <div class="text-sm font-medium text-gray-400">Doctors</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="text-2xl font-semibold mb-1">{{$patientCount}}</div>
                            <div class="text-sm font-medium text-gray-400">Patients</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between ">
                        <div>
                            <div class="text-2xl font-semibold mb-1"> {{ $specialiteCount }}</div>
                            <div class="text-sm font-medium text-gray-400">Medical specialties</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between ">
                        <div>
                            <div class="text-2xl font-semibold mb-1">{{$MedicamentCount}}</div>
                            <div class="text-sm font-medium text-gray-400">Medicaments</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                    <div class="flex justify-between">
                        <div class="flex justify-between mb-4 items-start text-m font-semibold text-gray-700">
                            Manage Medical Specialties
                        </div>
                        <button id="addSpecialtyButton"
                            class="flex justify-between mb-4 items-start text-m font-semibold text-green-900 hover:bg-green-100 px-4 py-1 mt-10  rounded-[4px] border-green-800 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] border-solid border-[1px]">
                            Add
                        </button>
                    </div>
                   
                    <div id="addSpecialtyModal" class="hidden fixed z-50 inset-0 overflow-y-auto">
                        <div
                            class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            </div>
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>
                            <div
                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                               
                                <form action="/apah" method="POST">
                                    @csrf
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                            <div
                                                class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-100 sm:mx-0 sm:h-10 sm:w-10">
                                                <i class="ri-pencil-line text-3xl text-gray-400"></i>
                                            </div>
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                    id="modal-title">
                                                    Add New Medical Specialty
                                                </h3>
                                                <label for="name"
                                                    class="block text-sm font-medium text-gray-700 mt-2">Specialty
                                                    Name:</label>
                                                    <input type="text" name="name" id="name" value="{{ $editspecialite ? $editspecialite->name : '' }}"
                                                    class="mt-1 p-2 block w-full border-gray-300 rounded-md"
                                                    placeholder="Enter specialty name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <button id="closeModalButton" type="button"
                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                            Close
                                        </button>
                                        <button id="" type="submit"
                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                                            Add Specialty
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    @if($editspecialite !== null)
                    <script>document.getElementById('addSpecialtyModal').classList.remove('hidden')</script>
                    @endif
                    <div id="addMedicamentModal" class="hidden fixed z-50 inset-0 overflow-y-auto">
                        <div
                            class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            </div>
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>
                            <div
                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div
                                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-100 sm:mx-0 sm:h-10 sm:w-10">
                                            <i class="ri-pencil-line text-3xl text-gray-400"></i>
                                        </div>
                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                Add New Medicament
                                            </h3>
                                            <form action="/add-medicament" method="POST" class="mt-8">
                                                @csrf
                                                <label for="MedicamentName"
                                                    class="block text-sm font-medium text-gray-700 mt-2">Medicament
                                                    Name:</label>
                                                <input type="text" name="MedicamentName" id="MedicamentName"
                                                    class="mt-1 p-2 block w-full border-gray-300 rounded-md"
                                                    placeholder="Enter Medicament name">
                                                <div class="mb-4">
                                                    <label for="speciality"
                                                        class="block text-sm font-medium text-gray-700">Speciality:</label>
                                                    <select name="specialite_id" id="speciality"
                                                        class="mt-1 p-2 block w-full border-gray-300 rounded-md"
                                                        required>
                                                        @foreach ($specialities as $speciality)
                                                            <option value="{{ $speciality->id }}">
                                                                {{ $speciality->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <button id="closeMedicamentModalButton" type="button"
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-gray-800 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Close
                                    </button>
                                    <button id="" type="submit" 
                                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Add Medicament
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto py-8">
                        <table class="min-w-[50%] mx-auto bg-white font-[sans-serif]">
                            <thead class="whitespace-nowrap">
                                <tr>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-black">
                                        Speciality Name
                                    </th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-black">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="whitespace-nowrap">
                                @foreach ($specialities as $speciality)
                                    <tr class="odd:bg-blue-50">
                                        <td class="px-6 py-3 text-sm">{{ $speciality->name }}</td>
                                        <td class="px-6 py-3">
                                            <div class="flex">
                                                <form method="POST" action="/edite-speciality">
                                                    @csrf
                                                    <input type="hidden" name="speciality_id" value="{{ $speciality->id }}">
                                                    <button class="mr-4" type="submit"
                                                        value="">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 fill-black hover:fill-blue-700"
                                                            viewBox="0 0 348.882 348.882">
                                                            <path
                                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                                data-original="#000000" />
                                                            <path
                                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                                data-original="#000000" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                <form method="post" action="{{ route('deleteSpecialite') }}">
                                                    @csrf
                                                    <input type="hidden" name="specialite_id" value="{{ $speciality->id }}">
                                                    <button class="mr-4" type="submit" name="delete" 
                                                        onclick="return confirm('Are you sure you want to delete {{ $speciality->name }}?')">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 fill-black hover:fill-red-700"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                                data-original="#000000" />
                                                            <path
                                                                d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                                data-original="#000000" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>





                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                    <div class="flex justify-between">
                        <div class="flex justify-between mb-4 items-start text-m font-semibold text-gray-700">
                            Manage Medicaments
                        </div>
                        <button id="addMedicamentButton"
                            class="flex justify-between mb-4 items-start text-m font-semibold text-green-900 hover:bg-green-100 px-4 py-1 mt-10 rounded-[4px] border-green-800 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] border-solid border-[1px]">
                            Add
                        </button>
                    </div>

                    <div class="overflow-x-auto py-8">
                        <table class="min-w-[50%] mx-auto bg-white font-[sans-serif]">
                            <thead class="whitespace-nowrap">
                                <tr>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-black">
                                        Medicament Name
                                    </th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-black">
                                        Speciality
                                    </th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-black">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($medicaments as $medicament)
                                  <tr class="odd:bg-blue-50">
                                    <td class="px-6 py-3 text-sm">
                                        <div class="flex items-center cursor-pointer">
                                            <div class="ml-4">
                                                <p class="text-sm text-black">{{ $medicament->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-sm">
                                        <div class="flex items-center cursor-pointer">
                                            <div class="ml-4">
                                                <p class="text-sm text-black">{{ $medicament->specialite->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="flex">
                                            <form method="get" action="/admin">
                                                <button class="mr-4" type="submit" name="edit" value="">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-5 fill-black hover:fill-blue-700"
                                                        viewBox="0 0 348.882 348.882">
                                                        <path
                                                            d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                            data-original="#000000" />
                                                        <path
                                                            d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                            data-original="#000000" />
                                                    </svg>
                                                </button>
                                            </form>

                                            <form method="post" action="{{ route('deleteMedicament') }}">
                                                @csrf
                                                <input type="hidden" name="medicament_id" value="{{ $medicament->id }}">
                                                <button class="mr-4" type="submit" name="delete" value="">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-5 fill-black hover:fill-red-700" viewBox="0 0 24 24">
                                                        <path
                                                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                            data-original="#000000" />
                                                        <path
                                                            d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                            data-original="#000000" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-app-layout>
    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }

        document.getElementById('addMedicamentButton').addEventListener('click', () => toggleModal('addMedicamentModal'));
        document.getElementById('closeMedicamentModalButton').addEventListener('click', () => toggleModal(
            'addMedicamentModal'));
        document.getElementById('addSpecialtyButton').addEventListener('click', () => toggleModal('addSpecialtyModal'));
        document.getElementById('closeModalButton').addEventListener('click', () => toggleModal('addSpecialtyModal'));
    </script>
</body>

</html>
