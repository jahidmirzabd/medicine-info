<x-app-layout>
    <div x-data="deleteModal()" class="space-y-3" x-cloak>
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>


        {{-- Page Header --}}
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Product Management</h1>
            <a href="{{ route('admin.products.create') }}"
                class="px-4 py-2 bg-red-600 text-white font-semibold rounded-md shadow hover:bg-red-700 transition">
                + Add New Product
            </a>
        </div>

        {{-- Flash Message --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-600 text-white rounded-md text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Product Table --}}
        <div
            class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3 font-medium">Image</th>
                            <th class="px-6 py-3 font-medium">Title</th>
                            <th class="px-6 py-3 font-medium">Description</th>
                            <th class="px-6 py-3 font-medium text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse ($products as $product)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                <td class="px-6 py-4">
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                            class="w-16 h-16 object-cover rounded-md border border-gray-600">
                                    @else
                                        <span class="text-gray-400 text-sm">No image</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100 font-medium">
                                    {{ $product->title }}
                                </td>
                                <td class="px-6 py-4 text-gray-600 dark:text-gray-300 text-sm">
                                    {{ Str::limit($product->description, 60) }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-2">
                                        <a href="{{ route('admin.products.edit', $product->id) }}"
                                            class="px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition">
                                            Edit
                                        </a>
                                        <button @click="deleteProduct({{ $product->id }}, '{{ $product->title }}')"
                                            class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                    No products found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Delete Modal -->
        <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50"
            @keydown.escape.window="open = false" @click.self="open = false">

            <div class="w-[500px] h-[300px] p-6 bg-gray-800 rounded-lg shadow-xl flex flex-col justify-between">
                <!-- Title -->
                <h3 class="text-lg font-semibold text-white mb-2">Confirm Delete</h3>

                <!-- Message -->
                <p class="text-sm text-white mb-6">
                    Are you sure you want to delete <strong x-text="productName"></strong>?
                </p>

                <!-- Buttons -->
                <div class="flex justify-end gap-3 mt-auto">
                    <button @click="open = false"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                        Cancel
                    </button>

                    <form :action="`/admin/products/${productId}`" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700">
                            Yes, Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteModal() {
            return {
                open: false,
                productId: null,
                productName: '',
                deleteProduct(id, name) {
                    this.productId = id;
                    this.productName = name;
                    this.open = true;
                }
            }
        }
    </script>
</x-app-layout>