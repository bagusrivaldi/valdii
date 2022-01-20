@extends('layouts.auth')

@section('title', 'Register')
@section('form-header', 'Create An Account')
@section('form-text', 'Create your account bellow')

@section('content')
    <form method="POST">
        @csrf

        @if ($errors->any())
            <div class="bg-blue-500 p-4 flex items-start text-white my-4 mx-auto max-w-2xl">
                <div class="px-3">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}.</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">
            <label for="username" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Username</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Password</label>
            <input type="password" name="password" id="password" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Password Verify</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>
        <div class="mb-6">
            <button type="submit" class="w-full px-3 py-3 text-white bg-blue-500 rounded-md focus:bg-blue-600 focus:outline-none">Register</button>
        </div>

        <p class="text-base text-center text-gray-400">
            Already regustered? <a class="text-blue-400" href="{{ route('login') }}">Login</a>
        </p>
    </form>
@endsection
