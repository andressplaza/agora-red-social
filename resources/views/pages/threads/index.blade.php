<x-guest-layout>
    <main class="wrapper">
        <section>
            

            <div class="flex flex-col col-span-3 gap-y-4 mt-8">
                {{-- Alerts --}}
                <x-alerts.main />

                @foreach ($threads as $thread)
                <x-thread :thread="$thread" />
                @endforeach

                {{-- Pagination --}}
                <div class="mt-8">
                    {{ $threads->render() }}
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
