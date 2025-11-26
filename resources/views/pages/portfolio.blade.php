@extends('layouts.app')

@section('content')
<!-- Portfolio Hero Section -->
<section class="portfolio-hero">
    <div class="container">
        <div class="row align-items-center min-vh-80">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <div class="section-badge">
                        <i class="fas fa-rocket me-2"></i>OUR CREATIVE WORK
                    </div>
                    <h1 class="hero-title">Our <span class="gradient-text">Portfolio</span> Excellence</h1>
                    <p class="hero-description">
                        Explore our collection of innovative projects and creative solutions that have helped businesses achieve remarkable digital success.
                    </p>

                    <!-- Portfolio Stats -->
                    <div class="portfolio-stats">
                        <div class="stat">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h3>{{ $portfolios->count() }}+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat">
                            <div class="stat-icon">
                                <i class="fas fa-tags"></i>
                            </div>
                            <h3>{{ count($categories) }}+</h3>
                            <p>Categories</p>
                        </div>
                        <div class="stat">
                            <div class="stat-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>100%</h3>
                            <p>Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Animated Background Elements -->
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
</section>

<!-- Portfolio Filter & Grid Section -->
<section class="portfolio-section">
    <div class="container">
        <!-- Filter Buttons -->
        <div class="portfolio-filter">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-th-large me-2"></i>All Projects
            </button>
            @foreach($categories as $category)
            <button class="filter-btn" data-filter="{{ Str::slug($category) }}">
                <i class="fas fa-filter me-2"></i>{{ $category }}
            </button>
            @endforeach
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid" id="portfolioGrid">
            @foreach($portfolios as $portfolio)
            <div class="portfolio-item" data-category="{{ Str::slug($portfolio->category) }}">
                <div class="portfolio-card">
                    <!-- Portfolio Image -->
                    <div class="portfolio-image">
                        <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" class="portfolio-img">
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <h4>View Project</h4>
                                <p>{{ Str::limit($portfolio->description, 80) }}</p>
                                <div class="portfolio-actions">
                                    <a href="{{ route('portfolio.detail', $portfolio->slug) }}" class="action-btn view-btn" title="View Details">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    @if($portfolio->project_url)
                                    <a href="{{ $portfolio->project_url }}" target="_blank" class="action-btn link-btn" title="Live Demo">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    @endif
                                    <button class="action-btn like-btn" title="Add to Favorites">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @if($portfolio->is_featured)
                        <div class="featured-badge">
                            <i class="fas fa-star"></i> Featured
                        </div>
                        @endif
                    </div>

                    <!-- Portfolio Content -->
                    <div class="portfolio-content">
                        <div class="portfolio-category">{{ $portfolio->category }}</div>
                        <h3 class="portfolio-title">{{ $portfolio->title }}</h3>
                        <p class="portfolio-description">{{ Str::limit($portfolio->description, 100) }}</p>

                        <!-- Progress Bar -->
                        <div class="project-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 100%"></div>
                            </div>
                            <span class="progress-text">Completed</span>
                        </div>

                        <!-- Technologies -->
                        <div class="portfolio-technologies">
                            @if($portfolio->technologies)
                                @foreach(array_slice($portfolio->technologies, 0, 3) as $tech)
                                <span class="tech-tag">{{ $tech }}</span>
                                @endforeach
                                @if(count($portfolio->technologies) > 3)
                                <span class="tech-tag more-tag">+{{ count($portfolio->technologies) - 3 }}</span>
                                @endif
                            @endif
                        </div>

                        <!-- Portfolio Meta -->
                        <div class="portfolio-meta">
                            <div class="meta-item">
                                <i class="far fa-calendar"></i>
                                <span>{{ $portfolio->project_date->format('M Y') }}</span>
                            </div>
                            <div class="meta-item">
                                <i class="far fa-clock"></i>
                                <span>{{ $portfolio->duration ?? '4' }} weeks</span>
                            </div>
                            <div class="meta-item">
                                <i class="far fa-eye"></i>
                                <span>{{ $portfolio->views }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-5">
            <button class="load-more-btn" id="loadMore">
                <span>Load More Projects</span>
                <i class="fas fa-arrow-down"></i>
            </button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="portfolio-cta">
    <div class="container">
        <div class="cta-content text-center">
            <div class="cta-badge">
                <i class="fas fa-paper-plane me-2"></i>LET'S WORK TOGETHER
            </div>
            <h2>Ready to Start Your Project?</h2>
            <p>Let's work together to create something amazing for your business and achieve outstanding results.</p>
            <div class="cta-buttons">
                <a href="/contact" class="btn btn-primary">
                    <i class="fas fa-paper-plane me-2"></i>Start a Project
                </a>
                <a href="/services" class="btn btn-outline">
                    <i class="fas fa-cogs me-2"></i>View Services
                </a>
                <a href="/about" class="btn btn-outline">
                    <i class="fas fa-users me-2"></i>Our Team
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Portfolio Hero Section */
.portfolio-hero {
    padding: 140px 0 80px;
    background: linear-gradient(135deg, #1a0b0b 0%, #2d1a1a 50%, #3c1f1f 100%);
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
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 25px;
    border: 1px solid rgba(220, 38, 38, 0.3);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.hero-title {
    font-size: 4.5rem;
    font-weight: 800;
    margin-bottom: 25px;
    line-height: 1.1;
    background: linear-gradient(135deg, #fff 0%, #fecaca 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.gradient-text {
    background: linear-gradient(135deg, #ef4444, #dc2626, #b91c1c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
}

.hero-description {
    font-size: 1.3rem;
    line-height: 1.7;
    margin-bottom: 50px;
    opacity: 0.9;
    max-width: 650px;
    margin-left: auto;
    margin-right: auto;
    color: #fecaca;
}

/* Portfolio Stats */
.portfolio-stats {
    display: flex;
    justify-content: center;
    gap: 60px;
    margin-top: 60px;
}

.stat {
    text-align: center;
    position: relative;
}

.stat-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #ef4444, #dc2626);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-size: 1.5rem;
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.3);
}

.stat h3 {
    font-size: 3.5rem;
    font-weight: 800;
    background: linear-gradient(135deg, #ef4444, #dc2626);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 8px;
}

.stat p {
    font-size: 1rem;
    opacity: 0.9;
    margin: 0;
    color: #fecaca;
    font-weight: 500;
}

/* Hero Shapes */
.hero-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.shape {
    position: absolute;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(220, 38, 38, 0.05));
}

.shape-1 {
    width: 300px;
    height: 300px;
    top: 10%;
    left: 5%;
    animation: float 6s ease-in-out infinite;
}

.shape-2 {
    width: 200px;
    height: 200px;
    top: 60%;
    right: 10%;
    animation: float 8s ease-in-out infinite reverse;
}

.shape-3 {
    width: 150px;
    height: 150px;
    bottom: 20%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

/* Portfolio Section */
.portfolio-section {
    padding: 120px 0;
    background: linear-gradient(135deg, #fef2f2 0%, #fecaca 100%);
    position: relative;
}

/* Portfolio Filter */
.portfolio-filter {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 60px;
}

.filter-btn {
    padding: 14px 28px;
    background: white;
    color: #78716c;
    border: 2px solid #fecaca;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    align-items: center;
    font-size: 0.95rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

.filter-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.15);
    border-color: #ef4444;
    color: #ef4444;
}

.filter-btn.active {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
    border-color: transparent;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.3);
}

/* Portfolio Grid */
.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 35px;
}

.portfolio-item {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.4s ease;
}

.portfolio-item.hidden {
    opacity: 0;
    transform: translateY(20px);
    display: none;
}

/* Portfolio Card */
.portfolio-card {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(220, 38, 38, 0.08);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    height: 100%;
    position: relative;
    border: 1px solid rgba(254, 202, 202, 0.3);
}

.portfolio-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 30px 60px rgba(220, 38, 38, 0.15);
}

.portfolio-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(135deg, #ef4444, #dc2626, #b91c1c);
    z-index: 2;
}

/* Portfolio Image */
.portfolio-image {
    position: relative;
    height: 280px;
    overflow: hidden;
}

.portfolio-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.5s ease;
}

.portfolio-card:hover .portfolio-img {
    transform: scale(1.1);
}

.portfolio-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.95), rgba(220, 38, 38, 0.9));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.4s ease;
    padding: 30px;
}

.portfolio-card:hover .portfolio-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    color: white;
}

.overlay-content h4 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.overlay-content p {
    font-size: 0.95rem;
    opacity: 0.9;
    margin-bottom: 25px;
    line-height: 1.5;
}

.portfolio-actions {
    display: flex;
    gap: 12px;
    justify-content: center;
}

.action-btn {
    width: 55px;
    height: 55px;
    background: rgba(255,255,255,0.2);
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.action-btn:hover {
    background: white;
    color: #dc2626;
    transform: scale(1.1) rotate(5deg);
    border-color: white;
}

.featured-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: linear-gradient(135deg, #ffd700, #ffed4e);
    color: #1a0b0b;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 6px;
    box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
}

/* Portfolio Content */
.portfolio-content {
    padding: 30px;
}

.portfolio-category {
    color: #dc2626;
    font-weight: 700;
    font-size: 0.85rem;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.portfolio-title {
    font-size: 1.5rem;
    font-weight: 800;
    color: #1a0b0b;
    margin-bottom: 12px;
    line-height: 1.3;
}

.portfolio-description {
    color: #78716c;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

/* Project Progress */
.project-progress {
    margin-bottom: 20px;
}

.progress-bar {
    width: 100%;
    height: 6px;
    background: #fecaca;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 8px;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(135deg, #ef4444, #dc2626);
    border-radius: 10px;
    transition: width 1s ease;
}

.progress-text {
    font-size: 0.8rem;
    color: #78716c;
    font-weight: 600;
}

/* Technologies */
.portfolio-technologies {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 20px;
}

.tech-tag {
    background: linear-gradient(135deg, #fef2f2, #fecaca);
    color: #dc2626;
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    border: 1px solid #fecaca;
}

.more-tag {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
}

/* Portfolio Meta */
.portfolio-meta {
    display: flex;
    gap: 20px;
    border-top: 1px solid #fef2f2;
    padding-top: 20px;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #78716c;
    font-size: 0.85rem;
    font-weight: 500;
}

.meta-item i {
    color: #dc2626;
    font-size: 0.9rem;
}

/* Load More Button */
.load-more-btn {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
    border: none;
    padding: 18px 45px;
    border-radius: 15px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.4s ease;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-size: 1rem;
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.3);
}

.load-more-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(220, 38, 38, 0.4);
    background: linear-gradient(135deg, #dc2626, #ef4444);
}

/* CTA Section */
.portfolio-cta {
    padding: 120px 0;
    background: linear-gradient(135deg, #1a0b0b 0%, #2d1a1a 100%);
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.cta-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(220, 38, 38, 0.2);
    color: #ef4444;
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 20px;
    border: 1px solid rgba(220, 38, 38, 0.3);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.cta-content h2 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 25px;
    background: linear-gradient(135deg, #fff 0%, #fecaca 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.cta-content p {
    font-size: 1.3rem;
    margin-bottom: 50px;
    opacity: 0.9;
    color: #fecaca;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn {
    padding: 18px 35px;
    border-radius: 15px;
    text-decoration: none;
    font-weight: 700;
    font-size: 1rem;
    transition: all 0.4s ease;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
}

.btn-primary {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.3);
}

.btn-primary:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(220, 38, 38, 0.4);
    background: linear-gradient(135deg, #dc2626, #ef4444);
}

.btn-outline {
    background: transparent;
    color: white;
    border: 2px solid rgba(254, 202, 202, 0.3);
    backdrop-filter: blur(10px);
}

.btn-outline:hover {
    background: white;
    color: #dc2626;
    transform: translateY(-5px);
    border-color: white;
    box-shadow: 0 15px 40px rgba(255,255,255,0.2);
}

/* Responsive Design */
@media (max-width: 1200px) {
    .hero-title {
        font-size: 4rem;
    }

    .portfolio-grid {
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    }
}

@media (max-width: 768px) {
    .portfolio-hero {
        padding: 120px 0 60px;
    }

    .hero-title {
        font-size: 3rem;
    }

    .portfolio-stats {
        gap: 40px;
        flex-wrap: wrap;
    }

    .stat h3 {
        font-size: 2.8rem;
    }

    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .portfolio-filter {
        gap: 8px;
    }

    .filter-btn {
        padding: 12px 20px;
        font-size: 0.9rem;
    }

    .cta-content h2 {
        font-size: 2.8rem;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }

    .btn {
        width: 250px;
        text-align: center;
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .portfolio-hero {
        padding: 100px 0 40px;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .portfolio-stats {
        flex-direction: column;
        gap: 30px;
    }

    .portfolio-content {
        padding: 25px;
    }

    .portfolio-meta {
        flex-direction: column;
        gap: 10px;
    }

    .cta-content h2 {
        font-size: 2.2rem;
    }

    .portfolio-image {
        height: 240px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio Filter Functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    const loadMoreBtn = document.getElementById('loadMore');

    // Filter functionality
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');

            // Filter items with animation
            portfolioItems.forEach(item => {
                const category = item.getAttribute('data-category');

                if (filterValue === 'all' || filterValue === category) {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.classList.remove('hidden');
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 200);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.classList.add('hidden');
                    }, 300);
                }
            });
        });
    });

    // Load More functionality
    if (loadMoreBtn) {
        let visibleItems = 6;

        loadMoreBtn.addEventListener('click', function() {
            const allItems = document.querySelectorAll('.portfolio-item:not(.hidden)');
            const currentlyVisible = document.querySelectorAll('.portfolio-item:not(.hidden):not(.load-more-hidden)');

            // Show next 3 items with animation
            for (let i = currentlyVisible.length; i < currentlyVisible.length + 3 && i < allItems.length; i++) {
                setTimeout(() => {
                    allItems[i].classList.remove('load-more-hidden');
                    allItems[i].style.opacity = '0';
                    allItems[i].style.transform = 'translateY(20px)';

                    setTimeout(() => {
                        allItems[i].style.opacity = '1';
                        allItems[i].style.transform = 'translateY(0)';
                    }, 100);
                }, (i - currentlyVisible.length) * 100);
            }

            // Hide load more if all items are visible
            setTimeout(() => {
                if (document.querySelectorAll('.portfolio-item:not(.hidden):not(.load-more-hidden)').length >= allItems.length) {
                    loadMoreBtn.style.display = 'none';
                }
            }, 500);
        });

        // Initially hide items beyond first 6
        portfolioItems.forEach((item, index) => {
            if (index >= 6) {
                item.classList.add('load-more-hidden');
            }
        });
    }

    // Enhanced scroll animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';

                // Add staggered animation for stats
                if (entry.target.classList.contains('stat')) {
                    const stats = document.querySelectorAll('.stat');
                    stats.forEach((stat, index) => {
                        setTimeout(() => {
                            stat.style.opacity = '1';
                            stat.style.transform = 'translateY(0)';
                        }, index * 200);
                    });
                }
            }
        });
    }, observerOptions);

    portfolioItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
        observer.observe(item);
    });

    // Animate stats on hero section load
    const stats = document.querySelectorAll('.stat');
    stats.forEach((stat, index) => {
        stat.style.opacity = '0';
        stat.style.transform = 'translateY(20px)';
        setTimeout(() => {
            stat.style.transition = 'all 0.6s ease';
            stat.style.opacity = '1';
            stat.style.transform = 'translateY(0)';
        }, 500 + index * 200);
    });

    // Like button functionality
    document.querySelectorAll('.like-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                this.style.color = '#ef4444';
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                this.style.color = 'white';
            }
        });
    });
});
</script>
@endsection
