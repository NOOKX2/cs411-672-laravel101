<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS442-about</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav class="flex justify-between items-center bg-white p-4">
    <a class="text-green-500 font-bold text-xl" href="{{ route('songs.index') }}">CS442 Songs</a>
    <div class="flex space-x-6">
        <x-nav.link route-name="about.index" href="{{ route('about.index') }}">About</x-nav.link>
        <x-nav.link route-name="songs.index" href="{{ route('songs.index') }}" class="text-white hover:text-green-500">Songs</x-nav.link>
    </div>
</nav>

<h1 class="text-6xl font-bold text-center">Thatchavit Thaveechaiyagarn</h1>
<h2 class="text-lg font-medium mt-10  text-center">
    Hello my name is Thatchavit Thaveechaiyagarn. You can call me Nook.
    I am a 3rd year Computer Science student at Kasetsart University.
</h2>

<!-- แสดงรูปภาพจาก public/images -->
<div class = "flex justify-center mt-6">
    <img src="{{ asset('image/S__68542474.jpg') }} " style="width: 20%">
</div>


</body>
</html>
