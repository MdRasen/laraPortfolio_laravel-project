<!-- About Section Start -->
<section class="about section" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="about-text padd-15">
                        <h3>I'm {{ $about ? $about->full_name : 'Md Al Amin' }} and
                            <span>{{ $about ? $about->designation : 'Web Designer' }}</span>
                        </h3>
                        <p>
                            {!! $about
                                ? $about->short_description
                                : 'I&#39;m a web designer with extensive experience for over 10 years. My expertise is to create and design website, graphic design, and many more...' !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="personal-info padd-15">
                        <div class="row">
                            <div class="info-item padd-15">
                                <p>Birthday :
                                    <span>{{ $about ? $about->birthday : '25 July, 1999' }}</span>
                                </p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Age : <span>{{ $about ? $about->age : '23' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Website : <span>{{ $about ? $about->website_link : 'www.domain.com' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Email : <span>{{ $about ? $about->email : 'aamin.hossen99@gmail.com' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Degree : <span>{{ $about ? $about->degree : 'BSc CSE' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Phone : <span>+880 {{ $about ? $about->phone : '1234567891' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>City : <span>{{ $about ? $about->city : 'Dhaka, Bangladesh' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Freelance : <span>{{ $about ? $about->freelance : 'N/A' }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="buttons padd-15">
                                @if ($about->cv_file)
                                    <a href="{{ asset('storage/cv_file/') }}/{{ $about->cv_file }}" class="btn"
                                        download>Download
                                        CV</a>
                                @else
                                    <a href="{{ asset('public-assets/cv_file.pdf') }}" class="btn" download>Download
                                        CV</a>
                                @endif
                                <a href="#contact" class="btn hire-me">Hire Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="skills padd-15">
                        <div class="row">
                            @if (count($skills) != 0)
                                @foreach ($skills as $item)
                                    <div class="skills-item padd-15">
                                        <h5>{{ $item->skill_name }}</h5>
                                        <div class="progress">
                                            <div class="progress-in" style="width: {{ $item->progress }}%"></div>
                                            <div class="skill-percent">{{ $item->progress }}%</div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="skills-item padd-15">
                                    <h5>HTML</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 95%"></div>
                                        <div class="skill-percent">95%</div>
                                    </div>
                                </div>
                                <div class="skills-item padd-15">
                                    <h5>CSS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 75%"></div>
                                        <div class="skill-percent">75%</div>
                                    </div>
                                </div>
                                <div class="skills-item padd-15">
                                    <h5>JS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 65%"></div>
                                        <div class="skill-percent">65%</div>
                                    </div>
                                </div>
                                <div class="skills-item padd-15">
                                    <h5>PHP</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 80%"></div>
                                        <div class="skill-percent">80%</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="education padd-15">
                        <h3 class="title">Education</h3>
                        <div class="row">
                            <div class="timeline-box padd-15">
                                <div class="timeline shadow-dark">
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                        </h3>
                                        <h4 class="timeline-title">
                                            Master in Computer Science
                                        </h4>
                                        <p class="timeline-text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Culpa eius sit praesentium
                                            labore perspiciatis deleniti et nobis alias quas
                                            nulla.
                                        </p>
                                    </div>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                        </h3>
                                        <h4 class="timeline-title">
                                            Master in Computer Science
                                        </h4>
                                        <p class="timeline-text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Culpa eius sit praesentium
                                            labore perspiciatis deleniti et nobis alias quas
                                            nulla.
                                        </p>
                                    </div>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                        </h3>
                                        <h4 class="timeline-title">
                                            Master in Computer Science
                                        </h4>
                                        <p class="timeline-text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Culpa eius sit praesentium
                                            labore perspiciatis deleniti et nobis alias quas
                                            nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience padd-15">
                        <h3 class="title">Experience</h3>
                        <div class="row">
                            <div class="timeline-box padd-15">
                                <div class="timeline shadow-dark">
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                        </h3>
                                        <h4 class="timeline-title">
                                            Master in Computer Science
                                        </h4>
                                        <p class="timeline-text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Culpa eius sit praesentium
                                            labore perspiciatis deleniti et nobis alias quas
                                            nulla.
                                        </p>
                                    </div>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                        </h3>
                                        <h4 class="timeline-title">
                                            Master in Computer Science
                                        </h4>
                                        <p class="timeline-text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Culpa eius sit praesentium
                                            labore perspiciatis deleniti et nobis alias quas
                                            nulla.
                                        </p>
                                    </div>
                                    <!-- Timeline item -->
                                    <div class="timeline-item">
                                        <div class="circle-dot"></div>
                                        <h3 class="timeline-date">
                                            <i class="fa fa-calendar"></i> 2013 - 2015
                                        </h3>
                                        <h4 class="timeline-title">
                                            Master in Computer Science
                                        </h4>
                                        <p class="timeline-text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Culpa eius sit praesentium
                                            labore perspiciatis deleniti et nobis alias quas
                                            nulla.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
