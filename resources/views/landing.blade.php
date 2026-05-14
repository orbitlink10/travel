<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiwi - Travel Itinerary Management Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: ui-sans-serif, system-ui, sans-serif; }
        summary::-webkit-details-marker { display: none; }
    </style>
</head>
<body class="bg-white text-slate-900">
    <!-- Navigation -->
    <nav class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur">
        <div class="mx-auto max-w-7xl px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-12">
                <h1 class="text-2xl font-bold text-emerald-600">Tiwi</h1>
                <div class="hidden md:flex gap-8 text-sm">
                    <a href="#products" class="text-slate-600 hover:text-slate-900">Products</a>
                    <a href="#solutions" class="text-slate-600 hover:text-slate-900">Solutions</a>
                    <a href="#pricing" class="text-slate-600 hover:text-slate-900">Pricing</a>
                    <a href="#contact" class="text-slate-600 hover:text-slate-900">Contact</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="/dashboard" class="hidden md:inline px-4 py-2 text-sm font-medium text-slate-600 hover:text-slate-900">
                    Dashboard
                </a>
                <details class="group relative">
                    <summary class="inline-flex cursor-pointer list-none items-center gap-2 rounded-full bg-emerald-600 px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-emerald-700">
                        Start for free
                        <svg class="w-4 h-4 transition group-open:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </summary>
                    <div class="absolute right-0 top-full z-50 mt-3 w-80 max-w-[calc(100vw-2rem)] overflow-hidden rounded-lg border border-slate-200 bg-white text-slate-900 shadow-xl">
                        <a href="#start-free-form" data-client="operator" data-client-label="Tour Operators / DMCs / Travel Agents" class="js-start-free block px-5 py-4 text-sm font-semibold hover:bg-emerald-50">
                            Tour Operators / DMCs / Travel Agents
                        </a>
                        <a href="#start-free-form" data-client="supplier" data-client-label="DMO / Accommodation / Restaurants / Activities" class="js-start-free block border-t border-slate-100 px-5 py-4 text-sm font-semibold hover:bg-emerald-50">
                            DMO / Accommodation / Restaurants / Activities
                        </a>
                    </div>
                </details>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden py-20 md:py-32 lg:py-40">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <h2 class="text-5xl md:text-6xl font-bold leading-tight">
                        The collaboration platform bringing
                        <span class="inline-block rounded-full bg-emerald-100 px-4 font-bold text-emerald-600">
                            travel agencies
                        </span>
                        together
                    </h2>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Build stunning, shareable itineraries. Manage clients. Close deals faster. Tiwi is the all-in-one platform for modern travel professionals.
                    </p>
                    <div class="flex flex-col md:flex-row gap-4 pt-4">
                        <a href="#" class="inline-flex items-center justify-center rounded-lg bg-emerald-600 px-8 py-3 font-semibold text-white hover:bg-emerald-700 transition">
                            Watch a demo
                        </a>
                        <details class="group relative">
                            <summary class="inline-flex w-full cursor-pointer list-none items-center justify-center gap-2 rounded-lg border-2 border-slate-300 px-8 py-3 font-semibold text-slate-900 transition hover:border-slate-400 md:w-auto">
                                Get started
                                <svg class="w-4 h-4 transition group-open:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </summary>
                            <div class="absolute left-0 top-full z-40 mt-3 w-full min-w-80 max-w-[calc(100vw-2rem)] overflow-hidden rounded-lg border border-slate-200 bg-white text-slate-900 shadow-xl md:w-80">
                                <a href="#start-free-form" data-client="operator" data-client-label="Tour Operators / DMCs / Travel Agents" class="js-start-free block px-5 py-4 text-sm font-semibold hover:bg-emerald-50">
                                    Tour Operators / DMCs / Travel Agents
                                </a>
                                <a href="#start-free-form" data-client="supplier" data-client-label="DMO / Accommodation / Restaurants / Activities" class="js-start-free block border-t border-slate-100 px-5 py-4 text-sm font-semibold hover:bg-emerald-50">
                                    DMO / Accommodation / Restaurants / Activities
                                </a>
                            </div>
                        </details>
                    </div>
                </div>

                <!-- Right Content - Illustration -->
                <div class="relative h-96 md:h-full">
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-emerald-50 via-blue-50 to-purple-50 border border-slate-200 flex items-center justify-center">
                        <div class="space-y-6 text-center px-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-emerald-600">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold">Ready to transform</h3>
                            <p class="text-slate-600">Your travel business starts here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="products" class="py-20 md:py-32 bg-slate-50">
        <div class="mx-auto max-w-7xl px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Powerful features built for travel pros</h2>
                <p class="text-lg text-slate-600">Everything you need to create, manage, and sell travel itineraries</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="rounded-2xl bg-white p-8 border border-slate-200 hover:shadow-lg transition">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-emerald-100 mb-6">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Drag & Drop Builder</h3>
                    <p class="text-slate-600">Create stunning itineraries with our intuitive drag-and-drop interface. No coding required.</p>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-slate-200 hover:shadow-lg transition">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-blue-100 mb-6">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">CRM Management</h3>
                    <p class="text-slate-600">Track clients, preferences, and communication history all in one place.</p>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-slate-200 hover:shadow-lg transition">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-purple-100 mb-6">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Pricing Engine</h3>
                    <p class="text-slate-600">Set costs, markups, and commissions. Generate invoices and track payments.</p>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-slate-200 hover:shadow-lg transition">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-orange-100 mb-6">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.658 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Shareable Links</h3>
                    <p class="text-slate-600">Send beautiful, mobile-friendly itineraries to clients with unique share links.</p>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-slate-200 hover:shadow-lg transition">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-red-100 mb-6">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Content Library</h3>
                    <p class="text-slate-600">Build a database of hotels, activities, and destinations for fast reuse.</p>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-slate-200 hover:shadow-lg transition">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-green-100 mb-6">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Automation</h3>
                    <p class="text-slate-600">Save time with email notifications, reminders, and workflow automation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 md:py-32">
        <div class="mx-auto max-w-4xl px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to grow your travel business?</h2>
            <p class="text-lg text-slate-600 mb-8">Join agencies worldwide using Tiwi to create better itineraries and close more deals.</p>
            <details class="group relative mx-auto inline-block text-left">
                <summary class="inline-flex cursor-pointer list-none items-center gap-2 rounded-full bg-emerald-600 px-8 py-4 text-lg font-semibold text-white transition hover:bg-emerald-700">
                    Start for free
                    <svg class="w-5 h-5 transition group-open:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </summary>
                <div class="absolute left-1/2 top-full z-40 mt-3 w-80 max-w-[calc(100vw-2rem)] -translate-x-1/2 overflow-hidden rounded-lg border border-slate-200 bg-white text-slate-900 shadow-xl">
                    <a href="#start-free-form" data-client="operator" data-client-label="Tour Operators / DMCs / Travel Agents" class="js-start-free block px-5 py-4 text-sm font-semibold hover:bg-emerald-50">
                        Tour Operators / DMCs / Travel Agents
                    </a>
                    <a href="#start-free-form" data-client="supplier" data-client-label="DMO / Accommodation / Restaurants / Activities" class="js-start-free block border-t border-slate-100 px-5 py-4 text-sm font-semibold hover:bg-emerald-50">
                        DMO / Accommodation / Restaurants / Activities
                    </a>
                </div>
            </details>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-200 bg-slate-50 py-12">
        <div class="mx-auto max-w-7xl px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="font-bold text-emerald-600 mb-4">Tiwi</h3>
                    <p class="text-sm text-slate-600">Travel itinerary management built for agencies.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li><a href="#" class="hover:text-slate-900">Features</a></li>
                        <li><a href="#" class="hover:text-slate-900">Pricing</a></li>
                        <li><a href="#" class="hover:text-slate-900">Demo</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li><a href="#" class="hover:text-slate-900">About</a></li>
                        <li><a href="#" class="hover:text-slate-900">Blog</a></li>
                        <li><a href="#" class="hover:text-slate-900">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li><a href="#" class="hover:text-slate-900">Privacy</a></li>
                        <li><a href="#" class="hover:text-slate-900">Terms</a></li>
                        <li><a href="#" class="hover:text-slate-900">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row items-center justify-between text-sm text-slate-600">
                <p>&copy; 2026 Tiwi. All rights reserved.</p>
                <div class="flex gap-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-slate-900">Twitter</a>
                    <a href="#" class="hover:text-slate-900">LinkedIn</a>
                    <a href="#" class="hover:text-slate-900">GitHub</a>
                </div>
            </div>
        </div>
    </footer>

    <section id="startFreePanel" class="fixed inset-0 z-[100] hidden overflow-y-auto bg-slate-950/55 px-4 py-8 backdrop-blur-sm">
        <div class="relative mx-auto grid max-w-6xl overflow-hidden rounded-lg bg-white shadow-2xl md:grid-cols-[0.9fr_1.1fr]">
            <button type="button" id="closeStartFree" class="absolute right-5 top-5 z-10 inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-300 bg-white text-2xl leading-none text-[#57546b] hover:bg-slate-50" aria-label="Close registration form">
                    &times;
            </button>

            <aside class="hidden min-h-[760px] items-center justify-center bg-slate-50 p-10 md:flex">
                <div class="relative h-[520px] w-full max-w-sm">
                    <div class="absolute bottom-20 left-8 h-72 w-56 rounded-3xl border-4 border-slate-200 bg-white"></div>
                    <div class="absolute bottom-36 left-20 h-40 w-40 rounded-full bg-emerald-100"></div>
                    <div class="absolute bottom-16 left-10 h-20 w-20 rounded-full bg-slate-200"></div>
                    <div class="absolute bottom-8 left-16 h-48 w-28 -rotate-12 rounded-t-full bg-[#07545c]"></div>
                    <div class="absolute bottom-44 left-24 h-20 w-20 rounded-full border-4 border-slate-900 bg-white"></div>
                    <div class="absolute bottom-40 left-4 h-44 w-44 rounded-full border-[18px] border-slate-900 border-r-transparent border-t-transparent"></div>
                    <div class="absolute bottom-0 left-24 h-1 w-72 bg-slate-900"></div>
                    <div class="absolute right-10 top-28 h-12 w-12 rounded-full bg-[#68b742]"></div>
                    <div class="absolute right-24 top-40 h-9 w-9 rounded-full bg-[#a7d48d]"></div>
                    <div class="absolute right-4 top-44 h-16 w-8 rotate-12 rounded-full border-4 border-slate-900"></div>
                </div>
            </aside>

            <div class="max-h-[90vh] overflow-y-auto px-7 py-10 md:px-14">
                <header class="text-center">
                    <a href="{{ route('home') }}" class="inline-block text-[58px] font-black leading-[0.8] text-emerald-600 md:text-[68px]">
                        tiwi
                    </a>
                    <p class="mt-1 text-sm font-bold text-[#555260]">Connect - Collaborate - Thrive</p>
                </header>

                <div id="successNotice" class="mt-8 hidden rounded-md bg-emerald-50 px-5 py-4 text-xl text-emerald-700">
                    <strong>Success!</strong> Verification email sent.
                </div>

                <div class="pt-10">
                    <p id="selectedClientLabel" class="mb-4 text-sm font-semibold text-[#68b742]">Tour Operators / DMCs / Travel Agents</p>
                    <h2 class="mb-4 text-[34px] font-normal leading-tight text-[#57546b]">Try Tiwi for free!</h2>
                    <p class="max-w-[680px] text-xl leading-snug text-[#6a667f]">
                        Start your <strong class="font-bold">14-day trial</strong> by providing your email and creating a secure password.
                    </p>
                </div>

                <form id="startFreeForm" class="mt-12 space-y-6">
                    <input type="hidden" name="role" value="agency_owner" />
                    <input id="clientType" type="hidden" name="client_type" value="operator" />

                    <div>
                        <label for="firstName" class="mb-2 block text-lg font-bold text-[#555260]">First name <span class="text-red-500">*</span></label>
                        <input id="firstName" name="first_name" type="text" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                    </div>

                    <div>
                        <label for="lastName" class="mb-2 block text-lg font-bold text-[#555260]">Last name <span class="text-red-500">*</span></label>
                        <input id="lastName" name="last_name" type="text" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                    </div>

                    <div>
                        <label for="agencyName" class="mb-2 block text-lg font-bold text-[#555260]">Company name <span class="text-red-500">*</span></label>
                        <input id="agencyName" name="agency_name" type="text" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                    </div>

                    <div>
                        <label for="freeEmail" class="mb-2 block text-lg font-bold text-[#555260]">Email <span class="text-red-500">*</span></label>
                        <p class="mb-3 text-lg text-[#6a667f]">This will be your Username</p>
                        <input id="freeEmail" name="email" type="email" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                    </div>

                    <div>
                        <label for="freePassword" class="mb-2 block text-lg font-bold text-[#555260]">Password <span class="text-red-500">*</span></label>
                        <p class="mb-3 text-lg text-[#6a667f]">Use this when you first log in</p>
                        <input id="freePassword" name="password" type="password" minlength="8" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                        <div class="mt-3 grid grid-cols-4 gap-2">
                            <span class="h-1 rounded-full bg-slate-300"></span>
                            <span class="h-1 rounded-full bg-slate-300"></span>
                            <span class="h-1 rounded-full bg-slate-300"></span>
                            <span class="h-1 rounded-full bg-slate-300"></span>
                        </div>
                        <p id="passwordStrength" class="mt-2 text-right text-sm text-[#77738b]">Very weak</p>
                    </div>

                    <div>
                        <label for="freePasswordConfirmation" class="mb-2 block text-lg font-bold text-[#555260]">Confirm password <span class="text-red-500">*</span></label>
                        <input id="freePasswordConfirmation" name="password_confirmation" type="password" minlength="8" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                    </div>

                    <label class="flex items-center gap-3 text-xl leading-snug text-[#6a667f]">
                        <input type="checkbox" required class="h-7 w-7 rounded border-[#d2d0dc] text-[#6bb645] focus:ring-[#6bb645]" />
                        <span>I accept the <a href="#" class="text-[#4fa52f]">Terms of Use</a> and <a href="#" class="text-[#4fa52f]">Privacy Policy</a> <span class="text-red-500">*</span></span>
                    </label>

                    <label class="block w-[236px] cursor-pointer rounded-sm border border-[#d9d9d9] bg-[#fafafa] p-5 shadow-sm">
                        <span class="flex items-center gap-5">
                            <input type="checkbox" required class="h-10 w-10 border-2 border-[#555] text-[#6bb645] focus:ring-[#6bb645]" />
                            <span class="text-xl text-[#222]">I'm not a robot</span>
                        </span>
                        <span class="mt-11 flex items-end justify-end gap-2 text-sm text-[#555]">
                            <span class="inline-block h-8 w-8 rounded bg-[#4d8df7]"></span>
                            reCAPTCHA
                        </span>
                    </label>

                    <p class="text-xl leading-snug text-[#6a667f]">
                        Tiwi uses your contact details to share relevant updates. You can unsubscribe at any time.
                    </p>

                    <button type="submit" class="h-[57px] w-full rounded-md bg-[#68b742] text-2xl font-bold text-white transition hover:bg-[#5ba337]">
                        Register
                    </button>

                    <p class="text-xl text-[#6a667f]">
                        Already have an account?
                        <a href="{{ route('dashboard') }}" class="text-[#4fa52f]">Log in</a>
                    </p>

                    <div id="startFreeMessage" class="hidden rounded-md px-4 py-3 text-base"></div>
                </form>
            </div>
        </div>
    </section>

    <script>
        const startFreePanel = document.getElementById('startFreePanel');
        const closeStartFree = document.getElementById('closeStartFree');
        const selectedClientLabel = document.getElementById('selectedClientLabel');
        const clientType = document.getElementById('clientType');
        const startFreeForm = document.getElementById('startFreeForm');
        const startFreeMessage = document.getElementById('startFreeMessage');
        const freePassword = document.getElementById('freePassword');
        const passwordStrength = document.getElementById('passwordStrength');
        const successNotice = document.getElementById('successNotice');
        const registerEndpoint = @json(url('/api/register'));

        document.querySelectorAll('.js-start-free').forEach((link) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                selectedClientLabel.textContent = link.dataset.clientLabel;
                clientType.value = link.dataset.client;
                successNotice.classList.add('hidden');
                startFreeMessage.className = 'hidden rounded-md px-4 py-3 text-base';
                startFreeMessage.textContent = '';
                document.querySelectorAll('details[open]').forEach((details) => details.removeAttribute('open'));
                startFreePanel.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
                window.scrollTo({ top: 0 });
            });
        });

        closeStartFree.addEventListener('click', () => {
            startFreePanel.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });

        freePassword.addEventListener('input', () => {
            let score = 0;
            if (freePassword.value.length >= 8) score++;
            if (/[A-Z]/.test(freePassword.value)) score++;
            if (/[0-9]/.test(freePassword.value)) score++;
            if (/[^A-Za-z0-9]/.test(freePassword.value)) score++;

            const labels = ['Very weak', 'Weak', 'Fair', 'Good', 'Strong'];
            passwordStrength.textContent = labels[score];
            passwordStrength.className = score >= 3 ? 'mt-2 text-right text-sm text-[#4fa52f]' : 'mt-2 text-right text-sm text-[#77738b]';
        });

        startFreeForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            startFreeMessage.className = 'rounded-md bg-slate-100 px-4 py-3 text-base text-[#57546b]';
            startFreeMessage.textContent = 'Creating your account...';

            const formData = new FormData(startFreeForm);
            const data = {
                name: `${formData.get('first_name')} ${formData.get('last_name')}`.trim(),
                email: formData.get('email'),
                password: formData.get('password'),
                password_confirmation: formData.get('password_confirmation'),
                agency_name: formData.get('agency_name'),
                client_type: formData.get('client_type'),
                role: formData.get('role'),
            };

            try {
                const response = await fetch(registerEndpoint, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                });

                const result = await response.json();

                if (!response.ok) {
                    const errors = result.errors ? Object.values(result.errors).flat().join(' ') : result.message;
                    throw new Error(errors || 'Registration failed.');
                }

                successNotice.classList.remove('hidden');
                if (result.data?.token) {
                    localStorage.setItem('tiwi_api_token', result.data.token);
                }
                if (result.data?.user) {
                    localStorage.setItem('tiwi_user', JSON.stringify(result.data.user));
                }
                startFreeMessage.className = 'rounded-md bg-[#eef8e9] px-4 py-3 text-base text-[#356f22]';
                startFreeMessage.textContent = 'Account created. Taking you to your dashboard...';
                startFreeForm.reset();
                passwordStrength.textContent = 'Very weak';
                setTimeout(() => {
                    window.location.href = @json(route('dashboard'));
                }, 900);
            } catch (error) {
                startFreeMessage.className = 'rounded-md bg-red-50 px-4 py-3 text-base text-red-700';
                startFreeMessage.textContent = error.message;
            }
        });
    </script>
</body>
</html>
