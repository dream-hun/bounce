<div>
    <nav x-data="{ mobileMenuOpen: false }" class="bg-black py-4 px-6 border-b border-gray-800">
        <!-- Desktop Navigation -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{route('welcome')}}" class="flex items-center">
                <img src="{{ asset('logo.webp') }}" alt="Bounce Logo" class="h-14 w-auto">
            </a>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-white hover:text-gray-300">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="{{route('welcome')}}" class="text-white hover:text-orange-400 capitalize">Home</a>
                <a href="{{route('games')}}" class="text-white hover:text-orange-400 capitalize">Games</a>
                <a href="{{route('blog')}}" class="text-white hover:text-orange-400 capitalize">News</a>
                <a href="{{route('teams')}}" class="text-white hover:text-orange-400 capitalize">Teams</a>


            </div>

            <!-- Desktop Right Menu -->
            <div class="hidden lg:flex items-center space-x-6">

                <a href="#" class="text-white hover:text-orange-400 capitalize">3-on-3</a>
                <a href="https://bounceafrica.hustlesasa.shop" class="text-white hover:text-gray-300 capitalize">Shop</a>
                <a href="{{ route('about') }}" class="text-white hover:text-orange-400 capitalize">About us</a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2" class="lg:hidden mt-4">
            <div class="flex flex-col space-y-4">
                <a href="{{route('welcome')}}" class="text-white hover:text-orange-400 capitalize">Home</a>
                <a href="{{route('games')}}" class="text-white hover:text-orange-400 capitalize">Games</a>
                <a href="{{route('blog')}}" class="text-white hover:text-orange-400 capitalize">News</a>
                <a href="{{ route('teams') }}" class="text-white hover:text-orange-400 capitalize">Teams</a>


                <a href="#" class="text-white hover:text-gray-300 font-semibold">3-on-3</a>
                <a href="https://bounceafrica.hustlesasa.shop/" class="text-white hover:text-orange-400 capitalize">Shop</a>
                <a href="{{ route('about') }}" class="text-white hover:text-orange-400 capitalize">About us</a>
            </div>
        </div>
    </nav>
</div>
