<div class="w-screen fixed flex flex-col drop-shadow-lg z-30">
    <div class="w-full h-5 bg-green-600" id="greenNavbar"></div>
    <div class="navbar  bg-base-100 px-20 " style="background:white">
        <div class="flex-1">
            <a class="text-xl font-semibold" href="{{ url('/') }}">KostKita</a>
        </div>
        <div class="flex-none gap-2">
            @guest
            @if (Route::has('login') && Route::currentRouteName() !== 'login' && Route::currentRouteName() !==
            'register' )
            <a href="{{ route('login') }}" class="prime-btn">Masuk</a>
            <!-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn">Register</a>
                                            @endif -->
            @endif
            @else
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Profile Picture"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li>
                        <a class="justify-between">
                            <span class="font-bold">{{ Auth::user()->name }}</span>
                            <span class="badge bg-green-500">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Keluar') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            @endguest
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var greenNavbar = document.getElementById('greenNavbar');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            greenNavbar.classList.add('hidden');
        } else {
            greenNavbar.classList.remove('hidden');
        }
    });
});
</script>

<style>
.hidden {
    display: none;
}

#greenNavbar {
    transition: opacity 0.3s ease-in-out;
}
</style>