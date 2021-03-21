<ul>
    <li><a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a></li>
    <li><a href="/explore" class="font-bold">Explore</a></li>
    <li><a href="/notifications" class="font-bold">Notifications</a></li>
    <li><a href="/messages" class="font-bold">Messages</a></li>
    <li><a href="/bookmarks" class="font-bold">Bookmarks</a></li>
    <li><a href="/lists" class="font-bold">Lists</a></li>
    <li><a href="{{ route('profile', auth()->user()) }}" class="font-bold">Profile</a></li>
    <li><a href="" class="font-bold">More</a></li>
</ul>