<!-- Blog Section Start -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Blog</h2>
            </div>
        </div>
        <div class="row">
            <div class="blog-heading padd-15">
                <h2>My Recent Blogs :</h2>
            </div>
        </div>
        <div class="row">
            @if (count($blogs) != 0)
                @foreach ($blogs as $item)
                    <!-- Blog item -->
                    <div class="blog-item padd-15">
                        <div class="blog-item-inner">
                            <div class="image">
                                <img src="{{ asset('storage/blog') }}/{{ $item->blog_image }}"
                                    alt="{{ $item->blog_name }}" />
                            </div>
                            <div class="blog-info">
                                <div class="category">
                                    <a href="#">
                                        <p><i class="fa-sharp fa-solid fa-book-open-reader"></i>
                                            {{ $about ? $about->nickname : 'MdRasen' }}</p>
                                    </a>
                                </div>
                                <div class="date">
                                    <p><i class="fa-solid fa-calendar-days"
                                            style="padding-right: 5px;"></i>{{ $item->updated_at->format('d M, Y') }}
                                    </p>
                                </div>
                            </div>
                            <a href="blog-single.html">
                                <h4>{{ $item->blog_name }}</h4>
                            </a>
                            <p>
                                {!! substr($item->blog_body, 0, 220) !!}
                            </p>
                            <a href="blog-single.html">Read More...</a>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Blog item -->
                <div class="blog-item padd-15">
                    <div class="blog-item-inner">
                        <div class="image">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-1.jpg') }}" alt="">
                        </div>
                        <div class="blog-info">
                            <div class="category">
                                <a href="#">
                                    <p><i class="fa-sharp fa-solid fa-book-open-reader"></i> Category 01</p>
                                </a>
                            </div>
                            <div class="date">
                                <p><i class="fa-solid fa-calendar-days"></i> 25 July, 1999</p>
                            </div>
                        </div>
                        <a href="blog-single.html">
                            <h4>Blog Title 01</h4>
                        </a>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                        <a href="blog-single.html">Read More...</a>
                    </div>
                </div>
                <!-- Blog item -->
                <div class="blog-item padd-15">
                    <div class="blog-item-inner">
                        <div class="image">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-2.jpg') }}" alt="">
                        </div>
                        <div class="blog-info">
                            <div class="category">
                                <a href="#">
                                    <p><i class="fa-sharp fa-solid fa-book-open-reader"></i> Category 02</p>
                                </a>
                            </div>
                            <div class="date">
                                <p><i class="fa-solid fa-calendar-days"></i> 25 July, 1999</p>
                            </div>
                        </div>
                        <a href="blog-single.html">
                            <h4>Blog Title 02</h4>
                        </a>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                        <a href="blog-single.html">Read More...</a>
                    </div>
                </div>
                <!-- Blog item -->
                <div class="blog-item padd-15">
                    <div class="blog-item-inner">
                        <div class="image">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-3.jpg') }}" alt="">
                        </div>
                        <div class="blog-info">
                            <div class="category">
                                <a href="blog-single.html">
                                    <p><i class="fa-sharp fa-solid fa-book-open-reader"></i> Category 03</p>
                                </a>
                            </div>
                            <div class="date">
                                <p><i class="fa-solid fa-calendar-days"></i> 25 July, 1999</p>
                            </div>
                        </div>
                        <a href="blog-single.html">
                            <h4>Blog Title 03</h4>
                        </a>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                        <a href="blog-single.html">Read More...</a>
                    </div>
                </div>
                <!-- Blog item -->
                <div class="blog-item padd-15">
                    <div class="blog-item-inner">
                        <div class="image">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-4.jpg') }}" alt="">
                        </div>
                        <div class="blog-info">
                            <div class="category">
                                <a href="blog-single.html">
                                    <p><i class="fa-sharp fa-solid fa-book-open-reader"></i> Category 04</p>
                                </a>
                            </div>
                            <div class="date">
                                <p><i class="fa-solid fa-calendar-days"></i> 25 July, 1999</p>
                            </div>
                        </div>
                        <a href="blog-single.html">
                            <h4>Blog Title 04</h4>
                        </a>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                        <a href="#">Read More...</a>
                    </div>
                </div>
                <!-- Blog item -->
                <div class="blog-item padd-15">
                    <div class="blog-item-inner">
                        <div class="image">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-5.jpg') }}" alt="">
                        </div>
                        <div class="blog-info">
                            <div class="category">
                                <a href="blog-single.html">
                                    <p><i class="fa-sharp fa-solid fa-book-open-reader"></i> Category 05</p>
                                </a>
                            </div>
                            <div class="date">
                                <p><i class="fa-solid fa-calendar-days"></i> 25 July, 1999</p>
                            </div>
                        </div>
                        <a href="blog-single.html">
                            <h4>Blog Title 05</h4>
                        </a>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                        <a href="blog-single.html">Read More...</a>
                    </div>
                </div>
                <!-- Blog item -->
                <div class="blog-item padd-15">
                    <div class="blog-item-inner">
                        <div class="image">
                            <img src="{{ asset('public-assets/images/portfolio/portfolio-6.jpg') }}" alt="">
                        </div>
                        <div class="blog-info">
                            <div class="category">
                                <a href="blog-single.html">
                                    <p><i class="fa-sharp fa-solid fa-book-open-reader"></i> Category 06</p>
                                </a>
                            </div>
                            <div class="date">
                                <p><i class="fa-solid fa-calendar-days"></i> 25 July, 1999</p>
                            </div>
                        </div>
                        <a href="blog-single.html">
                            <h4>Blog Title 06</h4>
                        </a>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Blanditiis pariatur consectetur doloremque.
                        </p>
                        <a href="blog-single.html">Read More...</a>
                    </div>
                </div>
            @endif
        </div>

    </div>
</section>
<!-- Blog Section End -->
