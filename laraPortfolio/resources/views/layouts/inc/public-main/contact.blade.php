<!-- Contact Section Start -->
<section class="contact section" id="contact">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Contact Me</h2>
            </div>
        </div>
        <h3 class="contact-title padd-15">Do You Have Any Questions?</h3>
        <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICE</h4>
        <div class="row">
            <!-- Contact info item-->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>Call Us On</h4>
                <p>+880 {{ $about ? $about->phone : '1630406235' }}</p>
            </div>
            <!-- Contact info item-->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                <h4>Office</h4>
                <p>{{ $about ? $about->city : 'Dhaka, Bangladesh' }}</p>
            </div>
            <!-- Contact info item-->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-envelope"></i></div>
                <h4>Email</h4>
                <p>{{ $about ? $about->email : 'aamin.aiub@gmail.com' }}</p>
            </div>
            <!-- Contact info item-->
            <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-globe-europe"></i></div>
                <h4>Website</h4>
                <p>{{ $about ? $about->website_link : 'www.aamin.com' }}</p>
            </div>
        </div>
        <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
        <h4 class="contact-sub-title padd-15">
            I'M VERY RESPONSIVE TO MESSAGES
        </h4>
        <!-- Contact form -->
        <div class="row">
            <div class="contact-form padd-15">
                <form action="{{ route('public.index') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-item col-6 padd-15">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="Name" />
                                <p class="padd-15" style="color: var(--skin-color); text-align:end">
                                    @error('name')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="form-item col-6 padd-15">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="Email" />
                                <p class="padd-15" style="color:var(--skin-color); text-align:end">
                                    @error('email')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item col-12 padd-15">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" value="{{ old('subject') }}"
                                    placeholder="Subject" />
                                <p class="padd-15" style="color:var(--skin-color); text-align:end">
                                    @error('subject')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item col-12 padd-15">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message">{{ old('message') }}</textarea>
                                <p class="padd-15" style="color:var(--skin-color); text-align:end">
                                    @error('message')
                                        *{{ $message }}
                                    @enderror
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-item col-12 padd-15">
                            <div class="form-group">
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
