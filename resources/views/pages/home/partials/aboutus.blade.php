<style>
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.8; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.05); }
    }
    .animate-pulse-slow {
        animation: pulse-slow 4s ease-in-out infinite;
    }
</style>

<section class="pt-[20px] pb-[20px] md:pt-[20px] md:pb-[90px] bg-gray-900/95">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">
        <!-- Left Image Area -->
        <div class="relative rounded-2xl shadow-lg overflow-hidden">
            <div class="relative rounded-2xl overflow-hidden">
                <img src="{{ asset('build/assets/img/images/h2_about_img.jpg') }}" alt="About"
                    class="w-full h-auto object-cover rounded-2xl" />
                <div class="absolute inset-0 bg-black opacity-10 rounded-2xl"></div>
            </div>
            <!-- Decorative Shapes -->
            <div class="absolute -top-6 -left-6 animate-bounce-slow">
                <img src="{{ asset('build/assets/img/images/h2_about-shape_01.svg') }}" alt="Decorative shape" class="w-16 h-16 opacity-80" />
            </div>
            <div class="absolute bottom-0 right-0 animate-pulse-slow">
                <img src="{{ asset('build/assets/img/images/h2_about-shape_02.svg') }}" alt="Decorative shape" class="w-20 h-20 opacity-70" />
            </div>
        </div>

        <!-- Right Content Area -->
        <div class="space-y-8">
            <div>
                <span class="text-white text-sm uppercase font-semibold tracking-wide">About our history</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-white dark:text-white mt-2 leading-snug">
                    One Of The Fastest Ways To Gain Business Success
                </h2>
            </div>

            <p class="text-gray-400 dark:text-gray-400 leading-relaxed max-w-xl">
                Things go wrong and questions arise. We understand — that’s why we’ve built a team committed to excellence.
                Experience growth, innovation, and success together with us.
            </p>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-8">
                <div
                    class="flex items-center bg-indigo-50 dark:bg-indigo-900/20 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow duration-300 cursor-default">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('build/assets/img/images/achievement.svg') }}" alt="Achievement trophy icon"
                            class="w-10 h-10 object-contain" loading="lazy" />
                    </div>
                    <div class="ml-5">
                        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white leading-tight">10M+</h2>
                        <span class="text-sm text-gray-600 dark:text-gray-400">Satisfied Clients</span>
                    </div>
                </div>

                <ul class="space-y-3 text-gray-300 dark:text-gray-300 max-w-xs">
                    @foreach ([
    '100% Better results',
    'Suspe ndisse suscipit sagittis',
    'Suspe ndisse suscipit sagittis',
] as $item)
                    <li class="flex items-center gap-3 text-sm leading-relaxed">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="none" viewBox="0 0 14 11" class="text-indigo-600 flex-shrink-0">
                            <path d="M12.091 2L5.091 9L1.909 5.818" stroke="currentColor" stroke-width="2.1875" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="pt-4">
                <a href="/contact" aria-label="Contact with us"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-gray-100 text-black font-semibold rounded-full transition duration-300 shadow-md focus:outline-none focus:ring-4 focus:ring-indigo-400">
                    Contact With Us
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" fill="none" viewBox="0 0 24 14" class="flex-shrink-0">
                        <path d="M0.888 7H22.556M22.556 7L16.857 1.222M22.556 7L16.857 12.778" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                </div>

        </div>
    </div>
</section>
