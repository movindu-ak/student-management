{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-green-600 font-semibold" :status="session('status')" />

    <div class="auth-card max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-center text-2xl font-bold mb-6">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="text-sm font-semibold" />
                <x-text-input 
                    id="email" 
                    class="block mt-1 w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500"
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                    autocomplete="username" 
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" class="text-sm font-semibold" />
                <x-text-input 
                    id="password" 
                    class="block mt-1 w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500"
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password" 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                        name="remember"
                    >
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a 
                        class="text-sm text-indigo-600 hover:text-indigo-800 underline" 
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>


    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc; /* Light background color */
        }

        .auth-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .block {
            display: block;
        }

        .p-2 {
            padding: 0.5rem;
        }

        .border {
            border-width: 1px;
            border-color: #e2e8f0;
        }

        .rounded-md {
            border-radius: 6px;
        }

        .focus\:outline-none:focus {
            outline: none;
        }

        .focus\:ring {
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.3);
        }

        .focus\:ring-indigo-500:focus {
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5);
        }

        .text-red-600 {
            color: #e53e3e;
        }

        .text-indigo-600 {
            color: #6366f1;
        }

        .text-indigo-700 {
            color: #4f46e5;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-center {
            text-align: center;
        }

        .bg-indigo-600 {
            background-color: #4f46e5;
        }

        .bg-indigo-700:hover {
            background-color: #4338ca;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .rounded-lg {
            border-radius: 12px;
        }

        .focus\:ring-2:focus {
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5);
        }

        .focus\:ring-offset-2:focus {
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.5), 0 0 0 2px rgba(255, 255, 255, 0.1);
        }

        .inline-flex {
            display: inline-flex;
        }

        .items-center {
            align-items: center;
        }

        .ml-2 {
            margin-left: 0.5rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .mt-6 {
            margin-top: 1.5rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .hover\:text-indigo-800:hover {
            color: #4338ca;
        }

        .underline {
            text-decoration: underline;
        }
       
    </style>
</x-guest-layout> --}}

<x-guest-layout>
    <!-- Background Image -->
    <div class="background1"></div>
    <div class="background-overlay"></div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-green-600 font-semibold" :status="session('status')" />

    <div class="auth-card max-w-md mx-auto bg-white p-6 rounded-lg shadow-md relative z-10">
        <h2 class="text-center text-2xl font-bold mb-6">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="text-sm font-semibold" />
                <x-text-input 
                    id="email" 
                    class="block mt-1 w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500"
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autofocus 
                    autocomplete="username" 
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" class="text-sm font-semibold" />
                <x-text-input 
                    id="password" 
                    class="block mt-1 w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500"
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password" 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                        name="remember"
                    >
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a 
                        class="text-sm text-indigo-600 hover:text-indigo-800 underline" 
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .background1 {
            background-image: url('https://img.freepik.com/free-photo/front-view-cute-young-girl-boy-posing-together_23-2148465743.jpg?t=st=1734549304~exp=1734552904~hmac=7cc7a223a0309ce6dc2e06bbddbc2225a04d58b4906300b07c82b1a86bae4202&w=996');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(5px);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 5;

        }

        
        .auth-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
        }

        /* Other styles as needed */
    </style>
</x-guest-layout>
