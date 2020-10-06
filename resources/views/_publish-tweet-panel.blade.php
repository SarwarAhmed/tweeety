<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea 
            name="body" 
            class="w-full px-2 py-2 outline-none bg-gray-200 rounded-lg"
            placeholder="What's up doc?"
            rows="3"
        ></textarea>

        <hr class="py-2">

        <footer class="flex justify-between">
            <img 
                src="{{ auth()->user()->avatar }}"
                alt="Avatar"
                class="rounded-full h-12 w-12"
            >

            <button type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
            >Tweet-a-roo!</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm pt-2">{{ $message }}</p>
    @enderror
</div>
