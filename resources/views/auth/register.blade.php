<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body style="background-size:100% 100%;"
 class="bg-[url('https://hdpng.com/images/heart-beat-png-hd-heartbeat-line-png-pulse-line-qvyc4f-1134.png')] bg-no-repeat">
 <div class="w-full flex justify-center">    <img src="{{ asset('storage/images/' . 'logo.png') }}" alt="logo" class='w-60 mt-10 justify-center' />
 </div>
    <form method="POST"
    class="max-w-4xl my-8 mx-auto bg-white shadow-[0_2px_18px_-3px_rgba(6,81,237,0.4)] sm:p-8 p-4 rounded-md"
    action="{{ route('register') }}">
    @csrf
    <div class="grid md:grid-cols-2 gap-y-7 gap-x-12">
        
        <!-- Name -->
        <div>
            <x-input-label for="name" class="mt-4 text-sm mb-2 block" :value="__('Full Name')" />
            <x-text-input id="name" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500 "
            placeholder="Enter name" type="text" name="name" :value="old('name')" required autofocus
            autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            
            <div class="mt-4">
                <x-input-label for="cin" class=" text-sm mb-2 block" :value="__('CIN')" />
                <x-text-input id="cin" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                placeholder="Enter Cin" type="text" name="cin" :value="old('cin')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('cin')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" class=" text-sm mb-2 block" :value="__('Email')" />
            <x-text-input id="email" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
            placeholder="Enter Email" type="email" name="email" :value="old('email')" required
            autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
        <div class="mt-4">
            <x-input-label for="numTel" class=" text-sm mb-2 block" :value="__('Number Phone')" />
            <x-text-input id="numTel" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
            placeholder="Enter Phone Number" type="text" name="numTel" :value="old('numTel')" required
            autocomplete="username" />
            <x-input-error :messages="$errors->get('numTel')" class="mt-2" />
            </div>
            
            
            <!-- Password -->
            <div class="mt-4">
            <x-input-label for="password" class=" text-sm mb-2 block" :value="__('Password')" />

            <x-text-input id="password" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
            placeholder="Enter Password" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" class=" text-sm mb-2 block" :value="__('Confirm Password')" />
            
            <x-text-input id="password_confirmation"
            class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter Password"
            type="password" name="password_confirmation" required autocomplete="new-password" />
            
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            
            <div class="mt-4">
                <x-input-label class="block text-sm font-medium text-gray-700">Role</x-input-label>
                <div class="mt-2 flex items-center justify-center">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="radio" class="form-radio h-4 w-4 text-blue-500" id="radioOff" name="role"
                        value="patient" checked>
                        <span class="ml-2 text-sm font-medium text-gray-700">Patient</span>
                    </label>
                    <div class="h-6 w-px bg-gray-300 mx-6"></div>
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="radio" class="form-radio h-4 w-4 text-blue-500" id="radio" name="role" value="doctor">
                    <span class="ml-2 text-sm font-medium text-gray-700">Doctor</span>
                </label>
            </div>
        </div>
        
        
    </div>
    <div class="hidden" id="docData">
        <div class="grid grid-cols-2 gap-y-7 gap-x-12">
            <div class="mt-4">
                <x-input-label for="speciality" class="text-sm mb-2 block" :value="__('Choose a Speciality:')" />
                <select id="speciality" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" name="specialite_id">
                    @foreach ($specialities as $speciality)
                    <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                @endforeach
                </select>
            </div>
        <div class="mt-4">
            <x-input-label for="desc" class=" text-sm mb-2 block" :value="__('Description')" />
            <textarea id="desc" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
            placeholder="Enter Description" type="text" name="desc" :value="old('desc')" required
            autocomplete="username" ></textarea>
    </div>
</div>    


</div>
    
    <div class="flex items-center gap-6 mt-6">
        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
        </a>
        
        
        
        
    </div>
    
</form>
<script>

function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('hidden');
    }

    document.getElementById('radio').addEventListener('change', () => toggleModal('docData'));
    document.getElementById('radioOff').addEventListener('change', () => toggleModal('docData'));
    </script>
</body>

</html>