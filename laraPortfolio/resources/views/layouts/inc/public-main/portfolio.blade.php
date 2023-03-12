<!-- Portfolio Section Start -->
<section class="portfolio section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="row">
            <div class="portfolio-heading padd-15">
                <h2>My Last Projects :</h2>
            </div>
        </div>
        <div class="row">
            @if (count($portfolios) != 0)
                @foreach ($portfolios as $item)
                    <!-- Portfolio item -->
                    <div class="portfolio-item padd-15">
                        <div class="portfolio-item-innner shadow-dark">
                            <div class="portfolio-img">
                                <img src="{{ asset('storage/portfolio') }}/{{ $item->portfolio_image }}"
                                    alt="{{ $item->portfolio_name }}" />
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Portfolio item -->
                <div class="portfolio-item padd-15">
                    <div class="portfolio-item-innner shadow-dark">
                        <div class="portfolio-img">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-1.jpg') }}"
                                alt="portfolio-1" />
                        </div>
                    </div>
                </div>
                <!-- Portfolio item -->
                <div class="portfolio-item padd-15">
                    <div class="portfolio-item-innner shadow-dark">
                        <div class="portfolio-img">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-2.jpg') }}"
                                alt="portfolio-2" />
                        </div>
                    </div>
                </div>
                <!-- Portfolio item -->
                <div class="portfolio-item padd-15">
                    <div class="portfolio-item-innner shadow-dark">
                        <div class="portfolio-img">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-3.jpg') }}"
                                alt="portfolio-3" />
                        </div>
                    </div>
                </div>
                <!-- Portfolio item -->
                <div class="portfolio-item padd-15">
                    <div class="portfolio-item-innner shadow-dark">
                        <div class="portfolio-img">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-4.jpg') }}"
                                alt="portfolio-4" />
                        </div>
                    </div>
                </div>
                <!-- Portfolio item -->
                <div class="portfolio-item padd-15">
                    <div class="portfolio-item-innner shadow-dark">
                        <div class="portfolio-img">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-5.jpg') }}"
                                alt="portfolio-5" />
                        </div>
                    </div>
                </div>
                <!-- Portfolio item -->
                <div class="portfolio-item padd-15">
                    <div class="portfolio-item-innner shadow-dark">
                        <div class="portfolio-img">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-6.jpg') }}"
                                alt="portfolio-6" />
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Portfolio Section End -->
