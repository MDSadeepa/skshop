<x-seller-layout>
    <x-layout-border>
        @unless (count($products) == 0)

            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach ($products as $selleritem)
                        <x-seller-products-listing :selleritem="$selleritem" />
                    @endforeach
                @else
                    <p class="text-sm font-medium text-gray-900">No listings found</p>
                @endunless

            </div>
        </div>
    </x-layout-border>
</x-seller-layout>
{{--
     /*withn this file i want to list down products belonging to
             seller(not all products)

             *all factories has been created if you want you
             can migrate them and see
            */ --}}
