
<div class="bg-blue-100 rounded-lg p-4 border border-gray-300" >
    <h3 class="font-bold text-lg mb-4">Following</h3>

    <ul>
        @forelse(auth()->user()->follows as $user)
            <li class="text-sm {{ $loop->last ? '' : 'mb-4' }}">
                <div>

                    <a href="{{ route('profile', $user) }}" class="flex items-center">
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >
                        {{ $user->name }}
                    </a>

                </div>
            </li>
        @empty
            <li>No friend yet.</li>
        @endforelse
    </ul>

</div>

