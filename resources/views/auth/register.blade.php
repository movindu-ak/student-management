<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Background Styling */
        body {
            background-image: url('https://img.freepik.com/free-photo/front-view-cute-young-girl-boy-posing-together_23-2148465743.jpg?t=st=1734549304~exp=1734552904~hmac=7cc7a223a0309ce6dc2e06bbddbc2225a04d58b4906300b07c82b1a86bae4202&w=996');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
        }

        /* Container Styling */
        .register-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 2rem;
            background-color: rgba(255, 255, 255, 0.9); /* Slight transparency */
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
</head>
<body>
    <div class="min-h-screen flex items-center justify-center py-6">
        <div class="register-container">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus>
                    <div class="x-input-error">@error('name'){{ $message }}@enderror</div>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                    <div class="x-input-error">@error('email'){{ $message }}@enderror</div>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required>
                    <div class="x-input-error">@error('password'){{ $message }}@enderror</div>
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required>
                    <div class="x-input-error">@error('password_confirmation'){{ $message }}@enderror</div>
                </div>

                <!-- Is Teacher Checkbox -->
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="is_teacher" name="is_teacher" value="1">
                    <label for="is_teacher" class="ml-2 block text-sm text-gray-700">Are you a teacher?</label>
                </div>

                <!-- Already Registered Link -->
                <div class="flex justify-between items-center">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">Already registered?</a>
                </div>

                <!-- Register Button -->
                <div class="mt-6">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
