<x-layout>
    @include('partials._search1')
    @include('partials._hero')

    @unless (count($products) == 0)

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> --}}
                @foreach ($products as $item)
                    <x-products-listing :item="$item" />
                @endforeach
            @else
                <p class="text-sm font-medium text-gray-900">No listings found</p>
            @endunless

        </div>
    </div>
</x-layout>
