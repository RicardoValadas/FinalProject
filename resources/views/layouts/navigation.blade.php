<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <header>
        <nav>
            {{-- Logo --}}
            <a href="{{ route('home') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt=""></a>
            <ul class="desktop">
                {{-- Nav Links desktop --}}
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

        <div class="username">{{ Auth::user()->username }}</div>
        <!-- Responsive Navigation Menu -->
        <div class="dropdownRes">

            <button class="dropButtonRes">
                <i id="menu" class="fas fa-bars"></i>
            </button>
            <nav class="contentDropdownLayoutRes">

                <div class="contentDropdownLinksRes">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('contact') }}">Contact</a>
                    <a href="{{ route('quiz') }}">Quiz</a>
                    <a href="{{ route('profile') }}">Profile</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </nav>
        </div>
    </header>
