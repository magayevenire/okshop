@extends('shop')
@section('content')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            @csrf <div class="container" align="center"><h1  >Connexion</h1></div> <br> <br>
            <div align='center'>
            <!-- Email Address -->
            <div  class='container col-4 ' align='right' >
            <div >
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div >
                <x-label for="password" value="Mot de passe" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-3">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('inscription') }}">
                        s'inscrire
                    </a>
                </x-button>

                <x-button class="ml-3">
                   Connexion
                </x-button>

                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    Mot de passe oublié?
                </a>
            @endif

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</div>
@endsection
