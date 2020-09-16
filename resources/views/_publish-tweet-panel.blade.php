<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            class="w-full bg-white"
            placeholder="What's up doc?"
            required
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
                width="40"
                height="40"
            >
            <button
                type="submit"
                class="bg-blue-500 rounded-lg hover:bg-blue-600 shadow py-2 px-10 text-sm text-white"
            >
                Tweet-a-roo!
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
    @enderror
</div>
