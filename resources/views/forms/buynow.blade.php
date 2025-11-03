@extends('layouts.appfront')

@section('content')

  <section class="max-w-6xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold text-center mb-10 text-white">Choose a Plan</h1>

    <div class="grid gap-6 md:grid-cols-3">
      @foreach($plans as $plan)
        <div
          class="{{ $plan->plan_id == 'pro' ? 'bg-white text-gray-900 transform md:scale-105 shadow-2xl border border-pink-500' : 'bg-gray-800/60 border border-gray-700 text-white' }} rounded-2xl p-6 flex flex-col">
          <div>
            <h3 class="text-xl font-semibold">{{ $plan->name }}</h3>
            <p class="text-sm {{ $plan->plan_id == 'pro' ? 'text-gray-700' : 'text-gray-300' }}">{{ $plan->description }}</p>
          </div>

          <div class="mt-6">
            <div class="text-4xl font-extrabold">{{ $plan->price }}<span class="text-lg font-medium ml-1">/mo</span></div>
            <p class="text-sm {{ $plan->plan_id == 'pro' ? 'text-gray-600' : 'text-gray-400' }} mt-1">Billed monthly</p>
          </div>

          <ul class="mt-6 space-y-2 {{ $plan->plan_id == 'pro' ? 'text-gray-700' : 'text-gray-300' }} flex-1">
            @foreach(json_decode($plan->features) as $feature)
              <li>✓ {{ $feature }}</li>
            @endforeach
          </ul>

          <form action="{{ route('forms.buynow') }}" method="POST" class="mt-6">
            @csrf
            <input type="hidden" name="plan" value="{{ $plan->plan_id }}">
            <button type="submit"
              class="w-full py-3 rounded-xl font-semibold {{ $plan->plan_id == 'pro' ? 'bg-pink-500 text-white hover:bg-pink-600' : 'bg-gray-700 hover:bg-gray-600' }}">
              Buy Now
            </button>
          </form>
        </div>
      @endforeach
    </div>
  </section>



@endsection