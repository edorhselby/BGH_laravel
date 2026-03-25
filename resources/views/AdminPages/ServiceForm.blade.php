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
    <section>
        <form action ='/services' method='POST'>@csrf
    <h1>Create a Service</h1>
    <label>Service Name</label>
    <input type=text name='name'>
    <label>Service Price</label>
    <input type=number name='price'>
    <label>Service Description</label>
    <input type=textarea name='desc'>
    <button>Submit</button>
        </form>
    </section>
</div>
</body>
</html> -->


<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Create New Service | Luminous Admin</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "on-tertiary-container": "#493c2a",
              "on-primary-fixed-variant": "#574235",
              "outline-variant": "#d2c4b9",
              "on-surface": "#1a1c1a",
              "surface-container": "#efeeeb",
              "secondary-container": "#fed65b",
              "tertiary-fixed": "#f4dfc6",
              "surface-container-lowest": "#ffffff",
              "on-secondary-fixed": "#241a00",
              "tertiary-container": "#b9a790",
              "background": "#faf9f6",
              "surface": "#faf9f6",
              "primary-container": "#c0a493",
              "inverse-surface": "#2f312f",
              "error-container": "#ffdad6",
              "surface-tint": "#715a4b",
              "tertiary-fixed-dim": "#d7c4ab",
              "primary-fixed": "#fcdcc9",
              "on-tertiary-fixed-variant": "#524532",
              "secondary": "#735c00",
              "on-primary-container": "#4e3a2d",
              "surface-dim": "#dbdad7",
              "secondary-fixed": "#ffe088",
              "on-secondary-fixed-variant": "#574500",
              "surface-variant": "#e3e2e0",
              "on-tertiary-fixed": "#241a0a",
              "on-error-container": "#93000a",
              "on-primary-fixed": "#28180c",
              "surface-container-low": "#f4f3f1",
              "on-primary": "#ffffff",
              "on-secondary": "#ffffff",
              "tertiary": "#6b5c48",
              "error": "#ba1a1a",
              "surface-container-high": "#e9e8e5",
              "surface-container-highest": "#e3e2e0",
              "primary-fixed-dim": "#dec1ae",
              "on-secondary-container": "#745c00",
              "surface-bright": "#faf9f6",
              "primary": "#715a4b",
              "on-tertiary": "#ffffff",
              "on-error": "#ffffff",
              "secondary-fixed-dim": "#e9c349",
              "outline": "#80756b",
              "on-background": "#1a1c1a",
              "on-surface-variant": "#4e453d",
              "inverse-on-surface": "#f2f1ee",
              "inverse-primary": "#dec1ae"
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
      .silk-button {
        background: linear-gradient(135deg, #715a4b 0%, #c0a493 100%);
      }
      body {
        font-family: 'Manrope', sans-serif;
        background-color: #faf9f6;
        color: #1a1c1a;
      }
      h1, h2, h3, .serif-font {
        font-family: 'Noto Serif', serif;
      }
      input:focus, select:focus, textarea:focus {
        outline: none !important;
        border-color: #735c00 !important;
        box-shadow: 0 0 0 1px #fcdcc9 !important;
      }
    </style>
</head>
<body class="bg-background text-on-surface flex overflow-hidden">
<!-- SIDE NAVIGATION (Shared Component) -->
<aside class="hidden md:flex flex-col h-screen w-64 border-r border-stone-200 dark:border-stone-800 bg-stone-50 dark:bg-stone-950 font-serif text-lg tracking-tight py-6">
<div class="px-6 mb-10">
<h1 class="text-xl font-serif italic text-stone-800 dark:text-stone-100">Luminous Admin</h1>
<p class="text-xs uppercase tracking-widest text-stone-400 font-sans mt-1">Editorial Beauty</p>
</div>
<nav class="flex-1 px-4 space-y-2">
<!-- Dashboard -->
<a class="flex items-center gap-3 px-4 py-3 text-stone-500 dark:text-stone-400 hover:text-stone-800 dark:hover:text-stone-200 hover:bg-stone-100 dark:hover:bg-stone-900 transition-colors rounded" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="text-sm font-sans tracking-wide">Dashboard</span>
</a>
<!-- Services (Active) -->
<a class="flex items-center gap-3 px-4 py-3 text-stone-900 dark:text-white font-semibold border-r-2 border-stone-800 dark:border-stone-200 bg-stone-100/50 dark:bg-stone-900/50 transition-colors rounded" href="#">
<span class="material-symbols-outlined" data-icon="auto_fix_high" style="font-variation-settings: 'FILL' 1;">auto_fix_high</span>
<span class="text-sm font-sans tracking-wide">Services</span>
</a>
<!-- Bookings -->
<a class="flex items-center gap-3 px-4 py-3 text-stone-500 dark:text-stone-400 hover:text-stone-800 dark:hover:text-stone-200 hover:bg-stone-100 dark:hover:bg-stone-900 transition-colors rounded" href="#">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
<span class="text-sm font-sans tracking-wide">Bookings</span>
</a>
<!-- Clients -->
<a class="flex items-center gap-3 px-4 py-3 text-stone-500 dark:text-stone-400 hover:text-stone-800 dark:hover:text-stone-200 hover:bg-stone-100 dark:hover:bg-stone-900 transition-colors rounded" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="text-sm font-sans tracking-wide">Clients</span>
</a>
<!-- Settings -->
<a class="flex items-center gap-3 px-4 py-3 text-stone-500 dark:text-stone-400 hover:text-stone-800 dark:hover:text-stone-200 hover:bg-stone-100 dark:hover:bg-stone-900 transition-colors rounded" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="text-sm font-sans tracking-wide">Settings</span>
</a>
</nav>
<div class="px-4 mt-auto">
<button class="w-full flex items-center justify-center gap-2 silk-button text-white py-3 rounded-md font-sans text-sm tracking-wide shadow-sm hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                New Service
            </button>
</div>
</aside>
<!-- MAIN CONTENT -->
<main class="flex-1 h-screen overflow-y-auto bg-surface flex flex-col">
<!-- TOP NAVIGATION (Shared Component) -->
<header class="flex justify-between items-center w-full h-16 px-8 bg-white/80 dark:bg-stone-900/80 backdrop-blur-xl docked full-width top-0 z-40 border-b border-stone-100 dark:border-stone-800">
<div class="flex items-center gap-4">
<div class="md:hidden">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</div>
<div class="relative flex items-center">
<span class="material-symbols-outlined absolute left-3 text-stone-400 text-sm" data-icon="search">search</span>
<input class="pl-10 pr-4 py-2 bg-stone-100 border-none rounded-full text-xs font-sans focus:ring-1 focus:ring-primary w-64" placeholder="Search services..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center gap-4 mr-4 border-r border-stone-100 pr-4">
<span class="material-symbols-outlined text-stone-400 cursor-pointer hover:text-primary transition-colors" data-icon="notifications">notifications</span>
<span class="material-symbols-outlined text-stone-400 cursor-pointer hover:text-primary transition-colors" data-icon="help_outline">help_outline</span>
</div>
<div class="flex items-center gap-3">
<div class="text-right hidden sm:block">
<p class="text-xs font-semibold text-on-surface">Elena Rossi</p>
<p class="text-[10px] text-stone-400 uppercase tracking-tighter">Senior Curator</p>
</div>
<img alt="Admin Profile" class="w-8 h-8 rounded-full object-cover grayscale-[30%]" data-alt="professional portrait of a creative director in a minimalist studio setting with soft natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6yf6qxFE_TH-OPcpj-Yr05dw6U7k4CW_Cx-MYuiw3ogITn_-A6rq_M1N2sw7bPs6mMG1lp4qtKZowMquyGKugI-CNaQNY6-P1F6eRUX23ObPv_CLDiYV5-I95cW7smyYiVClaqns-m3gO2-JZ95Et8mLglFoSY9n5ab-EM2wMSUqk5zpu1_VPL_AuiumWQacg3Q9MmHdQ_hT8ucm94o69_MZIv6414-eHkp3g1a_JFe4f7b55wD70PEgtHl7p2GUO_tMPGdTcrU0"/>
</div>
</div>
</header>
<!-- FORM CONTENT CANVAS -->
<div class="flex-1 p-8 lg:p-12 max-w-5xl mx-auto w-full">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 mb-8 text-[11px] uppercase tracking-[0.15em] font-sans text-stone-400">
<a class="hover:text-primary transition-colors" href="#">Management</a>
<span class="material-symbols-outlined text-[12px]" data-icon="chevron_right">chevron_right</span>
<a class="hover:text-primary transition-colors" href="#">Services</a>
<span class="material-symbols-outlined text-[12px]" data-icon="chevron_right">chevron_right</span>
<span class="text-stone-800 font-medium">Create New Service</span>
</nav>
<!-- Page Header -->
 <form action="/admin/services/NewService" method="POST">@csrf
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
<div>
<h2 class="text-4xl md:text-5xl font-headline tracking-tight text-on-surface">New Service</h2>
<p class="text-stone-500 font-body mt-3 max-w-md leading-relaxed">Define a new signature experience for Bee's Glam Hub. Ensure every detail reflects our editorial standards.</p>
</div>
<div class="flex items-center gap-4">
<button type="reset" class="px-6 py-2.5 text-sm font-sans text-stone-500 hover:text-stone-800 transition-colors">
                        Discard
                    </button>
<button type="submit" class="silk-button px-8 py-2.5 rounded-md text-sm font-sans text-white shadow-lg hover:opacity-95 transition-all active:scale-95">
                        Save Service
                    </button>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Left Column: Primary Details -->
<div class="lg:col-span-7 space-y-12">
<!-- Basic Information Section -->
<section>
<h3 class="text-xl font-headline mb-8 border-b border-stone-100 pb-4">Basic Information</h3>
<div class="space-y-8">
<div>
<label class="block text-xs uppercase tracking-widest font-sans text-stone-400 mb-3 ml-1" >Service Name</label>
<input class="w-full bg-surface-container-low border-none rounded-lg px-4 py-4 text-sm font-body text-stone-800 placeholder:text-stone-300" placeholder="e.g. Silk-Press Couture" type="text" name="name"/>
</div>
<div>
<label class="block text-xs uppercase tracking-widest font-sans text-stone-400 mb-3 ml-1">Category</label>
<select class="w-full bg-surface-container-low border-none rounded-lg px-4 py-4 text-sm font-body text-stone-800 appearance-none" name="category">
<option>Select a category</option>
<option>Hair Styling</option>
<option>Editorial Makeup</option>
<option>Bridal Packages</option>
<option>Skincare Rituals</option>
</select>
</div>
<div>
<label class="block text-xs uppercase tracking-widest font-sans text-stone-400 mb-3 ml-1" >Description</label>
<textarea class="w-full bg-surface-container-low border-none rounded-lg px-4 py-4 text-sm font-body text-stone-800 placeholder:text-stone-300 resize-none" placeholder="Describe the journey and the results..." rows="6" name="desc"></textarea>
<p class="text-[10px] text-stone-400 mt-2 italic">Recommended: 200-300 characters for optimal display.</p>
</div>
</div>
</section>
<!-- Pricing & Duration Section -->
<section class="bg-surface-container-low rounded-xl p-8">
<h3 class="text-xl font-headline mb-8">Pricing &amp; Logistics</h3>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
<div>
<label class="block text-xs uppercase tracking-widest font-sans text-stone-400 mb-3 ml-1">Price (GHS)</label>
<div class="relative">
<span class="absolute left-4 top-1/2 -translate-y-1/2 text-stone-400 text-sm font-body">₵</span>
<input class="w-full bg-white border-none rounded-lg pl-8 pr-4 py-4 text-sm font-body text-stone-800 placeholder:text-stone-300 shadow-sm" placeholder="0.00" type="number" name="price"/>
</div>
</div>
<div>
<label class="block text-xs uppercase tracking-widest font-sans text-stone-400 mb-3 ml-1">Duration (Mins)</label>
<div class="relative">
<span class="absolute right-4 top-1/2 -translate-y-1/2 text-stone-400 text-xs font-sans">MIN</span>
<input class="w-full bg-white border-none rounded-lg px-4 py-4 text-sm font-body text-stone-800 placeholder:text-stone-300 shadow-sm" placeholder="60" type="number"/>
</div>
</div>
</div>
</form>
</section>
</div>
<!-- Right Column: Media & Settings -->
<div class="lg:col-span-5 space-y-12">
<!-- Media Upload Section -->
<section>
<h3 class="text-xl font-headline mb-8 border-b border-stone-100 pb-4">Media Portfolio</h3>
<div class="relative group">
<div class="w-full aspect-[4/5] bg-surface-container-low border-2 border-dashed border-stone-200 rounded-2xl flex flex-col items-center justify-center p-8 transition-colors group-hover:border-primary-container">
<div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="add_photo_alternate">add_photo_alternate</span>
</div>
<p class="text-sm font-headline text-stone-800 mb-2">Drag editorial imagery here</p>
<p class="text-[11px] text-stone-400 uppercase tracking-wider font-sans mb-8">or click to browse library</p>
<div class="grid grid-cols-3 gap-2 w-full mt-auto">
<div class="h-1 bg-stone-200 rounded-full overflow-hidden">
<div class="h-full bg-primary-container w-1/3"></div>
</div>
<div class="h-1 bg-stone-200 rounded-full"></div>
<div class="h-1 bg-stone-200 rounded-full"></div>
</div>
</div>
<!-- Editorial Preview Placeholder -->
<div class="absolute -top-4 -right-4 w-24 h-24 bg-surface-container-highest rounded-lg shadow-2xl rotate-6 overflow-hidden border-2 border-white">
<img alt="Sample Style" class="w-full h-full object-cover grayscale-[20%]" data-alt="close-up of elegant gold makeup application on a model with soft focus lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHiyym5tMOD3MxmoPgk0C6NMjfiynpPJaC5bWy2hPlkDJCI4awJAVDVKVihZwOy-y7Li1m_zqjwmRcAm1HdG4aEVCgB4POoCAZohdJfezrEO0yN8cHAA82Pc4-qgBnC607yYwpPDXPpE2ct4AfrRronDF9MwMMLKmN3kY9o90XCCnxRRMGxhwPc8-QExtz1xddB6O_RHxEj-_YKoHV_3_qkkVV80zbFFqbyLbp73xMrXJHk5DLvT9SAikUUpOpgrmqy8mCNBBxwpM"/>
</div>
</div>
<p class="text-[10px] text-stone-400 mt-6 leading-relaxed italic">Upload high-resolution PNG or JPG. Recommended ratio 4:5. Maximum file size 10MB.</p>
</section>
<!-- Service Visibility -->
<section class="bg-surface-dim/30 rounded-xl p-8">
<h3 class="text-sm uppercase tracking-[0.2em] font-sans font-semibold mb-6">Service Status</h3>
<div class="space-y-6">
<div class="flex items-center justify-between">
<div>
<p class="text-sm font-headline">Online Booking</p>
<p class="text-[11px] text-stone-500 font-body">Allow clients to book this service online.</p>
</div>
<div class="w-12 h-6 bg-secondary-container rounded-full relative p-1 cursor-pointer">
<div class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full shadow-sm"></div>
</div>
</div>
<div class="flex items-center justify-between">
<div>
<p class="text-sm font-headline">Promoted Service</p>
<p class="text-[11px] text-stone-500 font-body">Highlight this service on the home lookbook.</p>
</div>
<div class="w-12 h-6 bg-stone-200 rounded-full relative p-1 cursor-pointer">
<div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow-sm"></div>
</div>
</div>
</div>
</section>
<!-- Add-ons/Tags -->
<section>
<h3 class="text-sm uppercase tracking-[0.2em] font-sans font-semibold mb-6">Attributes</h3>
<div class="flex flex-wrap gap-2">
<span class="px-4 py-1.5 bg-secondary-fixed text-on-secondary-fixed text-[10px] font-sans font-bold uppercase tracking-widest rounded-full">New Release</span>
<span class="px-4 py-1.5 bg-primary-fixed text-on-primary-fixed text-[10px] font-sans font-bold uppercase tracking-widest rounded-full">Premium</span>
<button class="px-4 py-1.5 border border-outline-variant text-stone-500 text-[10px] font-sans font-bold uppercase tracking-widest rounded-full hover:bg-white transition-colors">
                                + Add Tag
                            </button>
</div>
</section>
</div>
</div>
<!-- Footer Spacing -->
<div class="h-24"></div>
</div>
</main>
</body></html>
