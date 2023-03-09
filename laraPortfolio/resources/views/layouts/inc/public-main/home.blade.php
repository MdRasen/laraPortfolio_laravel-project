<!-- Home Section Start -->
<section class="home active section" id="home">
    <div class="container">
        <div class="row">
            <div class="home-info padd-15">
                <h3 class="hello">
                    Hello, my name is <span class="name">{{ $about ? $about->full_name : 'Alini Mousaad' }}</span>
                </h3>
                <h3 class="my-profession">
                    I'm a <span class="typing">{{ $about ? $about->designation : 'Web Designer' }}</span>
                </h3>
                <p>
                    {!! $about
                        ? $about->short_description
                        : 'I&#39;m a web designer with extensive experience for over 10 years. My expertise is to create and design website, graphic design, and many more...' !!}
                </p>
                @if ($about->cv_file)
                    <a href="{{ asset('storage/cv_file/') }}/{{ $about->cv_file }}" class="btn" download>Download
                        CV</a>
                @else
                    <a href="{{ asset('public-assets/cv_file.pdf') }}" class="btn" download>Download
                        CV</a>
                @endif
            </div>
            <div class="home-img padd-15">
                @if ($about->image)
                    <img src="{{ asset('storage/about_image/') }}/{{ $about->image }}" alt="hero" />
                @else
                    <img src="{{ asset('public-assets/images/hero.jpg') }}" alt="hero" />
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Home Section End -->
