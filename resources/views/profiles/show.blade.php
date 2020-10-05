<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-banner.jpg" 
                alt="banner"
                class="mb-2"
            >

            <img 
            {{-- src="{{ $user->avatar }}"  --}}
                src="/images/default-avatar.jpeg"
                alt="Avatar"
                class="w-32 rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" 
                style="left: 50%;"
            >
        </div>

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path("edit") }}" 
                        class="rounded-full border border-gray-300 py-2 px-4 text-sm mr-2"
                    >Edit Profle</a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>

            </div>
        </div>

        <p class="text-sm">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem suscipit amet non tempore totam quam numquam ratione consequuntur! Quo animi debitis quisquam eaque nobis voluptates quibusdam asperiores voluptatum harum.
        </p>
    </header>

    @include ('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>
