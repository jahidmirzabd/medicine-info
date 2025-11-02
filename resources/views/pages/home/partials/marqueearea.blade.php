<style>
    @keyframes marqueeScroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        display: flex;
        animation: marqueeScroll 10s linear infinite;
        white-space: nowrap;
        will-change: transform;
    }

    .star-icon {
        display: inline-block;
        width: 1.5rem;
        height: 1.5rem;
        margin-right: 0.5rem;
        flex-shrink: 0;
        color: #f59e0b;
        /* Accent Yellow */
    }
</style>

<section class="py-10 px-6 md:px-12 bg-gray-900/95 overflow-hidden">
    <div class="animate-marquee">
        <!-- Group 1 -->
        <div class="flex space-x-12 flex-shrink-0 min-w-[50%]" aria-hidden="false">
            <h6
                class="text-3xl md:text-5xl font-extrabold p-4 md:p-6 text-white uppercase tracking-widest flex items-center">
                <a href="#"
                    class="flex items-center hover:text-yellow-400 transition duration-300 rounded-md select-none">
                    <svg class="star-icon" fill="currentColor" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.9057 0H21.0614V46H24.9057V0Z" />
                        <path d="M46 21.0614H0V24.9057H46V21.0614Z" />
                        <path d="M37.9042 40.6064L40.6225 37.8881L8.0959 5.3615L5.3776 8.0798L37.9042 40.6064Z" />
                        <path d="M5.3844 37.9043L8.1027 40.6226L40.6293 8.09603L37.911 5.37774L5.3844 37.9043Z" />
                    </svg>
                    Marketing
                </a>
            </h6>
            <h6
                class="text-3xl md:text-5xl font-extrabold p-4 md:p-6 text-white uppercase tracking-widest flex items-center">
                <a href="#"
                    class="flex items-center hover:text-yellow-400 transition duration-300 rounded-md select-none">
                    <svg class="star-icon" fill="currentColor" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.9057 0H21.0614V46H24.9057V0Z" />
                        <path d="M46 21.0614H0V24.9057H46V21.0614Z" />
                        <path d="M37.9042 40.6064L40.6225 37.8881L8.0959 5.3615L5.3776 8.0798L37.9042 40.6064Z" />
                        <path d="M5.3844 37.9043L8.1027 40.6226L40.6293 8.09603L37.911 5.37774L5.3844 37.9043Z" />
                    </svg>
                    Finance Advisor
                </a>
            </h6>
            <h6
                class="text-3xl md:text-5xl font-extrabold p-4 md:p-6 text-white uppercase tracking-widest flex items-center">
                <a href="#"
                    class="flex items-center hover:text-yellow-400 transition duration-300 rounded-md select-none">
                    <svg class="star-icon" fill="currentColor" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.9057 0H21.0614V46H24.9057V0Z" />
                        <path d="M46 21.0614H0V24.9057H46V21.0614Z" />
                        <path d="M37.9042 40.6064L40.6225 37.8881L8.0959 5.3615L5.3776 8.0798L37.9042 40.6064Z" />
                        <path d="M5.3844 37.9043L8.1027 40.6226L40.6293 8.09603L37.911 5.37774L5.3844 37.9043Z" />
                    </svg>
                    Investment
                </a>
            </h6>
            <h6
                class="text-3xl md:text-5xl font-extrabold p-4 md:p-6 text-white uppercase tracking-widest flex items-center">
                <a href="#"
                    class="flex items-center hover:text-yellow-400 transition duration-300 rounded-md select-none">
                    <svg class="star-icon" fill="currentColor" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.9057 0H21.0614V46H24.9057V0Z" />
                        <path d="M46 21.0614H0V24.9057H46V21.0614Z" />
                        <path d="M37.9042 40.6064L40.6225 37.8881L8.0959 5.3615L5.3776 8.0798L37.9042 40.6064Z" />
                        <path d="M5.3844 37.9043L8.1027 40.6226L40.6293 8.09603L37.911 5.37774L5.3844 37.9043Z" />
                    </svg>
                    Target
                </a>
            </h6>
        </div>

        <!-- Group 2 (Duplicate for smooth loop) -->
        <div class="flex space-x-12 flex-shrink-0 min-w-[50%]" aria-hidden="true">
            <!-- Duplicate same items -->
            <h6
                class="text-3xl md:text-5xl font-extrabold p-4 md:p-6 text-white uppercase tracking-widest flex items-center">
                <a href="#"
                    class="flex items-center hover:text-yellow-400 transition duration-300 rounded-md select-none">
                    <svg class="star-icon" fill="currentColor" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.9057 0H21.0614V46H24.9057V0Z" />
                        <path d="M46 21.0614H0V24.9057H46V21.0614Z" />
                        <path d="M37.9042 40.6064L40.6225 37.8881L8.0959 5.3615L5.3776 8.0798L37.9042 40.6064Z" />
                        <path d="M5.3844 37.9043L8.1027 40.6226L40.6293 8.09603L37.911 5.37774L5.3844 37.9043Z" />
                    </svg>
                    Marketing
                </a>
            </h6>
            <h6
                class="text-3xl md:text-5xl font-extrabold p-4 md:p-6 text-white uppercase tracking-widest flex items-center">
                <a href="#"
                    class="flex items-center hover:text-yellow-400 transition duration-300 rounded-md select-none">
                    <svg class="star-icon" fill="currentColor" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.9057 0H21.0614V46H24.9057V0Z" />
                        <path d="M46 21.0614H0V24.9057H46V21.0614Z" />
                        <path d="M37.9042 40.6064L40.6225 37.8881L8.0959 5.3615L5.3776 8.0798L37.9042 40.6064Z" />
                        <path d="M5.3844 37.9043L8.1027 40.6226L40.6293 8.09603L37.911 5.37774L5.3844 37.9043Z" />
                    </svg>
                    Finance Advisor
                </a>
            </h6>
            <h6
                class="text-3xl md:text-5xl font-extrabold p-4 md:p-6 text-white uppercase tracking-widest flex items-center">
                <a href="#"
                    class="flex items-center hover:text-yellow-400 transition duration-300 rounded-md select-none">
                    <svg class="star-icon" fill="currentColor" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.9057 0H21.0614V46H24.9057V0Z" />
                        <path d="M46 21.0614H0V24.9057H46V21.0614Z" />
                        <path d="M37.9042 40.6064L40.6225 37.8881L8.0959 5.3615L5.3776 8.0798L37.9042 40.6064Z" />
                        <path d="M5.3844 37.9043L8.1027 40.6226L40.6293 8.09603L37.911 5.37774L5.3844 37.9043Z" />
                    </svg>
                    Investment
                </a>
            </h6>
            <h6
                class="text-3xl md:text-5xl font-extrabold p-4 md:p-6 text-white uppercase tracking-widest flex items-center">
                <a href="#"
                    class="flex items-center hover:text-yellow-400 transition duration-300 rounded-md select-none">
                    <svg class="star-icon" fill="currentColor" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.9057 0H21.0614V46H24.9057V0Z" />
                        <path d="M46 21.0614H0V24.9057H46V21.0614Z" />
                        <path d="M37.9042 40.6064L40.6225 37.8881L8.0959 5.3615L5.3776 8.0798L37.9042 40.6064Z" />
                        <path d="M5.3844 37.9043L8.1027 40.6226L40.6293 8.09603L37.911 5.37774L5.3844 37.9043Z" />
                    </svg>
                    Target
                </a>
            </h6>
        </div>
    </div>
</section>