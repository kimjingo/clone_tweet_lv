@extends('layouts.app')

@section('content')
<header class="mb-6 relative">
    <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">

    <div class="flex justify-between items-center">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>
        <div>
            <a href="" class="rounded-full shadow py-2 px-4 text-blue-500 text-xs">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
        </div>
    </div>
    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute" style="width:150px; left: calc(50% - 75px); top:47%;">
    <hr>
</header>
@include('_timeline', [
'tweets' => $user->tweets
])
@endsection