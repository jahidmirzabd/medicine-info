@extends('layouts.appfront')

@section('content')

  <section class="max-w-6xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold text-center mb-10 text-white">Choose a Plan</h1>

    <div class="grid gap-6 md:grid-cols-3">
      @php
        $plans = [
          ['id' => 'basic', 'name' => 'Basic', 'price' => '৳299', 'desc' => 'For getting started', 'features' => ['1 Project', 'Basic Support', '5GB Storage']],
          ['id' => 'pro', 'name' => 'Pro', 'price' => '৳799', 'desc' => 'Most popular', 'features' => ['Unlimited Projects', 'Priority Support', '50GB Storage']],
          ['id' => 'enterprise', 'name' => 'Enterprise', 'price' => '৳1499', 'desc' => 'For teams', 'features' => ['Team Seats', 'Dedicated Support', '200GB Storage']],
        ];
      @endphp

      @foreach($plans as $plan)
        <div
          class="{{ $plan['id'] == 'pro' ? 'bg-white text-gray-900 transform md:scale-105 shadow-2xl border border-pink-500' : 'bg-gray-800/60 border border-gray-700 text-white' }} rounded-2xl p-6 flex flex-col">
          <div>
            <h3 class="text-xl font-semibold">{{ $plan['name'] }}</h3>
            <p class="text-sm {{ $plan['id'] == 'pro' ? 'text-gray-700' : 'text-gray-300' }}">{{ $plan['desc'] }}</p>
          </div>

          <div class="mt-6">
            <div class="text-4xl font-extrabold">{{ $plan['price'] }}<span class="text-lg font-medium ml-1">/mo</span></div>
            <p class="text-sm {{ $plan['id'] == 'pro' ? 'text-gray-600' : 'text-gray-400' }} mt-1">Billed monthly</p>
          </div>

          <ul class="mt-6 space-y-2 {{ $plan['id'] == 'pro' ? 'text-gray-700' : 'text-gray-300' }} flex-1">
            @foreach($plan['features'] as $f)
              <li>✓ {{ $f }}</li>
            @endforeach
          </ul>

          <form action="{{ route('checkout') }}" method="POST" class="mt-6">
            @csrf
            <input type="hidden" name="plan" value="{{ $plan['id'] }}">
            <button type="submit"
              class="w-full py-3 rounded-xl font-semibold {{ $plan['id'] == 'pro' ? 'bg-pink-500 text-white hover:bg-pink-600' : 'bg-gray-700 hover:bg-gray-600' }}">
              Buy Now
            </button>
          </form>
        </div>
      @endforeach
    </div>
  </section>


@endsection