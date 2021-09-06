@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/css/login_register/login_register.css') }}">
@endsection

@section('content')

    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- First Name -->
            <div>
                <x-label for="first_name" class="labelMob" :value="__('First Name')" />

                <x-input id="first_name" class="block mt-1 w-full InputMob" type="text" name="first_name"
                    :value="old('first_name')" required autofocus />
            </div>

            <!-- Last Name -->
            <div>
                <x-label for="last_name" class="labelMob" :value="__('Last Name')" />

                <x-input id="last_name" class="block mt-1 w-full InputMob" type="text" name="last_name"
                    :value="old('last_name')" required autofocus />
            </div>

            <!-- Username -->
            <div>
                <x-label for="username" class="labelMob" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full InputMob" type="text" name="username"
                    :value="old('username')" required autofocus />
            </div>
            {{-- <!-- Type -->
            <div>
                <x-label for="type" :value="__('Type')" />


                <select name="type" id="type" class="block mt-1 w-full" :value="old('type')" required autofocus>
                    <option value="Child">Child</option>
                    <option value="Parent">Parent</option>
                </select>
            </div> --}}


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" class="labelMob" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full InputMob" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" class="labelMob" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full InputMob" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" class="labelMob" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full InputMob" type="password"
                    name="password_confirmation" required />
            </div>
            <!-- Upload Image to user -->
            <div class="avatar-image">
                <div class="uploadContainer">
                    <label class="uploadImg"> Avatar Image
                        <span class="browse"> Browse...</span>
                        <input type="file" name="image">
                        {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
                    </label>
                </div>
            </div>



            <div class="flex items-center justify-center mt-4">
                <a class="alreadyRegister" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="buttonReg">
                    {{ __('Register') }}
                </button>
            </div>
        </form>

    @endsection
