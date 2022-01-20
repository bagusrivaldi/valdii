@extends('layouts.app')

@section('content')
    <main class="bg-gray-100 bg-opacity-25">
        <div class="lg:w-8/12 lg:mx-auto mb-8">
            <header class="flex flex-wrap items-center p-4 md:py-8">

                <div class="md:w-3/12 md:ml-16">
                    <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full" width="50px" src={{ $user->profile->profile_image() }} alt="profile">
                </div>

                <div class="w-8/12 md:w-7/12 ml-4">
                    <div class="md:flex md:flex-wrap md:items-center mb-4">
                        <h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
                            {{ $user->username }}
                        </h2>
                        @can('update', $user->profile)
                            
                            <a href="/profile/{{ $user->id }}/edit" class="
                                focus:outline-none text-white font-semibold text-sm rounded-md text-center
                                sm:inline-block block bg-blue-500 hover:shadow-md px-4 py-2 mt-2 ml-2"
                            >
                                Edit Profile
                            </a>
                        @endcan
                    </div>

                    <ul class="hidden md:flex space-x-8 mb-4">
                        <li><span class="font-semibold">{{ $user->posts->count() }}</span> posts</li></ul>

                    <div class="hidden md:block">
                        <h1 class="font-semibold">{{ $user->profile->title ?? 'No title...' }}</h1>
                        <p>{{ $user->profile->description ?? 'No description...' }}</p>
                    </div>
                </div>

                <div class="md:hidden text-sm my-2">
                    <h1 class="font-semibold">{{ $user->profile->title }}</h1>
                    <p>{{ $user->profile->description }}</p>
                </div>
            </header>

            <div class="px-px md:px-3">
                <ul class="flex md:hidden justify-around space-x-8 border-t text-center p-2 text-gray-600 leading-snug text-sm">
                    <li><span class="font-semibold text-gray-800 block">{{ $user->posts->count() }}</span> posts</li>
                    <li><span class="font-semibold text-gray-800 block">{{ $user->profile->created_at->diffForHumans() }}</span> created</li>
                    <li><span class="font-semibold text-gray-800 block">{{ $user->profile->updated_at->diffForHumans() }}</span> updated</li>
                </ul>

                <div class="flex flex-wrap -mx-px md:-mx-3">
                    @foreach ($user->posts as $post)
                        <div class="w-1/3 p-px md:px-3">
                            <a href="/post/{{ $post->id }}">
                                <article class="post bg-gray-100 text-white relative pb-full md:mb-6">
                                    <img class="w-full h-full absolute left-0 top-0 object-cover" src="/storage/{{ $post->image }}" alt="image">
                                </article>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</main>
@endsection
