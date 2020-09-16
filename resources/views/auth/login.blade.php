
<x-master>
<div class="container flex justify-center mx-auto">
    <div class="rounded-lg mx-auto px-12 py-8 border border-gray-400 bg-gray-200">
        <div class="col-md-8">
            <div class="card">
                <div class="text-lg font-bold mb-4">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                Email
                            </label>
                            <input
                                name="email"
                                id="email"
                                required
                                type="text"
                                class="border border-gray-400 p-2 w-full"
                                autocomplete="email"
                                value="{{ old('email') }}"
                            >

                            @error('email')
                            <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                password
                            </label>
                            <input
                                name="password"
                                id="password"
                                required
                                type="password"
                                class="border border-gray-400 p-2 w-full"
                                autocomplete="current-password"
                                value="{{ old('password') }}"
                            >

                            @error('password')
                            <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <input
                                name="remember"
                                id="remember" {{ old('remember') ? 'checked' : ''  }}
                                type="checkbox"
                                class="mr-1"
                            >

                            <label for="remember" class="uppercase font-bold text-xs text-gray-700">
                                Remember me
                            </label>

                            @error('remember')
                            <p class="text-red-500 text-xs mb-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit" class="bg-blue-400 mr-2 text-white rounded py-2 px-4 hover:bg-blue-500">
                                Submit
                            </button>
                            <a href="{{ route('password.request') }}" class="text-sm text-gray-700">Forget Your Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-master>
