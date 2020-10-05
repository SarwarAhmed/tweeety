@unless (current_user()->is($user))
    <form method="POST" action="/profiles/{{ $user->name }}/follow">
        @csrf

        <button 
            type="submit" 
            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm"
        >{{ current_user()->following($user) ? 'Unfollow' : 'Follow' }}</button>
    </form>
@endunless