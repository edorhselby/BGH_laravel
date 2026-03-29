<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "secondary-fixed-dim": "#e9c349",
              "outline-variant": "#d2c4b9",
              "on-primary-fixed-variant": "#574235",
              "background": "#faf9f6",
              "surface-container-lowest": "#ffffff",
              "on-tertiary": "#ffffff",
              "secondary-fixed": "#ffe088",
              "primary": "#715a4b",
              "primary-container": "#c0a493",
              "surface-container-low": "#f4f3f1",
              "primary-fixed-dim": "#dec1ae",
              "primary-fixed": "#fcdcc9",
              "surface-dim": "#dbdad7",
              "on-error": "#ffffff",
              "outline": "#80756b",
              "tertiary-container": "#b9a790",
              "inverse-on-surface": "#f2f1ee",
              "surface-tint": "#715a4b",
              "on-primary-container": "#4e3a2d",
              "error-container": "#ffdad6",
              "tertiary-fixed": "#f4dfc6",
              "on-surface": "#1a1c1a",
              "error": "#ba1a1a",
              "tertiary": "#6b5c48",
              "on-secondary-fixed": "#241a00",
              "on-primary-fixed": "#28180c",
              "surface-variant": "#e3e2e0",
              "on-tertiary-fixed-variant": "#524532",
              "on-secondary-fixed-variant": "#574500",
              "inverse-primary": "#dec1ae",
              "on-background": "#1a1c1a",
              "surface-container-high": "#e9e8e5",
              "surface": "#faf9f6",
              "on-tertiary-container": "#493c2a",
              "on-secondary": "#ffffff",
              "on-surface-variant": "#4e453d",
              "on-primary": "#ffffff",
              "on-secondary-container": "#745c00",
              "tertiary-fixed-dim": "#d7c4ab",
              "secondary-container": "#fed65b",
              "surface-container-highest": "#e3e2e0",
              "on-error-container": "#93000a",
              "on-tertiary-fixed": "#241a0a",
              "surface-container": "#efeeeb",
              "secondary": "#735c00",
              "inverse-surface": "#2f312f",
              "surface-bright": "#faf9f6"
            },
            fontFamily: {
              "headline": ["Noto Serif"],
              "body": ["Manrope"],
              "label": ["Manrope"]
            },
            borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .silk-satin-gradient {
            background: linear-gradient(135deg, #715a4b 0%, #c0a493 100%);
        }
        .glass-nav {
            background: rgba(250, 249, 246, 0.8);
            backdrop-filter: blur(20px);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 glass-nav">
<div class="flex justify-between items-center px-6 md:px-12 py-6 w-full max-w-screen-2xl mx-auto">
<div class="text-2xl font-serif italic text-stone-900 tracking-tight">Bee's Glam Hub</div>
<div class="hidden md:flex items-center space-x-8">
<a class="text-stone-500 hover:text-stone-900 transition-colors duration-300 font-manrope text-sm tracking-wide" href="/">Home</a>
<a class="text-stone-900 font-semibold border-b border-stone-400 font-manrope text-sm tracking-wide" href="#">Services</a>
{{-- <a class="text-stone-500 hover:text-stone-900 transition-colors duration-300 font-manrope text-sm tracking-wide" href="#">Classes</a>
<a class="text-stone-500 hover:text-stone-900 transition-colors duration-300 font-manrope text-sm tracking-wide" href="#">Shop</a>
<a class="text-stone-500 hover:text-stone-900 transition-colors duration-300 font-manrope text-sm tracking-wide" href="#">Portfolio</a>
</div> --}} <!-- // TODO:Make Pages for these pages.-->
<button class="silk-satin-gradient text-on-primary px-6 py-2 rounded-md font-medium text-sm tracking-wide shadow-sm hover:opacity-90 transition-all active:scale-95">
                Book Now
            </button>
</div>
</nav>
<main class="pt-32 pb-24 px-6 md:px-12 max-w-screen-2xl mx-auto">
<!-- Editorial Header Section -->
<header class="mb-24 flex flex-col md:flex-row items-end gap-12">
<div class="md:w-1/2">
<span class="text-secondary font-medium tracking-[0.2em] text-xs mb-4 block">EXQUISITE ARTISTRY</span>
<h1 class="font-headline text-5xl md:text-7xl text-on-surface leading-tight mb-8">Elevate Your Natural Radiance</h1>
<p class="text-on-surface-variant text-lg leading-relaxed max-w-xl">
                    Experience the pinnacle of luxury makeup artistry. From ethereal bridal looks to high-fashion editorial, our services are tailored to celebrate your unique bone structure and skin story.
                </p>
</div>
<div class="md:w-1/2 relative">
<div class="aspect-[4/5] bg-surface-container-low rounded-xl overflow-hidden shadow-2xl">
<img alt="Luxury Makeup Flatlay" class="w-full h-full object-cover" data-alt="Professional makeup tools and palette on marble surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwkFIQ1HpV5xHc4ShnSI7lD3VqtF0yaykvTg-8YjTawWgJF2UUZ2_6XUcJi-usWSLvTgmJolXE84BlrznO21Geoh6cUtz5XkbrS9H_lSJgGvsnObftsRpix-BNM0aOE3IhXGu_B9JQGhF7MdaoZ0E07o_LlTOdbw2wUnHSmRU6MwQDUh1Li0mq1iG4nzT1F4iEhstN9Pcjv4Y9bRZyUSOqdQCsWg3tf6KfTnlQvNSO0W3LknSYdPiRSFO9dae9WELcu9cKtsorhF8"/>
</div>
<div class="absolute -bottom-8 -left-8 w-48 h-48 bg-secondary-fixed/30 backdrop-blur-md rounded-full -z-10"></div>
</div>
</header>
<!-- Services Section (Bento Inspired Grid) -->
<section class="mb-32">
<div class="flex items-center justify-between mb-12">
<h2 class="font-headline text-3xl">Curated Service Menu</h2>
<div class="h-px flex-grow mx-8 bg-outline-variant/30"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-8">
<!-- Service Card 1: Large Featured -->
<div class="md:col-span-8 group relative bg-surface-container-low rounded-xl overflow-hidden hover:bg-surface-container-high transition-colors duration-500">
<div class="flex flex-col md:flex-row h-full">
<div class="md:w-1/2 p-10 flex flex-col justify-between">
<div>
<div class="flex items-center gap-2 mb-4">
<span class="bg-secondary-fixed px-3 py-1 text-[10px] font-bold tracking-widest text-on-secondary-fixed rounded-full">MOST COVETED</span>
<span class="text-on-surface-variant text-xs">90 MINS</span>
</div>
<h3 class="font-headline text-3xl mb-4">Signature Bridal Editorial</h3>
<p class="text-on-surface-variant mb-6 leading-relaxed">The ultimate bridal experience including a 2-hour consultation, luxury skin prep, and a timeless editorial-inspired makeup application for your special day.</p>
</div>
<div class="flex items-baseline gap-4">
<span class="text-3xl font-headline text-primary">$450</span>
<span class="text-outline text-sm line-through">$550</span>
</div>
</div>
<div class="md:w-1/2 overflow-hidden h-64 md:h-auto">
<img alt="Bridal Makeup Artistry" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Elegant bride with soft glowing makeup and jewelry" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjlDfRC34P5gbcer2th73GG3YwkLdVZIZkwfm9R9rSKTIDE4McMzxr1ld3gLswrvG4oNtMVWjO4g4P5MEoU2FcLN_0NQXJsxjFx3BQ1PgE4zD3GZJD3FhZLK8ts-cCyOrFjk6N360RIK2oFtJHTAAw5B-EPqxJO2eBrzCswKoHz1zMn8etk4IHXCE6GJzPoWWPf_J07_drl1CImjKLTYFND0o1WN95UMEMT-wHaCy29-4IoGR5KnBoODZG6QjVm7DRypU-IdczbQM"/>
</div>
</div>
</div>
<!-- Service Card 2: Medium -->
<div class="md:col-span-4 bg-surface-container-low p-10 rounded-xl flex flex-col justify-between hover:bg-surface-container-high transition-colors duration-500">
<div>
<span class="text-on-surface-variant text-xs mb-4 block">60 MINS</span>
<h3 class="font-headline text-2xl mb-4">The Glam Gala</h3>
<p class="text-on-surface-variant mb-8 text-sm leading-relaxed">Perfect for red carpet events, balls, or black-tie evenings. Focused on longevity and high-impact features.</p>
</div>
<div>
<div class="text-2xl font-headline text-primary mb-6">$180</div>
<button class="w-full py-4 border border-outline-variant/50 rounded-md text-sm font-medium hover:bg-surface-container-lowest transition-all">Select Service</button>
</div>
</div>
<!-- Service Card 3: Small -->
<div class="md:col-span-4 bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-colors duration-500">
<span class="text-on-surface-variant text-xs mb-4 block">45 MINS</span>
<h3 class="font-headline text-2xl mb-4">Soft Neutral Glow</h3>
<p class="text-on-surface-variant mb-8 text-sm leading-relaxed">Enhance your natural beauty with premium cream products and seamless blending for a 'no-makeup' look.</p>
<div class="text-2xl font-headline text-primary">$120</div>
</div>
<!-- Service Card 4: Detailed Small -->
<div class="md:col-span-4 bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-colors duration-500">
<span class="text-on-surface-variant text-xs mb-4 block">75 MINS</span>
<h3 class="font-headline text-2xl mb-4">Editorial Portrait</h3>
<p class="text-on-surface-variant mb-8 text-sm leading-relaxed">Designed specifically for the camera lens. Includes contouring techniques that define bone structure for photography.</p>
<div class="text-2xl font-headline text-primary">$210</div>
</div>
<!-- Service Card 5: Accent Small -->
<div class="md:col-span-4 bg-secondary-fixed/10 p-10 rounded-xl border border-secondary-fixed/20">
<span class="text-secondary font-bold text-xs mb-4 block">WORKSHOP</span>
<h3 class="font-headline text-2xl mb-4">1-on-1 Masterclass</h3>
<p class="text-on-surface-variant mb-8 text-sm leading-relaxed">A private session to audit your personal makeup bag and learn techniques tailored to your specific features.</p>
<div class="text-2xl font-headline text-primary">From $300</div>
</div>
</div>
</section>
<!-- Booking Flow Section -->
<section class="mb-32 grid grid-cols-1 lg:grid-cols-2 gap-16 items-start bg-surface-container-lowest p-12 rounded-xl">
<div>
<h2 class="font-headline text-4xl mb-6">Secure Your Session</h2>
<p class="text-on-surface-variant mb-12">Select your preferred date and time. Please note that a 20% non-refundable deposit is required to confirm all bookings.</p>
<div class="space-y-8">
<!-- Date Selection Visual -->
<div>
<label class="text-xs font-bold tracking-widest text-primary mb-4 block">01. SELECT DATE</label>
<div class="grid grid-cols-7 gap-2">
<!-- Mini Calendar Mockup -->
<div class="aspect-square flex items-center justify-center text-xs text-outline opacity-40">28</div>
<div class="aspect-square flex items-center justify-center text-xs text-outline opacity-40">29</div>
<div class="aspect-square flex items-center justify-center text-xs text-outline opacity-40">30</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">1</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">2</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">3</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">4</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">5</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold bg-primary text-on-primary rounded-full">6</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">7</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">8</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">9</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">10</div>
<div class="aspect-square flex items-center justify-center text-xs font-semibold">11</div>
</div>
</div>
<!-- Time Slots -->
<div>
<label class="text-xs font-bold tracking-widest text-primary mb-4 block">02. CHOOSE TIME</label>
<div class="flex flex-wrap gap-3">
<button class="px-6 py-2 border border-outline-variant rounded-md text-sm hover:border-primary">09:00 AM</button>
<button class="px-6 py-2 bg-surface-container-high border border-transparent rounded-md text-sm text-on-surface-variant cursor-not-allowed">11:30 AM</button>
<button class="px-6 py-2 border border-primary text-primary bg-primary-fixed rounded-md text-sm">02:00 PM</button>
<button class="px-6 py-2 border border-outline-variant rounded-md text-sm hover:border-primary">04:30 PM</button>
</div>
</div>
</div>
</div>
<div class="bg-surface-container-low p-10 rounded-xl">
<h3 class="font-headline text-2xl mb-8">Personal Details</h3>
<form class="space-y-6">
<div>
<label class="text-xs font-manrope font-semibold text-stone-600 mb-2 block">FULL NAME</label>
<input class="w-full bg-transparent border-0 border-b border-outline-variant/40 focus:ring-0 focus:border-primary py-2 text-sm" placeholder="Alexandra Bee" type="text"/>
</div>
<div>
<label class="text-xs font-manrope font-semibold text-stone-600 mb-2 block">EMAIL ADDRESS</label>
<input class="w-full bg-transparent border-0 border-b border-outline-variant/40 focus:ring-0 focus:border-primary py-2 text-sm" placeholder="alexandra@example.com" type="email"/>
</div>
<div>
<label class="text-xs font-manrope font-semibold text-stone-600 mb-2 block">OCCASION &amp; NOTES</label>
<textarea class="w-full bg-transparent border-0 border-b border-outline-variant/40 focus:ring-0 focus:border-primary py-2 text-sm resize-none" placeholder="Tell us about your event..." rows="3"></textarea>
</div>
<div class="pt-6 border-t border-outline-variant/20">
<div class="flex justify-between items-center mb-6">
<span class="font-medium">Total Balance</span>
<span class="text-2xl font-headline">$180.00</span>
</div>
<button class="w-full silk-satin-gradient text-on-primary py-4 rounded-md font-bold tracking-widest text-xs uppercase shadow-lg">Confirm Booking</button>
<p class="text-[10px] text-center text-on-surface-variant mt-4 px-6">By clicking confirm, you agree to our Terms of Service and Cancellation Policy.</p>
</div>
</form>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-16 px-12 bg-stone-100 dark:bg-stone-950 border-t border-stone-200/20">
<div class="flex flex-col md:flex-row justify-between items-start max-w-screen-2xl mx-auto w-full">
<div class="mb-12 md:mb-0">
<div class="font-noto-serif text-lg text-stone-900 mb-4">Bee's Glam Hub</div>
<p class="font-manrope text-sm text-stone-500 max-w-xs leading-relaxed">Curating timeless beauty experiences for the modern individual.</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-12 md:gap-24">
<div class="flex flex-col space-y-4">
<span class="font-manrope text-xs font-bold text-stone-900 tracking-widest uppercase mb-2">Discovery</span>
<a class="font-manrope text-sm text-stone-500 hover:text-stone-800 transition-colors" href="#">Portfolio</a>
<a class="font-manrope text-sm text-stone-500 hover:text-stone-800 transition-colors" href="#">Services</a>
<a class="font-manrope text-sm text-stone-500 hover:text-stone-800 transition-colors" href="#">Newsletter</a>
</div>
<div class="flex flex-col space-y-4">
<span class="font-manrope text-xs font-bold text-stone-900 tracking-widest uppercase mb-2">Connect</span>
<a class="font-manrope text-sm text-stone-500 hover:text-stone-800 transition-colors" href="#">Contact</a>
<a class="font-manrope text-sm text-stone-500 hover:text-stone-800 transition-colors" href="#">Instagram</a>
<a class="font-manrope text-sm text-stone-500 hover:text-stone-800 transition-colors" href="#">TikTok</a>
</div>
<div class="flex flex-col space-y-4">
<span class="font-manrope text-xs font-bold text-stone-900 tracking-widest uppercase mb-2">Legal</span>
<a class="font-manrope text-sm text-stone-500 hover:text-stone-800 transition-colors" href="#">Privacy Policy</a>
<a class="font-manrope text-sm text-stone-500 hover:text-stone-800 transition-colors" href="#">Terms of Use</a>
</div>
</div>
</div>
<div class="mt-16 pt-8 border-t border-stone-200/10 flex flex-col md:flex-row justify-between items-center w-full max-w-screen-2xl mx-auto">
<span class="font-manrope text-sm text-stone-500 tracking-wide">© 2024 Bee's Glam Hub. All Rights Reserved.</span>
<div class="flex gap-6 mt-4 md:mt-0">
<span class="material-symbols-outlined text-stone-500 text-xl">language</span>
<span class="material-symbols-outlined text-stone-500 text-xl">payments</span>
</div>
</div>
</footer>
</body></html>