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
    </x-app-layout>
</body>
</html>