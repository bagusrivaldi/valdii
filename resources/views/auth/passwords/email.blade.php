@extends('layouts.auth')

@section('title', 'Reset Password')
@section('form-header', 'Reset Password')
@section('form-text', 'Reset your password here')

@section('content')
    <form method="POST" action="{{ route('password.email') }}">
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

        @if (session('status'))
            <div class="bg-blue-500 p-4 flex items-start text-white my-4 mx-auto max-w-2xl">
                <div class="px-3">
                    <ul class="list-disc list-inside">
                        {{ session('status') }}
                    </ul>
                </div>
            </div>
        @endif

        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
        </div>

        <div class="mb-6">
            <button type="submit" class="w-full px-3 py-3 text-white bg-blue-500 rounded-md focus:bg-blue-600 focus:outline-none">Send Password Reset Link</button>
        </div>
        <p class="text-base text-center text-gray-400">
            <a class="text-blue-400" href="{{ route('login') }}">Back to login</a>
        </p>
    </form>
@endsection