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

    <section class="w-[80vw] absolute right-0 mx-auto">
        <div class="grid lg:grid-cols-2 sm:grid-cols-2 gap-y-12 max-sm:justify-center w-60% m-12">
            @foreach ($certificates as $certificate)
            <div class="w-full max-w-sm rounded p-4 bg-gray-50 shadow-[0_6px_24px_-12px_rgba(0,0,0,0.2)] mx-auto">
                <div class="flex flex-wrap items-center cursor-pointer w-full bg-gray-100 p-2 rounded">
                    <img src="{{ asset('storage/images/' . $certificate->doctor_photo) }}" class="w-14 h-14 rounded-full" />
                    <div class="ml-4 flex-1">
                        <p class="text-base text-gray-800 font-semibold">Dr. {{$certificate->doctor_name}}</p>
                        <p class="text-xs text-gray-700">Email: {{$certificate->doctor_email}}</p>
                        <p class="text-xs text-gray-700">Phone: {{$certificate->doctor_phone}}</p>
                    </div>
                </div>
                <p class="text-sm text-gray-700 mt-4">{{$certificate->doctor_description}}</p>
                @if(isset($comments[$certificate->id]))
                <div class="mt-4">
                    <h3 class="text-lg font-semibold">Comments:</h3>
                    <div class="bg-gray-200 rounded-lg p-[5px] mt-2">
                        @foreach($comments[$certificate->id] as $comment)
                            <div class="bg-white rounded-lg shadow-md p-3 mb-2">
                                <p class="text-sm text-gray-700">{{$comment->content}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
        @endif
                <form method="post" action="{{ route('add-comment') }}">
                    @csrf
                    <input type="hidden" name="certificate_id" value="{{ $certificate->id }}">
                    <textarea name="content" class="w-full mt-4 p-2 border border-gray-300 rounded" placeholder="Add a comment"></textarea>
                    <button type="submit" class="mt-2  border-[2px] border-orange-400 text-orange-900 font-medium py-2 px-4 rounded">Add Comment</button>
                </form>
                
            </div>
            @endforeach
        </div>
    </section>

</body>

</html>
