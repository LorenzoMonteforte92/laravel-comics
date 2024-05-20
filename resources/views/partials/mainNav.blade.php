<section class="main-nav-section" >
    <div class="container">
        <div class="row">
            <nav class="col-12 py-4">
                <ul class="d-flex justify-content-center align-items-center" >
                    @foreach ($mainNavLinks as $links)
                        <li class="d-flex justify-content-center align-items-center">
                            <div class="d-flex justify-content-center align-items-center gap-3" >
                                <img src="{{ Vite::asset($links['img']) }}" alt="...">
                                <p class="text-center pt-3" ></p>
                            </div>
                        </li>
                    @endforeach
                </ul>   
            </nav>
        </div>
    </div>
</section>