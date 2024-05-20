<section class="footer-section">
    <div class="container">
        <div class="row pt-5">
            <div class="col-2">
                <div>
                    <h4>DC COMICS</h4>
                    <ul>
                        @foreach ($dcComicsLinks as $link)
                            <li>
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h4>SHOP</h4>
                    <ul>
                        @foreach ($dcLinks as $link)
                            <li>
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <h4>DC</h4>
                    <ul>
                        @foreach ($siteLinks as $link)
                            <li>
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <h4>SITES</h4>
                    <ul>
                        @foreach ($shopLinks as $link)
                            <li>
                                <a href="#">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>