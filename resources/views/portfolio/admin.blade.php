@extends('layouts.portfolio')

@section('css')
    .portfolio-header {
        color: #421C26;
        background-color: rgba(246,223,221,.8);
        box-shadow:  0 4px 4px 0 #662B3A;
        position: fixed;
        z-index: 2;
    }

    .portfolio-navbar {
        height: 56px;
    }

    .portfolio-nav-link {
        color: rgba(66,28,38,.5)!important;
    }

    .portfolio-nav-link:hover {
        color: rgba(66,28,38,1)!important;
    }

    .portfolio-dropdown-item, .portfolio-navbar-brand {
        color: #421C26!important;
    }

    .portfolio-navbar-toggler {
        color: #421C26!important;
        border-color: rgba(66,28,38,.0)!important;
    }

    .navbar-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(66,28,38,.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")!important;
    }
@endsection

@section('navbar')
    <div id="portfolioHeader" class="portfolio-header container-fluid mb-1">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand portfolio-navbar-brand" href="{{ url('/myportfolio') }}">
                    MyPortfolio
                </a>
                <button class="navbar-toggler portfolio-navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link portfolio-nav-link" href="#">
                                <font-awesome-icon icon="user" class="fa-icon user"></font-awesome-icon>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link portfolio-nav-link" href="">
                                <font-awesome-icon icon="lightbulb" class="fa-icon lightbulb"></font-awesome-icon>
                                Skills
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link portfolio-nav-link" href="">
                                <font-awesome-icon icon="suitcase" class="fa-icon suitcase"></font-awesome-icon>
                                Works
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link portfolio-nav-link" href="">
                                <font-awesome-icon icon="envelope" class="fa-icon envelope"></font-awesome-icon>
                                Contact
                            </a>
                        </li>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto portfolio-header-right-content">
                                <!-- Authentication Links -->
                                @auth
                                    <a id="navbarDropdown" class="nav-link portfolio-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <li class="nav-item dropdown">
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item portfolio-dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>

                                        </div>
                                    </li>
                                @endauth
                            </ul>

                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('content')
    <editor-content></editor-content>
@endsection
