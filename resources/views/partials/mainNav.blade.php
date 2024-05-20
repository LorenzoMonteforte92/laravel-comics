<section class="main-nav-section" >
    <div class="container">
        <div class="row">
            <nav class="col-12 py-4">
                <ul class="d-flex justify-content-center align-items-center" >
                    @foreach ($mainNavLinks as $links)
                        <li class="d-flex justify-content-center align-items-center">
                            <div class="d-flex justify-content-center align-items-center gap-2" >
                                <div class="d-flex justify-content-center" ><img src="{{ Vite::asset($links['img']) }}" alt="..."></div>
                                <p class="text-center pt-3" >{{$links['text']}}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>   
            </nav>
        </div>
    </div>
</section>