<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS442 - Songs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">

<nav class="flex justify-between items-center bg-black p-4">
    <a class="text-green-500 font-bold text-xl" href="{{ route('songs.index') }}">CS442 Songs</a>
    <div class="flex space-x-6">
        <x-nav.link route-name="about.index" href="{{ route('about.index') }}">About</x-nav.link>
        <x-nav.link :route-name="'songs.' . 'index'" :href="route('songs.index')">Songs</x-nav.link>
    </div>
</nav>

<div class="bg-gray-900 shadow-md rounded-md overflow-hidden max-w-4xl mx-auto mt-10">
    <div class="bg-black py-4 px-6">
        <h2 class="text-2xl font-semibold text-white">{{ $title }}</h2>
    </div>
    <table class="min-w-full table-auto divide-y divide-gray-700">
        <thead>
        <tr class="text-left text-gray-400">
            <th class="py-2 px-4">#</th>
            <th class="py-2 px-4">Title</th>
            <th class="py-2 px-4">Artist</th>
            <th class="py-2 px-4">Duration</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($songs as $song)
            <tr class="hover:bg-gray-800 cursor-pointer">
                <td class="py-2 px-4 text-gray-400">{{ $loop->iteration }}</td>
                <td class="py-2 px-4 text-white">{{ $song['title'] }}</td>
                <td class="py-2 px-4 text-gray-400">{{ $song['artist'] }}</td>
                <td class="py-2 px-4 text-gray-500">{{ $song['duration']['minutes'] }}:{{ $song['duration']['seconds'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
