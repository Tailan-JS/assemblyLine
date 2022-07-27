@extends('layouts.nguest')
@section('title','Sua linha de montagem online')
@section('content')

<div class="container dataCard">
    <div class="logo">
    <p class="white-text center">Assembly<br/><span class="green-text darken-2">on</span>Line</p>
    </div>
    <div class="row">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name -->
            <div class="input-field">
                <label for="name" :value="__('Name')"  >Name</label>
                <input type="text" name="name" id="name" :value="old('name')" class="white-text" required>
            </div>
            <!--email -->
            <div class="input-field">
                <label for="email" :value="__('Email')">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" class="white-text" required >
            </div>
            <!-- password -->
            <div class="input-field">
                <label or="password" :value="__('Password')" >Password</label>
                <input id="password" class="block mt-1 w-full white-text"
                                type="password"
                                name="password"
                                required autocomplete="new-password" required>
            </div>
            <!-- confirm password -->
            <div class="input-field">
                <label for="password_confirmation" :value="__('Confirm Password')">Confirm Pssword</label>
                <input id="password_confirmation" class="block mt-1 white-text" 
                                type="password"
                                name="password_confirmation" required>
            </div>

            <div class="center">
               
                <x-button class="white-text indigo darken-1 btn">
                    {{ __('Register') }}
                </x-button>
                <a class="white-text" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            </div>
        </form>
    </div>
</div>
<div>

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
</div>
@endsection