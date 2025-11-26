@extends('layouts.app')

@section('content')
<!-- Modern About Hero -->
<section class="modern-about-hero">
    <div class="container">
        <div class="row align-items-center min-vh-80">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="section-badge">
                        <i class="fas fa-star me-2"></i>ABOUT OUR AGENCY
                    </div>

                    <!-- Animated Logo -->
                    <div class="animated-logo">
                        <h1 class="hero-title">
                            <span class="logo-text" id="animatedLogo">HIMOLOGICS</span>
                        </h1>
                    </div>

                    <p class="hero-description">
                        {{ $aboutPage->hero_description ?? 'We are a creative digital agency transforming ideas into exceptional digital experiences.' }}
                    </p>

                    <!-- Stats Grid -->
                    <div class="stats-grid">
                        @if(isset($aboutPage->stats) && count($aboutPage->stats) > 0)
                            @foreach($aboutPage->stats as $stat)
                            <div class="stat-item">
                                <h3 class="stat-number" data-count="{{ str_replace('+', '', $stat['number']) }}">0</h3>
                                <p class="stat-label">{{ $stat['label'] }}</p>
                            </div>
                            @endforeach
                        @else
                            <!-- Default Stats -->
                            <div class="stat-item">
                                <h3 class="stat-number" data-count="5">0</h3>
                                <p class="stat-label">Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="stat-number" data-count="150">0</h3>
                                <p class="stat-label">Happy Clients</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="stat-number" data-count="250">0</h3>
                                <p class="stat-label">Projects Completed</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="floating-card card-1">
                        <i class="fas fa-rocket"></i>
                        <span>Innovation</span>
                    </div>
                    <div class="floating-card card-2">
                        <i class="fas fa-users"></i>
                        <span>Teamwork</span>
                    </div>
                    <div class="floating-card card-3">
                        <i class="fas fa-trophy"></i>
                        <span>Excellence</span>
                    </div>
                    <div class="main-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Creative Agency" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Mission Vision Section -->
<section class="modern-mission-vision">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-badge">
                <i class="fas fa-bullseye me-2"></i>OUR PURPOSE
            </div>
            <h2 class="section-title">Driving Digital Excellence</h2>
            <p class="section-description">Our guiding principles that shape every project</p>
        </div>

        <div class="mission-vision-grid">
            <!-- Mission Card -->
            <div class="purpose-card mission-card">
                <div class="card-header">
                    <div class="icon-wrapper">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="card-content">
                    <h3>Our Mission</h3>
                    <p>{{ $aboutPage->mission_text ?? 'To deliver innovative digital solutions that drive business growth and create meaningful impact for our clients through cutting-edge technology and creative excellence.' }}</p>
                    <div class="mission-features">
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Innovative Solutions</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Business Growth</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check"></i>
                            <span>Cutting-edge Tech</span>
                        </div>
                    </div>
                </div>
                <div class="card-glow"></div>
            </div>

            <!-- Vision Card -->
            <div class="purpose-card vision-card">
                <div class="card-header">
                    <div class="icon-wrapper">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="pulse-effect"></div>
                </div>
                <div class="card-content">
                    <h3>Our Vision</h3>
                    <p>{{ $aboutPage->vision_text ?? 'To be the leading digital agency recognized for transforming businesses through exceptional digital experiences and building long-term partnerships with our clients.' }}</p>
                    <div class="vision-features">
                        <div class="feature">
                            <i class="fas fa-star"></i>
                            <span>Industry Leadership</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-star"></i>
                            <span>Digital Transformation</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-star"></i>
                            <span>Long-term Partnerships</span>
                        </div>
                    </div>
                </div>
                <div class="card-glow"></div>
            </div>
        </div>

        <!-- Process Flow -->
        <div class="process-flow">
            <div class="process-item">
                <div class="process-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4>Ideate</h4>
                <p>Creative brainstorming</p>
            </div>
            <div class="process-arrow">
                <i class="fas fa-arrow-right"></i>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <i class="fas fa-pencil-ruler"></i>
                </div>
                <h4>Design</h4>
                <p>User-centric design</p>
            </div>
            <div class="process-arrow">
                <i class="fas fa-arrow-right"></i>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h4>Develop</h4>
                <p>Quality development</p>
            </div>
            <div class="process-arrow">
                <i class="fas fa-arrow-right"></i>
            </div>
            <div class="process-item">
                <div class="process-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h4>Launch</h4>
                <p>Successful deployment</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="values-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="section-badge">
                <i class="fas fa-gem me-2"></i>OUR VALUES
            </div>
            <h2 class="section-title">What We Stand For</h2>
            <p class="section-description">The principles that guide everything we do</p>
        </div>

        <div class="values-grid">
            @if(isset($aboutPage->values) && count($aboutPage->values) > 0)
                @foreach($aboutPage->values as $value)
                <div class="value-card">
                    <div class="value-icon">
                        <i class="{{ $value['icon'] }}"></i>
                    </div>
                    <h4>{{ $value['title'] }}</h4>
                    <p>{{ $value['description'] }}</p>
                </div>
                @endforeach
            @else
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p>We embrace new technologies and creative approaches to solve complex problems.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4>Collaboration</h4>
                    <p>We work closely with our clients as partners to achieve shared success.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4>Excellence</h4>
                    <p>We strive for the highest quality in every project we undertake.</p>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="about-cta">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Ready to Start Your Project?</h2>
            <p>Let's work together to bring your ideas to life with our expert team.</p>
            <div class="cta-buttons">
                <a href="/contact" class="btn btn-primary">
                    <i class="fas fa-paper-plane me-2"></i>Get Started
                </a>
                <a href="/portfolio" class="btn btn-outline">
                    <i class="fas fa-briefcase me-2"></i>View Our Work
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Modern About Hero - Same as before */
.modern-about-hero {
    padding: 140px 0 80px;
    background: linear-gradient(135deg, #1a0b0b 0%, #2d1a1a 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.min-vh-80 {
    min-height: 80vh;
}

.section-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(220, 38, 38, 0.2);
    color: #ef4444;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-bottom: 20px;
    border: 1px solid rgba(220, 38, 38, 0.3);
}

.animated-logo {
    margin-bottom: 20px;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    line-height: 1.1;
}

.logo-text {
    background: linear-gradient(135deg, #ef4444, #dc2626, #ef4444);
    background-size: 200% 200%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradientShift 3s ease-in-out infinite, glow 2s ease-in-out infinite alternate;
    display: inline-block;
}

@keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes glow {
    from { text-shadow: 0 0 20px rgba(239, 68, 68, 0.5); }
    to { text-shadow: 0 0 30px rgba(239, 68, 68, 0.8), 0 0 40px rgba(239, 68, 68, 0.6); }
}

.hero-description {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 40px;
    opacity: 0.9;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 50px;
}

.stat-item {
    text-align: center;
    padding: 20px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: #ef4444;
    margin-bottom: 5px;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
    margin: 0;
}

.hero-visual {
    position: relative;
    height: 400px;
}

.main-image {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 30px 60px rgba(0,0,0,0.5);
}

.floating-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 12px 18px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
    color: white;
    font-weight: 600;
    font-size: 0.9rem;
    z-index: 2;
    animation: float 3s ease-in-out infinite;
}

.floating-card i {
    color: #ef4444;
    font-size: 1rem;
}

.card-1 {
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.card-2 {
    top: 70%;
    right: 5%;
    animation-delay: 1s;
}

.card-3 {
    bottom: 10%;
    left: 15%;
    animation-delay: 2s;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

/* Modern Mission Vision Section */
.modern-mission-vision {
    padding: 100px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    position: relative;
    overflow: hidden;
}

.modern-mission-vision .section-header {
    margin-bottom: 60px;
}

.modern-mission-vision .section-title {
    font-size: 3rem;
    font-weight: 800;
    color: #1a0b0b;
    margin-bottom: 15px;
}

.modern-mission-vision .section-description {
    font-size: 1.2rem;
    color: #666;
}

.mission-vision-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
    margin-bottom: 60px;
}

.purpose-card {
    position: relative;
    background: white;
    padding: 0;
    border-radius: 25px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.4s ease;
    border: 1px solid rgba(220, 38, 38, 0.1);
}

.purpose-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 35px 70px rgba(220, 38, 38, 0.15);
}

.card-header {
    position: relative;
    padding: 40px 40px 20px;
    background: linear-gradient(135deg, #dc2626, #ef4444);
    text-align: center;
}

.icon-wrapper {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    border: 3px solid rgba(255, 255, 255, 0.3);
}

.icon-wrapper i {
    font-size: 2.5rem;
    color: white;
}

.pulse-effect {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 120px;
    height: 120px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    animation: pulse 2s ease-out infinite;
}

@keyframes pulse {
    0% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }
    100% {
        transform: translate(-50%, -50%) scale(1.5);
        opacity: 0;
    }
}

.card-content {
    padding: 40px;
}

.card-content h3 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #1a0b0b;
    text-align: center;
}

.card-content p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #666;
    margin-bottom: 30px;
    text-align: center;
}

.mission-features, .vision-features {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.feature {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 20px;
    background: rgba(220, 38, 38, 0.05);
    border-radius: 10px;
    border-left: 4px solid #dc2626;
}

.feature i {
    color: #dc2626;
    font-size: 1rem;
}

.feature span {
    font-weight: 600;
    color: #1a0b0b;
}

.card-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.1) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.purpose-card:hover .card-glow {
    opacity: 1;
}

/* Process Flow */
.process-flow {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 50px;
}

.process-item {
    text-align: center;
    padding: 30px 20px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    min-width: 150px;
    transition: all 0.3s ease;
}

.process-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(220, 38, 38, 0.15);
}

.process-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #dc2626, #ef4444);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    color: white;
    font-size: 1.5rem;
}

.process-item h4 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #1a0b0b;
}

.process-item p {
    font-size: 0.9rem;
    color: #666;
    margin: 0;
}

.process-arrow {
    color: #dc2626;
    font-size: 1.5rem;
    opacity: 0.7;
}

/* Values Section */
.values-section {
    padding: 100px 0;
    background: white;
}

.values-section .section-header {
    margin-bottom: 60px;
}

.values-section .section-title {
    font-size: 3rem;
    font-weight: 800;
    color: #1a0b0b;
    margin-bottom: 15px;
}

.values-section .section-description {
    font-size: 1.2rem;
    color: #666;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.value-card {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid #f0f0f0;
    position: relative;
    overflow: hidden;
}

.value-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(220, 38, 38, 0.1), transparent);
    transition: left 0.6s ease;
}

.value-card:hover::before {
    left: 100%;
}

.value-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(220, 38, 38, 0.15);
}

.value-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #dc2626, #ef4444);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.8rem;
    margin: 0 auto 25px;
    transition: all 0.3s ease;
}

.value-card:hover .value-icon {
    transform: scale(1.1) rotate(5deg);
}

.value-card h4 {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #1a0b0b;
}

.value-card p {
    color: #666;
    line-height: 1.7;
    font-size: 1rem;
    margin: 0;
}

/* CTA Section */
.about-cta {
    padding: 100px 0;
    background: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.about-cta::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.1"><polygon points="1000,100 1000,0 0,100"/></svg>');
    background-size: cover;
}

.cta-content {
    position: relative;
    z-index: 2;
}

.cta-content h2 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 1.3rem;
    margin-bottom: 40px;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn {
    padding: 15px 35px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.btn-primary {
    background: white;
    color: #dc2626;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(255,255,255,0.3);
}

.btn-outline {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-outline:hover {
    background: white;
    color: #dc2626;
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(255,255,255,0.2);
}

/* Responsive Design */
@media (max-width: 1200px) {
    .hero-title {
        font-size: 3rem;
    }
    .modern-mission-vision .section-title {
        font-size: 2.5rem;
    }
}

@media (max-width: 992px) {
    .modern-about-hero {
        padding: 120px 0 60px;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .mission-vision-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .process-flow {
        gap: 15px;
    }

    .process-arrow {
        transform: rotate(90deg);
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }

    .stats-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .mission-vision-grid {
        grid-template-columns: 1fr;
    }

    .purpose-card {
        margin: 0 10px;
    }

    .card-content {
        padding: 30px 20px;
    }

    .process-flow {
        flex-direction: column;
    }

    .values-grid {
        grid-template-columns: 1fr;
    }

    .cta-content h2 {
        font-size: 2.5rem;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }

    .btn {
        width: 200px;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .modern-about-hero {
        padding: 100px 0 40px;
    }

    .hero-title {
        font-size: 1.8rem;
    }

    .modern-mission-vision .section-title {
        font-size: 2rem;
    }

    .values-section .section-title {
        font-size: 2rem;
    }

    .cta-content h2 {
        font-size: 2rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated counter for stats
    const statNumbers = document.querySelectorAll('.stat-number');

    const animateValue = (element, start, end, duration) => {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            element.textContent = value + (element.getAttribute('data-count') < end ? '+' : '');
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const count = parseInt(entry.target.getAttribute('data-count'));
                animateValue(entry.target, 0, count, 2000);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    statNumbers.forEach(stat => {
        observer.observe(stat);
    });

    // Continuous logo animation
    const logoElement = document.getElementById('animatedLogo');
    if (logoElement) {
        setInterval(() => {
            logoElement.style.animation = 'none';
            setTimeout(() => {
                logoElement.style.animation = 'gradientShift 3s ease-in-out infinite, glow 2s ease-in-out infinite alternate';
            }, 10);
        }, 3000);
    }

    // Add hover effects to process items
    const processItems = document.querySelectorAll('.process-item');
    processItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.05)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});
</script>
@endsection
