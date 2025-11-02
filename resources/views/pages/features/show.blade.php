@extends('layouts.appfront')

@section('title', $product->title)

@section('content')
    <section class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                {{-- Product Image --}}
                <div class="relative rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                        class="w-full h-[400px] object-cover rounded-2xl">
                </div>

                {{-- Product Content --}}
                <div class="text-white">
                    <h1 class="text-4xl font-bold mb-4">{{ $product->title }}</h1>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                        {{ $product->description }}
                    </p>

                    <div class="mt-8">
                        <a href="{{ route('pages.features.index') }}"
                            class="inline-block px-5 py-2.5 bg-pink-600 hover:bg-pink-700 rounded-md text-white font-medium transition">
                            ← Back to Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection