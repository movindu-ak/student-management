<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('styles')
    <style>
        /* Background Styling */
        body {
            background-color: #f9fafb;
            font-family: 'Arial', sans-serif;
        }

        /* Container Styling */
        .register-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Heading */
        h2 {
            font-size: 1.75rem;
            font-weight: 600;
            color: #333;
            text-align: center;
        }

        /* Form Inputs */
        input {
            width: 100%;
            padding: 0.75rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #6366f1;
            outline: none;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
        }

        /* Checkbox */
        input[type="checkbox"] {
            width: auto;
            height: auto;
            margin-right: 0.5rem;
        }

        /* Button */
        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #4f46e5;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4338ca;
        }

        /* Links */
        a {
            color: #4f46e5;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Error Messages */
        .x-input-error {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
@endsection

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
