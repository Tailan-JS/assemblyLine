@extends('layouts.nguest')
@section('title','Sua linha de montagem online')
@section('content')
<div class="container dataCard">
    <div class="logo">
    <p class="white-text center">Assembly<br/><span class="green-text darken-2">on</span>Line</p>
    </div>
    <div class="row">
        <form action="{{ route('login') }}" method="POST">
            @csrf
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
             <!-- Remember Me -->
             <div style="display:flex;justify-content:space-between;">
             <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm grey-text text-lighten-2">{{ __('Remember me') }}</span>
                </label>
            </div> 
            
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 grey-text text-lighten-2" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                </div>
                </div>
                <div class="center row" style="margin:0px;">
                <button class="btn indigo darken-2 col l10 m12 s12 push-l1 " id="loginButton" >
                    {{ __('Login') }}
                </button>
                </div>
                <div class="center" style="margin: 15px 0px 0px 0px;">
                <a href="/register" class="white-text">New Here?? Let's go to Register Page</a>
                </div>
            </form>
         <!-- Session Status -->
         <x-auth-session-status class="red-text darken-1" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="red-text darken-1" :errors="$errors" />
    </div>
</div>
<div>

       
</div>
@endsection