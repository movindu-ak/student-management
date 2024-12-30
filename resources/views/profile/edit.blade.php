<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div 
        class="py-12" 
        style="background-image: url('https://img.freepik.com/free-photo/front-view-cute-young-girl-boy-posing-together_23-2148465743.jpg?t=st=1734549304~exp=1734552904~hmac=7cc7a223a0309ce6dc2e06bbddbc2225a04d58b4906300b07c82b1a86bae4202&w=996'); 
               background-size: cover; 
               background-position: center;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="opacity: 0.9;">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="opacity: 0.9;">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg" style="opacity: 0.9;">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
