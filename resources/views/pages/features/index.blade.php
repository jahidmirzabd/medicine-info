@extends('layouts.appfront')

@section('title', 'Medicines List')


@section('content')
    <section class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-white mb-4 mt-6">Our Featured Products</h2>
            <p class="text-gray-300 mb-10 max-w-2xl mx-auto">
                Discover our latest products that combine quality, innovation, and performance.
            </p>

            @if(isset($products) && $products->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($products as $product)
                        <div
                            class="bg-gray-900 rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-transform hover:-translate-y-1">

                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                class="w-full h-48 object-cover">

                            <div class="p-6 text-left">
                                <h3 class="text-xl font-semibold text-white mb-2">
                                    {{ $product->title }}
                                </h3>
                                <p class="text-gray-400 mb-4">
                                    {{ Str::limit($product->description, 100, '...') }}
                                </p>
                                <a href="{{ route('pages.features.show', $product->id) }}"
                                    class="inline-block px-4 py-2 bg-pink-600 text-white text-sm font-medium rounded-md hover:bg-pink-700 transition">
                                    Read More
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-400 text-center">No featured products available at the moment.</p>
            @endif
        </div>
    </section>
@endsection