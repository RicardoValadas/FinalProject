@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/login_register/login_register.css') }}">
@endsection
@section('content')

    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
        <div>

            <!-- Session Status -->
            <x-auth-session-status class="flex justify-center mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="flex justify-center mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" class="labelMob" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full  InputMob" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" class="labelMob" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full InputMob" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4 checkContainer">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 checkbox"
                            name="remember">
                        <span class="ml-2 text-sm rememberText">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center mt-4 containerLog">
                    @if (Route::has('password.request'))
                        <a class="forgotPassword" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button class="buttonLog">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>

        @endsection
