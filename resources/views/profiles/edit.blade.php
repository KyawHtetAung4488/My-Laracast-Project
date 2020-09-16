<x-app>
    <form action="/profiles/{{ $user->username }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input value="{{ $user->name }}" name="name" id="name" required type="text" class="border border-gray-400 p-2 w-full">

            @error('name')
                <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                User Name
            </label>
            <input value="{{ $user->username }}" name="username" id="username" required type="text" class="border border-gray-400 p-2 w-full">

            @error('username')
            <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">

            <div>
                <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Avatar
                </label>
                <input name="avatar" id="avatar" type="file" class="border border-gray-400 p-2 w-full">
                @error('avatar')
                    <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                @enderror
            </div>

            <img src="{{ $user->avatar }}" alt="Your avatar" width="40">


        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input value="{{ $user->email }}" name="email" id="email" required type="email" class="border border-gray-400 p-2 w-full">

            @error('email')
            <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input name="password" id="password" required type="password" class="border border-gray-400 p-2 w-full">

            @error('password')
            <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password Confirmation
            </label>
            <input name="password_confirmation" id="password_confirmation" required type="password" class="border border-gray-400 p-2 w-full">

            @error('password_confirmation')
            <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                Submit
            </button>

            <a href="{{ route('profile', $user) }}" class="hover:underline">Cancel</a>
        </div>

    </form>
</x-app>
