<!-- Services Section Start -->
<section class="service section" id="service">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Services</h2>
            </div>
        </div>
        <div class="row">
            @if (count($services) != 0)
                @foreach ($services as $item)
                    <!-- Services item -->
                    <div class="service-item padd-15">
                        <div class="service-item-inner">
                            <div class="icon">
                                <i class="{{ $item->icon_class }}"></i>
                            </div>
                            <h4>{{ $item->service_name }}</h4>
                            <p>
                                {{ $item->short_desc }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Services item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fa fa-mobile-alt"></i>
                        </div>
                        <h4>App Development</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                    </div>
                </div>
                <!-- Services item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <h4>Web Development</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                    </div>
                </div>
                <!-- Services item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fa fa-palette"></i>
                        </div>
                        <h4>UI/UX Design</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                    </div>
                </div>
                <!-- Services item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <h4>Web Design</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                    </div>
                </div>
                <!-- Services item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <h4>SEO</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                    </div>
                </div>
                <!-- Services item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h4>Promotion</h4>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                    </div>
                </div>
            @endif

        </div>
    </div>
</section>
<!-- Services Section End -->
