<div>
    <footer class="bg-gray-900 border-t border-gray-800">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Brand Section -->
                <div class="space-y-4">
                    <img src="{{ asset('bounce_dark.webp') }}" alt="Bounce Logo" class="h-12">
                    <p class="text-gray-400 mt-4">Elevating African basketball to new heights. Join us in celebrating the
                        spirit of the game.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-threads text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-tiktok text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Games Schedule</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Teams</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">News</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Shop</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-gray-400 mt-1"></i>
                            <span class="text-gray-400">123 Basketball Avenue<br>Kigali, Rwanda</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-gray-400"></i>
                            <span class="text-gray-400">+250 123 456 789</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-gray-400"></i>
                            <span class="text-gray-400">info@bounce.africa</span>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-4">Subscribe to get the latest news and updates.</p>
                    <form class="space-y-3">
                        <div class="flex flex-col space-y-2">
                            <input type="email" placeholder="Your email address"
                                class="bg-gray-800 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800 py-6">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="text-gray-400 text-sm">
                        © {{ date('Y') }} Bounce Africa. All rights reserved.
                    </div>
                    <div class="flex space-x-6">
                        <a href="#"
                            class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Privacy
                            Policy</a>
                        <a href="#"
                            class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Terms of
                            Service</a>
                        <a href="#"
                            class="text-gray-400 hover:text-white text-sm transition-colors duration-300">Cookie
                            Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
