<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
    @vite('resources/css/home.css')
</head>
<body>
    <h1> Admin Dashboard</h1>
    <p><a href='/services'>Services</a></p>
    <p><a href='/view bookings'>View Bookings</a></p>
</body>
</html> -->

<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Bee's Glam Hub | Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Manrope', sans-serif;
            background-color: #faf9f6;
            color: #1a1c1a;
        }
        .editorial-shadow {
            box-shadow: 0 32px 64px -12px rgba(26, 28, 26, 0.05);
        }
        .silk-gradient {
            background: linear-gradient(135deg, #715a4b 0%, #c0a493 100%);
        }
    </style>
</head>
<body class="flex min-h-screen">
<!-- SideNavBar Component -->
<aside class="h-screen w-64 border-r border-stone-200/30 bg-stone-50 dark:bg-stone-900 flex flex-col h-full py-8 px-4 font-manrope text-sm font-medium fixed left-0 top-0">
<div class="mb-10 px-2 flex items-center gap-3">
<div class="w-10 h-10 rounded-full silk-gradient flex items-center justify-center text-white font-serif italic text-lg">B</div>
<div>
<h2 class="text-xl font-serif text-stone-900 dark:text-stone-50 leading-none">Bee Admin</h2>
<p class="text-[10px] tracking-widest uppercase text-stone-500 mt-1">Creative Director</p>
</div>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 bg-stone-200/50 dark:bg-stone-800 text-stone-900 dark:text-stone-50 font-bold rounded-lg transition-all active:scale-95 duration-150" href="/admin/dashboard">
<span class="material-symbols-outlined text-lg">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all active:scale-95 duration-150" href="/admin/services">
<span class="material-symbols-outlined text-lg">brush</span>
<span>Services</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all active:scale-95 duration-150" href="/admin/classes">
<span class="material-symbols-outlined text-lg">school</span>
<span>Classes</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all active:scale-95 duration-150" href="/admin/products">
<span class="material-symbols-outlined text-lg">shopping_bag</span>
<span>Products</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all active:scale-95 duration-150" href="/admin/orders">
<span class="material-symbols-outlined text-lg">calendar_today</span>
<span>Orders</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all active:scale-95 duration-150" href="/admin/gallery">
<span class="material-symbols-outlined text-lg">photo_library</span>
<span>Gallery</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all active:scale-95 duration-150" href="/admin/testimonials">
<span class="material-symbols-outlined text-lg">auto_awesome</span>
<span>Testimonials</span>
</a>
</nav>
<div class="mt-auto">
<button class="w-full silk-gradient text-white py-3 rounded-lg flex items-center justify-center gap-2 font-semibold shadow-sm hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-sm">add</span>
<span>New Entry</span>
</button>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-64 min-h-screen flex flex-col">
<!-- TopNavBar (Admin) Component -->
<header class="w-full h-16 border-b border-stone-100/50 bg-white dark:bg-stone-900 flex justify-between items-center px-6 sticky top-0 z-40">
<div class="flex items-center flex-1">
<div class="relative w-64 group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-stone-400 text-lg group-focus-within:text-primary transition-colors">search</span>
<input class="w-full bg-surface-container-low border-none rounded-full py-1.5 pl-10 pr-4 text-sm focus:ring-1 focus:ring-primary-container font-body" placeholder="Search analytics or orders..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-stone-400 hover:opacity-70 transition-all active:opacity-80">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-2 text-stone-400 hover:opacity-70 transition-all active:opacity-80">
<span class="material-symbols-outlined">settings</span>
</button>
<div class="h-8 w-[1px] bg-stone-200 mx-1"></div>
<div class="flex items-center gap-3 ml-2">
<img alt="Bee Profile" class="w-8 h-8 rounded-full object-cover border border-stone-200" data-alt="Portrait of Bee, the creative director" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTYYFSUlCO5-KWcLiMbWvhmMI2s3dyjG8jL_hLUQBIPmXId-_VIM-lOURWxOSDwpxQtNwtWvaJd3retQiCJ6EejKCr48wvoTnjaLdoymUDwpRawO3rG6u5rtG55qR4ZttxbN3tVknR3SZ1_V-ryo0M-uGeBHZdN83WCzXohYRH_J2nIn9BQPIA57_1H6aaaI-yLLvJhIiZXqCWS89nWWo5ULTy7VMUGCGEW1R480Gm_AdXVv7DMYuWcqQBGEMoI8hGEFNvfHHHAuk"/>
<span class="text-sm font-semibold text-stone-800 dark:text-stone-100">Bee</span>
</div>
</div>
</header>
<!-- Dashboard Content -->
<div class="p-8 max-w-7xl mx-auto w-full space-y-12">
<!-- Welcome Header -->
<section class="flex justify-between items-end">
<div>
<h1 class="text-4xl font-headline italic text-on-surface mb-2">Good morning, Bee.</h1>
<p class="text-on-surface-variant font-body tracking-wide">Here’s what’s happening at the Hub today.</p>
</div>
<div class="flex gap-4">
<button class="px-6 py-2 border border-outline-variant/30 text-primary font-semibold rounded-md hover:bg-surface-container-low transition-colors text-sm">Download Report</button>
<button class="px-6 py-2 silk-gradient text-on-primary font-semibold rounded-md shadow-sm text-sm">Manage Schedule</button>
</div>
</section>
<!-- Stats Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-4 gap-6">
<!-- Revenue Card -->
<div class="md:col-span-2 bg-surface-container-low p-8 rounded-xl flex flex-col justify-between editorial-shadow">
<div class="flex justify-between items-start">
<span class="text-xs uppercase tracking-widest text-on-surface-variant font-bold">Monthly Revenue</span>
<span class="text-secondary-fixed-dim material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">payments</span>
</div>
<div class="mt-6">
<span class="text-5xl font-headline">$14,280</span>
<div class="mt-2 flex items-center gap-2 text-sm text-secondary">
<span class="material-symbols-outlined text-xs">trending_up</span>
<span>12% from last month</span>
</div>
</div>
</div>
<!-- Active Bookings -->
<div class="bg-surface-container-highest p-8 rounded-xl editorial-shadow">
<div class="flex justify-between items-start">
<span class="text-xs uppercase tracking-widest text-on-surface-variant font-bold">Bookings</span>
<span class="text-primary material-symbols-outlined">event_available</span>
</div>
<div class="mt-6">
<span class="text-4xl font-headline">48</span>
<p class="text-sm text-on-surface-variant mt-1">Pending approval</p>
</div>
</div>
<!-- Product Sales -->
<div class="bg-surface-container-low p-8 rounded-xl editorial-shadow">
<div class="flex justify-between items-start">
<span class="text-xs uppercase tracking-widest text-on-surface-variant font-bold">Sales</span>
<span class="text-tertiary material-symbols-outlined">shopping_cart</span>
</div>
<div class="mt-6">
<span class="text-4xl font-headline">124</span>
<p class="text-sm text-on-surface-variant mt-1">Units this week</p>
</div>
</div>
</section>
<!-- Main Dashboard Layout -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
<!-- Left Column: Recent Bookings -->
<div class="lg:col-span-2 space-y-8">
<div class="flex justify-between items-center px-2">
<h3 class="text-2xl font-headline italic">Upcoming Services</h3>
<a class="text-sm text-primary underline font-medium" href="#">View Calendar</a>
</div>
<div class="space-y-4">
<!-- Booking Item 1 -->
<div class="bg-white border-l-4 border-primary p-6 editorial-shadow flex items-center justify-between rounded-r-lg">
<div class="flex items-center gap-6">
<div class="text-center w-12">
<span class="block text-xs uppercase tracking-tighter text-stone-400 font-bold">Oct</span>
<span class="block text-xl font-headline leading-none">24</span>
</div>
<div class="h-10 w-[1px] bg-stone-100"></div>
<div>
<h4 class="font-bold text-on-surface">Bridal Glam Consultation</h4>
<p class="text-sm text-on-surface-variant">Sarah Jenkins • 10:30 AM</p>
</div>
</div>
<div class="flex items-center gap-4">
<span class="px-3 py-1 bg-primary-fixed text-on-primary-fixed text-[10px] font-bold uppercase tracking-widest rounded-full">Confirmed</span>
<button class="p-2 hover:bg-stone-50 rounded-full transition-colors">
<span class="material-symbols-outlined text-stone-400">more_vert</span>
</button>
</div>
</div>
<!-- Booking Item 2 -->
<div class="bg-white border-l-4 border-tertiary-container p-6 editorial-shadow flex items-center justify-between rounded-r-lg">
<div class="flex items-center gap-6">
<div class="text-center w-12">
<span class="block text-xs uppercase tracking-tighter text-stone-400 font-bold">Oct</span>
<span class="block text-xl font-headline leading-none">24</span>
</div>
<div class="h-10 w-[1px] bg-stone-100"></div>
<div>
<h4 class="font-bold text-on-surface">Masterclass: Contour Pro</h4>
<p class="text-sm text-on-surface-variant">Group Session (12/15) • 2:00 PM</p>
</div>
</div>
<div class="flex items-center gap-4">
<span class="px-3 py-1 bg-secondary-fixed text-on-secondary-fixed text-[10px] font-bold uppercase tracking-widest rounded-full">80% Full</span>
<button class="p-2 hover:bg-stone-50 rounded-full transition-colors">
<span class="material-symbols-outlined text-stone-400">more_vert</span>
</button>
</div>
</div>
<!-- Booking Item 3 -->
<div class="bg-white border-l-4 border-primary/30 p-6 editorial-shadow flex items-center justify-between rounded-r-lg">
<div class="flex items-center gap-6">
<div class="text-center w-12">
<span class="block text-xs uppercase tracking-tighter text-stone-400 font-bold">Oct</span>
<span class="block text-xl font-headline leading-none">25</span>
</div>
<div class="h-10 w-[1px] bg-stone-100"></div>
<div>
<h4 class="font-bold text-on-surface">Evening Editorial Look</h4>
<p class="text-sm text-on-surface-variant">Elena Rossi • 4:00 PM</p>
</div>
</div>
<div class="flex items-center gap-4">
<span class="px-3 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-bold uppercase tracking-widest rounded-full">Pending</span>
<button class="p-2 hover:bg-stone-50 rounded-full transition-colors">
<span class="material-symbols-outlined text-stone-400">more_vert</span>
</button>
</div>
</div>
</div>
</div>
<!-- Right Column: Quick Insights & Stock -->
<div class="space-y-12">
<!-- Top Selling -->
<section class="bg-surface-container-low p-8 rounded-xl">
<h3 class="text-xl font-headline italic mb-6">Bestsellers</h3>
<div class="space-y-6">
<div class="flex gap-4 items-center">
<div class="w-12 h-12 bg-white rounded flex items-center justify-center p-1 overflow-hidden">
<img alt="Product" class="w-full h-full object-cover" data-alt="Close up of luxury makeup foundation bottle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwbwtpoq6tM0tBzTgxes606QypCxbvDdnO3l1cSZOa7qKzz9i-1RXR6A-jVKNT2j7o2cdT8_JxtYWSOC3I_SFXAdkoCUFabxweQCC1aWt1ygDmFn1GdKgLIgvsnvMkSpYrxumVq6LQUVFs9KjlsO1LqazN0kMgKEMVkbzvXtyjCUj7-uwjhn0mdPN7s1BBJ2Rnp46Ddezp0p1QemIvCs_LTGXryWrXtTk5n_M8Ig01dKawOv1pqdJ0-dD9zS1gXizuoK0IROBCeLk"/>
</div>
<div class="flex-1">
<p class="text-sm font-bold text-on-surface">Silk Serum Foundation</p>
<p class="text-xs text-on-surface-variant">42 units sold</p>
</div>
<span class="text-xs font-bold text-primary">+$1,470</span>
</div>
<div class="flex gap-4 items-center">
<div class="w-12 h-12 bg-white rounded flex items-center justify-center p-1 overflow-hidden">
<img alt="Product" class="w-full h-full object-cover" data-alt="High end lipstick in gold casing" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAC6OfszLfep5ThRG5tlMEdvuRxz4mB5rZVps9ii5Y_r2MYJ33A-AGS0VXLA8-TyFgpodTrypHUJfa56klxxrx9Gfb2nTNljr8Rm6Rp_7vfv2fLDWG2f5DBDxyuSFGFVkg4WuNdx6hIO7FGGZo6ynVoctIxNOxFzTLZJ6ozhqUcMeoB7SJhUrahCMItpksnKUzlSMgKDcU2ArG-wQE3GJrHYRF6w4TMZnvMJ32lZDYzHCZi69oVPAtLqKoGjiCTxLhYTapWXerxcaM"/>
</div>
<div class="flex-1">
<p class="text-sm font-bold text-on-surface">Velvet Matte Lip (Nude)</p>
<p class="text-xs text-on-surface-variant">38 units sold</p>
</div>
<span class="text-xs font-bold text-primary">+$950</span>
</div>
</div>
<button class="w-full mt-8 py-3 border border-outline-variant/30 text-on-surface text-xs font-bold uppercase tracking-widest hover:bg-white transition-colors">Inventory Details</button>
</section>
<!-- Low Stock Alert -->
<section class="p-8 border border-error/20 rounded-xl bg-error-container/10">
<div class="flex items-center gap-2 text-error mb-4">
<span class="material-symbols-outlined text-sm">warning</span>
<span class="text-xs font-bold uppercase tracking-widest">Low Stock Alert</span>
</div>
<p class="text-sm text-on-surface-variant mb-6">3 items are below your minimum threshold of 5 units.</p>
<ul class="space-y-2 mb-6">
<li class="flex justify-between text-xs">
<span>Gold Shimmer Dust</span>
<span class="font-bold text-error">2 left</span>
</li>
<li class="flex justify-between text-xs">
<span>Prep &amp; Prime Mist</span>
<span class="font-bold text-error">4 left</span>
</li>
</ul>
<button class="text-sm text-primary font-bold underline">Restock Now</button>
</section>
</div>
</div>
</div>
<!-- Footer (Shared Component) -->
<footer class="mt-auto w-full py-16 px-12 flex flex-col md:flex-row justify-between items-start border-t border-stone-200/20 bg-stone-100 dark:bg-stone-950 font-manrope text-sm tracking-wide text-stone-700 dark:text-stone-300">
<div class="mb-8 md:mb-0">
<h2 class="font-noto-serif text-lg text-stone-900 dark:text-stone-50 mb-2">Bee's Glam Hub</h2>
<p class="text-stone-500 max-w-xs">Elevating beauty through precision, passion, and artistic excellence.</p>
<p class="mt-6 opacity-50 text-[10px] uppercase tracking-widest">© 2024 Bee's Glam Hub. All Rights Reserved.</p>
</div>
<div class="grid grid-cols-2 gap-12">
<div class="flex flex-col gap-3">
<span class="text-[10px] uppercase tracking-[0.2em] font-bold text-stone-400">Navigation</span>
<a class="text-stone-500 dark:text-stone-400 hover:text-stone-800 dark:hover:text-stone-200 transition-colors" href="#">Contact</a>
<a class="text-stone-500 dark:text-stone-400 hover:text-stone-800 dark:hover:text-stone-200 transition-colors" href="#">Newsletter</a>
</div>
<div class="flex flex-col gap-3">
<span class="text-[10px] uppercase tracking-[0.2em] font-bold text-stone-400">Social</span>
<a class="text-stone-500 dark:text-stone-400 hover:text-stone-800 dark:hover:text-stone-200 transition-colors" href="#">Instagram</a>
<a class="text-stone-500 dark:text-stone-400 hover:text-stone-800 dark:hover:text-stone-200 transition-colors" href="#">Privacy Policy</a>
</div>
</div>
</footer>
</main>
</body></html>