<div class="hero" ></div>
    <section class="position-relative hero-section">
        <div class="current-series position-absolute py-2 px-4"><h4 class="fw-bold text-white m-0" >CURRENT SERIES</h4></div>
        <div class="container py-5 d-flex flex-column">
            <div class="row justify-content-center">
                <div class="col-12 d-flex flex-wrap gap-3">
                    @foreach ($comics as $comic)
                        <div class="card ms-card" style="width: calc(100% / 6 - 1rem);">
                            <div class="ms-card-img" ><img src="{{$comic['thumb']}}" class="card-img-top" alt="..."></div>
                            <div class="card-body px-0  d-flex flex-column justify-content-between">
                                <div><p class="card-text text-white">{{strtoupper($comic['series'])}}</p></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="m-auto px-5 py-1 my-3">LOAD MORE</button>
        </div>
    </section>