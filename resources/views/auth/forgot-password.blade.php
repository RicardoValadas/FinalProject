@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/login_register/login_register.css') }}">
@endsection
@section('content')

    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
        <div>

            <div class="flex justify-center mb-4 text-sm text-black-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 flex justify-center" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 flex justify-center" :errors="$errors" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" class="labelMob" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full InputMob" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4 containerLog">
                    <button class="buttonLog">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>

        @endsection
