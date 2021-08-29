<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->

    <header>

        <nav>
            {{-- Logo --}}
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
            <ul>
                {{-- Nav Links --}}
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('quiz') }}">Quiz</a></li>
            </ul>
        </nav>

        <!-- Settings Dropdown -->

        <div class="dropdown">
            <button class="dropButton">
                <div class="showUsername">{{ Auth::user()->username }}</div>
                <i id="arrow" class="fas fa-chevron-down"></i>
            </button>

            <div class="dropHiddenTrue">
                <a href="{{ route('profile') }}">
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
            </div>
        </div>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </header>


    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div>{{ Auth::user()->username }}</div>
            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <x-dropdown-link :href="route('profile')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
