@extends('layouts.app')

@section('content')
<!-- Contact Hero Section -->
<section class="contact-hero">
    <div class="container">
        <div class="row align-items-center min-vh-80">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="section-badge">
                        <i class="fas fa-comments me-2"></i>GET IN TOUCH
                    </div>
                    <h1 class="hero-title">{{ $contactPage->hero_title ?? "Let's Start Your Project" }}</h1>
                    <p class="hero-description">
                        {{ $contactPage->hero_description ?? "Ready to bring your ideas to life? We're here to help. Get in touch with us and let's create something amazing together." }}
                    </p>

                    <!-- Dynamic Contact Info -->
                    <div class="contact-info-grid">
                        @if(isset($contactPage->contact_info) && count($contactPage->contact_info) > 0)
                            @foreach($contactPage->contact_info as $info)
                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class="{{ $info['icon'] }}"></i>
                                </div>
                                <div class="info-content">
                                    <h4>{{ $info['title'] }}</h4>
                                    <p>{{ $info['details'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <!-- Default Contact Info -->
                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Visit Our Office</h4>
                                    <p>123 Business Street, Digital City</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Call Us</h4>
                                    <p>+92 300 1234567</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Email Us</h4>
                                    <p>hello@himologics.com</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-visual">
                    <div class="floating-element el-1">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="floating-element el-2">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="floating-element el-3">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="main-visual">
                        @if(isset($contactPage->hero_image))
                        <img src="{{ asset('storage/' . $contactPage->hero_image) }}" alt="Contact Us" class="img-fluid">
                        @else
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Contact Us" class="img-fluid">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map Section -->
<section class="contact-form-map">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="form-container">
                    <div class="form-header">
                        <h2>{{ $contactPage->form_title ?? 'Send Us a Message' }}</h2>
                        <p>{{ $contactPage->form_description ?? 'Fill out the form below and we will get back to you within 24 hours' }}</p>
                    </div>

                    <form class="contact-form" id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject *</label>
                                    <input type="text" id="subject" name="subject" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Dynamic Map Section -->
            <div class="col-lg-5">
                <div class="map-container">
                    <h3>Find Us Here</h3>

                    <!-- Location Controls -->
                    <div class="location-controls">
                        <button id="showOfficeLocation" class="location-btn active">
                            <i class="fas fa-building"></i> Our Office
                        </button>
                        <button id="showMyLocation" class="location-btn">
                            <i class="fas fa-location-arrow"></i> My Location
                        </button>
                        <button id="getDirections" class="location-btn">
                            <i class="fas fa-route"></i> Get Directions
                        </button>
                    </div>

                    <!-- Map Container -->
                    <div class="map-wrapper">
                        <div id="dynamicMap"></div>
                        <div id="mapLoading" class="map-loading">
                            <i class="fas fa-spinner fa-spin"></i>
                            <span>Loading Map...</span>
                        </div>
                    </div>

                    <!-- Location Info -->
                    <div class="location-info">
                        <div id="officeInfo" class="location-details active">
                            <h5><i class="fas fa-building"></i> HIMOLOGICS Office</h5>
                            <p>123 Foji chok, Harooanabd, Pakistan</p>
                        </div>
                        <div id="userInfo" class="location-details">
                            <h5><i class="fas fa-user"></i> Your Current Location</h5>
                            <p id="userAddress">Detecting your location...</p>
                        </div>
                    </div>

                    <!-- Quick Contact -->
                    <div class="quick-contact">
                        <h4>Quick Contact</h4>
                        <div class="quick-links">
                            <a href="tel:+923001234567" class="quick-link">
                                <i class="fas fa-phone"></i>
                                <span>Call Now</span>
                            </a>
                            <a href="https://wa.me/923001234567" class="quick-link" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                <span>WhatsApp</span>
                            </a>
                            <a href="mailto:hello@himologics.com" class="quick-link">
                                <i class="fas fa-envelope"></i>
                                <span>Email</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="contact-faq">
    <div class="container">
        <div class="section-header text-center">
            <h2>Frequently Asked Questions</h2>
            <p>Quick answers to common questions</p>
        </div>

        <div class="faq-grid">
            <div class="faq-item">
                <h4>How long does a typical project take?</h4>
                <p>Project timelines vary based on complexity, but most web projects take 4-8 weeks from start to finish.</p>
            </div>

            <div class="faq-item">
                <h4>Do you provide ongoing support?</h4>
                <p>Yes, we offer comprehensive maintenance and support packages for all our clients.</p>
            </div>

            <div class="faq-item">
                <h4>What technologies do you work with?</h4>
                <p>We work with modern technologies including Laravel, React, Vue.js, and more.</p>
            </div>

            <div class="faq-item">
                <h4>Can you work with our existing team?</h4>
                <p>Absolutely! We love collaborating with in-house teams to achieve the best results.</p>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact Hero Styles */
.contact-hero {
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

.hero-title {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
    line-height: 1.1;
}

.gradient-text {
    background: linear-gradient(135deg, #ef4444, #dc2626);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-description {
    font-size: 1.2rem;
    line-height: 1.6;
    margin-bottom: 40px;
    opacity: 0.9;
}

/* Contact Info Grid */
.contact-info-grid {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-info-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
}

.contact-info-item:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateX(10px);
}

.info-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #dc2626, #ef4444);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
}

.info-content h4 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: white;
}

.info-content p {
    font-size: 0.9rem;
    opacity: 0.8;
    margin: 0;
}

/* Contact Visual */
.contact-visual {
    position: relative;
    height: 400px;
}

.main-visual {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 30px 60px rgba(0,0,0,0.5);
}

.floating-element {
    position: absolute;
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ef4444;
    font-size: 1.5rem;
    z-index: 2;
    animation: float 3s ease-in-out infinite;
}

.el-1 {
    top: 20%;
    left: 10%;
    animation-delay: 0s;
}

.el-2 {
    top: 60%;
    right: 15%;
    animation-delay: 1s;
}

.el-3 {
    bottom: 20%;
    left: 20%;
    animation-delay: 2s;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(5deg); }
}

/* Contact Form & Map Section */
.contact-form-map {
    padding: 100px 0;
    background: #f8f9fa;
}

.form-container {
    background: white;
    padding: 50px;
    border-radius: 25px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.1);
}

.form-header {
    text-align: center;
    margin-bottom: 40px;
}

.form-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a0b0b;
    margin-bottom: 10px;
}

.form-header p {
    font-size: 1.1rem;
    color: #666;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-weight: 600;
    margin-bottom: 8px;
    color: #1a0b0b;
}

.form-group input,
.form-group textarea {
    padding: 15px 20px;
    border: 2px solid #e5e7eb;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #dc2626;
    box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
}

.submit-btn {
    background: linear-gradient(135deg, #dc2626, #ef4444);
    color: white;
    border: none;
    padding: 18px 35px;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(220, 38, 38, 0.3);
}

/* Map Section */
.map-container {
    background: white;
    padding: 40px;
    border-radius: 25px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.1);
    height: fit-content;
}

.map-container h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1a0b0b;
    margin-bottom: 25px;
    text-align: center;
}

/* Location Controls */
.location-controls {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.location-btn {
    flex: 1;
    padding: 12px 15px;
    border: 2px solid #e5e7eb;
    background: white;
    color: #666;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 0.9rem;
}

.location-btn:hover {
    border-color: #dc2626;
    color: #dc2626;
}

.location-btn.active {
    background: #dc2626;
    border-color: #dc2626;
    color: white;
}

/* Map Wrapper */
.map-wrapper {
    position: relative;
    height: 300px;
    border-radius: 15px;
    overflow: hidden;
    margin-bottom: 20px;
    border: 2px solid #e5e7eb;
}

#dynamicMap {
    width: 100%;
    height: 100%;
}

.map-loading {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 10px;
    color: #666;
    font-weight: 600;
}

/* Location Info */
.location-info {
    margin-bottom: 25px;
}

.location-details {
    display: none;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
    border-left: 4px solid #dc2626;
}

.location-details.active {
    display: block;
}

.location-details h5 {
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 5px;
    color: #1a0b0b;
    display: flex;
    align-items: center;
    gap: 8px;
}

.location-details p {
    font-size: 0.9rem;
    color: #666;
    margin: 0;
}

/* Quick Contact */
.quick-contact {
    text-align: center;
}

.quick-contact h4 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: #1a0b0b;
}

.quick-links {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.quick-link {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    background: rgba(220, 38, 38, 0.1);
    color: #dc2626;
    text-decoration: none;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.quick-link:hover {
    background: #dc2626;
    color: white;
    transform: translateY(-2px);
}

/* FAQ Section */
.contact-faq {
    padding: 80px 0;
    background: white;
}

.contact-faq .section-header {
    margin-bottom: 50px;
}

.contact-faq .section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a0b0b;
    margin-bottom: 15px;
}

.contact-faq .section-header p {
    font-size: 1.1rem;
    color: #666;
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.faq-item {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 15px;
    border-left: 4px solid #dc2626;
}

.faq-item h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: #1a0b0b;
}

.faq-item p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 992px) {
    .contact-hero {
        padding: 120px 0 60px;
    }

    .hero-title {
        font-size: 2.8rem;
    }

    .contact-visual {
        height: 350px;
        margin-top: 40px;
    }

    .map-container {
        margin-top: 40px;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.2rem;
    }

    .form-container {
        padding: 30px 25px;
    }

    .map-container {
        padding: 30px 25px;
    }

    .location-controls {
        flex-direction: column;
    }

    .quick-links {
        flex-direction: column;
    }

    .faq-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 576px) {
    .contact-hero {
        padding: 100px 0 40px;
    }

    .hero-title {
        font-size: 1.8rem;
    }

    .contact-info-item {
        padding: 15px;
    }

    .floating-element {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
}
</style>

<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>

<script>
// Google Maps variables
let map;
let officeMarker;
let userMarker;
let directionsService;
let directionsRenderer;
let geocoder;

// Office location (HIMOLOGICS office - you can change these coordinates)
const officeLocation = {
    lat: 24.8607,  // Karachi coordinates
    lng: 67.0011
};

function initMap() {
    // Hide loading
    document.getElementById('mapLoading').style.display = 'none';

    // Initialize services
    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    geocoder = new google.maps.Geocoder();

    // Create map
    map = new google.maps.Map(document.getElementById('dynamicMap'), {
        zoom: 15,
        center: officeLocation,
        styles: [
            {
                "featureType": "all",
                "elementType": "geometry",
                "stylers": [{ "color": "#f5f5f5" }]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{ "color": "#c9c9c9" }]
            }
        ]
    });

    directionsRenderer.setMap(map);

    // Add office marker
    officeMarker = new google.maps.Marker({
        position: officeLocation,
        map: map,
        title: 'HIMOLOGICS Office',
        icon: {
            url: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png'
        }
    });

    // Add info window for office
    const officeInfoWindow = new google.maps.InfoWindow({
        content: `
            <div style="padding: 10px; max-width: 200px;">
                <h4 style="margin: 0 0 5px 0; color: #dc2626; font-size: 14px;">🏢 HIMOLOGICS Office</h4>
                <p style="margin: 0; font-size: 12px; color: #666;">123 Business Street, Digital City</p>
                <p style="margin: 5px 0 0 0; font-size: 11px; color: #999;">Karachi, Pakistan</p>
            </div>
        `
    });

    officeMarker.addListener('click', () => {
        officeInfoWindow.open(map, officeMarker);
    });

    // Show office location by default
    showOfficeLocation();
}

// Show office location
function showOfficeLocation() {
    map.setCenter(officeLocation);
    map.setZoom(15);

    // Update UI
    updateActiveButton('showOfficeLocation');
    document.getElementById('officeInfo').classList.add('active');
    document.getElementById('userInfo').classList.remove('active');

    // Clear directions
    directionsRenderer.setDirections({ routes: [] });

    // Show office marker, hide user marker
    if (officeMarker) officeMarker.setMap(map);
    if (userMarker) userMarker.setMap(null);
}

// Show user's current location
function showMyLocation() {
    if (navigator.geolocation) {
        document.getElementById('mapLoading').style.display = 'flex';
        document.getElementById('userAddress').textContent = 'Detecting your location...';

        navigator.geolocation.getCurrentPosition(
            (position) => {
                const userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                // Center map on user location
                map.setCenter(userLocation);
                map.setZoom(15);

                // Add or update user marker
                if (userMarker) {
                    userMarker.setPosition(userLocation);
                } else {
                    userMarker = new google.maps.Marker({
                        position: userLocation,
                        map: map,
                        title: 'Your Location',
                        icon: {
                            url: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                        }
                    });
                }

                // Get address from coordinates
                geocoder.geocode({ location: userLocation }, (results, status) => {
                    if (status === 'OK' && results[0]) {
                        document.getElementById('userAddress').textContent = results[0].formatted_address;
                    } else {
                        document.getElementById('userAddress').textContent = 'Location detected (address not available)';
                    }
                });

                // Update UI
                updateActiveButton('showMyLocation');
                document.getElementById('officeInfo').classList.remove('active');
                document.getElementById('userInfo').classList.add('active');
                document.getElementById('mapLoading').style.display = 'none';

                // Show user marker, hide office marker
                if (userMarker) userMarker.setMap(map);
                if (officeMarker) officeMarker.setMap(null);
            },
            (error) => {
                document.getElementById('mapLoading').style.display = 'none';
                alert('Unable to get your location. Please ensure location services are enabled.');
                console.error('Geolocation error:', error);
            },
            {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 60000
            }
        );
    } else {
        alert('Geolocation is not supported by this browser.');
    }
}

// Get directions from user to office
function getDirections() {
    if (navigator.geolocation) {
        document.getElementById('mapLoading').style.display = 'flex';

        navigator.geolocation.getCurrentPosition(
            (position) => {
                const userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                const request = {
                    origin: userLocation,
                    destination: officeLocation,
                    travelMode: 'DRIVING'
                };

                directionsService.route(request, (result, status) => {
                    document.getElementById('mapLoading').style.display = 'none';

                    if (status === 'OK') {
                        directionsRenderer.setDirections(result);

                        // Update UI
                        updateActiveButton('getDirections');
                        document.getElementById('officeInfo').classList.add('active');
                        document.getElementById('userInfo').classList.remove('active');

                        // Hide markers when showing directions
                        if (officeMarker) officeMarker.setMap(null);
                        if (userMarker) userMarker.setMap(null);
                    } else {
                        alert('Could not get directions: ' + status);
                    }
                });
            },
            (error) => {
                document.getElementById('mapLoading').style.display = 'none';
                alert('Unable to get your location for directions.');
            }
        );
    } else {
        alert('Geolocation is not supported by this browser.');
    }
}

// Update active button state
function updateActiveButton(activeId) {
    document.querySelectorAll('.location-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById(activeId).classList.add('active');
}

// Event listeners when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Map controls
    document.getElementById('showOfficeLocation').addEventListener('click', showOfficeLocation);
    document.getElementById('showMyLocation').addEventListener('click', showMyLocation);
    document.getElementById('getDirections').addEventListener('click', getDirections);

    // Contact form handling
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Sending...</span>';
            submitBtn.disabled = true;

            // Simulate form submission
            setTimeout(() => {
                // Show success message
                submitBtn.innerHTML = '<i class="fas fa-check"></i><span>Message Sent!</span>';
                submitBtn.style.background = '#10b981';

                // Reset form
                setTimeout(() => {
                    contactForm.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    submitBtn.style.background = '';
                }, 2000);
            }, 2000);
        });
    }

    // Add floating animation to elements
    const floatingElements = document.querySelectorAll('.floating-element');
    floatingElements.forEach((el, index) => {
        el.style.animationDelay = `${index * 0.5}s`;
    });
});

// Handle Google Maps API loading error
window.gm_authFailure = function() {
    document.getElementById('mapLoading').innerHTML = `
        <div style="text-align: center;">
            <i class="fas fa-exclamation-triangle" style="color: #dc2626; font-size: 2rem; margin-bottom: 10px;"></i>
            <p>Google Maps failed to load.</p>
            <p style="font-size: 0.8rem; color: #999;">Please check your API key</p>
        </div>
    `;
};
</script>
@endsection
