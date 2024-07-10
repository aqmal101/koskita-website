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
<div class="h-fit w-full px-20 py-24 bg-orange-400">
    @include('components.testimonial')
</div>
@endsection