<header>
    <div class="container">
        <div class="row header-row">
            <div class="col-3 py-3">
                <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC comics logo"></a>
            </div>
            <div class="col-9 d-flex justify-content-center align-items-end">
                <nav>
                    <ul class="m-0 d-flex justify-content-center align-items-center gap-4 pt-2 " >
                        <li class=" ms-padding {{ Route::currentRouteName() === 'characters' ? 'active-element' : '' }}">
                            <a href="{{ route('characters') }}">CHARACTERS</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'comics' ? 'active-element' : '' }} ms-padding">
                            <a href="{{ route('comics') }}">COMICS</a>
                        </li>
                        <li class=" ms-padding">
                            <a href="#">MOVIES</a>
                        </li>
                        <li class=" ms-padding">
                            <a href="#">TV</a>
                        </li>
                        <li class=" ms-padding">
                            <a href="#">GAMES</a>
                        </li>
                        <li class=" ms-padding">
                            <a href="#">VIDEOS</a>
                        </li>
                        <li class=" ms-padding">
                            <a href="#">FANS</a>
                        </li>
                        <li class=" ms-padding">
                            <a href="#">NEWS</a>
                        </li>
                        <li class=" ms-padding">
                            <a href="#">SHOP</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>