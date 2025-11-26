<!-- Font Awesome for Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<header class="glass-header" id="mainHeader">
    <div class="container">
        <div class="header-content">

            <!-- LOGO -->
            <div class="logo">
                <span class="logo-text">
                    <i class="fa-solid fa-bolt"></i>
                    HIMOLOGICS
                </span>
            </div>

            <!-- DESKTOP NAVIGATION -->
            <nav class="nav-menu">
                <a href="/" class="nav-item {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="/services" class="nav-item {{ request()->is('services') ? 'active' : '' }}">Services</a>
                <a href="/portfolio" class="nav-item {{ request()->is('portfolio') ? 'active' : '' }}">Projects</a>
                <a href="/contact" class="nav-item {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </nav>

            <!-- LOGIN BUTTON -->
            <a href="/login" class="cta-btn">Login</a>

            <!-- MOBILE MENU BUTTON -->
            <button class="mobile-btn" id="mobileBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </div>

    <!-- MOBILE MENU (NEW ADDED) -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-content">
            <div class="mobile-menu-header">
                <div class="logo">
                    <span class="logo-text">
                        <i class="fa-solid fa-bolt"></i>
                        HIMOLOGICS
                    </span>
                </div>
                <button class="mobile-close-btn" id="mobileCloseBtn">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <nav class="mobile-nav">
                <a href="/" class="mobile-nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>Home
                </a>
                <a href="/about" class="mobile-nav-item {{ request()->is('about') ? 'active' : '' }}">
                    <i class="fas fa-info-circle"></i>About
                </a>
                <a href="/services" class="mobile-nav-item {{ request()->is('services') ? 'active' : '' }}">
                    <i class="fas fa-cogs"></i>Services
                </a>
                <a href="/portfolio" class="mobile-nav-item {{ request()->is('portfolio') ? 'active' : '' }}">
                    <i class="fas fa-briefcase"></i>Projects
                </a>
                <a href="/contact" class="mobile-nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <i class="fas fa-envelope"></i>Contact
                </a>
            </nav>

            <div class="mobile-menu-footer">
                <a href="/login" class="mobile-cta-btn">
                    <i class="fas fa-sign-in-alt"></i>Login
                </a>
            </div>
        </div>
    </div>
</header>

<style>
.glass-header {
    background: #8B0000;
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    padding: 15px 0;
    transition: 0.4s ease;
}

/* SCROLLED HEADER */
.glass-header.scrolled {
    background: #f8f9fa;
    border-bottom: 1px solid rgba(0,0,0,0.1);
}

/* HEADER WRAPPER */
.header-content {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* LOGO */
.logo-text {
    font-size: 1.8rem;
    font-weight: 800;
    letter-spacing: -0.5px;
    color: white !important;
    text-shadow: 0 2px 4px rgba(247, 244, 244, 0.952);
    display: flex;
    align-items: center;
    gap: 8px;
}

/* SCROLLED LOGO (RED TEXT) */
.glass-header.scrolled .logo-text {
    color: #8B0000 !important;
    text-shadow: none;
}

/* DESKTOP NAVIGATION */
.nav-menu {
    display: flex;
    gap: 2px;
    background: rgba(255,255,255,0.2);
    padding: 4px;
    border-radius: 12px;
}

.nav-item {
    padding: 10px 22px;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-size: 0.95rem;
    font-weight: 500;
    transition: 0.3s;
}

.nav-item:hover {
    background: rgba(255,255,255,0.3);
}

.nav-item.active {
    background: white;
    color: #8B0000;
    font-weight: 600;
}

/* SCROLLED NAV */
.glass-header.scrolled .nav-menu {
    background: rgba(139, 0, 0, 0.1);
}

.glass-header.scrolled .nav-item {
    color: #666;
}

.glass-header.scrolled .nav-item:hover {
    background: rgba(139, 0, 0, 0.1);
    color: #8B0000;
}

.glass-header.scrolled .nav-item.active {
    background: #8B0000;
    color: white;
}

/* LOGIN BUTTON */
.cta-btn {
    background: white;
    color: #8B0000;
    padding: 10px 22px;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s ease;
}

.cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255,255,255,0.3);
}

.glass-header.scrolled .cta-btn {
    background: #8B0000;
    color: white;
}

.glass-header.scrolled .cta-btn:hover {
    box-shadow: 0 5px 15px rgba(139, 0, 0, 0.3);
}

/* MOBILE BUTTON */
.mobile-btn {
    display: none;
    flex-direction: column;
    border: none;
    background: none;
    cursor: pointer;
    gap: 4px;
    padding: 8px;
    transition: 0.3s ease;
}

.mobile-btn span {
    width: 24px;
    height: 3px;
    background: white;
    border-radius: 2px;
    transition: 0.3s ease;
}

.mobile-btn:hover span {
    background: rgba(255,255,255,0.8);
}

.glass-header.scrolled .mobile-btn span {
    background: #8B0000;
}

.glass-header.scrolled .mobile-btn:hover span {
    background: rgba(139, 0, 0, 0.7);
}

/* MOBILE MENU (NEW STYLES) */
.mobile-menu {
    position: fixed;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100vh;
    background: rgba(139, 0, 0, 0.98);
    backdrop-filter: blur(20px);
    z-index: 1001;
    transition: 0.4s ease;
    overflow-y: auto;
}

.mobile-menu.active {
    left: 0;
}

.mobile-menu-content {
    padding: 20px;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.mobile-menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    border-bottom: 1px solid rgba(255,255,255,0.2);
}

.mobile-close-btn {
    background: none;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    padding: 10px;
    border-radius: 8px;
    transition: 0.3s ease;
}

.mobile-close-btn:hover {
    background: rgba(255,255,255,0.1);
}

.mobile-nav {
    flex: 1;
    padding: 30px 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.mobile-nav-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 18px 20px;
    color: white;
    text-decoration: none;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 500;
    transition: 0.3s ease;
    border: 1px solid rgba(255,255,255,0.1);
}

.mobile-nav-item i {
    width: 20px;
    text-align: center;
    font-size: 1.2rem;
}

.mobile-nav-item:hover {
    background: rgba(255,255,255,0.1);
    transform: translateX(10px);
}

.mobile-nav-item.active {
    background: white;
    color: #8B0000;
    font-weight: 600;
}

.mobile-menu-footer {
    padding: 20px 0;
    border-top: 1px solid rgba(255,255,255,0.2);
}

.mobile-cta-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    padding: 16px;
    background: white;
    color: #8B0000;
    text-decoration: none;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1.1rem;
    transition: 0.3s ease;
}

.mobile-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(255,255,255,0.2);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .nav-menu, .cta-btn {
        display: none;
    }

    .mobile-btn {
        display: flex;
    }

    .header-content {
        padding: 0 15px;
    }

    .logo-text {
        font-size: 1.6rem;
    }
}

@media (max-width: 480px) {
    .logo-text {
        font-size: 1.4rem;
    }

    .mobile-nav-item {
        padding: 15px 18px;
        font-size: 1rem;
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById("mainHeader");
    const mobileBtn = document.getElementById("mobileBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileCloseBtn = document.getElementById("mobileCloseBtn");
    const body = document.body;

    // Scroll effect
    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    // Mobile menu toggle
    if (mobileBtn && mobileMenu && mobileCloseBtn) {
        // Open mobile menu
        mobileBtn.addEventListener("click", () => {
            mobileMenu.classList.add("active");
            body.style.overflow = "hidden"; // Prevent body scroll
        });

        // Close mobile menu
        mobileCloseBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("active");
            body.style.overflow = ""; // Restore body scroll
        });

        // Close menu when clicking on links
        const mobileLinks = mobileMenu.querySelectorAll('.mobile-nav-item');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove("active");
                body.style.overflow = "";
            });
        });

        // Close menu when clicking outside
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove("active");
                body.style.overflow = "";
            }
        });

        // Close menu with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove("active");
                body.style.overflow = "";
            }
        });
    }

    // Mobile button animation
    if (mobileBtn) {
        mobileBtn.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    }
});
</script>
