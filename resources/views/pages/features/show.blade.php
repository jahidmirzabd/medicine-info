@extends('layouts.appfront')

@section('title', $product->title)

@section('content')

{{-- 🚀 Hero Image and Title Section (Full-width Banner) --}}
<section class="relative h-[500px] overflow-hidden bg-gray-900">
    {{-- Background Image (1280px width, 500px height - adjusted for full-width responsiveness) --}}
    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
        class="w-full h-full object-cover transition-all duration-700 ease-in-out hover:scale-105 opacity-70"
        style="min-width: 1280px;"> {{-- The min-width helps ensure it covers large screens, but full-width classes handle responsiveness --}}

    {{-- Dark Overlay for contrast --}}
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 via-gray-900/30 to-transparent"></div>

    {{-- Title Container (Centered over the image) --}}
    <div class="absolute inset-0 flex items-center justify-center text-center">
        <div class="max-w-4xl px-6">
            <h1 class="text-6xl md:text-7xl font-extrabold text-white tracking-tight leading-none drop-shadow-lg animate-fade-in-up">
                {{ $product->title }}
            </h1>
        </div>
    </div>
</section>
{{-- 📝 Description and Content Section --}}
<section class="py-10 bg-gray-900">
    <div class="container mx-auto px-6 space-y-12">
        
       <!-- Description -->
        <div class="text-left">
            <h2 class="text-3xl font-bold text-pink-500 mb-6">Product Details</h2>
            <p class="text-white text-xl leading-relaxed font-light">
                {!! $product->description !!}
            </p>
        </div>

        {{-- Call to Action / Back Link --}}
        <div class="text-center pt-8">
            <a href="{{ route('pages.features.index') }}"
                class="inline-flex items-center justify-center px-8 py-3 text-lg bg-pink-600 hover:bg-pink-700 focus:ring-4 focus:ring-pink-500/50 rounded-full text-white font-semibold transition duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Back to Products
            </a>
        </div>
    </div>
</section>

@endsection