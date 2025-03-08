<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bounce Africa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-black text-white">
    <!-- Navigation Bar -->
    <x-header-component />

    <!-- Hero Section -->
    <div class="relative w-full h-[calc(100vh-73px)]" x-data="{ playing: true, muted: true }">
        <!-- Video Background -->
        <div class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none">
            <iframe id="youtube-player" class="w-full h-full scale-150"
                src="https://www.youtube.com/embed/Z1AMSmnkT6Q?autoplay=1&controls=0&mute=1&loop=1&playlist=Z1AMSmnkT6Q&playsinline=1"
                title="Basketball Highlights" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex items-center">
            <div class="container mx-auto px-6">
                <div class="max-w-xl">
                    <!-- Logo -->
                    <div class="flex items-center mb-10">
                        <img src="{{ asset('bounce_icon.webp') }}" alt="Bounce icon" class="h-12 mr-4">
                        <h1 class="text-5xl md:text-7xl font-bold tracking-wider uppercase">{{ config('app.name') }}
                        </h1>
                    </div>

                    <!-- Description -->
                    <p class="text-lg md:text-xl mb-10 text-gray-200">
                        A league built in collaboration with the biggest stars in women's basketball. Watch Season 1 on
                        TNT, TruTV and stream on MAX.
                    </p>

                    <!-- Buttons -->
                    <div class="flex space-x-4 mb-10">
                        <a href="#"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-full transition duration-300">SCHEDULE</a>
                        <a href="#"
                            class="bg-transparent border-2 border-white hover:bg-white hover:text-black text-white font-semibold px-8 py-3 rounded-full transition duration-300">SUBSCRIBE</a>
                    </div>

                    <!-- Social Media Icons -->
                    <div class="flex space-x-6">
                        <a href="#" class="text-white hover:text-gray-300 transition duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300 transition duration-300">
                            <i class="fab fa-threads text-2xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300 transition duration-300">
                            <i class="fab fa-tiktok text-2xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300 transition duration-300">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-300 transition duration-300">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Controls -->
        <div class="absolute bottom-6 left-6 flex space-x-6">
            <button
                @click="
                playing = !playing;
                const player = document.getElementById('youtube-player');
                const command = playing ? 'playVideo' : 'pauseVideo';
                player.contentWindow.postMessage(JSON.stringify({
                    'event': 'command',
                    'func': command,
                    'args': []
                }), '*');
            "
                class="text-white text-2xl focus:outline-none hover:text-gray-300 transition duration-300">
                <i x-show="!playing" class="fas fa-play"></i>
                <i x-show="playing" class="fas fa-pause"></i>
            </button>
            <button
                @click="
                muted = !muted;
                const player = document.getElementById('youtube-player');
                const command = muted ? 'mute' : 'unMute';
                player.contentWindow.postMessage(JSON.stringify({
                    'event': 'command',
                    'func': command,
                    'args': []
                }), '*');
            "
                class="text-white text-2xl focus:outline-none hover:text-gray-300 transition duration-300">
                <i x-show="!muted" class="fas fa-volume-up"></i>
                <i x-show="muted" class="fas fa-volume-mute"></i>
            </button>
        </div>
    </div>

    <!-- Latest News Section -->
    <div class="bg-gray-900 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">Latest News</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- News Item 1 -->
                <div
                    class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <img src="https://via.placeholder.com/400x200" alt="News 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Championship Finals Announced</h3>
                        <p class="text-gray-400">The finals schedule has been set for the upcoming championship
                            series...</p>
                        <a href="#" class="inline-block mt-4 text-blue-400 hover:text-blue-300">Read More →</a>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div
                    class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <img src="https://via.placeholder.com/400x200" alt="News 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Player of the Week</h3>
                        <p class="text-gray-400">Sarah Johnson named Player of the Week after spectacular
                            performance...</p>
                        <a href="#" class="inline-block mt-4 text-blue-400 hover:text-blue-300">Read More →</a>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div
                    class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <img src="https://via.placeholder.com/400x200" alt="News 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">New Season Schedule</h3>
                        <p class="text-gray-400">Check out the complete schedule for the upcoming season...</p>
                        <a href="#" class="inline-block mt-4 text-blue-400 hover:text-blue-300">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Teams Section -->
    <div class="bg-gray-900 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">Teams</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Team 1 -->
                <div
                    class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <img src="https://via.placeholder.com/400x200" alt="Team 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Team A</h3>
                        <p class="text-gray-400">Description of Team A...</p>
                        <a href="#" class="inline-block mt-4 text-blue-400 hover:text-blue-300">Learn More →</a>
                    </div>
                </div>
                <!-- Team 2 -->
                <div
                    class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <img src="https://via.placeholder.com/400x200" alt="Team 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Team B</h3>
                        <p class="text-gray-400">Description of Team B...</p>
                        <a href="#" class="inline-block mt-4 text-blue-400 hover:text-blue-300">Learn More →</a>
                    </div>
                </div>
                <!-- Team 3 -->
                <div
                    class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <img src="https://via.placeholder.com/400x200" alt="Team 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-3">Team C</h3>
                        <p class="text-gray-400">Description of Team C...</p>
                        <a href="#" class="inline-block mt-4 text-blue-400 hover:text-blue-300">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Upcoming Events Section -->
    <div class="bg-gray-800 py-16">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold">Upcoming Events</h2>
                <a href="#" class="text-blue-400 hover:text-blue-300 transition duration-300">View All Events
                    →</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event 1 -->
                <div
                    class="bg-gray-900 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x300" alt="Championship Game"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            MAR 15</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3 text-gray-400">
                            <i class="far fa-clock mr-2"></i><span>7:00 PM EAT</span>
                            <i class="fas fa-map-marker-alt mx-2"></i><span>Kasarani Stadium</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Championship Finals: Team A vs Team B</h3>
                        <p class="text-gray-400 mb-4">The ultimate showdown for the championship title. Don't miss this
                            epic battle!</p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">Few seats left</span>
                            <a href="#"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-semibold transition duration-300">Get
                                Tickets</a>
                        </div>
                    </div>
                </div>
                <!-- Event 2 -->
                <div
                    class="bg-gray-900 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x300" alt="All-Star Game"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            MAR 20</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3 text-gray-400">
                            <i class="far fa-clock mr-2"></i><span>6:30 PM EAT</span>
                            <i class="fas fa-map-marker-alt mx-2"></i><span>Nyayo Stadium</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">All-Star Weekend: Skills Challenge</h3>
                        <p class="text-gray-400 mb-4">Watch the league's best players showcase their skills in this
                            exciting event.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-green-500 font-semibold">Tickets Available</span>
                            <a href="#"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-semibold transition duration-300">Get
                                Tickets</a>
                        </div>
                    </div>
                </div>
                <!-- Event 3 -->
                <div
                    class="bg-gray-900 rounded-lg overflow-hidden shadow-lg hover:transform hover:scale-105 transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x300" alt="Youth Camp"
                            class="w-full h-48 object-cover">
                        <div
                            class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            MAR 25</div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3 text-gray-400">
                            <i class="far fa-clock mr-2"></i><span>9:00 AM EAT</span>
                            <i class="fas fa-map-marker-alt mx-2"></i><span>YMCA Courts</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Youth Basketball Camp</h3>
                        <p class="text-gray-400 mb-4">A three-day intensive camp for young basketball enthusiasts aged
                            12-18.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-red-500 font-semibold">Limited Spots</span>
                            <a href="#"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-semibold transition duration-300">Register
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners Section -->
    <section class="bg-gray-900 py-16" x-data="{
        currentSlide: 0,
        slides: [
            [0, 1, 2, 3, 4],
            [5, 6, 7, 8, 9]
        ],
        partners: [
            { name: 'FIBA', logo: 'fiba-logo.png' },
            { name: 'FERWABA', logo: 'ferwaba-logo.png' },
            { name: 'NIKE', logo: 'nike-logo.png' },
            { name: 'WILSON', logo: 'wilson-logo.png' },
            { name: 'JAMES', logo: 'james-logo.png' },
            { name: 'FIBA', logo: 'fiba-logo.png' },
            { name: 'FERWABA', logo: 'ferwaba-logo.png' },
            { name: 'NIKE', logo: 'nike-logo.png' },
            { name: 'WILSON', logo: 'wilson-logo.png' },
            { name: 'JAMES', logo: 'james-logo.png' }
        ],
        next() {
            this.currentSlide = this.currentSlide === this.slides.length - 1 ? 0 : this.currentSlide + 1
        },
        prev() {
            this.currentSlide = this.currentSlide === 0 ? this.slides.length - 1 : this.currentSlide - 1
        }
    }">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center">Our Partners</h2>

            <div class="relative">
                <!-- Previous Button -->
                <button @click="prev"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-6 bg-gray-800 rounded-full p-2 focus:outline-none">
                    <i class="fas fa-chevron-left text-white"></i>
                </button>

                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500"
                        :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                        <template x-for="slideGroup in slides">
                            <div class="w-full flex-shrink-0">
                                <div class="grid grid-cols-5 gap-8 items-center justify-items-center">
                                    <template x-for="index in slideGroup">
                                        <div
                                            class="group hover:scale-110 transition-transform duration-300 ease-in-out">
                                            <div
                                                class="bg-white rounded-lg p-6 h-24 w-full flex items-center justify-center">
                                                <img :src="`/partners/${partners[index].logo}`"
                                                    :alt="`${partners[index].name} Logo`" class="max-h-16 w-auto">
                                            </div>
                                            <p class="text-center mt-3 font-semibold" x-text="partners[index].name">
                                            </p>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Next Button -->
                <button @click="next"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-6 bg-gray-800 rounded-full p-2 focus:outline-none">
                    <i class="fas fa-chevron-right text-white"></i>
                </button>

                <!-- Dots -->
                <div class="flex justify-center mt-8 space-x-2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="currentSlide = index"
                            :class="{ 'bg-blue-600': currentSlide === index, 'bg-gray-600': currentSlide !== index }"
                            class="w-3 h-3 rounded-full transition-colors duration-300">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <x-footer-component />
</body>

</html>
