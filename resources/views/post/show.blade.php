@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-10 sm:px-20 flex justify-center">
        <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
            <div class="w-full flex justify-between p-3">
                <div class="flex">
                    <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                        <img src="{{ $post->user->profile->profile_image() }}" alt="profile_image">
                    </div>
                    <span class="pt-1 ml-2 font-bold text-sm">{{ $post->user->username }}</span>
                </div>
                <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
            </div>

            <img class="w-full bg-cover" src="/storage/{{ $post->image }}">
            <div class="px-3 pb-2">
                <div class="pt-2">
                    <i class="far fa-heart cursor-pointer"></i>
                    <span class="text-sm text-gray-400 font-medium">Description</span>
                </div>
                <div class="pt-1">
                    <div class="mb-2 text-sm">{{ $post->description }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
