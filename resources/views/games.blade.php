<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games - Bounce Africa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-black text-white">
    <!-- Navigation Bar -->
    <x-header-component/>

    <!-- Upcoming Games Section -->
    <section class="bg-gray-900 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">Upcoming Games</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Game Card 1 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-blue-400 font-semibold">MAR 10, 2025</span>
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm">19:30 EAT</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 1"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Nairobi Titans</span>
                        </div>
                        <div class="text-center">
                            <span class="text-2xl font-bold text-gray-400">VS</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 2"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Mombasa Warriors</span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-between items-center">
                        <span class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i>Nyayo Stadium</span>
                        <a href="#"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">Buy
                            Tickets</a>
                    </div>
                </div>

                <!-- Game Card 2 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-blue-400 font-semibold">MAR 15, 2025</span>
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm">20:00 EAT</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 1"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Kisumu Lakers</span>
                        </div>
                        <div class="text-center">
                            <span class="text-2xl font-bold text-gray-400">VS</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 2"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Eldoret Eagles</span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-between items-center">
                        <span class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i>Kisumu Arena</span>
                        <a href="#"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">Buy
                            Tickets</a>
                    </div>
                </div>

                <!-- Game Card 3 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-blue-400 font-semibold">MAR 20, 2025</span>
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm">19:00 EAT</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 1"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Nakuru Bulls</span>
                        </div>
                        <div class="text-center">
                            <span class="text-2xl font-bold text-gray-400">VS</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 2"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Nairobi Titans</span>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-between items-center">
                        <span class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i>Nakuru Stadium</span>
                        <a href="#"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">Buy
                            Tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Games Section -->
    <section class="bg-gray-800 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8">Past Games</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Past Game Card 1 -->
                <div class="bg-gray-900 rounded-lg p-6 shadow-lg">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-400 font-semibold">MAR 5, 2025</span>
                        <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">Final</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 1"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Mombasa Warriors</span>
                            <span class="text-2xl font-bold text-blue-400">89</span>
                        </div>
                        <div class="text-center">
                            <span class="text-xl font-bold text-gray-400">-</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 2"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Eldoret Eagles</span>
                            <span class="text-2xl font-bold text-gray-400">82</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center justify-center">
                            <i class="fas fa-play-circle mr-2"></i>Watch Highlights
                        </a>
                    </div>
                </div>

                <!-- Past Game Card 2 -->
                <div class="bg-gray-900 rounded-lg p-6 shadow-lg">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-400 font-semibold">MAR 3, 2025</span>
                        <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">Final</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 1"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Kisumu Lakers</span>
                            <span class="text-2xl font-bold text-blue-400">95</span>
                        </div>
                        <div class="text-center">
                            <span class="text-xl font-bold text-gray-400">-</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 2"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Nakuru Bulls</span>
                            <span class="text-2xl font-bold text-gray-400">88</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center justify-center">
                            <i class="fas fa-play-circle mr-2"></i>Watch Highlights
                        </a>
                    </div>
                </div>

                <!-- Past Game Card 3 -->
                <div class="bg-gray-900 rounded-lg p-6 shadow-lg">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-400 font-semibold">MAR 1, 2025</span>
                        <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">Final</span>
                    </div>
                    <div class="flex items-center justify-between space-x-4">
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 1"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Nairobi Titans</span>
                            <span class="text-2xl font-bold text-blue-400">102</span>
                        </div>
                        <div class="text-center">
                            <span class="text-xl font-bold text-gray-400">-</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <img src="https://via.placeholder.com/64" alt="Team 2"
                                class="w-16 h-16 rounded-full mb-2">
                            <span class="font-semibold text-center">Kisumu Lakers</span>
                            <span class="text-2xl font-bold text-gray-400">97</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="#" class="text-blue-400 hover:text-blue-300 flex items-center justify-center">
                            <i class="fas fa-play-circle mr-2"></i>Watch Highlights
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="#"
                    class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg transition duration-300">
                    View All Games
                </a>
            </div>
        </div>
    </section>

    <x-footer-component/>
</body>

</html>
