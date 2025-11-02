<header id="navbar" class="fixed top-0 left-0 w-full z-30 p-4 transition-all duration-300
                   bg-white/5 backdrop-blur-md border-b border-white/20">
    <div class="container mx-auto flex justify-between items-center px-4 md:px-8">

        <!-- Logo/Brand Name -->
        <a href="{{ route('pages.home.index') }}" class="text-xl font-bold text-white tracking-widest">
            Medicine<span class="text-cyan-400">-Info</span>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex space-x-8 text-white">
            <a href="{{ route('pages.home.index') }}" class="hover:text-cyan-300 transition duration-200">Home</a>
            <a href="{{ route('pages.features.index') }}" class="hover:text-cyan-300 transition duration-200">Features</a>
            <a href="#" class="hover:text-cyan-300 transition duration-200">Pricing</a>
            <a href="#" class="hover:text-cyan-300 transition duration-200">Docs</a>
        </nav>

        <!-- Sign In / Sign Up Buttons (Desktop) -->
        <div class="hidden md:flex items-center space-x-3">
            <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-semibold rounded-full 
                      bg-white text-gray-900 shadow-md 
                      hover:bg-gray-100 transition duration-300">
                Sign In
            </a>
        
            <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold rounded-full 
                      bg-gray-900 text-white shadow-md 
                      hover:bg-gray-800 transition duration-300">
                Sign Up
            </a>
        </div>



        <!-- Mobile Menu Button (uses a simple JS toggle function for demo) -->
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none" aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2 text-white/80 text-center">
        <a href="{{ route('pages.home.index') }}" class="block px-3 py-2 hover:bg-white/10 rounded-lg">Home</a>
        <a href="#" class="block px-3 py-2 hover:bg-white/10 rounded-lg">Features</a>
        <a href="#" class="block px-3 py-2 hover:bg-white/10 rounded-lg">Pricing</a>
        <a href="#" class="block w-full py-2 bg-white text-gray-900 rounded-full font-semibold mt-4">Sign In</a>
        <a href="#" class="block w-full py-2 bg-gray-900 text-white rounded-full font-semibold mt-2">Sign Up</a>
    </div>
</header>