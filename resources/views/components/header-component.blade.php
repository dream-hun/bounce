<div>
    <nav x-data="{ mobileMenuOpen: false }" class="bg-gray-900 py-4 px-6 border-b border-gray-800">
        <!-- Desktop Navigation -->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('bounce_dark.webp') }}" alt="Bounce Logo" class="h-12">
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
                <a href="{{route('welcome')}}" class="text-white hover:text-gray-300 font-semibold">HOME</a>
                <a href="{{route('games')}}" class="text-white hover:text-gray-300 font-semibold">GAMES</a>
                <a href="{{route('blog')}}" class="text-white hover:text-gray-300 font-semibold">NEWS</a>
                <a href="{{route('teams')}}" class="text-white hover:text-gray-300 font-semibold">TEAMS</a>


            </div>

            <!-- Desktop Right Menu -->
            <div class="hidden lg:flex items-center space-x-6">

                <a href="#" class="text-white hover:text-gray-300 font-semibold">3-ON-3</a>
                <a href="https://bounceafrica.hustlesasa.shop" class="text-white hover:text-gray-300 font-semibold">SHOP</a>
                <a href="{{ route('about') }}" class="text-white hover:text-gray-300 font-semibold">ABOUT US</a>
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
                <a href="{{route('welcome')}}" class="text-white hover:text-gray-300 font-semibold">HOME</a>
                <a href="{{route('games')}}" class="text-white hover:text-gray-300 font-semibold">GAMES</a>
                <a href="{{route('blog')}}" class="text-white hover:text-gray-300 font-semibold">NEWS</a>
                <a href="{{ route('teams') }}" class="text-white hover:text-gray-300 font-semibold">TEAMS</a>


                <a href="#" class="text-white hover:text-gray-300 font-semibold">3-ON-3</a>
                <a href="https://bounceafrica.hustlesasa.shop/" class="text-white hover:text-gray-300 font-semibold">SHOP</a>
                <a href="{{ route('about') }}" class="text-white hover:text-gray-300 font-semibold">ABOUT US</a>
            </div>
        </div>
    </nav>
</div>
