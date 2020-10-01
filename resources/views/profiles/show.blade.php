@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/default-banner.jpg" 
            alt="banner"
            class="mb-2"
        >

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="#" class="rounded-full border border-gray-300 py-2 px-4 text-sm mr-2">Edit Profle</a>
                <a href="#" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">Follow</a>
            </div>
        </div>

        <p class="text-sm">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem suscipit amet non tempore totam quam numquam ratione consequuntur! Quo animi debitis quisquam eaque nobis voluptates quibusdam asperiores voluptatum harum.
        </p>

        <img 
        {{-- src="{{ $user->avatar }}"  --}}
            src="/images/default-avatar.jpeg"
            alt="Avatar"
            class="w-32 rounded-full mr-2 absolute bottom-0 -translate-x-1/2 translate-y-1/2" 
            style="left: 40%; top: 150px;"
        >
    </header>

    @include ('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
