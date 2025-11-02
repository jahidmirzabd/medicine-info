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
                <div role="alert" aria-live="assertive" class="mb-6 bg-red-600 text-white rounded-md p-4">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-6" novalidate>
                @csrf

                {{-- Product Title --}}
                <div>
                    <label for="title" class="block text-gray-300 font-medium mb-2">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        placeholder="Enter product title" required
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-md px-4 py-2 focus:border-pink-500 focus:ring-1 focus:ring-pink-500 outline-none"
                        aria-describedby="title-error">
                    @error('title')
                        <p id="title-error" class="text-red-400 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description (TinyMCE) --}}
                <div>
                    <label for="description" class="block text-gray-300 font-medium mb-2">Description</label>
                    <textarea id="description" name="description" rows="10"
                        class="w-full bg-gray-700 text-white border border-gray-600 rounded-md px-4 py-2 focus:border-pink-500 focus:ring-1 focus:ring-pink-500 outline-none"
                        placeholder="Write product description..." required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-400 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Product Image --}}
                <div>
                    <label for="image" class="block text-gray-300 font-medium mb-2">Product Image</label>
                    <input type="file" id="image" name="image"
                        class="w-full text-gray-300 bg-gray-700 border border-gray-600 rounded-md cursor-pointer focus:border-pink-500 focus:ring-1 focus:ring-pink-500 outline-none"
                        aria-describedby="image-error">
                    @error('image')
                        <p id="image-error" class="text-red-400 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit & Cancel Buttons --}}
                <div class="flex justify-center space-x-4">
                    <button type="submit"
                        class="px-6 py-3 bg-pink-600 text-white font-semibold rounded-md hover:bg-pink-700 transition focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">
                        Create Product
                    </button>
                    <a href="{{ route('admin.products.index') }}"
                        class="px-6 py-3 bg-gray-600 text-white font-semibold rounded-md hover:bg-gray-700 transition inline-block text-center focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </section>

    {{-- TinyMCE JS --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            tinymce.init({
                selector: '#description',
                height: 300,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                    'bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                skin: 'oxide-dark',
                content_css: 'dark',
                setup: (editor) => {
                    editor.on('change', () => {
                        editor.save(); // Save content to textarea on change
                    });
                }
            });
        });
    </script>
</x-app-layout>