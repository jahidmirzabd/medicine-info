@extends('layouts.appfront')

@section('content')
  <section class="max-w-3xl mx-auto p-6 bg-gray-900 text-white rounded-lg mt-16">
    <h1 class="text-3xl font-bold mb-4">Thank You for Your Purchase!</h1>
    <p class="mb-6">You have selected the <strong>{{ ucfirst($plan) }}</strong> plan.</p>

    <p>We will contact you shortly with the next steps.</p>

    <a href="{{ route('pages.pricing.price') }}" class="inline-block mt-8 px-6 py-3 bg-pink-500 rounded hover:bg-pink-600 transition">
      Back to Pricing
    </a>
  </section>
@endsection