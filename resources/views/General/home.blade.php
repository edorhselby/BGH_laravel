
 

<!-- <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
    {{-- @vite('resources/css/home.css') --}}
</head>
<body>
    <h1>WELCOME TO BEE'S GLAM HUB<br><br>LANDING PAGE</h1>
    <p><a href='/signup'>Signup</a></p>
    <p><a href='/login'>Login</a></p>
    <p><a href='/Services'>Services</a></p>
    <p><a href='/Contact'>Contact</a></p>
    <p><a href='/About'>About</a></p>
</body>
</html> 


</html> -->


<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Bee's Glam Hub | Luxury Beauty Services</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
      .silk-gradient {
        background: linear-gradient(135deg, #715a4b 0%, #c0a493 100%);
      }
      .text-balance {
        text-wrap: balance;
      }
    </style>
</head>
<body class="bg-background font-body text-on-background selection:bg-primary-fixed selection:text-on-primary-fixed-variant">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-stone-50/80 dark:bg-stone-900/80 backdrop-blur-xl transition-all duration-300">
<div class="flex justify-between items-center px-6 md:px-12 py-6 w-full max-w-screen-2xl mx-auto">
<div class="text-2xl font-serif italic text-stone-900 dark:text-stone-50 tracking-tight">
                Bee's Glam Hub
            </div>
<div class="hidden md:flex items-center gap-10">
<a class="text-stone-900 dark:text-stone-50 font-semibold border-b border-stone-400 font-noto-serif transition-colors duration-300" href="/">Home</a>
<button onclick="openModal('login')" class="text-stone-500 dark:text-stone-400 hover:text-stone-900 font-noto-serif transition-colors duration-300">Login</button>
<button onclick="openModal('signup')" class="text-stone-500 dark:text-stone-400 hover:text-stone-900 font-noto-serif transition-colors duration-300">Signup</button>
<a class="text-stone-500 dark:text-stone-400 hover:text-stone-900 font-noto-serif transition-colors duration-300" href="/services">Services</a>
 <a class="text-stone-500 dark:text-stone-400 hover:text-stone-900 font-noto-serif transition-colors duration-300" href="/Classes">Classes</a>
<a class="text-stone-500 dark:text-stone-400 hover:text-stone-900 font-noto-serif transition-colors duration-300" href="/Shop">Shop</a>
<a class="text-stone-500 dark:text-stone-400 hover:text-stone-900 font-noto-serif transition-colors duration-300" href="/Portfolio">Portfolio</a>
</div>  <!-- TODO: Make pages for these paths and update hrefs accordingly -->
<button class="silk-gradient text-on-primary px-8 py-3 rounded-md font-medium tracking-wide hover:opacity-
90 active:scale-95 transition-all duration-300">
                Book Now
            </button>
</div>
</nav>
<main class="pt-24">
<!-- Hero Section -->
<section class="relative min-h-[921px] flex items-center px-6 md:px-12 py-20 overflow-hidden">
<div class="max-w-screen-2xl mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
<div class="z-10 order-2 md:order-1">
<span class="inline-block py-1 px-3 bg-secondary-fixed text-on-secondary-fixed text-xs font-bold tracking-widest uppercase rounded mb-6">Master Artistry</span>
<h1 class="font-headline text-5xl md:text-7xl lg:text-8xl text-on-surface leading-[1.1] mb-8 text-balance">
                        The Luminous <br/> <span class="italic font-light">Editorial</span> Look
                    </h1>
<p class="text-on-surface-variant text-lg md:text-xl max-w-lg mb-12 leading-relaxed font-light">
                        Where bridal elegance meets editorial precision. Experience the ultimate luxury in makeup artistry and skin treatments.
                    </p>
<div class="flex flex-col sm:flex-row gap-6">
<button class="silk-gradient text-on-primary px-10 py-5 rounded-md font-semibold text-lg hover:opacity-90 transition-all">
                            Book Appointment
                        </button>
<button class="border border-outline-variant/30 text-primary px-10 py-5 rounded-md font-semibold text-lg hover:bg-surface-container-low transition-all">
                            View Portfolio
                        </button>
</div>
</div>
<div class="relative order-1 md:order-2 flex justify-center md:justify-end">
<div class="relative w-full max-w-md aspect-[4/5] bg-surface-container-low rounded-xl overflow-hidden shadow-2xl">
<img alt="Luxury beauty portrait" class="absolute inset-0 w-full h-full object-cover" data-alt="Elegant close up of high-end bridal makeup" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDa_scNnMZ8o3cB5CkU8DTOomrj8Es10R3H1Rhj5z-xpM5G0vXM5n7lIN_DbM0B6YtusZJrx2BPuLDeqnnd7baPW6icNVd8H7BDHDClujxsvrauEOxmktQiRrxwr6ECqmloCwLc4Jhth1P--Q_vXs3aYO1SUEFCiAkbBT9odayfQKBvUhIgPoQHYz7IMzlb3rSWbHyJ_sDNf8IHxxaEohcxF64jsxUrovJgYv7JykZ6kvys7xyKZTxOdO3TvBwFUj7oRQ-Y_L4xVs"/>
</div>
<div class="absolute -bottom-10 -left-10 hidden lg:block w-48 aspect-square rounded-full overflow-hidden border-8 border-background shadow-xl">
<img alt="Product texture" class="w-full h-full object-cover" data-alt="Creamy aesthetic luxury skincare product texture" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-vlyPUgJ_pg4aHu6Ea68p36U0X0HkE6ykFT5zXGP3itT62h1r2VwLsuUv1c3jDFKeM-lL6qModcMn_kZKO6_mFtY4gPX9QGHUSDnbbfo8Tm5T5zLXhmx1dVScT_00wRUEfUNZVcUMyCfwWuZ8PdcuAcdL5oxfIQkytJiCsI0Q_Q5db8hV_U5hfVZL7f-f4SFLrwkT9qa3k6x2tVMrlD9my3nD-pS5nXMtjB9PkVYFvcTptSYvKf_wZWrjniVBDaNpb3ohU0Jz7Gc"/>
</div>
</div>
</div>
<!-- Background Decoration -->
<div class="absolute top-0 right-0 w-1/3 h-full bg-surface-container-low -z-10 translate-x-1/2 rounded-l-[10rem]"></div>
</section>
<!-- Services Section (Editorial Layout) -->
<section class="py-32 px-6 md:px-12 bg-surface-container-low">
<div class="max-w-screen-2xl mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
<div class="max-w-2xl">
<h2 class="font-headline text-4xl md:text-5xl text-on-surface mb-6">Signature Treatments</h2>
<p class="text-on-surface-variant text-lg font-light leading-relaxed">
                            Every service is a bespoke journey tailored to your unique features and style. We use only the most prestigious products in the industry.
                        </p>
</div>
<a class="group flex items-center gap-3 text-primary font-semibold text-lg pb-1 border-b-2 border-primary-container" href="/services">
                        Explore All Services
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<!-- Service 1 -->
<div class="group cursor-pointer">
<div class="aspect-[3/4] overflow-hidden rounded-lg mb-8 bg-surface-container-highest">
<img alt="Bridal Makeup" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Professional bridal makeup artist at work" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfLIIwyygrMZRVG07ZtPmqtQmjenSr9THbOka1kYbY98otNQADG1V69-fEcBtZjXZIBnxyR7Qy5Pgv4K-6A5Vfv9UGlB0jeJ4lyzIASE3-W0zKMg2e2806cqs1lUhm0RUZFJPmmKrC1Zi9ORoqcLi1b9_lKzKS4C3YIQq2_aXXerGzGeApsUIzA-yEkPlCohu5UySfjHd1_kqShcCGcZ2OHkm3Q-1oyawiI1GciEZKhw8H3QbTF4f9MfX6eas4t1i61fpUMpESuEE"/>
</div>
<h3 class="font-headline text-2xl mb-3">Bridal Couture</h3>
<p class="text-on-surface-variant leading-relaxed mb-6 font-light">From timeless classics to modern editorial looks, our bridal service is designed for your most precious day.</p>
<span class="text-secondary font-bold text-sm tracking-widest uppercase">From $350</span>
</div>
<!-- Service 2 -->
<div class="group cursor-pointer mt-0 md:mt-24">
<div class="aspect-[3/4] overflow-hidden rounded-lg mb-8 bg-surface-container-highest">
<img alt="Editorial Makeup" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="High fashion editorial makeup on model" src="https://lh3.googleusercontent.com/aida-public/AB6AXuASgsPlpzhqjrauIj1wdV87x2cwVt2C6gboD1Jt9_bFbt_UoaSrtlWdDbpFBdPBYefrFXHokfGK_9uZ0Gcv4Iq9JAvCrO5pBIF1mVE8Cl9acVSiVRaYG9ni0c5bn5kmgnRtB1d8bC81tf0eSSZ-ffr-7vbRQqehT9SAXNAqJEe1pSBREvzZS1ZDkAtkExBuUPcf5IGCTeulvh-OeLvSNb1zmWZoDuyy_tYOev8zp5MXNRiGUkMYChdtHtZ6jJbWmthd8F4C9Um_Vgw"/>
</div>
<h3 class="font-headline text-2xl mb-3">Masterclasses</h3>
<p class="text-on-surface-variant leading-relaxed mb-6 font-light">Learn the secrets of the pros in our exclusive one-on-one or group artistry workshops.</p>
<span class="text-secondary font-bold text-sm tracking-widest uppercase">Enrolling Now</span>
</div>
<!-- Service 3 -->
<div class="group cursor-pointer">
<div class="aspect-[3/4] overflow-hidden rounded-lg mb-8 bg-surface-container-highest">
<img alt="Skin Treatment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Luxury facial skin treatment application" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-BBvM5oxNYkL8xSKeBWo5_xr4_IpRP4a7JKuhT1AWilC_KlcmM6_5SyU9QO5U5kaD5ftzBEkmiXBHNmM_IcgAbJKX7_wJ9z9RzJVKKD08AVaHEysb1OAT9BgnN-DWbuNQcBTe6zd3dqacR6DQwFH4r7n0pchF_zGFOdJnbbvMQGiiMqqJCQmX1CLqGyKViw9NDc3dAw4aUv7Eq94gg7ccu8DyBXHl7NshTV6P5Yol9jHv-yIZXPlb5uWAU7RiXhp0DVF5UmK3_0M"/>
</div>
<h3 class="font-headline text-2xl mb-3">Glow Concierge</h3>
<p class="text-on-surface-variant leading-relaxed mb-6 font-light">Expert skincare consultations and treatments to ensure your skin is the perfect luminous canvas.</p>
<span class="text-secondary font-bold text-sm tracking-widest uppercase">Personalized Pricing</span>
</div>
</div>
</div>
</section>
<!-- Gallery Snippet (Asymmetric Bento) -->
<section class="py-32 px-6 md:px-12 bg-background">
<div class="max-w-screen-2xl mx-auto">
<div class="mb-20 text-center">
<h2 class="font-headline text-4xl md:text-5xl text-on-surface mb-6">The Lookbook</h2>
<p class="text-on-surface-variant max-w-xl mx-auto font-light">A visual diary of our latest work, capturing moments of pure beauty and artistic expression.</p>
</div>
<div class="grid grid-cols-12 grid-rows-2 gap-6 h-[800px]">
<div class="col-span-12 md:col-span-8 row-span-1 bg-surface-container overflow-hidden rounded-xl">
<img alt="Gallery 1" class="w-full h-full object-cover" data-alt="Collection of luxury beauty products flatlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKh4zvvpw-nwLfXxdPQ8Lp96rSYHTgu6CKlQ-mNX6vnVxVyQ1DzCm2aYXLPx4093J6vTQu90PLKdTaKXEsU8yK2au2kCdsVeaq-w82r4cPFzaSsBD2Aela4SUP5MWOFq8POptFU8-QDOzOOyCDVeCc7XErAvmgZT7dbXBgWe2c3OegcpwzzBZkOGmaEyEXMhHq0YM3SGifESEhuQIqU0JevV3iBvrDRR8hm1uy5GZipYl71O2kCLFgp4SCI6fD--kpLTHWdhEWV3M"/>
</div>
<div class="col-span-6 md:col-span-4 row-span-2 bg-surface-container overflow-hidden rounded-xl">
<img alt="Gallery 2" class="w-full h-full object-cover" data-alt="Close up portrait of editorial makeup look" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpT1FebHaKS9kqLCJS0NeQju4dzojU9svaMiZACOb6BXfSACdb9W7CGQDB2ZF-gwmIW9kbCajeq62pxJqXr71t7NtJK06j9kHwSDQ47_aBdFHk7pcoxk_fJjYcWD6FtUa-_3EaIrX-Bpm0tKse85d-Kvo3nKq_Dm_Twcfw9w0BJMwEg3TIEhadcRpK8aBYlBlk0PlKClCUtU5KbNzwOClCRBxPkjuZx5lpCXlN12SAmyU2fODBw_y-j559yzcQPf0qId5bmhPscvY"/>
</div>
<div class="col-span-6 md:col-span-4 row-span-1 bg-surface-container overflow-hidden rounded-xl">
<img alt="Gallery 3" class="w-full h-full object-cover" data-alt="Clean minimal beauty spa interior" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxfKmGyuljUBfVlrjzeaQFMkxG4yTDPElJpi3Gymw_dIw9Bg_JaabjlrSk5_oLdtIUC8jeqMsnPZdk639PeVj6cX2M4AMi359yL5ciq6qd1SCJIrAuXuAWhJAV8Wceg93FZSPW252rXzi8ubaEQGDPUG3U0E2E7VyCpgDxqLLELRQym06XciI_iqYPbbzi7a85mJCDmjLr6xUWTPhdQYqVYn8Evqi2DdTgmJYAr1mmTKzDhn4fZbszHinD9gnsiOmv3j6Y2fqSTr4"/>
</div>
<div class="col-span-12 md:col-span-4 row-span-1 bg-surface-container overflow-hidden rounded-xl">
<img alt="Gallery 4" class="w-full h-full object-cover" data-alt="Relaxing facial massage therapy session" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjdMw9DCy8QrRcLE5a-tYgubI3LsICYBwXXoKawKcaLkJ-Zomo4YKGPMlqzQAqEU29KzIa-jmABIVRnw2l3RqjSXdH9QoUdh0Hu2xqYInOm0J1OIpKsVuwg_2z5BXA8BVR-vhMlX1tkSn6IHA6xxIQUGYoSWbPAuWgE0JdsibRg9bK-fQBwZBKB6MSPMabllAxNMIFaf4YV9oKi3PrG--G-p0wFBMIP6UW4j4fA--MEw_3cGjxqHz_MBtNyDLlZ5gvHJTSaUpPOZc"/>
</div>
</div>
</div>
</section>
<!-- Testimonials (Tonal Layering) -->
<section class="py-32 px-6 md:px-12 bg-surface-container-low overflow-hidden relative">
<div class="absolute -right-20 top-20 opacity-5">
<span class="material-symbols-outlined text-[30rem]">format_quote</span>
</div>
<div class="max-w-screen-2xl mx-auto relative z-10">
<div class="flex flex-col md:flex-row gap-16 items-center">
<div class="w-full md:w-1/3">
<h2 class="font-headline text-4xl md:text-5xl text-on-surface mb-8 leading-tight">What Our <br/><span class="italic font-light">Clients Feel</span></h2>
<div class="flex gap-4">
<button class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-container-lowest transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center hover:opacity-90 transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
<div class="w-full md:w-2/3">
<div class="bg-surface-container-lowest p-10 md:p-16 rounded-xl shadow-sm border border-outline-variant/10">
<div class="flex gap-1 text-secondary-fixed-dim mb-6">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<blockquote class="font-headline text-2xl md:text-3xl text-on-surface leading-snug mb-10 italic">
                                "Bee transformed my entire wedding morning. The makeup was weightless and lasted until 3am. I've never felt more like a refined version of myself."
                            </blockquote>
<div class="flex items-center gap-4">
<div class="w-14 h-14 rounded-full bg-surface-dim overflow-hidden">
<img alt="Client portrait" class="w-full h-full object-cover" data-alt="Portrait of a satisfied bride smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYZfFa3RO4m33iPhJG5VA3So45p_Dp_JheuzJDy0_bEc8506OVUN5CMIEyKc6Bm_hL3M0zqBT_vz4izX_V3KFyl99fcBVOgUS5A9-N51tUCyaUyxUaT6We7LH7ihQI_NuNlw-mQkk-Yvtb9-tojhqzxz1kuthluyW7vkOEtxFXphg885LYmp3hI7daUyjAT6lkqS61haSoplX-xlWQZtA0RCWLHyGdsoMXMMnQEko_H9_N4GSLmFpErOyF7AWcszGB18EQDJIYtNI"/>
</div>
<div>
<p class="font-bold text-on-surface">Alexandra Sterling</p>
<p class="text-on-surface-variant text-sm tracking-wide uppercase">Bridal Client, May 2024</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Newsletter / CTA -->
<section class="py-32 px-6 md:px-12 bg-background">
<div class="max-w-screen-2xl mx-auto">
<div class="silk-gradient rounded-2xl p-12 md:p-24 text-center text-on-primary relative overflow-hidden">
<div class="relative z-10">
<h2 class="font-headline text-4xl md:text-6xl mb-8">Ready for your transformation?</h2>
<p class="text-primary-fixed text-lg md:text-xl max-w-2xl mx-auto mb-12 font-light">
                            Join our exclusive mailing list for early access to masterclass dates and seasonal beauty tips from our creative director.
                        </p>
<form class="flex flex-col md:flex-row gap-4 max-w-lg mx-auto">
<input class="flex-1 bg-white/10 border-b border-white/30 text-white placeholder:text-white/60 px-6 py-4 focus:outline-none focus:border-white transition-colors" placeholder="Enter your email address" type="email"/>
<button class="bg-surface-container-lowest text-primary px-8 py-4 rounded-md font-bold uppercase tracking-widest text-sm hover:bg-primary-fixed transition-colors" type="submit">
                                Subscribe
                            </button>
</form>
</div>
<!-- Decorative Silk Waves -->
<div class="absolute inset-0 opacity-10 pointer-events-none">
<svg class="w-full h-full" preserveaspectratio="none" viewbox="0 0 100 100">
<path d="M0 100 C 20 0 50 0 100 100" fill="white"></path>
</svg>
</div>
</div>
</div>
</section>
</main>

<!-- Auth Modal -->
<div id="authModal" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4" onclick="closeModal(event)">
  <div class="bg-white dark:bg-stone-900 rounded-lg shadow-xl max-w-md w-full" onclick="event.stopPropagation()">
    
    <!-- Modal Tabs -->
    <div class="flex border-b border-stone-200 dark:border-stone-700">
      <button onclick="switchTab('login')" class="flex-1 py-4 px-6 text-center font-semibold text-stone-700 dark:text-stone-300 border-b-2 border-transparent hover:text-stone-900 dark:hover:text-stone-100 transition-colors" id="loginTab">Login</button>
      <button onclick="switchTab('signup')" class="flex-1 py-4 px-6 text-center font-semibold text-stone-700 dark:text-stone-300 border-b-2 border-transparent hover:text-stone-900 dark:hover:text-stone-100 transition-colors" id="signupTab">Sign Up</button>
    </div>

    <!-- Close Button -->
    <button onclick="closeModal()" class="absolute top-4 right-4 text-stone-500 hover:text-stone-700 dark:hover:text-stone-300" aria-label="Close">
      <span class="material-symbols-outlined">close</span>
    </button>

    <!-- Login Form -->
    <div id="loginContent" class="hidden p-8">
      <h2 class="text-2xl font-bold text-stone-900 dark:text-white mb-6">Login</h2>
      <form class="space-y-5" action="/login" method="POST">
        @csrf
        <div>
          <label class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">Email</label>
          <input type="text" name="email" placeholder="Enter your Email" class="w-full px-4 py-2 border border-stone-300 dark:border-stone-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary dark:bg-stone-800 dark:text-white">
        </div>
        <div>
          <label class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">Password</label>
          <input type="password" name="password" placeholder="Enter your Password" class="w-full px-4 py-2 border border-stone-300 dark:border-stone-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary dark:bg-stone-800 dark:text-white">
        </div>
        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center">
            <input type="checkbox" class="mr-2">
            <span class="text-stone-600 dark:text-stone-400">Remember me</span>
          </label>
          <a href="#" class="text-primary hover:underline">Forgot password?</a>
        </div>
        <button type="submit" class="w-full silk-gradient text-on-primary py-2 rounded-lg font-semibold hover:opacity-90 transition-opacity">Sign In</button>
      </form>
      @if ($errors->all())
        <div class="mt-4 p-3 bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-200 rounded-lg text-sm">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>

    <!-- Signup Form -->
    <div id="signupContent" class="hidden p-8">
      <h2 class="text-2xl font-bold text-stone-900 dark:text-white mb-2">Create Account</h2>
      <p class="text-stone-600 dark:text-stone-400 mb-6 text-sm">Create a free account with your email.</p>
      <form class="space-y-5" action="/signup/register" method="POST">
        @csrf
        <div>
          <label class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">Full Name</label>
          <input type="text" name="name" placeholder="Full Name" class="w-full px-4 py-2 border border-stone-300 dark:border-stone-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary dark:bg-stone-800 dark:text-white">
        </div>
        <div>
          <label class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">Email</label>
          <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border border-stone-300 dark:border-stone-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary dark:bg-stone-800 dark:text-white">
        </div>
        <div>
          <label class="block text-sm font-medium text-stone-700 dark:text-stone-300 mb-2">Password</label>
          <input type="password" name="password" placeholder="Password" class="w-full px-4 py-2 border border-stone-300 dark:border-stone-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary dark:bg-stone-800 dark:text-white">
        </div>
        <button type="submit" class="w-full silk-gradient text-on-primary py-2 rounded-lg font-semibold hover:opacity-90 transition-opacity">Sign Up</button>
      </form>
      @if($errors->all())
        <div class="mt-4 p-3 bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-200 rounded-lg">
          <ul class="text-sm">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
  </div>
</div>

<script>
function openModal(tab) {
  const modal = document.getElementById('authModal');
  modal.classList.remove('hidden');
  switchTab(tab);
}

function closeModal(event) {
  if (event && event.target.id !== 'authModal') return;
  const modal = document.getElementById('authModal');
  modal.classList.add('hidden');
}

function switchTab(tab) {
  const loginContent = document.getElementById('loginContent');
  const signupContent = document.getElementById('signupContent');
  const loginTab = document.getElementById('loginTab');
  const signupTab = document.getElementById('signupTab');

  if (tab === 'login') {
    loginContent.classList.remove('hidden');
    signupContent.classList.add('hidden');
    loginTab.classList.add('border-b-2', 'border-primary', 'text-primary');
    loginTab.classList.remove('border-transparent', 'text-stone-700', 'dark:text-stone-300');
    signupTab.classList.remove('border-b-2', 'border-primary', 'text-primary');
    signupTab.classList.add('border-transparent', 'text-stone-700', 'dark:text-stone-300');
  } else {
    signupContent.classList.remove('hidden');
    loginContent.classList.add('hidden');
    signupTab.classList.add('border-b-2', 'border-primary', 'text-primary');
    signupTab.classList.remove('border-transparent', 'text-stone-700', 'dark:text-stone-300');
    loginTab.classList.remove('border-b-2', 'border-primary', 'text-primary');
    loginTab.classList.add('border-transparent', 'text-stone-700', 'dark:text-stone-300');
  }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    closeModal();
  }
});
</script>

<!-- Footer -->
<footer class="w-full py-16 px-12 bg-stone-100 dark:bg-stone-950 flex flex-col md:flex-row justify-between items-start border-t border-stone-200/20">
<div class="mb-12 md:mb-0">
<div class="font-noto-serif text-lg text-stone-900 dark:text-stone-50 mb-4">Bee's Glam Hub</div>
<p class="text-stone-700 dark:text-stone-300 font-manrope text-sm max-w-xs leading-relaxed">
                Defining the intersection of contemporary editorial artistry and luxury bridal beauty.
            </p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-12 md:gap-24">
<div class="flex flex-col gap-4">
<span class="text-stone-400 text-xs font-bold tracking-widest uppercase">Explore</span>
<a class="text-stone-700 dark:text-stone-300 hover:text-stone-800 dark:hover:text-stone-200 font-manrope text-sm tracking-wide transition-colors" href="#">Services</a>
<a class="text-stone-700 dark:text-stone-300 hover:text-stone-800 dark:hover:text-stone-200 font-manrope text-sm tracking-wide transition-colors" href="#">Masterclass</a>
<a class="text-stone-700 dark:text-stone-300 hover:text-stone-800 dark:hover:text-stone-200 font-manrope text-sm tracking-wide transition-colors" href="#">Portfolio</a>
</div>
<div class="flex flex-col gap-4">
<span class="text-stone-400 text-xs font-bold tracking-widest uppercase">Company</span>
<a class="text-stone-700 dark:text-stone-300 hover:text-stone-800 dark:hover:text-stone-200 font-manrope text-sm tracking-wide transition-colors" href="#">Contact</a>
<a class="text-stone-700 dark:text-stone-300 hover:text-stone-800 dark:hover:text-stone-200 font-manrope text-sm tracking-wide transition-colors" href="#">Instagram</a>
<a class="text-stone-700 dark:text-stone-300 hover:text-stone-800 dark:hover:text-stone-200 font-manrope text-sm tracking-wide transition-colors" href="#">Newsletter</a>
<a class="text-stone-700 dark:text-stone-300 hover:text-stone-800 dark:hover:text-stone-200 font-manrope text-sm tracking-wide transition-colors" href="#">Privacy Policy</a>
</div>
</div>
<div class="mt-16 md:mt-0 pt-12 md:pt-0 w-full md:w-auto text-stone-500 dark:text-stone-400 font-manrope text-xs tracking-wide">
            © 2024 Bee's Glam Hub. All Rights Reserved.
        </div>
</footer>
</body></html>
