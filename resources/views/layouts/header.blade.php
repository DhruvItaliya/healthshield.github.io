<style>
    nav {
        background-color: #151414;
    }

    .logo {
        width: 218.25px;
        height: 40.95px;
    }

    html::-webkit-scrollbar {
        display: none;
    }

    html {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    body {
        padding-top: 55px;
        font-family: Arial, sans-serif;
    }
</style>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container"><a href="{{ url('/') }}"><img class="logo" src="{{ url('layouts_css_js/logo.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact-us">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('policy') ? 'active' : '' }}"
                        href="{{ url('/policy') }}">Policy</a>
                </li>
                @if (session('agent_logged_in'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('policy_registration') ? 'active' : '' }}"
                            href="{{ url('/policy_registration') }}">Policy Registration</a>
                    </li>
                @endif
                @if (session('client_logged_in'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('policy/policy_data') ? 'active' : '' }}"
                            href="{{ url('/policy/policy_data') }}">Policies Data</a>
                    </li>
                @endif
                @if (session('agent_logged_in'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('policy/registered_policy') ? 'active' : '' }}" href="{{url('policy/registered_policy')}}">Registered Policies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('agent/registered_user') ? 'active' : '' }}" href="{{url('agent/registered-user')}}">Registered User</a>
                    </li>
                @endif
                @if (!(session('client_logged_in') || session('agent_logged_in')))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                @endif
                @if (session('client_logged_in') || session('agent_logged_in'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                    </li>
                @endif
            </ul>
            <ul class="navbar-nav ms-lg-auto">
                @if (session('client_logged_in'))
                    <li class="nav-item d-flex">
                        <a style="display: flex; justify-content: center;" href="{{ url('/user-profile') }}">
                            <img src="https://media.geeksforgeeks.org/img-practice/user_web-1598433228.svg"
                                alt="Profile Button">
                        </a>
                    </li>
                @endif
                @if (session('agent_logged_in'))
                    <li class="nav-item d-flex">
                        <a style="display: flex; justify-content: center;" href="{{ url('/agent-profile') }}">
                            <img src="https://media.geeksforgeeks.org/img-practice/user_web-1598433228.svg"
                                alt="Profile Button">
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
