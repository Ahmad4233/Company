@extends('layouts.app')

@section('content')
<!-- Modern Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="hero-content text-center">
                    <!-- Badge -->
                    <div class="hero-badge">
                        <i class="fas fa-star me-2"></i>A trusted Digital agency
                    </div>

                    <!-- Main Title -->
                    <h1 class="hero-title">WELCOME TO CREATIVE<br>DIGITAL AGENCY</h1>

                    <!-- Description -->
                    <p class="hero-description mx-auto">
                        Transform your ideas into reality with our expert software development services.<br>
                        From concept to deployment, we deliver custom solutions that meet your unique business needs.
                    </p>

                    <!-- Buttons -->
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="#services" class="btn btn-hero-primary">
                            <i class="fas fa-briefcase me-2"></i>Our Services
                        </a>
                        <a href="#team" class="btn btn-hero-outline">
                            <i class="fas fa-users me-2"></i>Meet Our Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Two Column Section -->
<section class="modern-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column - Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="modern-content">
                    <!-- Special Heading -->
                    <h2 class="special-heading">
                        What's So Special<br>
                        <span class="gradient-text">About Our Agency?</span>
                    </h2>

                    <!-- Description -->
                    <p class="modern-description">
                        Data transfer capacity has generally been inconsistent dispersed around the world, with expanding focus in the advanced age. Generally just 10 nations have facilitated 70-75% of the worldwide telecom limit. Dispersed around the world, with expanding focus in the advanced age. Generally just 10 nations have facilitated 70-75%.
                    </p>

                    <!-- Features List -->
                    <div class="features-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div class="feature-text">
                                <h4>We Can Save Your Money</h4>
                                <p>Cost-effective solutions without compromising quality</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="feature-text">
                                <h4>After Sales Support</h4>
                                <p>24/7 support to ensure your business runs smoothly</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Clients Focused</h4>
                                <p>Your success is our top priority</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Image -->
            <div class="col-lg-6">
                <div class="modern-image-section">
                    <!-- Main Image -->
                    <div class="image-container">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Creative Agency" class="main-image">

                        <!-- Popup About Div -->
                        <div class="about-popup">
                            <h3>About Us</h3>
                            <p>Leading digital agency crafting exceptional experiences since 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Services Section -->
<!-- Modern Services Section -->
<!-- Modern Services Section -->
<!-- Modern Services Section -->
<section id="services" class="modern-services">
    <div class="container">
        <!-- Services Header -->
        <div class="services-header">
            <div class="services-subtitle">
                <i class="fas fa-rocket me-2"></i>WHAT WE OFFER
            </div>
            <h2 class="services-main-title">
                Our <span class="gradient-text">Premium</span> Services
            </h2>
            <p class="services-description">
                We deliver cutting-edge solutions that drive your business forward with innovation and excellence.
            </p>
        </div>

        <!-- Services Grid - Dynamic -->
        <div class="services-grid">
            <div class="row">
                @if(isset($services) && $services->count() > 0)
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card-team">
                            <div class="service-image">
                                <img src="{{ $service->image }}" alt="{{ $service->title }}" class="service-img">
                                <div class="service-stats-overlay">
                                    {{-- Stats agar chahiye to baad mein add kar sakte hain --}}
                                </div>
                                <button class="service-action-btn">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <h3 class="service-title">{{ $service->title }}</h3>
                                <p class="service-role">{{ $service->subtitle }}</p>
                                <p class="service-description">
                                    {{ $service->description }}
                                </p>
                                <div class="service-features">
                                    @if($service->features)
                                        @foreach($service->features as $feature)
                                            <span class="feature">{{ $feature }}</span>
                                        @endforeach
                                    @endif
                                </div>
                                <a href="{{ $service->button_link }}" class="service-cta-btn">
                                    <span>{{ $service->button_text }}</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <!-- Fallback static content agar services nahi hain -->
                    <div class="col-12 text-center">
                        <p>Services coming soon...</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Stats Section -->
<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            @foreach($stats as $stat)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="{{ $stat->icon }}"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number" data-count="{{ $stat->value }}">0</h3>
                        <p class="stat-label">{{ $stat->title }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- JavaScript for Counter Animation -->

<!-- Modern Team Section -->
<!-- Modern Team Section -->
<section id="team" class="team-section">
    <div class="container">
        <!-- Team Header -->
        <div class="team-header">
            <div class="team-subtitle">
                <i class="fas fa-users me-2"></i>MEET OUR EXPERTS
            </div>
            <h2 class="team-main-title">
                Our <span class="gradient-text">Creative</span> Team
            </h2>
            <p class="team-description">
                Meet the talented professionals behind our success. Our team is dedicated to delivering exceptional results.
            </p>
        </div>



        <!-- Team Grid - Dynamic -->
        <div class="team-grid">
            <div class="row">
                @foreach($teamMembers as $member)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-card">
                        <div class="team-image">
                            <!-- YEH LINE CHANGE KARO -->
                            <img src="{{ $member->image }}" alt="{{ $member->name }}" class="member-image">
                            <div class="team-social">
                                @if($member->facebook)
                                <a href="{{ $member->facebook }}" class="social-link" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                @endif
                                @if($member->twitter)
                                <a href="{{ $member->twitter }}" class="social-link" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                @endif
                                @if($member->linkedin)
                                <a href="{{ $member->linkedin }}" class="social-link" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                @endif
                                @if($member->instagram)
                                <a href="{{ $member->instagram }}" class="social-link" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                @endif
                            </div>
                            <button class="share-btn">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                        <div class="team-content">
                            <h3 class="member-name">{{ $member->name }}</h3>
                            <p class="member-role">{{ $member->position }}</p>
                            <p class="member-bio">{{ $member->bio }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


        <!-- Animated Shape Background -->
        <div class="animated-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>


       <!-- Modern Testimonials Section -->
<section id="testimonials" class="modern-testimonials">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-comment-dots me-2"></i>CLIENT FEEDBACK
            </span>
            <h2 class="section-title">
                What Our <span class="text-primary">Clients Say</span>
            </h2>
            <p class="section-description">
                We are passionate about creating incredible experiences for our clients
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="testimonials-grid">
            <div class="row">
                @foreach($testimonials as $testimonial)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="testimonial-card-modern">
                        <!-- Client Info Top -->
                        <div class="client-header">
                            <div class="client-avatar-modern">
                                <img src="{{ $testimonial->client_image }}" alt="{{ $testimonial->client_name }}">
                                <div class="status-indicator"></div>
                            </div>
                            <div class="client-info-modern">
                                <h4 class="client-name">{{ $testimonial->client_name }}</h4>
                                <p class="client-role">{{ $testimonial->client_role }}</p>
                                <span class="client-company">{{ $testimonial->company }}</span>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="rating-modern">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= $testimonial->rating ? 'active' : '' }}"></i>
                            @endfor
                            <span class="rating-text">{{ $testimonial->rating }}/5</span>
                        </div>

                        <!-- Testimonial Text -->
                        <div class="testimonial-body">
                            <p class="testimonial-text-modern">
                                "{{ $testimonial->testimonial }}"
                            </p>
                        </div>

                        <!-- Quote Icon -->
                        <div class="quote-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>



    </div>
</section>
<!-- CTA Section -->
<section id="contact" class="cta-section">
    <div class="container">
        <div class="cta-content text-center">
            <h2 class="cta-title">Ready to Start Your Project?</h2>
            <p class="cta-description">
                Let's discuss your ideas and create something amazing together. Get in touch with us today!
            </p>
            <div class="cta-buttons">
                <a href="/contact" class="btn btn-primary btn-lg">
                    <i class="fas fa-paper-plane me-2"></i>Start Project
                </a>
                <a href="tel:+923001234567" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-phone me-2"></i>Call Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
