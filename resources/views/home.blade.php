@extends('layouts.app')
@section('content')
@include('components.banner')
<div class="h-24 w-full p-20 ">
    <h1 class="text-4xl font-bold">Rekomendasi Kosan</h1>
</div>
<div class="grid grid-cols-4 gap-4 px-20">
    @php
        $displayedKostans = Auth::check() ? $kostans : $kostans->take(4);
    @endphp
    @include('components.cardkosan', ['kostans' => $kostans])
</div>
<div class="w-full px-20 py-6">
    <h1 class="text-4xl font-bold">Testimoni</h1>
</div>
<div class="w-full bg-green-500 flex flex-row justify-center items-center">
    @include('components.testimonial')
</div>
@endsection