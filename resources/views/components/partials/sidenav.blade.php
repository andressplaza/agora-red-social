

   
        
        @auth
        @if(request()->routeIs('threads.show'))
        <aside class="col-span-1 space-y-6 text-gray-600">
        <div class="p-4 space-y-4 bg-white shadow">
        <div class="pb-4 space-y-4">

            @can(App\Policies\ThreadPolicy::UNSUBSCRIBE, $thread)
            {{-- Unubscribe to thread button --}}
            <x-links.main href="{{ route('threads.unsubscribe', [$thread->category->slug(), $thread->slug()]) }}">
                {{ __('Unsubscribe to Thread') }}
            </x-links.main>
            <p class="text-sm text-gray-500 ">
                Unsubscribe from this thread.
            </p>

            @elsecan(App\Policies\ThreadPolicy::SUBSCRIBE, $thread)
            {{-- Subscribe to thread button --}}
            <x-links.main href="{{ route('threads.subscribe', [$thread->category->slug(), $thread->slug()]) }}">
                {{ __('Subscribe to Thread') }}
            </x-links.main>
            <p class="text-sm text-gray-500 ">
                Subscribe to this thread.
            </p>
            @endcan

        </div>
    </div>
        </aside>
        @endif
        @endauth
    

    


