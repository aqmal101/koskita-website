<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="">
    @extends('layouts.app')
    @section('content')
    @include('components.hero')
    <div class="w-full h-5 bg-green-600"></div>
    <div class="w-full px-20">
        <div class="w-full stats stats-vertical lg:stats-horizontal shadow my-10 border-2 border-green-800/30">
            <div class="stat">
                <div class="stat-title">Mitra</div>
                <div class="stat-value text-green-600">3.000</div>
            </div>

            <div class="stat">
                <div class="stat-title">Ruang Nyaman</div>
                <div class="stat-value text-green-600">12.000</div>
            </div>
            <div class="stat">
                <div class="stat-title">Penghuni</div>
                <div class="stat-value text-green-600">19.000</div>
            </div>
            <div class="stat">
                <div class="stat-title">Penghuni Baru</div>
                <div class="stat-value text-green-600">1,200</div>
                <div class="stat-desc mt-3">+ 100 (per bulan Juli)</div>
            </div>
        </div>
    </div>
    <div class="w-full px-20 py-6">
        <h1 class="text-4xl font-bold">Testimoni</h1>
    </div>
    <div class="w-full bg-green-500 flex flex-row justify-center items-center">
        @include('components.testimonial')
    </div>
    @endsection
</body>

</html>