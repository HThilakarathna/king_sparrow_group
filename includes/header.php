<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | King Sparrow Group' : 'King Sparrow Group - Premium Software Solutions'; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'King Sparrow Group is a product-first tech company in Sri Lanka specializing in enterprise software architecture, custom web applications, and scalable digital solutions.'; ?>">
    <meta name="keywords" content="Software Development, Web Design, Enterprise Architecture, POS Systems, Sri Lanka Tech, King Sparrow Group, Custom ERP">
    <meta name="author" content="King Sparrow Group">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kingsparrowgroups.com/">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' | King Sparrow Group' : 'King Sparrow Group - Premium Software Solutions'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'King Sparrow Group is a product-first tech company in Sri Lanka specializing in enterprise software architecture, custom web applications, and scalable digital solutions.'; ?>">
    <meta property="og:image" content="https://kingsparrowgroups.com/logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://kingsparrowgroups.com/">
    <meta property="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle . ' | King Sparrow Group' : 'King Sparrow Group - Premium Software Solutions'; ?>">
    <meta property="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'King Sparrow Group is a product-first tech company in Sri Lanka specializing in enterprise software architecture, custom web applications, and scalable digital solutions.'; ?>">
    <meta property="twitter:image" content="https://kingsparrowgroups.com/logo.png">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://kingsparrowgroups.com/">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN (must load FIRST) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Configuration (must come AFTER CDN script) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            maroon: '#a91c22',
                            'maroon-light': '#c92a31',
                            gold: '#f7931e',
                            'gold-light': '#fbb03b',
                            blue: '#1e3a8a',
                            'blue-light': '#e0f2fe',
                            dark: '#111827',
                            muted: '#6b7280',
                            light: '#f9fafb',
                            white: '#ffffff',
                        }
                    },
                    fontFamily: {
                        sans: ['Manrope', 'sans-serif'],
                        display: ['Fraunces', 'serif'],
                        inter: ['Inter', 'sans-serif']
                    },
                    animation: {
                        'pulse-slow': 'pulse-slow 6s ease-in-out infinite',
                        'float': 'float 5s ease-in-out infinite',
                        'spin-very-slow': 'spin-very-slow 15s linear infinite',
                        'word-slide': 'word-slide 10s cubic-bezier(0.4, 0, 0.2, 1) infinite',
                        'marquee': 'marquee 30s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'pulse-slow': {
                            '0%, 100%': { opacity: 0.6, transform: 'scale(1)' },
                            '50%': { opacity: 1, transform: 'scale(1.05)' }
                        },
                        'spin-very-slow': {
                            from: { transform: 'rotate(0deg)' },
                            to: { transform: 'rotate(360deg)' }
                        },
                        'word-slide': {
                            '0%, 20%': { transform: 'translateY(0)' },
                            '30%, 50%': { transform: 'translateY(-25%)' },
                            '60%, 80%': { transform: 'translateY(-50%)' },
                            '90%, 100%': { transform: 'translateY(-75%)' }
                        },
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-50%)' }
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom Styles processed by Tailwind Play CDN -->
    <style type="text/tailwindcss">
        @layer base {
            html, body {
                @apply font-sans bg-[#0B1120] text-gray-300;
                overflow-x: hidden;
                max-width: 100%;
                box-sizing: border-box;
            }
            *, *::before, *::after {
                box-sizing: border-box;
            }
        }
        @layer components {
            .container-custom {
                @apply w-full max-w-[1280px] mx-auto px-6 md:px-10 lg:px-12;
            }
            .section-padding {
                @apply py-24;
            }
            .btn-primary {
                @apply inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-[1.25rem] font-bold text-[0.95rem] transition-all duration-300 bg-[#a91c22] text-white shadow-lg hover:-translate-y-1 hover:bg-[#1e3a8a] hover:text-white;
            }
            .btn-secondary {
                @apply inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-[1.25rem] font-bold text-[0.95rem] transition-all duration-300 bg-white text-[#1e3a8a] border border-blue-300 hover:-translate-y-1 hover:border-[#1e3a8a];
            }
        }
    </style>

    <!-- Extra CSS (not processed by Tailwind) -->
    <style>
        [x-cloak] { display: none !important; }
        .perspective-1000 { perspective: 1000px; }
        @keyframes float-up-down {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float-delayed-1 { animation: float-up-down 7s ease-in-out infinite; }
        .animate-float-delayed-2 { animation: float-up-down 8s ease-in-out infinite 1.5s; }
        .animate-float-delayed-3 { animation: float-up-down 6.5s ease-in-out infinite 2.5s; }
    </style>

    <!-- Alpine.js for Interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lenis Smooth Scroll -->
    <script src="https://unpkg.com/lenis@1.1.20/dist/lenis.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.20/dist/lenis.css">

    <!-- AOS Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 24)">

<header class="fixed inset-x-0 top-0 z-[100] transition-all duration-500">
    <div class="container-custom pt-4">
        <div :class="scrolled ? 'bg-[#0B1120]/95 border-gray-800 shadow-lg' : 'bg-[#0B1120]/50 border-gray-800/50 shadow-sm backdrop-blur-md'"
            class="flex items-center justify-between rounded-full px-5 py-2.5 md:px-8 border transition-all duration-500">

            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-3 group shrink-0">
                <img src="logo.png" alt="King Sparrow Group Logo" class="h-12 w-auto transition-transform group-hover:scale-105">
                <span class="text-lg font-black tracking-tight text-white hidden xl:block leading-tight">King Sparrow <span class="text-[#e0f2fe] font-black">Group</span></span>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center gap-0">
                <a href="index.php" class="px-3 py-2 text-[0.875rem] font-bold text-gray-300 hover:text-[#e0f2fe] transition-colors whitespace-nowrap">Home</a>
                <a href="about.php" class="px-3 py-2 text-[0.875rem] font-bold text-gray-300 hover:text-[#e0f2fe] transition-colors whitespace-nowrap">About Us</a>
                <a href="product.php" class="px-3 py-2 text-[0.875rem] font-bold text-gray-300 hover:text-[#e0f2fe] transition-colors whitespace-nowrap">Our Product</a>
                <a href="clients.php" class="px-3 py-2 text-[0.875rem] font-bold text-gray-300 hover:text-[#e0f2fe] transition-colors whitespace-nowrap">Key Clients</a>
                <a href="contact.php" class="px-3 py-2 text-[0.875rem] font-bold text-gray-300 hover:text-[#e0f2fe] transition-colors whitespace-nowrap">Contact Us</a>
            </nav>

            <!-- Desktop CTA -->
            <div class="hidden lg:flex items-center shrink-0">
                <a href="contact.php"
                    class="inline-flex items-center justify-center rounded-full bg-[#a91c22] hover:bg-[#f7931e] px-6 py-2 text-[0.875rem] font-black text-white shadow-lg transition-all duration-300 hover:-translate-y-0.5 whitespace-nowrap">
                    Let's Talk
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="mobileMenu = true"
                class="lg:hidden p-2 text-[#e0f2fe] hover:text-white hover:scale-110 transition-transform">
                <i data-lucide="menu" class="w-7 h-7"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<template x-if="mobileMenu">
    <div class="fixed inset-0 z-[110] lg:hidden">
        <div @click="mobileMenu = false" class="absolute inset-0 bg-gray-900/40 backdrop-blur-md"></div>
        <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            class="absolute inset-y-0 right-0 w-80 max-w-[85vw] bg-[#0B1120] shadow-2xl flex flex-col overflow-hidden border-l border-gray-800">

            <div class="flex items-center justify-between border-b border-gray-800 px-6 py-6">
                <span class="font-black text-white text-lg tracking-tight">King Sparrow Group</span>
                <button @click="mobileMenu = false"
                    class="p-2.5 bg-gray-900 text-gray-400 rounded-full hover:bg-gray-800 hover:text-white transition-colors border border-gray-800">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <nav class="flex-1 px-6 py-8 space-y-3 overflow-y-auto">
                <a @click="mobileMenu = false" href="index.php" class="flex items-center px-5 py-4 bg-[#111827] rounded-2xl font-bold text-gray-300 hover:bg-[#1e3a8a]/20 hover:text-white transition-all border border-gray-800 hover:border-[#1e3a8a]/50">Home</a>
                <a @click="mobileMenu = false" href="about.php" class="flex items-center px-5 py-4 bg-[#111827] rounded-2xl font-bold text-gray-300 hover:bg-[#1e3a8a]/20 hover:text-white transition-all border border-gray-800 hover:border-[#1e3a8a]/50">About Us</a>
                <a @click="mobileMenu = false" href="product.php" class="flex items-center px-5 py-4 bg-[#111827] rounded-2xl font-bold text-gray-300 hover:bg-[#1e3a8a]/20 hover:text-white transition-all border border-gray-800 hover:border-[#1e3a8a]/50">Our Product</a>
                <a @click="mobileMenu = false" href="clients.php" class="flex items-center px-5 py-4 bg-[#111827] rounded-2xl font-bold text-gray-300 hover:bg-[#1e3a8a]/20 hover:text-white transition-all border border-gray-800 hover:border-[#1e3a8a]/50">Key Clients</a>
                <a @click="mobileMenu = false" href="contact.php" class="flex items-center px-5 py-4 bg-[#111827] rounded-2xl font-bold text-gray-300 hover:bg-[#1e3a8a]/20 hover:text-white transition-all border border-gray-800 hover:border-[#1e3a8a]/50">Contact Us</a>
            </nav>

            <div class="p-6 border-t border-gray-800 bg-[#0B1120]">
                <a @click="mobileMenu = false" href="contact.php"
                    class="flex w-full items-center justify-center gap-2 rounded-full bg-[#a91c22] hover:bg-[#f7931e] py-3.5 text-[0.95rem] font-black text-white shadow-lg transition-all duration-300">
                    Let's Talk
                </a>
            </div>
        </div>
    </div>
</template>
