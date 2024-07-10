{{-- resources/views/components/cardkosan.blade.php --}}
@foreach ($kostans as $kostan)
    <div class="card bg-base-100 w-full shadow-xl" style="position: relative;">
        <a href="{{ route('kostan.show', $kostan->uuid) }}">
            <figure class="card-figure"
                style="position: relative; width: 100%; padding-top: 100%; overflow: hidden; border: 1rem solid #fff; border-bottom :none; border-top-left-radius:10%; border-top-right-radius:10%">
                <img src="{{ $kostan->gambar }}" alt="{{ $kostan->nama_kosan }}"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                <div class="badge bg-white h-fit gap-2" style="position: absolute; top: 1rem; right: 1rem;">
                    <i class="fa-solid fa-star text-xl text-yellow-500"></i>
                    <p class="text-xl font-semibold">{{ $kostan->rating }}</p>
                </div>
                <div class="badge bg-white h-fit gap-2" style="position: absolute; bottom: 1rem; right: 1rem;">
                    <p class="text-base font-semibold text-red-500">sisa {{ $kostan->sisa_ruang }} ruang</p>
                </div>
            </figure>
            <div class="card-body px-4">
                <h2 class="card-title">
                    {{ $kostan->nama_kosan }}
                </h2>
                <!-- <div class="w-full flex flex-row justify-end">
                                                                            <span class="text-red-400">sisa 2 ruangan</span>
                                                                        </div> -->
                <!-- <p>{{ Str::limit($kostan->description, 100) }}</p> -->
                <span class="flex items-center gap-4">
                    <i class="fa-solid fa-location-dot text-green-600 text-xl"></i>
                    <p class='font-semibold text-base'> {{ $kostan->lokasi }}
                    </p>
                </span>
                <div class="card-actions justify-between items-center ">
                    <span class="text-lg font-bold">Rp {{ $kostan->harga_per_bulan }}</span>
                    <span class="flex flex-row items-center h-fit link link-hover">
                        <p>detail</p>
                        <i class="fa-solid fa-chevron-right ml-2"></i>
                    </span>
                </div>
            </div>
        </a>
    </div>
@endforeach