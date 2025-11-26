<footer class="agency-footer">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-brand">
                    <div class="brand-logo">
                        <i class="fas fa-fire"></i>
                        <span class="brand-text">{{ $settings['site_title'] ?? 'Creative Agency' }}</span>
                    </div>
                    <p class="footer-description">
                        We transform ideas into exceptional digital experiences. Let's build something amazing together.
                    </p>
                    <div class="trust-badges">
                        <span class="badge"><i class="fas fa-award"></i> Trusted</span>
                        <span class="badge"><i class="fas fa-shield-alt"></i> Secure</span>
                        <span class="badge"><i class="fas fa-bolt"></i> Fast</span>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="footer-heading">Services</h5>
                <ul class="footer-links">
                    <li><a href="#web-development"><i class="fas fa-chevron-right"></i>Web Development</a></li>
                    <li><a href="#mobile-apps"><i class="fas fa-chevron-right"></i>Mobile Apps</a></li>
                    <li><a href="#ui-ux"><i class="fas fa-chevron-right"></i>UI/UX Design</a></li>
                    <li><a href="#digital-marketing"><i class="fas fa-chevron-right"></i>Digital Marketing</a></li>
                    <li><a href="#seo"><i class="fas fa-chevron-right"></i>SEO Services</a></li>
                </ul>
            </div>

            <!-- Company Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="footer-heading">Company</h5>
                <ul class="footer-links">
                    <li><a href="/about"><i class="fas fa-chevron-right"></i>About Us</a></li>
                    <li><a href="/portfolio"><i class="fas fa-chevron-right"></i>Portfolio</a></li>
                    <li><a href="/team"><i class="fas fa-chevron-right"></i>Our Team</a></li>
                    <li><a href="/testimonials"><i class="fas fa-chevron-right"></i>Testimonials</a></li>
                    <li><a href="/careers"><i class="fas fa-chevron-right"></i>Careers</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="footer-heading">Get In Touch</h5>
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <span>{{ $settings['company_address'] ?? '123 Business Street, Digital City' }}</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <span>{{ $settings['contact_phone'] ?? '+92 300 1234567' }}</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <span>{{ $settings['contact_email'] ?? 'hello@creativeagency.com' }}</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <span>Mon - Fri: 9:00 - 18:00</span>
                        </div>
                    </div>
                </div>

                <!-- Newsletter Subscription -->
                <div class="newsletter">
                    <h6>Stay Updated</h6>
                    <div class="subscribe-form">
                        <input type="email" placeholder="Enter your email" class="form-control">
                        <button class="btn-subscribe">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="social-links">
                        <a href="{{ $settings['facebook_url'] ?? '#' }}" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{ $settings['twitter_url'] ?? '#' }}" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="{{ $settings['linkedin_url'] ?? '#' }}" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="{{ $settings['instagram_url'] ?? '#' }}" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{ $settings['youtube_url'] ?? '#' }}" class="social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-copyright">
                        <p>&copy; {{ date('Y') }} {{ $settings['site_title'] ?? 'Creative Agency' }}. All rights reserved. |
                           <a href="/privacy">Privacy Policy</a> |
                           <a href="/terms">Terms of Service</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.agency-footer {
    background: linear-gradient(135deg, #1a0b0b 0%, #2d1a1a 100%);
    color: #fff;
    padding: 80px 0 20px;
    margin-top: 80px;
    border-top: 4px solid #dc2626;
    position: relative;
}

.agency-footer::before {
    content: '';
    position: absolute;
    top: -4px;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #dc2626, #ef4444, #dc2626);
}

.footer-brand .brand-logo {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.footer-brand .brand-logo i {
    font-size: 2rem;
    color: #dc2626;
    margin-right: 10px;
    text-shadow: 0 0 10px rgba(220, 38, 38, 0.5);
}

.footer-brand .brand-text {
    font-size: 1.5rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.footer-description {
    color: #e5e5e5;
    line-height: 1.6;
    margin-bottom: 20px;
}

.trust-badges .badge {
    background: linear-gradient(135deg, #dc2626, #ef4444);
    color: #fff;
    padding: 6px 14px;
    border-radius: 20px;
    margin-right: 8px;
    font-size: 0.8rem;
    border: 1px solid rgba(255,255,255,0.2);
}

.footer-heading {
    color: #fff;
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 20px;
    position: relative;
}

.footer-heading::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 30px;
    height: 2px;
    background: #dc2626;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #e5e5e5;
    text-decoration: none;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
}

.footer-links a:hover {
    color: #dc2626;
    transform: translateX(5px);
}

.footer-links i {
    font-size: 0.7rem;
    margin-right: 8px;
    color: #dc2626;
}

.contact-info .contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.contact-icon {
    width: 35px;
    height: 35px;
    background: linear-gradient(135deg, #dc2626, #ef4444);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    color: #fff;
    box-shadow: 0 4px 8px rgba(220, 38, 38, 0.3);
}

.contact-text {
    color: #e5e5e5;
}

.newsletter {
    margin-top: 25px;
    padding: 20px;
    background: rgba(220, 38, 38, 0.1);
    border-radius: 10px;
    border: 1px solid rgba(220, 38, 38, 0.2);
}

.newsletter h6 {
    color: #fff;
    margin-bottom: 12px;
    font-weight: 600;
}

.subscribe-form {
    position: relative;
    display: flex;
}

.subscribe-form .form-control {
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    color: #fff;
    border-radius: 25px;
    padding: 10px 20px;
    height: 45px;
    backdrop-filter: blur(10px);
}

.subscribe-form .form-control::placeholder {
    color: #b0b0b0;
}

.subscribe-form .form-control:focus {
    border-color: #dc2626;
    box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.2);
}

.btn-subscribe {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    background: linear-gradient(135deg, #dc2626, #ef4444);
    color: #fff;
    border: none;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px rgba(220, 38, 38, 0.3);
}

.btn-subscribe:hover {
    background: linear-gradient(135deg, #b91c1c, #dc2626);
    transform: translateY(-50%) scale(1.1);
}

.footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.1);
    padding-top: 20px;
    margin-top: 40px;
}

.social-links {
    display: flex;
    gap: 15px;
}

.social-link {
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.2);
}

.social-link:hover {
    background: linear-gradient(135deg, #dc2626, #ef4444);
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(220, 38, 38, 0.3);
}

.footer-copyright {
    color: #e5e5e5;
    font-size: 0.9rem;
}

.footer-copyright a {
    color: #e5e5e5;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-copyright a:hover {
    color: #dc2626;
}

/* Responsive */
@media (max-width: 768px) {
    .agency-footer {
        padding: 60px 0 20px;
        margin-top: 60px;
    }

    .footer-bottom .row {
        text-align: center;
    }

    .social-links {
        justify-content: center;
        margin-bottom: 15px;
    }

    .newsletter {
        padding: 15px;
    }
}
</style>
