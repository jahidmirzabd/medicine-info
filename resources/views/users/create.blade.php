<x-app-layout>
    <div class="space-y-6">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Add New User</h1>

        <form action="{{ route('users.store') }}" method="POST"
            class="space-y-4 bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            @csrf
            <div>
                <label class="block text-gray-700 dark:text-gray-200">Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full mt-1 px-3 py-2 border rounded-md dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block text-gray-700 dark:text-gray-200">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full mt-1 px-3 py-2 border rounded-md dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block text-gray-700 dark:text-gray-200">Password</label>
                <input type="password" name="password"
                    class="w-full mt-1 px-3 py-2 border rounded-md dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block text-gray-700 dark:text-gray-200">Confirm Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full mt-1 px-3 py-2 border rounded-md dark:bg-gray-700 dark:text-white">
            </div>
            <div>
                <label class="block text-gray-700 dark:text-gray-200">Role</label>
                <input type="text" name="role" value="{{ old('role') }}"
                    class="w-full mt-1 px-3 py-2 border rounded-md dark:bg-gray-700 dark:text-white">
            </div>

            <button type="submit" class="px-4 mt-3 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Add
            User</button>
        </form>
    </div>
</x-app-layout>