@extends('layouts.app')

@section('content')

<!-- 🎉 Animated Hero Section -->
<section class="hero-cute">
    <div class="floating-shape shape1"></div>
    <div class="floating-shape shape2"></div>

    <div class="container">
        <div class="hero-popup animate-popup">
            <h1 class="cute-title">
                Our <span>Services</span>
            </h1>
            <p class="cute-sub">
                Creative, modern & fully customized digital solutions designed to boost your business.
            </p>

            <a href="#services" class="cute-btn">
                Explore Services <i class="fas fa-arrow-down"></i>
            </a>
        </div>
    </div>
</section>


<!-- ⭐ Fancy Services Section -->
<section id="services" class="cute-services">
    <div class="container">
        <div class="cute-grid">

            @foreach($services as $service)
            <div class="cute-card fade-in">

                <div class="cute-icon">
                    <i class="{{ $service->icon }}"></i>
                </div>

                <h3 class="cute-card-title">{{ $service->title }}</h3>
                <p class="cute-desc">{{ $service->description }}</p>

                @if($service->features && count($service->features) > 0)
                <ul class="cute-list">
                    @foreach($service->features as $feature)
                    <li><i class="fas fa-check"></i>{{ $feature }}</li>
                    @endforeach
                </ul>
                @endif

                <a href="/contact?service={{ $service->title }}" class="cute-btn small">
                    Get Started <i class="fas fa-arrow-right"></i>
                </a>

            </div>
            @endforeach

        </div>
    </div>
</section>


<style>

/* ------------------------------------------------ */
/* 🎉 HERO POPUP SECTION */
/* ------------------------------------------------ */
.hero-cute {
    padding: 170px 0 150px;
    position: relative;
    background: #1a0b0b;
    overflow: hidden;
}

/* Floating Shapes */
.floating-shape {
    position: absolute;
    width: 220px;
    height: 220px;
    background: radial-gradient(circle, #ef4444 0%, #dc2626 80%);
    filter: blur(80px);
    opacity: 0.35;
    animation: float 6s ease-in-out infinite;
}

.shape1 { top: -60px; left: -40px; }
.shape2 { bottom: -60px; right: -40px; animation-delay: 2s; }

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(30px); }
    100% { transform: translateY(0px); }
}

/* Popup Hero Box */
.hero-popup {
    background: rgba(255,255,255,0.08);
    padding: 50px 40px;
    border-radius: 24px;
    border: 1px solid rgba(255,255,255,0.18);
    backdrop-filter: blur(10px);
    max-width: 600px;
    margin: auto;
    text-align: center;
    box-shadow: 0 0 60px rgba(239, 68, 68, 0.25);
}

/* Popup Animation */
.animate-popup {
    animation: popupSlide 1s ease forwards;
    opacity: 0;
    transform: translateY(40px);
}

@keyframes popupSlide {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.cute-title {
    font-size: 3rem;
    font-weight: 900;
    color: white;
}

.cute-title span {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.cute-sub {
    color: #fda4a4;
    margin: 15px auto 25px;
    max-width: 450px;
}

.cute-btn {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    padding: 14px 28px;
    color: white;
    font-weight: 700;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    transition: 0.3s ease;
}

.cute-btn:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(239,68,68,0.4);
}


/* ------------------------------------------------ */
/* ⭐ CUTE SERVICES SECTION */
/* ------------------------------------------------ */
.cute-services {
    padding: 120px 0;
    background: #f8fafc;
}

.cute-grid {
    display: grid;
    gap: 35px;
    grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
}

/* Card */
.cute-card {
    background: white;
    border-radius: 22px;
    padding: 40px;
    border: 2px solid #fce4e4;
    position: relative;

    /* subtle lift */
    transition: 0.3s ease;
}

.cute-card:hover {
    transform: translateY(-10px) scale(1.02);
    border-color: #ef4444;
    box-shadow: 0 18px 35px rgba(239, 68, 68, 0.18);
}

/* Icon */
.cute-icon {
    width: 80px;
    height: 80px;
    background: #fee2e2;
    color: #ef4444;
    border-radius: 18px;
    font-size: 2.3rem;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;

    transition: transform .4s ease;
}

.cute-card:hover .cute-icon {
    transform: rotate(8deg) scale(1.13);
}

.cute-card-title {
    font-size: 1.6rem;
    font-weight: 800;
}

.cute-desc {
    color: #64748b;
    margin-top: 10px;
    margin-bottom: 20px;
}

/* List */
.cute-list {
    list-style: none;
    padding: 0;
}

.cute-list li {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
    color: #475569;
}

.cute-list li i {
    color: #10b981;
}

/* Buttons */
.cute-btn.small {
    font-size: .95rem;
    padding: 10px 20px;
}


/* Fade In Animation for cards */
.fade-in {
    opacity: 0;
    animation: fadeUp 1.1s ease forwards;
}

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(35px); }
    to   { opacity: 1; transform: translateY(0); }
}

</style>

@endsection
