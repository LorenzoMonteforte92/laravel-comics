<header>
    <div class="container">
        <div class="row header-row">
            <div class="col-3 py-3">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC comics logo">
            </div>
            <div class="col-9 d-flex justify-content-center align-items-end">
                <nav>
                    <ul class="m-0 d-flex justify-content-center align-items-center gap-4 pt-2 " >
                        @foreach ($navLinks as $link)
                            <li class="active-element ms-padding">
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>