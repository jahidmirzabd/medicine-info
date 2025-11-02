<x-app-layout>
    <div x-data="deleteModal()" class="space-y-3" x-cloak>
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        {{-- Page Header --}}
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">User Management</h1>
            <a href="{{ route('users.create') }}"
                class="px-4 py-2 bg-red-600 text-white font-semibold rounded-md shadow hover:bg-red-700 transition">
                + Add New User
            </a>
        </div>

        {{-- User Table --}}
        <div
            class="bg-white dark:bg-gray-800 shadow rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3 font-medium">ID</th>
                            <th class="px-6 py-3 font-medium">Name</th>
                            <th class="px-6 py-3 font-medium">Email</th>
                            <th class="px-6 py-3 font-medium">Role</th>
                            <th class="px-6 py-3 font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse ($users as $user)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100">{{ $user->id }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100">{{ $user->name }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100">{{ $user->email }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-100 capitalize">
                                    {{ $user->role ?? 'User' }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition">
                                            Edit
                                        </a>
                                        <button @click="deleteUser({{ $user->id }}, '{{ $user->name }}')"
                                            class="px-3 py-1 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                    No users found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Reusable Delete Modal -->
<div x-show="open"
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50"
     @keydown.escape.window="open = false" @click.self="open = false">

    <div class="w-[500px] h-[400px] p-6 bg-gray-800 rounded-lg shadow-xl flex flex-col justify-between">
        <!-- Title -->
        <h3 class="text-lg font-semibold text-white mb-2">
            Confirm Delete
        </h3>

        <!-- Message -->
        <p class="text-sm text-white mb-6">
            Are you sure you want to delete <strong x-text="userName"></strong>?
        </p>

        <!-- Buttons -->
        <div class="flex justify-end gap-3 mt-auto">
            <button @click="open = false"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                Cancel
            </button>

            <form :action="`/users/${userId}`" method="POST" class="inline">
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
                userId: null,
                userName: '',
                deleteUser(id, name) {
                    this.userId = id;
                    this.userName = name;
                    this.open = true;
                }
            }
        }
    </script>
</x-app-layout>