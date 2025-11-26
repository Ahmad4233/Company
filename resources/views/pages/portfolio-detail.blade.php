@extends('layouts.app')

@section('content')
<!-- Portfolio Detail Hero -->
<section class="portfolio-detail-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-content">
                    <div class="project-badge">
                        <span class="badge-text">{{ $portfolio->category }}</span>
                    </div>
                    <h1 class="project-title">{{ $portfolio->title }}</h1>
                    <p class="project-subtitle">{{ $portfolio->description }}</p>

                    <!-- Project Stats -->
                    <div class="project-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="far fa-calendar"></i>
                            </div>
                            <div class="stat-content">
                                <span class="stat-value">{{ $portfolio->project_date->format('M Y') }}</span>
                                <span class="stat-label">Completed</span>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="far fa-eye"></i>
                            </div>
                            <div class="stat-content">
                                <span class="stat-value">{{ $portfolio->views }}</span>
                                <span class="stat-label">Views</span>
                            </div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="stat-content">
                                <span class="stat-value">4.8</span>
                                <span class="stat-label">Rating</span>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="hero-actions">
                        @if($portfolio->project_url)
                        <a href="{{ $portfolio->project_url }}" target="_blank" class="btn btn-demo">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Live Demo</span>
                        </a>
                        @endif
                        <a href="{{ route('portfolio') }}" class="btn btn-back">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back to Portfolio</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background Elements -->
    <div class="hero-bg-elements">
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
        <div class="bg-circle circle-3"></div>
    </div>
</section>

<!-- Project Showcase -->
<section class="project-showcase">
    <div class="container">
        <div class="showcase-main">
            <div class="showcase-image">
                <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" class="main-img">
                <div class="image-overlay">
                    <div class="overlay-content">
                        <i class="fas fa-expand-arrows-alt"></i>
                        <span>View Project</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Details -->
<section class="project-details-section">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="project-content-card">
                    <div class="content-header">
                        <h2>Project Overview</h2>
                        <div class="header-line"></div>
                    </div>
                    <div class="content-body">
                        <p class="project-description">
                            {{ $portfolio->full_description ?? $portfolio->description }}
                        </p>

                        <!-- Features -->
                        @if($portfolio->features && count($portfolio->features) > 0)
                        <div class="features-section">
                            <h3>Key Features</h3>
                            <div class="features-grid">
                                @foreach($portfolio->features as $feature)
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span class="feature-text">{{ $feature }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="project-sidebar">
                    <!-- Project Info -->
                    <div class="sidebar-card">
                        <h3 class="card-title">Project Details</h3>
                        <div class="info-list">
                            <div class="info-item">
                                <div class="info-label">
                                    <i class="fas fa-tags"></i>
                                    <span>Category</span>
                                </div>
                                <span class="info-value">{{ $portfolio->category }}</span>
                            </div>
                            <div class="info-item">
                                <div class="info-label">
                                    <i class="far fa-calendar"></i>
                                    <span>Date</span>
                                </div>
                                <span class="info-value">{{ $portfolio->project_date->format('d M Y') }}</span>
                            </div>
                            @if($portfolio->client_name)
                            <div class="info-item">
                                <div class="info-label">
                                    <i class="fas fa-user-tie"></i>
                                    <span>Client</span>
                                </div>
                                <span class="info-value">{{ $portfolio->client_name }}</span>
                            </div>
                            @endif
                            @if($portfolio->duration)
                            <div class="info-item">
                                <div class="info-label">
                                    <i class="far fa-clock"></i>
                                    <span>Duration</span>
                                </div>
                                <span class="info-value">{{ $portfolio->duration }} weeks</span>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Technologies -->
                    @if($portfolio->technologies && count($portfolio->technologies) > 0)
                    <div class="sidebar-card">
                        <h3 class="card-title">Technologies Used</h3>
                        <div class="tech-tags">
                            @foreach($portfolio->technologies as $tech)
                            <span class="tech-tag">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Project Links -->
                    <div class="sidebar-card">
                        <h3 class="card-title">Project Links</h3>
                        <div class="project-links">
                            @if($portfolio->project_url)
                            <a href="{{ $portfolio->project_url }}" target="_blank" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Live Demo</span>
                            </a>
                            @endif
                            @if($portfolio->github_url)
                            <a href="{{ $portfolio->github_url }}" target="_blank" class="project-link">
                                <i class="fab fa-github"></i>
                                <span>Source Code</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
@if($relatedPortfolios->count() > 0)
<section class="related-projects-section">
    <div class="container">
        <div class="section-header">
            <h2>Related Projects</h2>
            <p>Explore more of our amazing work</p>
        </div>
        <div class="related-grid">
            @foreach($relatedPortfolios as $project)
            <div class="related-project-card">
                <a href="{{ route('portfolio.detail', $project->slug) }}" class="project-link">
                    <div class="project-image">
                        <img src="{{ $project->image }}" alt="{{ $project->title }}">
                        <div class="project-overlay">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-category">{{ $project->category }}</span>
                        <h4 class="project-title">{{ $project->title }}</h4>
                        <p class="project-excerpt">{{ Str::limit($project->description, 80) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<style>
/* Portfolio Detail Hero */
.portfolio-detail-hero {
    padding: 160px 0 100px;
    background: linear-gradient(135deg, #1a0b0b 0%, #2d1a1a 50%, #3c1f1f 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.project-badge {
    margin-bottom: 30px;
}

.badge-text {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
    padding: 10px 25px;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.project-title {
    font-size: 4rem;
    font-weight: 800;
    margin-bottom: 20px;
    background: linear-gradient(135deg, #fff 0%, #fecaca 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1.1;
}

.project-subtitle {
    font-size: 1.3rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto 40px;
    line-height: 1.6;
    color: #fecaca;
}

/* Project Stats */
.project-stats {
    display: flex;
    justify-content: center;
    gap: 50px;
    margin: 50px 0;
    flex-wrap: wrap;
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 15px;
    text-align: left;
}

.stat-icon {
    width: 50px;
    height: 50px;
    background: rgba(239, 68, 68, 0.2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: #ef4444;
}

.stat-content {
    display: flex;
    flex-direction: column;
}

.stat-value {
    font-size: 1.8rem;
    font-weight: 700;
    color: #ef4444;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
    color: #fecaca;
}

/* Hero Actions */
.hero-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn {
    padding: 15px 30px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.btn-demo {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    color: white;
    box-shadow: 0 8px 25px rgba(239, 68, 68, 0.3);
}

.btn-demo:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(239, 68, 68, 0.4);
}

.btn-back {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
}

.btn-back:hover {
    background: white;
    color: #dc2626;
    transform: translateY(-3px);
}

/* Background Elements */
.hero-bg-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.bg-circle {
    position: absolute;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(220, 38, 38, 0.05));
}

.circle-1 {
    width: 200px;
    height: 200px;
    top: 10%;
    left: 10%;
    animation: float 8s ease-in-out infinite;
}

.circle-2 {
    width: 150px;
    height: 150px;
    top: 60%;
    right: 15%;
    animation: float 12s ease-in-out infinite reverse;
}

.circle-3 {
    width: 100px;
    height: 100px;
    bottom: 20%;
    left: 20%;
    animation: float 10s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

/* Project Showcase */
.project-showcase {
    padding: 80px 0;
    background: #f8fafc;
}

.showcase-main {
    max-width: 1000px;
    margin: 0 auto;
}

.showcase-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.main-img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}

.showcase-image:hover .main-img {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(26, 11, 11, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.showcase-image:hover .image-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    color: white;
}

.overlay-content i {
    font-size: 2rem;
    margin-bottom: 10px;
    display: block;
}

/* Project Details Section */
.project-details-section {
    padding: 100px 0;
}

.project-content-card {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    border: 1px solid #f1f5f9;
}

.content-header {
    margin-bottom: 30px;
}

.content-header h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: #1a0b0b;
    margin-bottom: 15px;
}

.header-line {
    width: 60px;
    height: 4px;
    background: linear-gradient(135deg, #ef4444, #dc2626);
    border-radius: 2px;
}

.project-description {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #64748b;
    margin-bottom: 40px;
}

/* Features Section */
.features-section {
    margin-top: 40px;
}

.features-section h3 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1a0b0b;
    margin-bottom: 20px;
}

.features-grid {
    display: grid;
    gap: 15px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: #fef2f2;
    border-radius: 12px;
    border-left: 4px solid #ef4444;
}

.feature-icon {
    width: 35px;
    height: 35px;
    background: #ef4444;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.9rem;
}

.feature-text {
    font-weight: 500;
    color: #1a0b0b;
}

/* Sidebar */
.project-sidebar {
    position: sticky;
    top: 100px;
}

.sidebar-card {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 25px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
    border: 1px solid #f1f5f9;
}

.card-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #1a0b0b;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #fef2f2;
}

/* Info List */
.info-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.info-label {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #64748b;
    font-weight: 500;
}

.info-label i {
    color: #ef4444;
    width: 16px;
}

.info-value {
    font-weight: 600;
    color: #1a0b0b;
}

/* Tech Tags */
.tech-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.tech-tag {
    background: linear-gradient(135deg, #fef2f2, #fecaca);
    color: #dc2626;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    border: 1px solid #fecaca;
}

/* Project Links */
.project-links {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.project-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 20px;
    background: #f8fafc;
    border-radius: 10px;
    text-decoration: none;
    color: #64748b;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
}

.project-link:hover {
    background: #fef2f2;
    color: #dc2626;
    border-color: #fecaca;
    transform: translateX(5px);
}

.project-link i {
    color: #ef4444;
    width: 16px;
}

/* Related Projects */
.related-projects-section {
    padding: 100px 0;
    background: #f8fafc;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 3rem;
    font-weight: 800;
    color: #1a0b0b;
    margin-bottom: 15px;
}

.section-header p {
    font-size: 1.2rem;
    color: #64748b;
    max-width: 500px;
    margin: 0 auto;
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.related-project-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.related-project-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.related-project-card .project-link {
    display: block;
    text-decoration: none;
    color: inherit;
}

.project-image {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.related-project-card:hover .project-image img {
    transform: scale(1.1);
}

.project-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(239, 68, 68, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.related-project-card:hover .project-overlay {
    opacity: 1;
}

.project-overlay i {
    color: white;
    font-size: 2rem;
}

.project-content {
    padding: 25px;
}

.project-category {
    color: #ef4444;
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
    display: block;
}

.related-project-card .project-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #1a0b0b;
    margin-bottom: 10px;
    line-height: 1.3;
}

.project-excerpt {
    color: #64748b;
    line-height: 1.5;
    font-size: 0.95rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .portfolio-detail-hero {
        padding: 120px 0 60px;
    }

    .project-title {
        font-size: 2.5rem;
    }

    .project-stats {
        gap: 30px;
    }

    .stat-item {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }

    .hero-actions {
        flex-direction: column;
        align-items: center;
    }

    .btn {
        width: 200px;
        justify-content: center;
    }

    .project-content-card {
        padding: 25px;
    }

    .related-grid {
        grid-template-columns: 1fr;
    }

    .section-header h2 {
        font-size: 2.2rem;
    }
}

@media (max-width: 576px) {
    .project-title {
        font-size: 2rem;
    }

    .project-stats {
        flex-direction: column;
        gap: 20px;
    }
}
</style>
@endsection
