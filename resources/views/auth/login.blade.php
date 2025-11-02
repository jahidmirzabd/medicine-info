
@extends('layouts.appfront')

@section('title', 'Medicines Login')


@section('content')
    <section class="relative h-screen flex items-center justify-center overflow-hidden pt-[10px] md:pt-20">

        <!-- 1. Gradient Background (Gas Door Blue) -->
        <div class="absolute inset-0 z-0">
            <!-- Using inline style for the custom gradient: #0C1D3B to #3A7CA5 -->
            <div class="h-full w-full" style="background: linear-gradient(135deg, #0C1D3B 0%, #3A7CA5 100%);">
            </div>
        </div>

        <!-- 2. Abstract background shapes/blobs for better blur effect -->
        <!-- Removed filter blur-2xl and increased size for a smoother, softer effect -->
        <div
            class="absolute top-1/4 left-1/4 h-80 w-80 bg-blue-300 rounded-full mix-blend-multiply opacity-30 blur-3xl animate-blob">
        </div>
        <div
            class="absolute bottom-1/4 right-1/4 h-96 w-96 bg-cyan-300 rounded-full mix-blend-multiply opacity-30 blur-3xl animate-blob-delay">
        </div>

        <!-- 3. Glassmorphism Hero Card (Main Content) -->
        <div class="relative z-10 p-6 md:p-6 max-w-md w-full mx-auto text-left 
                bg-white/10 backdrop-blur-xl border border-white/30 
                rounded-2xl shadow-2xl transition duration-500 hover:shadow-white/50 
                text-white">

            <h2 class="text-3xl font-extrabold mb-6">Welcome Back</h2>
            <p class="mb-8 text-white/80">Sign in to continue to your dashboard.</p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <!-- IMPORTANT: Ensure x-input-label uses text-white internally -->
                    <x-input-label for="email" :value="__('Email')" class="text-white/90" />
                    <!-- IMPORTANT: Ensure x-text-input uses a transparent/light background and light text color internally -->
                    <x-text-input id="email"
                        class="block mt-1 w-full text-white bg-white/10 border-white/50 focus:border-cyan-400 focus:ring-cyan-400"
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-6">
                    <x-input-label for="password" :value="__('Password')" class="text-white/90" />

                    <x-text-input id="password"
                        class="block mt-1 w-full text-white bg-white/10 border-white/50 focus:border-cyan-400 focus:ring-cyan-400"
                        type="password" name="password" required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <!-- Text is now explicitly light gray for visibility -->
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-cyan-400 shadow-sm focus:ring-cyan-400 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('password.request'))
                        <!-- Link text is now explicitly light gray and hovers white -->
                        <a class="underline text-sm text-gray-200 hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-[#0C1D3B]"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <!-- Use a slightly more visible button color (cyan/blue) on the dark background -->
                    <x-primary-button
                        class="ms-3 px-6 py-2 bg-cyan-500 hover:bg-cyan-400 focus:ring-cyan-400 text-white font-semibold rounded-lg shadow-lg">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

        </div>


    </section>
@endsection