<section class="bg-gray-900/95 py-20 px-6 md:px-12">
  <div class="max-w-7xl mx-auto text-center mb-12">
    <h2 class="text-4xl font-extrabold text-white mb-4">What Our Clients Say</h2>
    <p class="text-gray-400 max-w-2xl mx-auto">
      Real feedback from our satisfied clients who have experienced our expertise and dedication.
    </p>
  </div>

  <div x-data="testimonialCarousel()" x-init="init()" class="relative max-w-7xl mx-auto overflow-hidden">

    <!-- Controls - positioned absolutely on left and right, vertically centered -->
    <button @click="prev" aria-label="Previous testimonial"
      class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-100 text-black rounded-full p-3 shadow-md hover:bg-gray-200 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-1 z-20">
      &#8592;
    </button>
    <button @click="next" aria-label="Next testimonial"
      class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-100 text-black rounded-full p-3 shadow-md hover:bg-gray-200 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-1 z-20">
      &#8594;
    </button>

    <!-- Carousel Container -->
    <div class="flex transition-transform duration-500 ease-in-out"
      :style="`transform: translateX(-${currentIndex * slideWidth}px)`" x-ref="carouselContainer">
      <!-- Testimonial Cards -->
      <template x-for="(testimonial, index) in testimonials" :key="index">
        <div class="flex-shrink-0 px-4" :style="`width: ${slideWidth}px`">
          <div
            class="bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300 h-full flex flex-col justify-between">
            <p class="text-gray-300 italic mb-6" x-text="testimonial.quote"></p>
            <div class="flex items-center space-x-4 mt-auto">
              <img :src="testimonial.photo" alt="" class="w-14 h-14 rounded-full object-cover" loading="lazy" />
              <div>
                <h3 class="text-white font-semibold" x-text="testimonial.name"></h3>
                <p class="text-indigo-400 text-sm uppercase" x-text="testimonial.role"></p>
              </div>
            </div>
          </div>
        </div>
      </template>
    </div>
  </div>

  <script>
    function testimonialCarousel() {
      return {
        currentIndex: 0,
        testimonials: [
          {
            quote: "Working with this team was a game-changer. Their dedication and technical skills exceeded our expectations. Highly recommended!",
            name: "Emily Carter",
            role: "Marketing Manager",
            photo: "https://randomuser.me/api/portraits/women/65.jpg",
          },
          {
            quote: "Professional, reliable, and innovative. Their solutions helped our business scale rapidly with excellent results.",
            name: "Michael Johnson",
            role: "CEO, FinTech Co.",
            photo: "https://randomuser.me/api/portraits/men/41.jpg",
          },
          {
            quote: "Their attention to detail and creative approach is unmatched. We saw real improvement in our project timelines and quality.",
            name: "Samantha Lee",
            role: "Product Designer",
            photo: "https://randomuser.me/api/portraits/women/22.jpg",
          },
          {
            quote: "They always deliver on time and exceed expectations. Our go-to partner for all digital projects.",
            name: "David Smith",
            role: "CTO, Tech Solutions",
            photo: "https://randomuser.me/api/portraits/men/52.jpg",
          },
          {
            quote: "Amazing team with excellent communication and expertise. Highly recommend for any business.",
            name: "Anna Brown",
            role: "HR Manager",
            photo: "https://randomuser.me/api/portraits/women/44.jpg",
          }
        ],
        slideWidth: 0,
        updateWidth() {
          const containerWidth = this.$refs.carouselContainer.clientWidth;
          if (window.innerWidth >= 1024) { // 3 slides on large
            this.slideWidth = containerWidth / 3;
          } else if (window.innerWidth >= 768) { // 2 slides on medium
            this.slideWidth = containerWidth / 2;
          } else { // 1 slide on small
            this.slideWidth = containerWidth;
          }
        },
        prev() {
          if (this.currentIndex > 0) {
            this.currentIndex--;
          } else {
            this.currentIndex = this.testimonials.length - this.visibleSlides();
          }
        },
        next() {
          if (this.currentIndex < this.testimonials.length - this.visibleSlides()) {
            this.currentIndex++;
          } else {
            this.currentIndex = 0;
          }
        },
        visibleSlides() {
          if (window.innerWidth >= 1024) {
            return 3;
          } else if (window.innerWidth >= 768) {
            return 2;
          } else {
            return 1;
          }
        },
        init() {
          this.updateWidth();
          window.addEventListener('resize', () => {
            this.updateWidth();
            if (this.currentIndex > this.testimonials.length - this.visibleSlides()) {
              this.currentIndex = this.testimonials.length - this.visibleSlides();
            }
          });
        }
      }
    }
  </script>
</section>