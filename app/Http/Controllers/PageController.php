<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\TeamMember;
use App\Models\Service;
use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\Portfolio;

class PageController extends Controller
{
    public function home()
    {
        // TEMPORARY: Sab kuch hardcoded
        $page = (object) [
            'title' => 'Welcome to Our Software House',
            'content' => '<p>We are a creative digital agency transforming ideas into exceptional digital experiences.</p>'
        ];

        $settings = [];

        // TEMPORARY: Empty arrays
        $testimonials = [];
        $teamMembers = [];
        $services = [];

        $stats = [
            (object) ['title' => 'Projects Completed', 'value' => 250, 'icon' => 'fas fa-project-diagram'],
            (object) ['title' => 'Happy Clients', 'value' => 150, 'icon' => 'fas fa-users'],
            (object) ['title' => 'Years Experience', 'value' => 5, 'icon' => 'fas fa-award'],
            (object) ['title' => 'Support', 'value' => 24, 'icon' => 'fas fa-clock']
        ];

        return view('pages.home', compact('page', 'settings', 'testimonials', 'teamMembers', 'services','stats'));
    }

    public function about()
    {
        $settings = [];

        $aboutPage = (object) [
            'hero_title' => 'About Our Company',
            'hero_description' => 'We are a creative digital agency transforming ideas into exceptional digital experiences.',
            'mission_text' => 'To deliver innovative digital solutions that drive business growth and success.',
            'vision_text' => 'To be the leading digital agency recognized for transforming businesses through technology.',
            'values' => [
                ['title' => 'Innovation', 'description' => 'We embrace new technologies and creative approaches.', 'icon' => 'fas fa-lightbulb'],
                ['title' => 'Collaboration', 'description' => 'We work closely with our clients as partners.', 'icon' => 'fas fa-handshake'],
                ['title' => 'Excellence', 'description' => 'We strive for the highest quality in everything we do.', 'icon' => 'fas fa-award']
            ],
            'stats' => [
                ['number' => '5+', 'label' => 'Years Experience'],
                ['number' => '150+', 'label' => 'Happy Clients'],
                ['number' => '250+', 'label' => 'Projects Completed']
            ]
        ];

        return view('pages.about', compact('aboutPage', 'settings'));
    }

    public function contact()
    {
        $settings = [];

        $contactPage = (object) [
            'hero_title' => "Let's Start Your Project",
            'hero_description' => "Ready to bring your ideas to life? We're here to help. Get in touch with us and let's create something amazing together.",
            'form_title' => 'Send Us a Message',
            'form_description' => 'Fill out the form below and we will get back to you within 24 hours',
            'contact_info' => [
                ['icon' => 'fas fa-map-marker-alt', 'title' => 'Our Office', 'details' => '123 Business Street, Digital City'],
                ['icon' => 'fas fa-phone', 'title' => 'Phone Number', 'details' => '+92 300 1234567'],
                ['icon' => 'fas fa-envelope', 'title' => 'Email Address', 'details' => 'hello@company.com'],
                ['icon' => 'fas fa-clock', 'title' => 'Working Hours', 'details' => 'Mon - Fri: 9:00 - 18:00']
            ],
            'map_embed' => '<div style="background:#f0f0f0; height:300px; display:flex; align-items:center; justify-content:center;">Map will be displayed here</div>'
        ];

        return view('pages.contact', compact('contactPage', 'settings'));
    }

    public function portfolio()
    {
        $settings = [];

        // TEMPORARY: Empty portfolios
        $portfolios = [];
        $categories = [];

        return view('pages.portfolio', compact('portfolios', 'categories', 'settings'));
    }

    public function portfolioDetail($slug)
    {
        $settings = [];

        // TEMPORARY: Redirect to portfolio page
        return redirect()->route('portfolio');
    }

    public function services()
    {
        $settings = [];

        // TEMPORARY: Empty services
        $services = [];

        $servicesPage = (object) [
            'title' => 'Our Services',
            'content' => 'We offer comprehensive digital solutions to transform your business and drive growth.'
        ];

        return view('pages.services', compact('services', 'servicesPage', 'settings'));
    }
}
