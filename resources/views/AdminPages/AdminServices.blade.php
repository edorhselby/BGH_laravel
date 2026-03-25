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
        {{-- This section is to view the available services created --}}
    <h1>Services</h1>
     @foreach ($results as $result )
         <div>
           <ul> <li> <h3>{{$result->service_name}}</h3> </li> </ul>
           <h5>Price:{{ $result->service_price }}</h5>
           <p><h4>Description:</h4>{{$result->Description}}</p>
         </div>
         <div>
           <a href='/EditService'>
            <button>Edit</button>
</a>
         </div>
          <div>
            <form action ="{{url( 'services/deleteservice/'. $result->id) }}" method='POST'>@csrf
                @method('DELETE')
            <button>Delete</button>
            </form>
         </div>
         <div>
           
     @endforeach 
      
        <br> <br>
           <a href='/serviceform'>
        <button>Create a service</button>
    </a>
    </section>
</body>
</html> -->


<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Services &amp; Classes Management | Bee's Glam Hub Admin</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
              "on-secondary-fixed": "#241a0a",
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
    </style>
</head>
<body class="flex min-h-screen">
<!-- SideNavBar Component -->
<aside class="h-screen w-64 border-r border-stone-200/30 bg-stone-50 dark:bg-stone-900 flex flex-col py-8 px-4 sticky top-0">
<div class="mb-10 px-2">
<h1 class="text-xl font-serif text-stone-900 dark:text-stone-50">Bee Admin</h1>
<p class="text-xs text-stone-500 font-manrope uppercase tracking-widest mt-1">Management Portal</p>
</div>
<nav class="flex-grow space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all font-manrope text-sm font-medium" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
<!-- Active State: Services -->
<a class="flex items-center gap-3 px-4 py-3 bg-stone-200/50 dark:bg-stone-800 text-stone-900 dark:text-stone-50 font-bold rounded-lg transition-all font-manrope text-sm" href="#">
<span class="material-symbols-outlined" data-icon="brush">brush</span>
                Services
            </a>
<!-- Active State Alternative: Classes -->
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all font-manrope text-sm font-medium" href="#">
<span class="material-symbols-outlined" data-icon="school">school</span>
                Classes
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all font-manrope text-sm font-medium" href="#">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
                Products
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all font-manrope text-sm font-medium" href="#">
<span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
                Orders
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all font-manrope text-sm font-medium" href="#">
<span class="material-symbols-outlined" data-icon="photo_library">photo_library</span>
                Gallery
            </a>
<a class="flex items-center gap-3 px-4 py-3 text-stone-600 dark:text-stone-400 hover:bg-stone-100 dark:hover:bg-stone-800/50 transition-all font-manrope text-sm font-medium" href="#">
<span class="material-symbols-outlined" data-icon="auto_awesome">auto_awesome</span>
                Testimonials
            </a>
</nav>
<div class="mt-auto pt-6 border-t border-stone-200/30 px-2 flex items-center gap-3">
<img alt="Admin Portrait" class="w-10 h-10 rounded-full object-cover shadow-sm" data-alt="Professional female admin portrait photo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCeOmaM5oACHKcz04hDiugZAIdCsSEvT4pbklDAdcXxMjL_P7BTpl0agRoqgFeGpaEHQhnfWsk9tdJY-iJXa5X9u2W5gFDbNMbEObk13lJLanUQCbI1OJkjNliC-up0K_6y1mfD9JRPJK9F2HsdEnK0EWWq4m-w3sHVTdMzTJmt_WjTgBonKv0Iy8GeNzVb_kodJyl1FC21jn-TPPP3Rp-kZX1TnSkNvLJVWkZAxbD5rGBkDvbVr_1JUpVK0ysUFutDRhCC1JL8soQ"/>
<div>
<p class="text-sm font-bold text-stone-900 dark:text-stone-50">Bee Admin</p>
<p class="text-xs text-stone-500">Creative Director</p>
</div>
</div>
</aside>
<main class="flex-grow flex flex-col">
<!-- TopNavBar (Admin) Component -->
<header class="w-full h-16 bg-white dark:bg-stone-900 flex justify-between items-center px-6 border-b border-stone-100/50 sticky top-0 z-40">
<div class="flex items-center gap-4 flex-grow max-w-xl">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-stone-400 text-lg" data-icon="search">search</span>
<input class="w-full bg-stone-50 border-none rounded-full py-2 pl-10 pr-4 text-sm focus:ring-1 focus:ring-primary-container font-manrope" placeholder="Search services or classes..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<button class="text-stone-400 hover:opacity-70 transition-all flex items-center">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="text-stone-400 hover:opacity-70 transition-all flex items-center">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
</button>
<a href="/admin/services/create" >
<button class="bg-primary text-on-primary px-6 py-2 rounded-md text-sm font-medium hover:opacity-90 transition-all shadow-sm flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                    New Entry
                </button>
</a>
</div>
</header>
<!-- Content Area -->
<section class="p-8 space-y-12">
<!-- Breadcrumbs & Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h2 class="text-3xl font-headline italic text-stone-900 tracking-tight">Services &amp; Classes</h2>
<p class="text-stone-500 font-body text-sm mt-1">Review and manage your editorial beauty offerings.</p>
</div>
<div class="flex gap-2">
<span class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase">Premium Hub</span>
<span class="bg-surface-container-high text-on-surface-variant px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase">Live View</span>
</div>
</div>
<!-- Bento Grid Management -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Main Service List (Large Block) -->
<div class="md:col-span-8 space-y-6">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-headline text-stone-800">Core Services</h3>
<button class="text-primary text-sm font-bold flex items-center gap-1 hover:underline">
                            View All <span class="material-symbols-outlined text-xs" data-icon="chevron_right">chevron_right</span>
</button>
</div>
 @foreach ($results as $result )
<div class="grid grid-cols-1 gap-4">
<!-- Service Item 1 -->
<div class="group bg-surface-container-low p-6 rounded-xl flex items-center justify-between hover:bg-surface-container transition-colors duration-300">
<div class="flex items-center gap-6">
<div class="w-20 h-20 rounded-lg overflow-hidden bg-stone-200">
<img alt="Bridal Makeup Service" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Elegant close up of bridal makeup application" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0jrPujpdCRsfQzN9Wo2BQpSOFjLsPiI3sM7I6RfOReNDo1cjIZitqjDMB50kseLypQNZa5Mi-Nl0-JQUFE71OKosgCB6s1GaCkpMmRhH7UfGg2bb2G9BMFfL2Ty-iDwVYG2m6Kv9ERDVjycUIupfrNpgXRNyogv_t_KCcF_mlWIBFcrJTTfGihYEmK8NvWTnSBr_Gx7uRH4EDRYh2Kis5Q8Rs4xqNDWoR371aEtCoku4eNxlBikiBtNJypQKpiJgBlyrF4Qlbn-0"/>
</div>
<div>
<h4 class="font-headline text-lg text-stone-900">{{ $result->service_name }}</h4>
<p class="text-stone-500 text-sm font-body">{{ $result->Description }}</p>
<div class="flex gap-4 mt-2">
<span class="text-xs font-bold text-stone-700 flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span> 90 min
                                        </span>
<span class="text-xs font-bold text-stone-700 flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="payments">payments</span> ₵{{ $result->service_price }}
                                        </span>
</div>
</div>
</div>
<div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-stone-400 hover:text-primary"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
<button class="p-2 text-stone-400 hover:text-error"><span class="material-symbols-outlined" data-icon="delete">delete</span></button>
</div>
</div>
@endforeach
<!-- Service Item 2 -->
<!-- <div class="group bg-surface-container-low p-6 rounded-xl flex items-center justify-between hover:bg-surface-container transition-colors duration-300">
<div class="flex items-center gap-6">
<div class="w-20 h-20 rounded-lg overflow-hidden bg-stone-200">
<img alt="Luxury Hair Styling" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Minimalist hairstyling tools and finished look" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3CA-2PeqcTw8npE-bvTfDaDdkWhiGen3W0Re8roqqt-ca5RD39v-P9-nwLHl5Z2CpwpVN6XozvRTlzGql9TVTgZVklxV0jDL4DTq8J1qsriRXlC1bqTLcwbxtg5YH-LczBCZCe1bOmCqWE7StcqVdtUoThzfQbF-AZDGa02kqMvnE-1zt_Ed8MMIAbPQ3-xULhCggXodV_jqZC6kAkGSxU9RM1DVhnkGFVfXknbvEojXXmxmLa_8DgiGqwHpZupwcZ6fkTag89MQ"/>
</div>
<div>
<h4 class="font-headline text-lg text-stone-900">Champagne Blow-Dry</h4>
<p class="text-stone-500 text-sm font-body">Volume style with signature silk-shine finish.</p>
<div class="flex gap-4 mt-2">
<span class="text-xs font-bold text-stone-700 flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span> 45 min
                                        </span>
<span class="text-xs font-bold text-stone-700 flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="payments">payments</span> $85
                                        </span>
</div>
</div>
</div>
<div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-stone-400 hover:text-primary"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
<button class="p-2 text-stone-400 hover:text-error"><span class="material-symbols-outlined" data-icon="delete">delete</span></button>
</div>
</div> -->
<!-- Service Item 3 -->
<!-- <div class="group bg-surface-container-low p-6 rounded-xl flex items-center justify-between hover:bg-surface-container transition-colors duration-300">
<div class="flex items-center gap-6">
<div class="w-20 h-20 rounded-lg overflow-hidden bg-stone-200">
<img alt="Skin treatment" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="High end luxury skincare products displayed" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2g7w-KQWCnbSvToorckhr94oRjneSVbJw05fKTX9iAMGoXcbv1MgohhrTGdQ1CFv0BTIKisBDsMZTCdKY-rP6RbI8GwOdlSKT5LlTfSxyNTonCwBCj791Ny_ahQf5hWx0lie3CgCr3zGoMBALU5zdHVbhp9C9lH3EKn_EtlZ__8MW8TmOf3N9se2U4J43oyX1DiS-QUyTOggbq5IkMSIzZl1V24nyCpukGGAWNSlXou1FWM1HBl3ao3z_Bp2_i9lN0SkWXGg70nA"/>
</div>
<div>
<h4 class="font-headline text-lg text-stone-900">Glow Facial Therapy</h4>
<p class="text-stone-500 text-sm font-body">Botanical peel and LED rejuvenation.</p>
<div class="flex gap-4 mt-2">
<span class="text-xs font-bold text-stone-700 flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="schedule">schedule</span> 60 min
                                        </span>
<span class="text-xs font-bold text-stone-700 flex items-center gap-1">
<span class="material-symbols-outlined text-sm" data-icon="payments">payments</span> $120
                                        </span>
</div>
</div>
</div>
<div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-stone-400 hover:text-primary"><span class="material-symbols-outlined" data-icon="edit">edit</span></button>
<button class="p-2 text-stone-400 hover:text-error"><span class="material-symbols-outlined" data-icon="delete">delete</span></button>
</div>
</div>
</div>
</div>--> 
<!-- Classes & Upcoming (Narrow Sidebar Block) -->
<div class="md:col-span-4 space-y-8">
<div class="bg-surface-container-low p-8 rounded-2xl relative overflow-hidden border-none">
<div class="relative z-10">
<h3 class="text-xl font-headline italic mb-4">Masterclasses</h3>
<div class="space-y-4">
<!-- Class 1 -->
<div class="bg-surface-container-lowest p-4 rounded-lg shadow-sm">
<div class="flex justify-between items-start mb-2">
<span class="bg-secondary-fixed text-on-secondary-fixed text-[9px] font-bold px-2 py-0.5 rounded tracking-tighter">OCT 24</span>
<span class="text-primary font-bold text-xs">$199</span>
</div>
<h5 class="text-sm font-bold text-stone-900">Autumn Bridal Trends</h5>
<p class="text-xs text-stone-500 mt-1">Live demo &amp; networking lunch.</p>
<div class="flex items-center gap-1 mt-3 text-[10px] text-stone-400">
<span class="material-symbols-outlined text-sm" data-icon="group">group</span>
                                        12/20 Spots filled
                                    </div>
</div>
<!-- Class 2 -->
<div class="bg-surface-container-lowest p-4 rounded-lg shadow-sm">
<div class="flex justify-between items-start mb-2">
<span class="bg-stone-200 text-stone-700 text-[9px] font-bold px-2 py-0.5 rounded tracking-tighter">NOV 12</span>
<span class="text-primary font-bold text-xs">$150</span>
</div>
<h5 class="text-sm font-bold text-stone-900">Self-Glam Intensive</h5>
<p class="text-xs text-stone-500 mt-1">Master your own evening look.</p>
<div class="flex items-center gap-1 mt-3 text-[10px] text-stone-400">
<span class="material-symbols-outlined text-sm" data-icon="group">group</span>
                                        8/15 Spots filled
                                    </div>
</div>
</div>
<button class="w-full mt-6 border border-primary/20 text-primary py-3 rounded text-xs font-bold hover:bg-primary/5 transition-colors">
                                Schedule New Class
                            </button>
</div>
<div class="absolute -right-12 -bottom-12 w-48 h-48 bg-primary/5 rounded-full blur-3xl"></div>
</div>
<!-- Availability Summary -->
<div class="bg-stone-900 text-stone-100 p-8 rounded-2xl">
<h3 class="text-lg font-headline italic mb-4 text-stone-50">Availability Status</h3>
<div class="space-y-4">
<div class="flex justify-between items-center text-sm">
<span class="text-stone-400">Booking Buffer</span>
<span class="font-bold">15 mins</span>
</div>
<div class="flex justify-between items-center text-sm">
<span class="text-stone-400">Advance Notice</span>
<span class="font-bold">24 hours</span>
</div>
<div class="flex justify-between items-center text-sm">
<span class="text-stone-400">Status</span>
<span class="flex items-center gap-1.5 text-secondary-fixed-dim">
<span class="w-2 h-2 rounded-full bg-secondary-fixed-dim animate-pulse"></span>
                                    Accepting Bookings
                                </span>
</div>
</div>
<button class="w-full mt-6 bg-stone-800 text-stone-100 py-3 rounded text-xs font-bold hover:bg-stone-700 transition-colors">
                            Manage Calendar
                        </button>
</div>
</div>
</div>
<!-- Analytics Subtle Teaser -->
<div class="bg-surface-container-low rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-8">
<div class="max-w-md">
<h3 class="text-xl font-headline italic mb-2">Service Performance</h3>
<p class="text-stone-500 text-sm">"Editorial Bridal Glam" is your top performing service this month, accounting for 42% of total revenue.</p>
</div>
<div class="flex gap-12">
<div class="text-center">
<p class="text-3xl font-headline text-stone-900">142</p>
<p class="text-[10px] uppercase tracking-widest font-bold text-stone-400">Bookings</p>
</div>
<div class="text-center">
<p class="text-3xl font-headline text-stone-900">18</p>
<p class="text-[10px] uppercase tracking-widest font-bold text-stone-400">Classes</p>
</div>
<div class="text-center">
<p class="text-3xl font-headline text-primary">$12.4k</p>
<p class="text-[10px] uppercase tracking-widest font-bold text-stone-400">Revenue</p>
</div>
</div>
</div>
</section>
<!-- Footer (Admin Version) -->
<footer class="mt-auto py-10 px-8 border-t border-stone-200/20 bg-stone-100 dark:bg-stone-950 flex flex-col md:flex-row justify-between items-center">
<div class="flex items-center gap-4 mb-4 md:mb-0">
<span class="font-noto-serif text-lg text-stone-900 dark:text-stone-50 italic tracking-tight">Bee's Glam Hub</span>
<span class="text-xs text-stone-400">Admin Console v2.4.0</span>
</div>
<div class="flex gap-8 text-sm font-manrope text-stone-500">
<a class="hover:text-stone-900 transition-colors" href="#">Documentation</a>
<a class="hover:text-stone-900 transition-colors" href="#">Support</a>
<a class="hover:text-stone-900 transition-colors" href="#">Privacy</a>
</div>
<p class="text-[10px] uppercase tracking-widest text-stone-400 mt-4 md:mt-0">© 2024 All Rights Reserved.</p>
</footer>
</main>
</body></html>