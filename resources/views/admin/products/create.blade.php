<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __('Add New Product') }}
        </h2>
    </x-slot>

    <section class="py-10 bg-gray-900 min-h-screen">
        <div class="max-w-3xl mx-auto bg-gray-800 p-8 rounded-2xl shadow-lg">
            <h2 class="text-3xl font-bold text-white mb-6 text-center">Create Product</h2>

            @if ($errors->any())
                <div class="mb-6 bg-red-600 text-white rounded-md p-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf

                <!-- Product Title -->
                <div>
                    <label for="title" class="block text-gray-300 font-medium mb-2">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-md px-4 py-2 focus:border-pink-500 focus:ring-1 focus:ring-pink-500"
                        placeholder="Enter product title" required>
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-gray-300 font-medium mb-2">Description</label>
                    <textarea id="description" name="description" rows="4"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-md px-4 py-2 focus:border-pink-500 focus:ring-1 focus:ring-pink-500"
                        placeholder="Write product description..." required>{{ old('description') }}</textarea>
                </div>

                <!-- Image -->
                <div>
                    <label for="image" class="block text-gray-300 font-medium mb-2">Product Image</label>
                    <input type="file" id="image" name="image"
                        class="w-full text-gray-300 bg-gray-700 border border-gray-600 rounded-md cursor-pointer focus:border-pink-500 focus:ring-1 focus:ring-pink-500">
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <button type="submit"
                        class="px-6 py-3 bg-pink-600 text-white font-semibold rounded-md hover:bg-pink-700 transition">
                        Create Product
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>