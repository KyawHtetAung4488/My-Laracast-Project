<div class="border border-gray-300 rounded-lg mb-4">

    @forelse( $tweets as $tweet )
        @include('_tweet')
    @empty
        <p class="p-4">No tweet yet.</p>
    @endforelse

    {{ $tweets->links() }}

</div>
