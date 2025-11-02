<!-- Custom Styles and Animation Keyframes -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

    #herohome {
        font-family: 'Inter', sans-serif;
        min-height: 100vh;
        /* Ensure body covers full height */
    }

    /* Custom CSS for blob animation */
    @keyframes blob {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }

    @keyframes blob-delay {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(-40px, 30px) scale(0.95);
        }

        66% {
            transform: translate(50px, -30px) scale(1.05);
        }
    }

    .animate-blob {
        animation: blob 7s infinite alternate;
    }

    .animate-blob-delay {
        animation: blob-delay 9s infinite alternate;
    }
</style>


<section id="herohome" class="relative h-screen flex items-center justify-center overflow-hidden pt-[10px] md:pt-20">

    <!-- 1. Gradient Background (Gas Door Blue) -->
    <div class="absolute inset-0 z-0">
        <!-- Using inline style for the custom gradient: #0C1D3B to #3A7CA5 -->
        <div class="h-full w-full" style="background: linear-gradient(135deg, #0C1D3B 0%, #3A7CA5 100%);">
        </div>
    </div>

    <!-- 2. Abstract background shapes/blobs for better blur effect -->
    <div
        class="absolute top-1/4 left-1/4 h-64 w-64 bg-blue-400 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob">
    </div>
    <div
        class="absolute bottom-1/4 right-1/4 h-80 w-80 bg-cyan-400 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob-delay">
    </div>


    <!-- 3. Glassmorphism Hero Card (Main Content) -->
    <div class="relative z-10 p-8 md:p-16 max-w-7xl mx-auto text-center 
                bg-white/10 backdrop-blur-xl border border-white/20 
                rounded-2xl shadow-2xl transition duration-500 hover:shadow-white/40">

        <!-- Hero Heading -->
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 tracking-tight">
            <span class="block">The Future is Clear.</span>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-400">
                Start Your Journey.
            </span>
        </h1>

        <!-- Subtitle/Description -->
        <p class="text-lg md:text-xl text-blue-200 mb-8 max-w-2xl mx-auto">
            Experience the next generation of web applications, powered by Laravel and a sleek, modern UI.
        </p>

        <!-- Call-to-Action Buttons -->
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="#" class="px-8 py-3 text-lg font-semibold rounded-full 
                                bg-white text-gray-900 shadow-lg 
                                hover:bg-gray-100 transition duration-300">
                Get Started Now
            </a>
            <a href="#" class="px-8 py-3 text-lg font-semibold rounded-full 
                                text-white border border-white/50 
                                hover:bg-white/20 transition duration-300">
                View Documentation
            </a>
        </div>
    </div>
</section>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        if (button && menu) {
            button.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>