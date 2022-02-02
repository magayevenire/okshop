@extends('shop')
@section('content')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors  :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf <div align="center"><h1  > Inscription</h1></div> <br> <br>
            <div  class='container d-flex ' align="center">
                <div  class='container-fluid col-lg-6 ' align='right'>
            <!-- Nom -->
            <div>
                <x-label for="name" :value="__('Nom')"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Prenom -->
            <div>
                <x-label for="lastname" :value="__('Prénom')"/>

                <x-input id="latsname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
            </div>

            <!--Addresse Postale -->
            <div>
                <x-label for="addresse" :value="__('Addresse')"/>

                <x-input id="addresse" class="block mt-1 w-full" type="text" name="addresse" :value="old('addresse')" required autofocus />
            </div>

            <!--Téléphone-->
            <div>
                <x-label for="tel" :value="__('Telephone')"/>

                <x-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus />
            </div>
        </div>
        <div class="container-fluid col-lg-6"  align='left'>
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Adrresse mail')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div >
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password"  class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div >
                <x-label for="password_confirmation" :value="__('Confirmation')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            </div></div>

            <div align="center">
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div></div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection
