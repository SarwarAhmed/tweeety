<div class="flex p-4 border-b border-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img 
                {{-- src="{{ $tweet->user->avatar }}" --}}
                src="/images/default-avatar.jpeg"
                alt="Avatar"
                class="rounded-full mr-2 h-10 w-10"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
