<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form action="{{ route('dashboard') }}" method="GET">
        <label for="speciality">Choose a Speciality:</label>
        <select name="specialityId" id="speciality">
            @foreach ($specialities as $speciality)
                <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
            @endforeach
        </select>
        <button type="submit">Filter Doctors</button>
    </form>
    
    <ul>
        @foreach($filtreddoctors as $doctor)
            <li>
                <strong>Name:</strong> {{ $doctor->name }}<br>
                <strong>Email:</strong> {{ $doctor->email }}<br>
            </li>
        @endforeach
    </ul>
</x-app-layout>
