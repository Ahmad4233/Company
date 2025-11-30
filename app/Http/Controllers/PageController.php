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
    // public function show($pageName)
    // {
    //     if ($pageName === 'about') {
    //         return $this->about();
    //     }

    //     $page = Page::where('page_name', $pageName)
    //                 ->where('is_active', true)
    //                 ->firstOrFail();

    //     $settings = Setting::pluck('value', 'key')->toArray();

    //     return view('pages.dynamic', compact('page', 'settings'));
    // }

    public function home()
    {
        $page = Page::where('page_name', 'home')
                    ->where('is_active', true)
                    ->first();

        $settings = Setting::pluck('value', 'key')->toArray();

        $testimonials = Testimonial::where('is_active', true)->get();

        // TEMPORARY FIX - Empty team members
        $teamMembers = [];
        // TeamMember::where('is_active', true)
        //           ->orderBy('order')
        //           ->get();

        $services = Service::where('is_active', true)
                      ->orderBy('order')
                      ->get();

        $stats = [
            (object) [
                'title' => 'Projects Completed',
                'value' => 250,
                'icon' => 'fas fa-project-diagram'
            ],
            (object) [
                'title' => 'Happy Clients',
                'value' => 150,
                'icon' => 'fas fa-users'
            ],
            (object) [
                'title' => 'Years Experience',
                'value' => 5,
                'icon' => 'fas fa-award'
            ],
            (object) [
                'title' => 'Support',
                'value' => 24,
                'icon' => 'fas fa-clock'
            ]
        ];

        if (!$page) {
            $page = (object) [
                'title' => 'Welcome to Our Software House',
                'content' => '<p>This is default home page content. Please add home page from database.</p>'
            ];
        }

        return view('pages.home', compact('page', 'settings', 'testimonials', 'teamMembers', 'services','stats'));
    }

    public function about()
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        $aboutPage = AboutPage::where('is_active', true)->first();

        if (!$aboutPage) {
            $aboutPage = (object) [
                'hero_title' => 'About HIMOLOGICS',
                'hero_description' => 'We are a creative digital agency transforming ideas into exceptional digital experiences.',
                'mission_text' => 'To deliver innovative digital solutions that drive business growth...',
                'vision_text' => 'To be the leading digital agency recognized for transforming businesses...',
                'values' => [
                    ['title' => 'Innovation', 'description' => 'We embrace new technologies...', 'icon' => 'fas fa-lightbulb'],
                    ['title' => 'Collaboration', 'description' => 'We work closely with our clients...', 'icon' => 'fas fa-handshake'],
                    ['title' => 'Excellence', 'description' => 'We strive for the highest quality...', 'icon' => 'fas fa-award']
                ],
                'stats' => [
                    ['number' => '5+', 'label' => 'Years Experience'],
                    ['number' => '150+', 'label' => 'Happy Clients'],
                    ['number' => '250+', 'label' => 'Projects Completed']
                ]
            ];
        }

        return view('pages.about', compact('aboutPage', 'settings'));
    }

    public function contact()
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        $contactPage = ContactPage::getActiveContactPage();

        if (!$contactPage) {
            $contactPage = (object) [
                'hero_title' => "Let's Start Your Project",
                'hero_description' => "Ready to bring your ideas to life? We're here to help. Get in touch with us and let's create something amazing together.",
                'form_title' => 'Send Us a Message',
                'form_description' => 'Fill out the form below and we will get back to you within 24 hours',
                'contact_info' => [
                    [
                        'icon' => 'fas fa-map-marker-alt',
                        'title' => 'Our Office',
                        'details' => '123 Business Street, Digital City, DC 10001'
                    ],
                    [
                        'icon' => 'fas fa-phone',
                        'title' => 'Phone Number',
                        'details' => '+92 300 1234567'
                    ],
                    [
                        'icon' => 'fas fa-envelope',
                        'title' => 'Email Address',
                        'details' => 'hello@himologics.com'
                    ],
                    [
                        'icon' => 'fas fa-clock',
                        'title' => 'Working Hours',
                        'details' => 'Mon - Fri: 9:00 - 18:00'
                    ]
                ],
                'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.215321225918!2d67.028246775558!3d24.814812746048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33c5361ff85a5%3A0x2401821560d53462!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>'
            ];
        }

        return view('pages.contact', compact('contactPage', 'settings'));
    }

    public function portfolio()
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        $portfolios = Portfolio::getActivePortfolios();

        $categories = Portfolio::where('is_active', true)
                              ->distinct()
                              ->pluck('category')
                              ->toArray();

        return view('pages.portfolio', compact('portfolios', 'categories', 'settings'));
    }

    public function portfolioDetail($slug)
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        $portfolio = Portfolio::where('slug', $slug)
                             ->where('is_active', true)
                             ->firstOrFail();

        // Increment views
        $portfolio->incrementViews();

        // Related portfolios
        $relatedPortfolios = Portfolio::where('is_active', true)
                                     ->where('category', $portfolio->category)
                                     ->where('id', '!=', $portfolio->id)
                                     ->limit(3)
                                     ->get();

        // ✅ YEH LINE CORRECT HAI - pages.portfolio-detail view use kar raha hai
        return view('pages.portfolio-detail', compact('portfolio', 'relatedPortfolios', 'settings'));
    }

    public function services()
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        // All active services with ordering
        $services = Service::where('is_active', true)
                          ->orderBy('order')
                          ->get();

        // Services page data (agar separate table hai toh)
        $servicesPage = Page::where('page_name', 'services')
                           ->where('is_active', true)
                           ->first();

        // Agar services page nahi hai toh default data
        if (!$servicesPage) {
            $servicesPage = (object) [
                'title' => 'Our Services',
                'content' => 'We offer comprehensive digital solutions to transform your business...'
            ];
        }

        return view('pages.services', compact('services', 'servicesPage', 'settings'));
    }
}
