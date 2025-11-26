<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['site_title'] ?? 'HIMOLOGICS' }} - {{ $page->title ?? '' }}</title>
    <meta name="description" content="{{ $page->meta_description ?? '' }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #B91C1C;  /* Beet Red */
            --primary-dark: #991B1B;
            --secondary: #6B7280; /* Gray */
            --dark: #111827;
            --light: #F9FAFB;
            --accent: #DC2626;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            color: #334155;
            background: #cccbcb;
            overflow-x: hidden;
            padding-top: 20px;
        }



        /* ===== MODERN HERO SECTION ===== */
        .hero-section {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin-top: 80px; /* Header ke neeche fix */
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.05)" points="0,1000 1000,0 1000,1000"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 1.5rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        .hero-description {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            margin-bottom: 2.5rem;
            max-width: 600px;
        }

        .btn-hero-primary {
            background: white;
            color: var(--primary);
            padding: 1rem 2.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }

        .btn-hero-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(255, 255, 255, 0.4);
        }

        .btn-hero-outline {
            background: transparent;
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            border: 2px solid rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }

        .btn-hero-outline:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-3px);
        }

        /* ===== MODERN TWO COLUMN SECTION ===== */
        .modern-section {
            padding: 5rem 0;
            background: white;
        }

        .modern-content {
            padding-right: 2rem;
        }

        .special-heading {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.1;
            color: var(--dark);
            margin-bottom: 1.5rem;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .modern-description {
            font-size: 1.1rem;
            color: var(--secondary);
            line-height: 1.8;
            margin-bottom: 2.5rem;
        }

        /* Features List */
        .features-list {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1.5rem;
            background: white;
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 1px solid #E5E7EB;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .feature-item:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .feature-text h4 {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.3rem;
        }

        .feature-text p {
            color: var(--secondary);
            margin: 0;
            font-size: 0.9rem;
        }

        /* ===== IMAGE SECTION ===== */
        .modern-image-section {
            position: relative;
        }

        .image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .main-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .image-container:hover .main-image {
            transform: scale(1.05);
        }

        /* About Popup */
        .about-popup {
            position: absolute;
            bottom: -10px;
            right: 30px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0.15));
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            padding: 2.5rem 2rem;
            border-radius: 24px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.25),
                        inset 0 1px 0 rgba(255, 255, 255, 0.6),
                        0 0 0 1px rgba(255, 255, 255, 0.2);
            max-width: 320px;
            animation: float 3s ease-in-out infinite;
            border: 1px solid rgba(255, 255, 255, 0.5);
            text-align: center;
        }

        .about-popup::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(185, 28, 28, 0.3), rgba(153, 27, 27, 0.2));
            border-radius: 24px;
            z-index: -1;
        }

        .about-popup h3 {
            color: white;
            font-weight: 800;
            margin-bottom: 1rem;
            font-size: 1.8rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            letter-spacing: -0.5px;
        }

        .about-popup p {
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.7;
            margin-bottom: 0;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
            font-weight: 500;
            font-size: 1.1rem;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.2); opacity: 1; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            33% { transform: translateY(-15px) rotate(1deg); }
            66% { transform: translateY(-8px) rotate(-1deg); }
        }

        /* ===== MODERN SERVICES SECTION ===== */
        .modern-services {
            padding: 6rem 0;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            position: relative;
            overflow: hidden;
        }

        .modern-services::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.8)" points="0,800 1000,400 1000,1000"/></svg>');
            background-size: cover;
            opacity: 0.5;
        }

        .services-header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            z-index: 2;
        }

        .services-subtitle {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: 1px;
        }

        .services-main-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1.1;
            margin-bottom: 1rem;
        }

        .services-description {
            font-size: 1.2rem;
            color: var(--secondary);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* ===== MODERN SERVICE CARDS ===== */
        /* ===== SERVICE CARDS TEAM STYLE ===== */
.service-card-team {
    background: #F8FAFC;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    border: 1px solid #E5E7EB;
    position: relative;
}

.service-card-team:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
}

.service-image {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.service-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.4s ease;
}

.service-card-team:hover .service-img {
    transform: scale(1.1);
}

.service-stats-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
    padding: 2rem 1.5rem 1rem;
    color: white;
}

.stats {
    display: flex;
    justify-content: space-around;
    gap: 1rem;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    display: block;
    color: white;
}

.stat-label {
    font-size: 0.8rem;
    opacity: 0.9;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.service-action-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.9);
    border: none;
    border-radius: 50%;
    color: var(--primary);
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-action-btn:hover {
    background: var(--primary);
    color: white;
    transform: scale(1.1);
}

.service-content {
    padding: 2rem;
    text-align: center;
    background: white;
}

.service-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: -50px auto 1rem;
    color: white;
    font-size: 1.5rem;
    position: relative;
    z-index: 2;
    box-shadow: 0 10px 25px rgba(185, 28, 28, 0.3);
}

.service-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 0.5rem;
}

.service-role {
    color: var(--primary);
    font-weight: 600;
    margin-bottom: 1rem;
    font-size: 1rem;
}

.service-description {
    color: var(--secondary);
    line-height: 1.6;
    margin-bottom: 1.5rem;
    font-size: 0.9rem;
}

.service-features {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: center;
    margin-bottom: 2rem;
}

.feature {
    background: rgba(185, 28, 28, 0.1);
    color: var(--primary);
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.service-cta-btn {
    background: transparent;
    color: var(--primary);
    padding: 0.8rem 2rem;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    border: 2px solid var(--primary);
    width: 100%;
    justify-content: center;
}

.service-cta-btn:hover {
    background: var(--primary);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(185, 28, 28, 0.3);
}

/* Service Section Responsive */
@media (max-width: 768px) {
    .service-image {
        height: 200px;
    }

    .service-content {
        padding: 1.5rem;
    }

    .service-icon {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
        margin: -40px auto 1rem;
    }

    .stats {
        flex-direction: column;
        gap: 0.5rem;
    }

    .service-features {
        gap: 0.3rem;
    }

    .feature {
        font-size: 0.7rem;
        padding: 0.3rem 0.6rem;
    }
}
        /* Service Stats */
        .service-stats {
            display: flex;
            justify-content: space-around;
            margin: 2rem 0;
            padding: 1.5rem 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            gap: 1rem;
        }

        .service-stats .stat {
            text-align: center;
            flex: 1;
        }

        .service-stats .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            display: block;
            line-height: 1;
            margin-bottom: 0.3rem;
        }

        .service-stats .stat-label {
            font-size: 0.8rem;
            color: var(--secondary);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .service-cta {
            background: transparent;
            color: var(--primary);
            padding: 0.8rem 2rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
            border: 2px solid var(--primary);
            margin-top: auto;
            width: 100%;
            text-align: center;
        }

        .service-cta:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(185, 28, 28, 0.3);
        }

        /* Services Grid Layout */
        .services-grid {
            position: relative;
            z-index: 2;
        }

        .services-grid .row {
            display: flex;
            flex-wrap: wrap;
        }

        .services-grid .col-lg-4 {
            display: flex;
        }

        /* ===== STATS SECTION ===== */
        .stats-section {
            padding: 5rem 0;
            background: white;
        }

        .stat-card {
            background: linear-gradient(135deg, #F8FAFC, #F1F5F9); /* Gray gradient */
            padding: 2.5rem 2rem;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #E5E7EB;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(185, 28, 28, 0.05), rgba(153, 27, 27, 0.1));
            opacity: 0;
            transition: all 0.3s ease;
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
            position: relative;
            z-index: 2;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 2;
        }

        .stat-label {
            color: var(--secondary);
            font-weight: 600;
            font-size: 1.1rem;
            position: relative;
            z-index: 2;
        }

        /* ===== MODERN TEAM SECTION ===== */
        .team-section {
            padding: 6rem 0;
            background: white;
            position: relative;
        }

        .team-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .team-subtitle {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1rem;
            letter-spacing: 1px;
        }

        .team-main-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1.1;
            margin-bottom: 1rem;
        }

        .team-description {
            font-size: 1.2rem;
            color: var(--secondary);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Team Cards */
        .team-card {
            background: #F8FAFC; /* Gray background */
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            border: 1px solid #E5E7EB;
            position: relative;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }

        .team-image {
            position: relative;
            overflow: hidden;
            height: 300px;
        }

        .member-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .team-card:hover .member-image {
            transform: scale(1.1);
        }

        .team-social {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .team-card:hover .team-social {
            opacity: 1;
            transform: translateY(0);
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .social-link:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        .share-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            color: var(--primary);
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .share-btn:hover {
            background: var(--primary);
            color: white;
            transform: scale(1.1);
        }

        .team-content {
            padding: 2rem;
            text-align: center;
            background: white;
        }

        .member-name {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }

        .member-role {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .member-bio {
            color: var(--secondary);
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* ===== CTA SECTION ===== */
        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="rgba(255,255,255,0.1)" points="0,0 1000,500 0,1000"/></svg>');
            background-size: cover;
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .cta-description {
            font-size: 1.3rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-buttons .btn {
            padding: 1.2rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .cta-buttons .btn-primary {
            background: white;
            color: var(--primary);
            border: none;
        }

        .cta-buttons .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 255, 255, 0.3);
        }

        .cta-buttons .btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.8);
            background: transparent;
        }

        .cta-buttons .btn-outline-light:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-3px);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero-section {
                margin-top: 70px;
                padding: 2rem 0;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-description {
                font-size: 1.1rem;
            }

            .special-heading {
                font-size: 2.2rem;
            }

            .modern-content {
                padding-right: 0;
                margin-bottom: 2rem;
            }

            .about-popup {
                position: relative;
                bottom: auto;
                right: auto;
                max-width: 100%;
                margin-top: 2rem;
            }

            .feature-item {
                padding: 1rem;
            }

            .feature-icon {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .services-main-title {
                font-size: 2.5rem;
            }

            .services-description {
                font-size: 1.1rem;
            }

            .service-card-modern {
                padding: 2rem 1.5rem;
                margin-bottom: 2rem;
            }

            .service-icon-modern {
                width: 80px;
                height: 80px;
                font-size: 2rem;
            }

            .service-stats {
                flex-direction: column;
                gap: 0.5rem;
            }

            .service-stats .stat {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.5rem 0;
            }

            .service-stats .stat-number {
                font-size: 1.5rem;
                margin-bottom: 0;
            }

            .service-stats .stat-label {
                font-size: 0.8rem;
                text-align: right;
            }

            .team-main-title {
                font-size: 2.5rem;
            }

            .team-description {
                font-size: 1.1rem;
            }

            .team-image {
                height: 250px;
            }

            .team-content {
                padding: 1.5rem;
            }

            .team-social {
                opacity: 1;
                transform: translateY(0);
            }

            .cta-title {
                font-size: 2.5rem;
            }

            .cta-description {
                font-size: 1.1rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-buttons .btn {
                width: 100%;
                max-width: 300px;
            }

            .social-icons {
                display: none !important;
            }
        }
        /* ===== MODERN TESTIMONIALS SECTION ===== */
.modern-testimonials {
    padding: 6rem 0;
    background: white;
    position: relative;
}

.section-header {
    margin-bottom: 4rem;
}

.section-badge {
    display: inline-block;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color: white;
    padding: 0.6rem 1.8rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    letter-spacing: 0.5px;
}

.section-title {
    font-size: 3.2rem;
    font-weight: 800;
    color: var(--dark);
    margin-bottom: 1rem;
    line-height: 1.1;
}

.section-description {
    font-size: 1.2rem;
    color: var(--secondary);
    max-width: 500px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Modern Testimonial Cards */
.testimonial-card-modern {
    background: #F8FAFC;
    border-radius: 20px;
    padding: 2.5rem;
    border: 1px solid #E5E7EB;
    transition: all 0.4s ease;
    position: relative;
    height: 100%;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.testimonial-card-modern:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    background: white;
    border-color: var(--primary);
}

/* Client Header */
.client-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.client-avatar-modern {
    position: relative;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid var(--primary);
    flex-shrink: 0;
}

.client-avatar-modern img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.status-indicator {
    position: absolute;
    bottom: 2px;
    right: 2px;
    width: 14px;
    height: 14px;
    background: #10B981;
    border: 2px solid white;
    border-radius: 50%;
}

.client-info-modern h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 0.3rem;
}

.client-role {
    color: var(--primary);
    font-weight: 600;
    font-size: 0.9rem;
    margin-bottom: 0.2rem;
}

.client-company {
    color: var(--secondary);
    font-size: 0.8rem;
    font-weight: 500;
}

/* Rating */
.rating-modern {
    display: flex;
    align-items: center;
    gap: 0.3rem;
    margin-bottom: 1.5rem;
}

.rating-modern i {
    color: #D1D5DB;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.rating-modern i.active {
    color: #FFD700;
}

.rating-text {
    margin-left: 0.8rem;
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--dark);
}

/* Testimonial Body */
.testimonial-body {
    position: relative;
}

.testimonial-text-modern {
    color: var(--secondary);
    line-height: 1.7;
    font-size: 1rem;
    margin: 0;
    font-style: italic;
}

.quote-icon {
    position: absolute;
    top: -10px;
    right: 0;
    color: var(--primary);
    opacity: 0.2;
    font-size: 3rem;
}

/* Stats Section */

    </style>

</head>
<body>
    <!-- Modern Header -->

    @include('sections.header')
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
     @include('sections.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('mainNavbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    // Mobile Menu Functionality
// document.addEventListener('DOMContentLoaded', function() {
//     const mobileMenuBtn = document.getElementById('mobileMenuBtn');
//     const mobileNav = document.getElementById('mobileNav');

//     if (mobileMenuBtn && mobileNav) {
//         mobileMenuBtn.addEventListener('click', function() {
//             this.classList.toggle('active');
//             mobileNav.classList.toggle('active');

//             // Prevent body scroll when menu is open
//             document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
//         });

//         // Close mobile menu when clicking on links
//         const mobileLinks = mobileNav.querySelectorAll('a');
//         mobileLinks.forEach(link => {
//             link.addEventListener('click', function() {
//                 mobileMenuBtn.classList.remove('active');
//                 mobileNav.classList.remove('active');
//                 document.body.style.overflow = '';
//             });
//         });

//         // Close mobile menu when clicking outside
//         document.addEventListener('click', function(event) {
//             if (!event.target.closest('.header-content') && mobileNav.classList.contains('active')) {
//                 mobileMenuBtn.classList.remove('active');
//                 mobileNav.classList.remove('active');
//                 document.body.style.overflow = '';
//             }
//         });
//     }
// });

    // Counter animation for stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number[data-count]');

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                counter.textContent = Math.floor(current) + (counter.getAttribute('data-count') === '24' ? '/7' : '');
            }, 16);
        });
    }

    // Smooth animations on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Animate feature cards
        const featureCards = document.querySelectorAll('.feature-card');
        featureCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = `all 0.6s ease ${index * 0.1}s`;

            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 500 + (index * 100));
        });

        // Animate modern section items
        const modernItems = document.querySelectorAll('.feature-item');
        modernItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateX(-30px)';
            item.style.transition = `all 0.6s ease ${index * 0.2}s`;

            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            }, 800 + (index * 200));
        });

        // Animate service cards
        const serviceCards = document.querySelectorAll('.service-card-modern');
        serviceCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px)';
            card.style.transition = `all 0.6s ease ${index * 0.2}s`;

            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 800 + (index * 200));
        });

        // Animate stat cards
        // const statCards = document.querySelectorAll('.stat-card');
        // statCards.forEach((card, index) => {
        //     card.style.opacity = '0';
        //     card.style.transform = 'translateY(30px)';
        //     card.style.transition = `all 0.6s ease ${index * 0.1}s`;

        //     setTimeout(() => {
        //         card.style.opacity = '1';
        //         card.style.transform = 'translateY(0)';
        //     }, 1000 + (index * 100));
        // });

        // Intersection Observer for counter animation
        // const statsSection = document.querySelector('.stats-section');
        // if (statsSection) {
        //     const observer = new IntersectionObserver((entries) => {
        //         entries.forEach(entry => {
        //             if (entry.isIntersecting) {
        //                 animateCounters();
        //                 observer.unobserve(entry.target);
        //             }
        //         });
        //     }, { threshold: 0.5 });

        //     observer.observe(statsSection);
        // }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });

    // Additional animation for service cards on hover
    document.addEventListener('DOMContentLoaded', function() {
        const serviceIcons = document.querySelectorAll('.service-icon-modern');
        serviceIcons.forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1) rotate(5deg)';
            });

            icon.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        });
    });

document.addEventListener('DOMContentLoaded', function() {
    const statNumbers = document.querySelectorAll('.stat-number');

    const animateValue = (element, start, end, duration) => {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            element.textContent = value;
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
    }, { threshold: 0.5 });

    statNumbers.forEach(stat => {
        observer.observe(stat);
    });
});

</script>
</body>
</html>
