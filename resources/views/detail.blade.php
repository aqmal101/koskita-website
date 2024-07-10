@extends('layouts.app')
@section('content')
<div class="container mx-auto pt-20 overflow-hidden box-border w-screen">
    <div class="grid md:grid-cols-2 gap-6 lg:gap-12 items-start max-w-6xl mx-auto py-6">
        <div class="grid gap-4">
            <img src="{{ $kostan->gambar }}" alt="Kosan Image" width="600" height="600"
                class="aspect-square object-cover border w-full rounded-lg overflow-hidden" />
        </div>
        <div class="grid gap-4 md:gap-10 items-start">
            <div class="grid gap-4">
                <h1 class="font-bold text-3xl lg:text-4xl">{{ $kostan->nama_kosan }}</h1>
                <div>
                    <p class="text-muted-foreground">
                        {{ $kostan->deskripsi }}
                    </p>
                </div>
            </div>
            <div class="grid gap-4">
                <div class="flex items-center justify-between">
                    <div class="text-4xl font-bold">Rp {{ $kostan->harga_per_bulan }}
                        <span class="text-xl font-bold">/ bulan</span>
                    </div>
                </div>
                <span class="flex items-center gap-4">
                    <i class="fa-solid fa-location-dot text-green-600 text-xl"></i>
                    <p class='font-bold text-lg'> {{ $kostan->lokasi }}
                    </p>
                </span>
                <div class="grid gap-2">
                    <div class="font-semibold">Fasilitas:</div>
                    <ul class="grid gap-2 text-muted-foreground">
                        @if($kostan->kamar_mandi_dalam)
                            <li class="flex items-center gap-4">
                                <i class="fa-solid fa-shower text-green-600 text-xl"></i>
                                Kamar mandi dalam
                            </li>
                        @endif

                        @if($kostan->dapur_bersama)
                            <li class="flex items-center gap-4">
                                <i class="fa-solid fa-fire-burner text-green-600 text-xl"></i>
                                Dapur bersama
                            </li>
                        @endif

                        @if($kostan->wifi)
                            <li class="flex items-center gap-4">
                                <i class="fa-solid fa-wifi text-green-600 text-xl"></i>
                                Wifi
                            </li>
                        @endif

                        @if($kostan->listrik)
                            <li class="flex items-center gap-4">
                                <i class="fa-solid fa-bolt text-green-600 text-xl"></i>
                                Listrik
                            </li>
                        @endif

                        @if($kostan->parkir_luas)
                            <li class="flex items-center gap-4">
                                <i class="fa-solid fa-parking text-green-600 text-xl"></i>
                                Parkir
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
            <div class="grid gap-4">
                <button
                    class="inline-flex items-center justify-center whitespace-nowrap text-white text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-green-600 text-primary-foreground hover:bg-green-600/80 h-11 rounded-md px-8 w-full">
                    Pesan Sekarang
                </button>
                <button
                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-transparent hover:border-green-600 hover:text-accent-foreground h-11 rounded-md px-8 w-full">
                    Hubungi Pemilik
                </button>
            </div>
        </div>
    </div>
</div>
@endsection