@extends('layouts.app')

@section('content')

<div class="py-20">
    <div class="max-w-md mx-auto bg-white overflow-hidden md:max-w-lg shadow-lg">
        <div class="md:flex">
            <div class="w-full px-4 py-6 ">
                @if ($errors->any())
                    <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-4 flex items-start text-white my-4 shadow-lg mx-auto max-w-2xl">
                        <div class="px-3">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}.</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form method="POST" enctype="multipart/form-data" action="{{ route('create') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="title" class="block mb-2 text-sm text-gray-600">Title</label>
                        <input
                            class="w-full px-3 py-2 focus:outline-none bg-white-100 border border-bg-blue-500 focus:outline-none focus:border-blue-500"
                            type="text"
                            name="title"
                            placeholder="Enter a title."
                        />
                    </div>
                    <div class="mb-6">
                        <label for="description" class="block mb-2 text-sm text-gray-600">Description</label>
                        <textarea
                            class="w-full px-3 py-2 focus:outline-none bg-white-100 border border-bg-blue-500 focus:outline-none focus:border-blue-500"
                            type="text"
                            name="description"
                            rows="4" cols="50"
                        ></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="image" class="block mb-2 text-sm text-gray-600">Image</label>
                        <div class="relative border-dotted h-32 border-dashed border-2 border-blue-500 bg-gray-100 flex justify-center items-center">
                            <div class="absolute">
                                <div class="flex flex-col items-center"> 
                                    <span class="block text-gray-400 font-normal">Attach a photo here</span>
                                </div>
                            </div> 
                            <input type="file" name="image" class="h-full w-full opacity-0" name="">
                        </div>
                    </div>
                    
                    <div class="mt-3 text-right"> 
                        <a href="/profile/{{ auth()->user()->id }}">Cancel</a> 
                        <button class="ml-2 h-10 w-32 bg-blue-500 text-white hover:bg-blue-700">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
