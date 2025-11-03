@extends('layouts.appfront')

@section('content')
  <section class="bg-gray-900 text-white py-24">
    <div class="max-w-7xl mx-auto px-6">
      <h1 class="text-4xl font-bold text-center mb-12 text-pink-500">Choose Your Plan</h1>

      <div class="grid gap-8 md:grid-cols-3">
        <!-- Basic Plan -->
        <div
          class="bg-gray-800/70 border border-gray-700 rounded-2xl p-8 flex flex-col shadow-lg hover:shadow-2xl transition">
          <h2 class="text-2xl font-semibold mb-2">Basic</h2>
          <p class="text-gray-300 mb-6">Perfect for individuals starting out</p>

          <div class="mb-6">
            <span class="text-5xl font-bold">৳299</span>
            <span class="text-lg text-gray-400">/mo</span>
          </div>

          <ul class="space-y-2 text-gray-300 flex-1">
            <li>✓ 1 Project</li>
            <li>✓ Basic Support</li>
            <li>✓ 5GB Storage</li>
          </ul>

          <form action="#" method="POST" class="mt-8">
            @csrf
            <input type="hidden" name="plan" value="basic">
            <button class="w-full py-3 rounded-xl bg-gray-700 hover:bg-gray-600 transition font-semibold">
              Buy Now
            </button>
          </form>
        </div>

        <!-- Pro Plan -->
        <div
          class="bg-gray-800/70 text-white rounded-2xl p-8 flex flex-col transform md:scale-105 shadow-2xl border border-pink-500 hover:shadow-pink-500/50 transition">
          <h2 class="text-2xl font-semibold mb-2">Pro</h2>
          <p class="text-white mb-6">Best for growing businesses</p>

          <div class="mb-6">
            <span class="text-5xl font-bold">৳799</span>
            <span class="text-lg text-white">/mo</span>
          </div>

          <ul class="space-y-2 text-white flex-1">
            <li>✓ Unlimited Projects</li>
            <li>✓ Priority Support</li>
            <li>✓ 50GB Storage</li>
          </ul>

          <form action="#" method="POST" class="mt-8">
            @csrf
            <input type="hidden" name="plan" value="pro">
            <button class="w-full py-3 rounded-xl bg-pink-500 text-white hover:bg-pink-600 transition font-semibold">
              Buy Now
            </button>
          </form>
        </div>

        <!-- Enterprise Plan -->
        <div
          class="bg-gray-800/70 border border-gray-700 rounded-2xl p-8 flex flex-col shadow-lg hover:shadow-2xl transition">
          <h2 class="text-2xl font-semibold mb-2">Enterprise</h2>
          <p class="text-gray-300 mb-6">For large teams & organizations</p>

          <div class="mb-6">
            <span class="text-5xl font-bold">৳1499</span>
            <span class="text-lg text-gray-400">/mo</span>
          </div>

          <ul class="space-y-2 text-gray-300 flex-1">
            <li>✓ Team Access</li>
            <li>✓ Dedicated Support</li>
            <li>✓ 200GB Storage</li>
          </ul>

          <form action="#" method="POST" class="mt-8">
            @csrf
            <input type="hidden" name="plan" value="enterprise">
            <button class="w-full py-3 rounded-xl bg-gray-700 hover:bg-gray-600 transition font-semibold">
              Buy Now
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection