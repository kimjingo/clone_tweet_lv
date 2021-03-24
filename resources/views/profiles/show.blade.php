<x-app>

    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">
            <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left:50%;" width="100">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                <x-follow-button :user="$user"></x-follow-button>
                <a href="" class="rounded-full shadow py-2 px-4 text-blue-500 text-xs">Edit Profile</a>
            </div>
        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente quibusdam quis consequuntur animi voluptates quo, fugiat voluptate, adipisci, quia non ducimus assumenda officia repellat earum. Aperiam dolorum quidem voluptas?
        </p>
        <hr>
    </header>
    @include('_timeline', [
    'tweets' => $user->tweets
    ])
</x-app>