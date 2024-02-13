<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <label for="speciality">Choose a Speciality:</label>
                    <select name="specialityId" id="speciality">
                        @foreach ($specialities as $speciality)
                            <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <ul>
            @foreach($doctors as $doctor)
                <li>
                    <strong>Name:</strong> {{ $doctor->name }}<br>
                    <strong>Email:</strong> {{ $doctor->email }}<br>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
