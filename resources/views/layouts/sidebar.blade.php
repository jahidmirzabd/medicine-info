<aside class="w-70 bg-white dark:bg-gray-800 shadow-lg border-r border-gray-200 dark:border-gray-700">
    <div class="p-4 text-center border-b dark:border-gray-700">
        <h1 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
            Admin Panel
        </h1>
    </div>

    <nav class="mt-4">
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 @if(request()->routeIs('dashboard')) bg-gray-200 dark:bg-gray-700 font-bold @endif">
            Dashboard
        </a>
        <a href="/products"
            class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
            Products
        </a>
        <a href="/users" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
           All Users
        </a>
        <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
            Profile
        </a>
        <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
            Settings
        </a>
    </nav>
</aside>
