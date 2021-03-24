<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex">
                @auth
                <div class="lg:w-1/6">
                    @include('_sidebar_links')
                </div>
                @endauth
                <div class="lg:flex-1 lg:mx-10" style="max-width:700px;">
                    {{ $slot }}
                </div>

                @auth
                <div class="lg:w-1/6 lg:ml-10 rounded-lg bg-blue-200">
                    @include('_friends-list')
                </div>
                @endauth

        </main>
    </section>
</x-master>