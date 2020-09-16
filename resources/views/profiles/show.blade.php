<x-app>

    <header class="mb-6 relative">
        <div class="relative">
            <img
                class="rounded-lg mb-2"
                src="https://picsum.photos/id/227/700/233"
                alt="cover"
            >

            <img
                src="{{ $user->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%"
            >
        </div>

        <div class="flex justify-between items-center mb-6">

            <div style="max-width: 270px ">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a
                        href="/profiles/{{ $user->username }}/edit"
                        class="border border-gray-300 rounded-full shadow py-2 px-2 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci autem blanditiis, corporis exercitationem incidunt necessitatibus nostrum perspiciatis placeat repudiandae sapiente. Ab ad, amet dolore modi nihil nulla quae quos repudiandae?
        </p>

    </header>

    @include('_timeline', [
    'tweets' => $tweets
    ])
</x-app>
