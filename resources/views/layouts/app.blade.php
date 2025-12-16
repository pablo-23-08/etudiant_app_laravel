<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Gestion des Étudiants')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-brand">
                <h1><i class="fas fa-graduation-cap"></i> {{ __('messages.dashboard') }}</h1>
            </div>
            
            @auth
            <div class="nav-menu">
                <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> {{ __('messages.dashboard') }}</a>
                <a href="{{ route('students.index') }}"><i class="fas fa-users"></i> {{ __('messages.students') }}</a>
                <a href="{{ route('students.create') }}"><i class="fas fa-user-plus"></i> {{ __('messages.add_student') }}</a>
            </div>
            @endauth
            
            <div class="nav-actions">
                <div class="language-switcher">
                    <form action="{{ route('change.language', ['lang' => app()->getLocale() === 'en' ? 'fr' : 'en']) }}" method="get" class="language-form">
                        <select name="lang" onchange="window.location.href='{{ url('change-language') }}/' + this.value">
                            <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>
                                🇫🇷 {{ __('messages.french') }}
                            </option>
                            <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                                🇬🇧 {{ __('messages.english') }}
                            </option>
                        </select>
                    </form>
                </div>
                
                @auth
                    <span class="user-info">
                        <i class="fas fa-user"></i> {{ auth()->user()->username }}
                    </span>
                    <a href="{{ route('logout') }}"
                    class="btn-logout"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('messages.logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
            </div>
        </nav>
    </header>
    
    <main class="container">
        @if(session('message'))
            <div class="alert alert-{{ session('message_type', 'success') }}">
                {{ session('message') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
    
    <footer>
        <p>&copy; {{ date('Y') }} Gestion des Étudiants. Tous droits réservés.</p>
    </footer>
    
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>