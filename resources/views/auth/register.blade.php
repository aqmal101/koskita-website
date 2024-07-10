@extends('layouts.app')

@section('content')
<div class="container my-20">
    <div class="flex flex-row justify-center items-center h-screen">
        <div class="w-1/2 h-full"
            style="background-image: url(https://github.com/aqmal101/background-image/blob/main/apartments-1845884_1920.jpg?raw=true); background-size: cover;">
            <!-- Background Section -->
        </div>
        <div class="w-1/2 h-full flex justify-center items-center">
            <div class="w-full max-w-md px-4">
                <div class="card shadow-xl border border-neutral-500 bg-white w-full">
                    <div class="card-header text-center text-2xl font-bold pt-6">{{ __('Register') }}</div>
                    <div class="card-body mt-0 w-full">
                        <form method="POST" action="{{ route('register') }}" class="space-y-6">
                            @csrf

                            <div class="mb-3 w-full">
                                <label for="name" class="block text-sm font-medium text-gray-700">
                                    {{ __('Name') }}
                                </label>
                                <input id="name" type="text"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="text-red-500 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 w-full">
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    {{ __('Email Address') }}
                                </label>
                                <input id="email" type="email"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="text-red-500 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 w-full">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    {{ __('Password') }}
                                </label>
                                <input id="password" type="password"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="text-red-500 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 w-full">
                                <label for="password-confirm" class="block text-sm font-medium text-gray-700">
                                    {{ __('Confirm Password') }}
                                </label>
                                <input id="password-confirm" type="password"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="w-full">
                                <button type="submit" class="prime-btn w-full py-2 bg-blue-500 text-white rounded-md">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="divider mt-4">OR</div>
                            <div class="w-full flex flex-row">
                                <p>Already have an account? </p>
                                @if (Route::has('login'))
                                    <a href="{{ route('login') }}">Login</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection