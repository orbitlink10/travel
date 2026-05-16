<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiwi Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: "Trebuchet MS", "Segoe UI", Arial, sans-serif; letter-spacing: 0; }
        .choice-card[aria-pressed="true"] {
            border-color: #68b742;
            background: #eef8e9;
            color: #68b742;
        }
        .workspace-card {
            border: 1px solid #e2e8f0;
            background: #fff;
            box-shadow: 0 1px 2px rgb(15 23 42 / 0.06);
        }
    </style>
</head>
<body class="bg-white text-[#57546b]">
    <main class="grid min-h-screen lg:grid-cols-[1fr_1fr]">
        <section class="hidden items-end justify-center bg-slate-50 px-10 lg:flex">
            <div class="relative h-[620px] w-full max-w-xl">
                <div class="absolute bottom-32 left-8 h-72 w-64 rounded-3xl border-4 border-slate-900 bg-white"></div>
                <div class="absolute bottom-44 left-12 h-60 w-56 rounded-2xl bg-slate-200"></div>
                <div class="absolute bottom-48 left-24 h-24 w-24 rounded-full bg-white"></div>
                <div class="absolute bottom-16 left-32 h-80 w-44 rounded-t-full bg-[#07545c]"></div>
                <div class="absolute bottom-96 left-48 h-28 w-28 rounded-full border-[12px] border-slate-900 bg-white"></div>
                <div class="absolute bottom-96 left-56 h-24 w-20 rounded-full bg-[#68b742]"></div>
                <div class="absolute bottom-72 left-72 h-40 w-72 rounded-full border-4 border-slate-900 bg-[#68b742]"></div>
                <div class="absolute bottom-[21rem] left-[23rem] h-10 w-10 rounded-full bg-white"></div>
                <div class="absolute bottom-[21rem] left-[27rem] h-10 w-10 rounded-full bg-white"></div>
                <div class="absolute bottom-[21rem] left-[31rem] h-10 w-10 rounded-full bg-white"></div>
                <div class="absolute bottom-0 left-20 h-1 w-[430px] bg-slate-900"></div>
            </div>
        </section>

        <section class="flex min-h-screen items-center px-6 py-12 md:px-16">
            <div class="mx-auto w-full max-w-3xl">
                <header class="mb-20 text-center">
                    <a href="{{ route('home') }}" class="inline-block text-[72px] font-black leading-[0.8] text-emerald-600">
                        tiwi
                    </a>
                    <p class="mt-1 text-base font-bold text-[#555260]">Connect - Collaborate - Thrive</p>
                </header>

                <section id="loginStep" class="hidden">
                    <h1 class="text-[40px] font-normal leading-tight text-[#57546b]">Log in to your workspace</h1>
                    <p class="mt-3 text-2xl text-[#77738b]">Use the email and password you registered with.</p>

                    <form id="loginForm" class="mt-16 space-y-7">
                        <div>
                            <label for="loginEmail" class="mb-2 block text-xl font-bold text-[#625e78]">Email</label>
                            <input id="loginEmail" name="email" type="email" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                        </div>

                        <div>
                            <label for="loginPassword" class="mb-2 block text-xl font-bold text-[#625e78]">Password</label>
                            <input id="loginPassword" name="password" type="password" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                        </div>

                        <button type="submit" class="h-[57px] w-full rounded-md bg-[#68b742] text-2xl font-bold text-white transition hover:bg-[#5ba337]">
                            Log in
                        </button>

                        <p class="text-xl text-[#6a667f]">
                            New to Tiwi?
                            <a href="{{ route('home') }}" class="text-[#4fa52f]">Start a free trial</a>
                        </p>

                        <div id="loginMessage" class="hidden rounded-md px-4 py-3 text-base"></div>
                    </form>
                </section>

                <section id="onboardingStep" class="hidden">
                    <h1 class="text-[40px] font-normal leading-tight text-[#57546b]">First things first!</h1>
                    <p class="mt-3 text-2xl text-[#77738b]">Which option describes you? This will help us give you the best start.</p>

                    <div class="mt-20 space-y-5">
                        <button type="button" class="choice-card flex min-h-[104px] w-full items-center gap-7 rounded-lg border border-slate-300 px-8 text-left text-[34px] text-[#625e78] transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-role="Destination Management Company" aria-pressed="true">
                            <span class="text-[#68b742]">
                                <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 18 3 21V6l6-3 6 3 6-3v15l-6 3-6-3Z"/><path d="M9 3v15M15 6v15"/></svg>
                            </span>
                            <span>Destination Management Company</span>
                        </button>

                        <button type="button" class="choice-card flex min-h-[104px] w-full items-center gap-7 rounded-lg border border-slate-300 px-8 text-left text-[34px] text-[#625e78] transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-role="Tour Operator" aria-pressed="false">
                            <svg class="h-10 w-10 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 21v-2a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v2"/></svg>
                            <span>Tour Operator</span>
                        </button>

                        <button type="button" class="choice-card flex min-h-[104px] w-full items-center gap-7 rounded-lg border border-slate-300 px-8 text-left text-[34px] text-[#625e78] transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-role="Travel Agent" aria-pressed="false">
                            <svg class="h-10 w-10 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m22 2-7 20-4-9-9-4 20-7Z"/><path d="M22 2 11 13"/></svg>
                            <span>Travel Agent</span>
                        </button>

                        <button type="button" class="choice-card flex min-h-[104px] w-full items-center gap-7 rounded-lg border border-slate-300 px-8 text-left text-[34px] text-[#625e78] transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-role="Day Tour" aria-pressed="false">
                            <svg class="h-10 w-10 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="5" width="16" height="16" rx="2"/><path d="M16 3v4M8 3v4M4 11h16"/></svg>
                            <span>Day Tour</span>
                        </button>

                        <button type="button" class="choice-card flex min-h-[104px] w-full items-center gap-7 rounded-lg border border-slate-300 px-8 text-left text-[34px] text-[#625e78] transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-role="Accommodation" aria-pressed="false">
                            <svg class="h-10 w-10 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18"/><path d="M5 21V9l7-5 7 5v12"/><path d="M9 21v-7h6v7"/></svg>
                            <span>Accommodation (Hotel, Lodge, BnB, etc.)</span>
                        </button>

                        <button type="button" class="choice-card flex min-h-[104px] w-full items-center gap-7 rounded-lg border border-slate-300 px-8 text-left text-[34px] text-[#625e78] transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-role="Destination Management Organisation" aria-pressed="false">
                            <svg class="h-10 w-10 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span>Destination Management Organisation</span>
                        </button>

                        <button type="button" class="choice-card flex min-h-[104px] w-full items-center gap-7 rounded-lg border border-slate-300 px-8 text-left text-[34px] text-[#625e78] transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-role="Activity or Experience" aria-pressed="false">
                            <svg class="h-10 w-10 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="5" width="16" height="16" rx="2"/><path d="M16 3v4M8 3v4M4 11h16"/></svg>
                            <span>Activity or Experience</span>
                        </button>

                        <button type="button" class="choice-card flex min-h-[104px] w-full items-center gap-7 rounded-lg border border-slate-300 px-8 text-left text-[34px] text-[#625e78] transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-role="Restaurant" aria-pressed="false">
                            <svg class="h-10 w-10 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M7 3v8M11 3v8M7 7h4"/><path d="M15 3h2a4 4 0 0 1 4 4v1a4 4 0 0 1-4 4h-2v9H7V11"/></svg>
                            <span>Restaurant</span>
                        </button>
                    </div>

                    <div class="mt-10 flex justify-end">
                        <button id="nextButton" type="button" class="inline-flex items-center gap-3 rounded-md bg-[#68b742] px-8 py-4 text-2xl font-bold text-white transition hover:bg-[#5ba337]">
                            Next
                            <span aria-hidden="true">-></span>
                        </button>
                    </div>
                </section>

                <section id="accountSetupStep" class="hidden">
                    <h1 class="text-[40px] font-normal leading-tight text-[#57546b]">Let's set up your account</h1>
                    <p class="mt-3 text-2xl text-[#77738b]">Fill in the information below to get started.</p>

                    <form id="accountSetupForm" class="mt-20 space-y-7">
                        <div>
                            <label for="companyName" class="mb-2 block text-xl font-bold text-[#625e78]">Company name <span class="text-red-500">*</span></label>
                            <input id="companyName" name="company_name" type="text" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                        </div>

                        <div>
                            <label for="businessLocation" class="mb-2 block text-xl font-bold text-[#625e78]">Business location <span class="text-red-500">*</span></label>
                            <input id="businessLocation" name="business_location" type="text" required placeholder="Search for a country" class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition placeholder:text-slate-400 focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                        </div>

                        <div>
                            <label for="phoneNumber" class="mb-2 block text-xl font-bold text-[#625e78]">Phone number <span class="text-red-500">*</span></label>
                            <div class="flex h-14 rounded-md border border-[#d2d0dc] focus-within:border-[#6bb645] focus-within:ring-2 focus-within:ring-[#6bb645]/20">
                                <button type="button" class="flex w-16 items-center justify-center border-r border-[#d2d0dc] text-xl">🇰🇪</button>
                                <input id="phoneNumber" name="phone_number" type="tel" required value="+254" class="min-w-0 flex-1 px-4 text-xl outline-none" />
                            </div>
                        </div>

                        <div>
                            <label for="website" class="mb-2 block text-xl font-bold text-[#625e78]">Website <span class="text-red-500">*</span></label>
                            <input id="website" name="website" type="url" required class="h-14 w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                        </div>

                        <div>
                            <label for="languagePreference" class="mb-2 block text-xl font-bold text-[#625e78]">Marketing communication language preference</label>
                            <select id="languagePreference" name="language_preference" class="h-14 w-full rounded-md border border-[#d2d0dc] bg-white px-4 text-xl text-[#625e78] outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20">
                                <option>English</option>
                                <option>French</option>
                                <option>Spanish</option>
                                <option>Portuguese</option>
                                <option>German</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-between pt-12">
                            <button type="button" id="previousButton" class="inline-flex items-center gap-3 rounded-md border border-slate-400 px-8 py-4 text-2xl font-bold text-slate-500 transition hover:border-[#68b742] hover:text-[#68b742]">
                                <span aria-hidden="true">&lt;-</span>
                                Previous
                            </button>
                            <button type="submit" class="inline-flex items-center gap-3 rounded-md bg-[#68b742] px-8 py-4 text-2xl font-bold text-white transition hover:bg-[#5ba337]">
                                Next
                                <span aria-hidden="true">-></span>
                            </button>
                        </div>
                        <div id="accountSetupMessage" class="hidden rounded-md px-4 py-3 text-base"></div>
                    </form>
                </section>

                <section id="completeStep" class="hidden text-center">
                    <div class="mx-auto mb-16 h-[420px] max-w-xl">
                        <div class="relative h-full">
                            <div class="absolute left-8 top-32 h-44 w-44 rounded-full border-[46px] border-slate-200"></div>
                            <div class="absolute right-2 top-40 h-24 w-64 rotate-35 rounded-full bg-slate-200"></div>
                            <div class="absolute right-32 top-4 h-16 w-16 rounded-md bg-slate-200"></div>
                            <div class="absolute bottom-8 left-24 h-1 w-[420px] bg-slate-900"></div>
                            <div class="absolute bottom-8 left-48 h-56 w-44 rounded-t-full bg-[#57546b]"></div>
                            <div class="absolute bottom-72 left-72 h-24 w-24 rounded-full border-[10px] border-slate-900 bg-white"></div>
                            <div class="absolute bottom-[19rem] left-[18rem] h-14 w-24 rounded-t-full bg-[#07545c]"></div>
                            <div class="absolute bottom-16 left-32 h-36 w-64 -rotate-12 rounded-xl border-4 border-slate-900 bg-[#68b742]"></div>
                            <div class="absolute bottom-36 left-42 h-8 w-8 rounded-full bg-white"></div>
                            <div class="absolute bottom-24 left-52 h-10 w-16 rounded-full bg-white"></div>
                            <div class="absolute bottom-40 left-72 h-3 w-16 rounded-full bg-white"></div>
                            <div class="absolute bottom-28 left-72 h-3 w-11 rounded-full bg-white"></div>
                            <div class="absolute bottom-20 left-80 h-3 w-12 rounded-full bg-white"></div>
                            <div class="absolute bottom-44 left-44 h-32 w-24 -rotate-12 rounded-b-full border-4 border-slate-900 bg-[#07545c]"></div>
                        </div>
                    </div>

                    <h1 class="text-[34px] font-normal leading-tight text-[#57546b]">You're all set!</h1>
                    <p class="mx-auto mt-4 max-w-xl text-2xl leading-snug text-[#77738b]">You've added all the necessary information to complete setting up your account.</p>

                    <div class="mt-12 flex flex-col items-center gap-8">
                        <button type="button" id="goDashboardButton" class="rounded-md bg-[#68b742] px-8 py-4 text-2xl font-bold text-white transition hover:bg-[#5ba337]">
                            Go to Dashboard
                        </button>
                        <button type="button" id="editInformationButton" class="inline-flex items-center gap-3 text-2xl text-[#68b742] hover:text-[#5ba337]">
                            <span aria-hidden="true">&lt;-</span>
                            Edit information
                        </button>
                    </div>
                </section>

                <section id="workspaceStep" class="fixed inset-0 z-50 overflow-y-auto bg-white text-[#625e78]">
                    <div id="workspaceMenuScreen" class="{{ request('view') === 'home' ? 'hidden ' : '' }}min-h-screen px-4 py-5 md:px-8 lg:px-12">
                        <header class="flex items-center gap-5 border-b border-slate-100 pb-7">
                            <div class="h-9 w-14 rounded-t-full border-[12px] border-b-0 border-[#68b742]"></div>
                            <div class="h-14 border-l border-slate-200"></div>
                            <a href="{{ route('home') }}" class="text-[38px] font-black leading-none text-[#555260]">tiwi</a>
                        </header>

                        <section class="flex items-center justify-between border-b border-slate-200 py-7">
                            <div class="flex min-w-0 items-center gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-slate-200 text-slate-400">
                                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="8" r="4"/><path d="M4 22a8 8 0 0 1 16 0Z"/></svg>
                                </div>
                                <div class="min-w-0">
                                    <h1 id="workspaceUserEmail" class="truncate text-[17px] leading-tight text-[#57546b]">agency@example.com</h1>
                                    <p id="workspaceAgencyMeta" class="mt-1 text-sm text-[#57546b]">Admin | Trial</p>
                                </div>
                            </div>
                            <button type="button" class="text-2xl text-[#57546b]" aria-label="Open profile">›</button>
                        </section>

                        <nav class="divide-y divide-slate-200">
                            <button type="button" class="flex w-full items-center gap-6 py-6 text-left text-[18px] text-[#625e78]">
                                <svg class="h-7 w-7 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                                <span>Notifications</span>
                            </button>

                            <div class="py-4">
                                <a id="homeNavButton" href="{{ route('dashboard', ['view' => 'home']) }}" class="flex w-full items-center gap-6 py-4 text-left text-[18px] text-[#625e78]">
                                    <svg class="h-7 w-7 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 11 12 3l9 8"/><path d="M5 10v10h14V10"/><path d="M9 20v-6h6v6"/></svg>
                                    <span>Home</span>
                                </a>
                                <section id="homeContentPanel" class="mx-2 mb-3 hidden rounded-md border border-slate-200 bg-slate-50 px-4 py-4">
                                    <p class="text-xs font-bold uppercase tracking-wide text-[#68b742]">Home</p>
                                    <h2 id="workspaceHeroTitle" class="mt-2 text-[18px] font-normal leading-snug text-[#57546b]">
                                        Efficiently build beautiful itineraries.
                                    </h2>
                                    <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-500">
                                        Start a trip, manage contacts, and keep your content ready for proposals.
                                    </p>
                                    <div class="mt-4 grid grid-cols-3 gap-3 text-sm">
                                        <div class="rounded-md bg-white p-3">
                                            <p class="text-xs text-slate-400">Trips</p>
                                            <p class="mt-1 text-lg text-[#57546b]">8</p>
                                        </div>
                                        <div class="rounded-md bg-white p-3">
                                            <p class="text-xs text-slate-400">Contacts</p>
                                            <p class="mt-1 text-lg text-[#57546b]">24</p>
                                        </div>
                                        <div class="rounded-md bg-white p-3">
                                            <p class="text-xs text-slate-400">Content</p>
                                            <p class="mt-1 text-lg text-[#57546b]">136</p>
                                        </div>
                                    </div>
                                    <button type="button" id="homeCreateItineraryButton" class="mt-4 rounded-md bg-[#68b742] px-4 py-2 text-sm font-bold text-white hover:bg-[#5ba337]">
                                        Create itinerary
                                    </button>
                                </section>
                                <button type="button" class="flex w-full items-center gap-6 py-4 text-left text-[18px] text-[#625e78]">
                                    <svg class="h-7 w-7 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>
                                    <span>Contacts</span>
                                </button>
                                <button type="button" id="createItineraryButton" class="flex w-full items-center justify-between gap-6 py-4 text-left text-[18px] text-[#625e78]">
                                    <span class="flex items-center gap-6">
                                        <svg class="h-7 w-7 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="m22 2-7 20-4-9-9-4 20-7Z"/><path d="M22 2 11 13"/></svg>
                                        <span>Trip solutions</span>
                                    </span>
                                    <span class="text-2xl">›</span>
                                </button>
                                <button type="button" class="flex w-full items-center justify-between gap-6 py-4 text-left text-[18px] text-[#625e78]">
                                    <span class="flex items-center gap-6">
                                        <svg class="h-7 w-7 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="5" width="16" height="14" rx="2"/><path d="M8 9h8M8 13h5"/></svg>
                                        <span>Content solutions</span>
                                    </span>
                                    <span class="text-2xl">›</span>
                                </button>
                                <button type="button" class="flex w-full items-center justify-between gap-6 py-4 text-left text-[18px] text-[#625e78]">
                                    <span class="flex items-center gap-6">
                                        <svg class="h-7 w-7 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.8 1.8 0 0 0 .36 2l.05.05a2 2 0 1 1-2.83 2.83l-.05-.05a1.8 1.8 0 0 0-2-.36 1.8 1.8 0 0 0-1.1 1.66V21a2 2 0 1 1-4 0v-.07A1.8 1.8 0 0 0 8.7 19.3a1.8 1.8 0 0 0-2 .36l-.05.05a2 2 0 1 1-2.83-2.83l.05-.05a1.8 1.8 0 0 0 .36-2A1.8 1.8 0 0 0 2.6 13H2a2 2 0 1 1 0-4h.07A1.8 1.8 0 0 0 3.7 7.9a1.8 1.8 0 0 0-.36-2l-.05-.05A2 2 0 1 1 6.12 3l.05.05a1.8 1.8 0 0 0 2 .36A1.8 1.8 0 0 0 9.27 1.8V2a2 2 0 1 1 4 0v.07a1.8 1.8 0 0 0 1.1 1.66 1.8 1.8 0 0 0 2-.36l.05-.05a2 2 0 1 1 2.83 2.83l-.05.05a1.8 1.8 0 0 0-.36 2A1.8 1.8 0 0 0 21.4 9H22a2 2 0 1 1 0 4h-.07A1.8 1.8 0 0 0 19.4 15Z"/></svg>
                                        <span>Account setup</span>
                                    </span>
                                    <span class="text-2xl">›</span>
                                </button>
                            </div>
                        </nav>

                        <div class="fixed bottom-4 left-4 flex flex-col gap-4">
                            <button type="button" class="relative flex h-14 w-14 items-center justify-center rounded-full bg-[#07545c] text-white shadow-lg">
                                <span class="absolute -right-1 -top-2 flex h-7 w-7 items-center justify-center rounded-full bg-white text-sm font-bold text-slate-900 shadow">3</span>
                                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="5" y="5" width="14" height="14" rx="2"/><path d="m8 12 2 2 5-6"/></svg>
                            </button>
                            <button type="button" class="flex h-14 w-14 items-center justify-center rounded-full bg-[#07545c] text-white shadow-lg">
                                <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a4 4 0 0 1-4 4H8l-5 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4Z"/><path d="M8 9h8M8 13h5"/></svg>
                            </button>
                        </div>
                    </div>

                    <section id="homeDashboardScreen" class="{{ request('view') === 'home' ? '' : 'hidden ' }}min-h-screen bg-[#f7f8f7] text-[#625e78]">
                        <aside id="homeRail" class="fixed left-0 top-0 z-30 flex h-screen w-[92px] flex-col items-center bg-white shadow-sm">
                            <button type="button" id="homeRailToggle" class="mt-7 h-10 w-14 rounded-t-full border-[13px] border-b-0 border-[#68b742]" aria-label="Toggle navigation" aria-expanded="false"></button>
                            <div class="mt-12 flex h-11 w-11 items-center justify-center rounded-full bg-slate-200 text-slate-400">
                                <svg class="h-8 w-8" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="8" r="4"/><path d="M4 22a8 8 0 0 1 16 0Z"/></svg>
                            </div>
                            <button type="button" class="rail-nav-icon mt-10 text-[#625e78]" data-section="notifications" aria-label="Notifications">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                            </button>
                            <button type="button" class="rail-nav-icon mt-8 rounded-md bg-[#68b742] p-3 text-white" data-section="home" aria-label="Home">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 11 12 3l9 8"/><path d="M5 10v10h14V10"/><path d="M9 20v-6h6v6"/></svg>
                            </button>
                            <button type="button" class="rail-nav-icon mt-7 text-[#625e78]" data-section="contacts" aria-label="Contacts">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>
                            </button>
                            <button type="button" class="rail-nav-icon mt-7 text-[#625e78]" data-section="trip" aria-label="Trip solutions">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="m22 2-7 20-4-9-9-4 20-7Z"/><path d="M22 2 11 13"/></svg>
                            </button>
                            <button type="button" class="rail-nav-icon mt-7 text-[#625e78]" data-section="content" aria-label="Content solutions">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="5" width="16" height="14" rx="2"/><path d="M8 9h8M8 13h5"/></svg>
                            </button>
                            <button type="button" class="rail-nav-icon mt-7 text-[#625e78]" data-section="account" aria-label="Account setup">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.8 1.8 0 0 0 .36 2l.05.05a2 2 0 1 1-2.83 2.83l-.05-.05a1.8 1.8 0 0 0-2-.36 1.8 1.8 0 0 0-1.1 1.66V21a2 2 0 1 1-4 0v-.07A1.8 1.8 0 0 0 8.7 19.3a1.8 1.8 0 0 0-2 .36l-.05.05a2 2 0 1 1-2.83-2.83l.05-.05a1.8 1.8 0 0 0 .36-2A1.8 1.8 0 0 0 2.6 13H2a2 2 0 1 1 0-4h.07A1.8 1.8 0 0 0 3.7 7.9a1.8 1.8 0 0 0-.36-2l-.05-.05A2 2 0 1 1 6.12 3l.05.05a1.8 1.8 0 0 0 2 .36A1.8 1.8 0 0 0 9.27 1.8V2a2 2 0 1 1 4 0v.07a1.8 1.8 0 0 0 1.1 1.66 1.8 1.8 0 0 0 2-.36l.05-.05a2 2 0 1 1 2.83 2.83l-.05.05a1.8 1.8 0 0 0-.36 2A1.8 1.8 0 0 0 21.4 9H22a2 2 0 1 1 0 4h-.07A1.8 1.8 0 0 0 19.4 15Z"/></svg>
                            </button>
                        </aside>

                        <div id="homeDrawerBackdrop" class="fixed inset-0 z-40 hidden bg-slate-900/10"></div>
                        <aside id="homeSideDrawer" class="fixed inset-y-0 left-0 z-50 w-[340px] -translate-x-full bg-white px-5 py-4 shadow-2xl transition-transform duration-300 ease-out">
                            <header class="flex items-center justify-between border-b border-slate-100 pb-5">
                                <div class="flex items-center gap-4">
                                    <div class="h-10 w-14 rounded-t-full border-[13px] border-b-0 border-[#68b742]"></div>
                                    <div class="h-12 border-l border-slate-200"></div>
                                    <span class="text-[34px] font-black leading-none text-[#555260]">tiwi</span>
                                </div>
                                <button type="button" id="homeDrawerClose" class="h-8 w-8 rounded-full border border-[#68b742] text-[#68b742]" aria-label="Close navigation"></button>
                            </header>

                            <section class="flex items-center gap-3 border-b border-slate-200 py-5">
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-slate-200 text-slate-400">
                                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="8" r="4"/><path d="M4 22a8 8 0 0 1 16 0Z"/></svg>
                                </div>
                                <div class="min-w-0">
                                    <p class="truncate text-sm text-[#57546b]">agency@example.com</p>
                                    <p class="mt-1 text-xs text-[#57546b]">Admin | Trial</p>
                                </div>
                            </section>

                            <nav class="mt-4 space-y-2 text-[17px]">
                                <button type="button" class="drawer-nav-item flex w-full items-center gap-5 rounded-md px-4 py-3 text-left text-[#625e78]" data-section="notifications">
                                    <svg class="h-6 w-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M18 8a6 6 0 1 0-12 0c0 7-3 7-3 7h18s-3 0-3-7"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                                    Notifications
                                </button>
                                <button type="button" class="drawer-nav-item flex w-full items-center gap-5 rounded-md bg-[#68b742] px-4 py-3 text-left text-white" data-section="home">
                                    <svg class="h-6 w-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 11 12 3l9 8"/><path d="M5 10v10h14V10"/><path d="M9 20v-6h6v6"/></svg>
                                    Home
                                </button>
                                <button type="button" class="drawer-nav-item flex w-full items-center gap-5 rounded-md px-4 py-3 text-left text-[#625e78]" data-section="contacts">
                                    <svg class="h-6 w-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>
                                    Contact manager
                                </button>
                                <button type="button" id="tripSolutionsToggle" class="drawer-nav-item flex w-full items-center justify-between rounded-md px-4 py-3 text-left text-[#625e78]" data-section="trip" aria-expanded="false">
                                    <span class="flex items-center gap-5">
                                        <svg class="h-6 w-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="m22 2-7 20-4-9-9-4 20-7Z"/><path d="M22 2 11 13"/></svg>
                                        Trip solutions
                                    </span>
                                    <span id="tripSolutionsChevron">⌄</span>
                                </button>
                                <div id="tripSolutionsSubmenu" class="hidden space-y-1 pb-2 pl-7 text-[#625e78]">
                                    <button type="button" id="itineraryBuilderToggle" class="flex w-full items-center justify-between rounded-md py-3 pl-0 pr-4 text-left" aria-expanded="false">
                                        <span class="flex items-center gap-5">
                                            <span class="h-3 w-3 rounded-full border border-[#625e78]"></span>
                                            Itinerary builder
                                        </span>
                                        <span id="itineraryBuilderChevron">⌄</span>
                                    </button>
                                    <div id="itineraryBuilderSubmenu" class="hidden space-y-4 py-3 pl-14 text-[16px] text-[#625e78]">
                                        <button type="button" class="itinerary-builder-subitem block w-full py-1 text-left" data-builder-section="Personal itineraries">Personal itinerar...</button>
                                        <button type="button" class="itinerary-builder-subitem block w-full py-1 text-left" data-builder-section="Sample itineraries">Sample itineraries</button>
                                        <button type="button" class="itinerary-builder-subitem block w-full py-1 text-left" data-builder-section="Day component">Day component</button>
                                        <button type="button" class="itinerary-builder-subitem block w-full py-1 text-left" data-builder-section="Multi-day component">Multi-day comp...</button>
                                    </div>
                                    <button type="button" class="trip-submenu-item flex w-full items-center gap-5 py-3 text-left" data-trip-section="Themes">
                                        <span class="h-3 w-3 rounded-full border border-[#625e78]"></span>
                                        Themes
                                    </button>
                                    <button type="button" class="trip-submenu-item flex w-full items-center gap-5 py-3 text-left" data-trip-section="Specials portal">
                                        <span class="h-3 w-3 rounded-full border border-[#625e78]"></span>
                                        Specials portal
                                    </button>
                                    <button type="button" class="trip-submenu-item flex w-full items-center gap-5 py-3 text-left" data-trip-section="Calendar">
                                        <span class="h-3 w-3 rounded-full border border-[#625e78]"></span>
                                        Calendar
                                    </button>
                                </div>
                                <button type="button" class="drawer-nav-item flex w-full items-center justify-between rounded-md px-4 py-3 text-left text-[#625e78]" data-section="content">
                                    <span class="flex items-center gap-5">
                                        <svg class="h-6 w-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="5" width="16" height="14" rx="2"/><path d="M8 9h8M8 13h5"/></svg>
                                        Content solutions
                                    </span>
                                    <span>></span>
                                </button>
                                <button type="button" class="drawer-nav-item flex w-full items-center justify-between rounded-md px-4 py-3 text-left text-[#625e78]" data-section="account">
                                    <span class="flex items-center gap-5">
                                        <svg class="h-6 w-6 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.8 1.8 0 0 0 .36 2l.05.05a2 2 0 1 1-2.83 2.83l-.05-.05a1.8 1.8 0 0 0-2-.36 1.8 1.8 0 0 0-1.1 1.66V21a2 2 0 1 1-4 0v-.07A1.8 1.8 0 0 0 8.7 19.3a1.8 1.8 0 0 0-2 .36l-.05.05a2 2 0 1 1-2.83-2.83l.05-.05a1.8 1.8 0 0 0 .36-2A1.8 1.8 0 0 0 2.6 13H2a2 2 0 1 1 0-4h.07A1.8 1.8 0 0 0 3.7 7.9a1.8 1.8 0 0 0-.36-2l-.05-.05A2 2 0 1 1 6.12 3l.05.05a1.8 1.8 0 0 0 2 .36A1.8 1.8 0 0 0 9.27 1.8V2a2 2 0 1 1 4 0v.07a1.8 1.8 0 0 0 1.1 1.66 1.8 1.8 0 0 0 2-.36l.05-.05a2 2 0 1 1 2.83 2.83l-.05.05a1.8 1.8 0 0 0-.36 2A1.8 1.8 0 0 0 21.4 9H22a2 2 0 1 1 0 4h-.07A1.8 1.8 0 0 0 19.4 15Z"/></svg>
                                        Account setup
                                    </span>
                                    <span>></span>
                                </button>
                            </nav>
                        </aside>

                        <div class="ml-[92px]">
                            <header class="flex h-[64px] items-center justify-between bg-white px-8 shadow-sm">
                                <h1 id="homeDashboardTitle" class="text-[24px] font-normal text-[#57546b]">Home</h1>
                                <div class="flex items-center gap-4">
                                    <button type="button" id="homeDashboardImportContactsButton" class="hidden rounded-md border border-[#68b742] px-6 py-3 text-sm font-semibold text-[#28751f] hover:bg-[#eef8e9]">
                                        Import contacts
                                    </button>
                                    <button type="button" id="homeDashboardCreateContactButton" class="hidden rounded-md bg-[#256f1d] px-6 py-3 text-sm font-semibold text-white hover:bg-[#1f5f18]">
                                        + Create contact
                                    </button>
                                    <button type="button" id="homeDashboardCreateItineraryButton" class="rounded-md bg-[#68b742] px-6 py-3 text-sm font-semibold text-white hover:bg-[#5ba337]">
                                        Create Itinerary
                                        <span class="ml-5">?</span>
                                    </button>
                                </div>
                            </header>

                            <main class="space-y-5 p-5">
                                <section id="homeDashboardHero" class="grid min-h-[310px] items-center bg-white px-12 py-10 shadow-sm lg:grid-cols-[1fr_360px]">
                                    <div>
                                        <h2 class="max-w-2xl text-[28px] font-normal leading-tight text-[#57546b]">
                                            Efficiently build<br />
                                            beautiful and professional itineraries.
                                        </h2>
                                        <p class="mt-5 text-lg font-semibold text-slate-300">Make buying travel a first-class experience.</p>
                                        <button type="button" class="mt-10 rounded-md border border-slate-400 px-7 py-3 text-sm text-slate-500 hover:border-[#68b742] hover:text-[#68b742]">
                                            Open personal itineraries
                                        </button>
                                    </div>
                                    <div class="relative hidden h-56 lg:block">
                                        <div class="absolute left-3 top-10 h-36 w-52 rounded-full bg-[#d7edcd]"></div>
                                        <div class="absolute left-24 top-16 h-16 w-28 rounded-lg border-4 border-[#68b742] bg-white"></div>
                                        <div class="absolute left-32 top-20 h-8 w-8 rounded-full border-2 border-[#57546b]"></div>
                                        <div class="absolute left-44 top-28 h-28 w-20 rounded-t-full bg-[#57546b]"></div>
                                        <div class="absolute right-6 top-20 h-8 w-8 rounded-full bg-[#d7edcd]"></div>
                                        <div class="absolute right-24 top-2 h-6 w-20 rounded-t-full border-2 border-[#b8cbd0] border-b-0"></div>
                                    </div>
                                </section>

                                <section class="grid gap-5 lg:grid-cols-2">
                                    <article class="min-h-[190px] bg-white px-10 py-9 shadow-sm">
                                        <h2 class="text-[19px] font-normal text-[#57546b]">Explore what we've been up to.</h2>
                                        <div class="mt-8 flex items-start gap-3">
                                            <svg class="h-5 w-5 text-[#625e78]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 21h8M12 16v5"/></svg>
                                            <div>
                                                <h3 class="text-base">Tiwi blog</h3>
                                                <p class="mt-3 max-w-sm text-sm leading-6 text-slate-300">Read about our latest updates and industry insights.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="min-h-[190px] bg-white px-10 py-9 shadow-sm">
                                        <h2 class="text-[19px] font-normal text-[#57546b]">Need some help?</h2>
                                        <div class="mt-8 flex items-start gap-3">
                                            <svg class="h-5 w-5 text-[#625e78]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg>
                                            <div>
                                                <h3 class="text-base">Knowledge base</h3>
                                                <p class="mt-3 max-w-sm text-sm leading-6 text-slate-300">Find the information you need in our documentation.</p>
                                            </div>
                                        </div>
                                    </article>
                                </section>
                            </main>
                        </div>

                        <div id="contactWelcomeModal" class="fixed inset-0 z-[70] hidden items-center justify-center bg-black/30 px-4">
                            <div class="w-full max-w-2xl rounded-lg bg-white px-9 py-8 shadow-2xl">
                                <div class="mx-auto mb-7 flex h-32 w-80 items-center justify-center text-blue-400">
                                    <div class="relative h-28 w-72">
                                        <div class="absolute left-10 top-8 h-20 w-20 rounded-full bg-blue-50"></div>
                                        <div class="absolute left-28 top-2 h-24 w-24 rounded-full bg-blue-50"></div>
                                        <div class="absolute right-12 top-9 h-20 w-20 rounded-full bg-blue-50"></div>
                                        <div class="absolute left-28 top-10 h-20 w-20 rounded-b-full bg-blue-300"></div>
                                        <svg class="absolute left-[9.2rem] top-12 h-9 w-9 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="m5 12 4 4L19 6"/></svg>
                                        <svg class="absolute right-10 top-12 h-14 w-14 text-blue-300" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="8" r="4"/><path d="M4 22a8 8 0 0 1 16 0Z"/></svg>
                                        <svg class="absolute right-2 top-16 h-9 w-9 text-blue-600" viewBox="0 0 24 24" fill="currentColor"><rect x="5" y="10" width="14" height="10" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3" fill="none" stroke="currentColor" stroke-width="2"/></svg>
                                    </div>
                                </div>
                                <h2 class="text-[22px] font-semibold text-[#57546b]">Welcome to your Contact manager</h2>
                                <p class="mt-5 text-base leading-7 text-[#625e78]">Contact manager helps you manage traveller information.</p>
                                <p class="mt-5 text-base leading-7 text-[#625e78]">
                                    You are the data controller and in charge of what information is captured and how it is used. Please make sure you have the right to use the personal information you share with us.
                                </p>
                                <p class="mt-5 text-base leading-7 text-[#625e78]">
                                    Learn more in our <a href="#" class="text-[#68b742] underline">Terms and Conditions</a> and <a href="#" class="text-[#68b742] underline">Privacy Notice</a>.
                                </p>
                                <div class="mt-8 text-center">
                                    <button type="button" id="contactWelcomeGotIt" class="rounded-md bg-[#68b742] px-8 py-3 text-sm font-bold text-white hover:bg-[#5ba337]">
                                        Got it, thanks!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <aside class="!hidden fixed left-0 top-0 h-screen w-[120px] flex-col items-center bg-white shadow-sm lg:flex">
                        <div class="mt-9 h-11 w-20 rounded-t-full border-[18px] border-b-0 border-[#68b742]"></div>
                        <div class="mt-16 h-14 w-14 rounded-full bg-slate-200"></div>
                        <div class="mt-16 text-[#625e78]">
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 7h18s-3 0-3-7"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                        </div>
                        <div class="mt-12 rounded-md bg-[#68b742] p-4 text-white shadow-lg">
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11 12 4l9 7"/><path d="M5 10v10h14V10"/><path d="M9 20v-6h6v6"/></svg>
                        </div>
                        <div class="mt-8 text-[#625e78]">
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/></svg>
                        </div>
                        <div class="mt-8 rounded-md bg-white p-4 text-[#07545c] shadow-lg">
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="6" y="4" width="12" height="16" rx="2"/><path d="M9 9h6M9 13h6"/></svg>
                        </div>
                        <div class="mt-5 h-24 w-24 rounded-full bg-[#07545c] p-7 text-white shadow-lg">
                            <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4Z"/></svg>
                        </div>
                    </aside>

                    <div class="hidden lg:ml-[120px]">
                        <header class="m-8 flex items-center justify-between bg-white px-8 py-4 shadow-sm">
                            <div>
                                <h1 class="text-[38px] font-normal text-[#625e78]">Home</h1>
                                <p id="workspaceAgencyMeta" class="mt-1 text-lg text-slate-400">Trial workspace</p>
                            </div>
                            <button type="button" id="createItineraryButton" class="inline-flex items-center gap-8 rounded-md bg-[#68b742] px-8 py-4 text-2xl font-normal text-white hover:bg-[#5ba337]">
                                Create Itinerary
                                <span class="border-l border-white/30 pl-6">⌄</span>
                            </button>
                        </header>

                        <div class="mx-8 space-y-8">
                            <section class="grid gap-5 md:grid-cols-4">
                                <article class="workspace-card rounded-md px-6 py-5">
                                    <p class="text-base font-bold text-slate-400">Active proposals</p>
                                    <p class="mt-3 text-4xl text-[#625e78]">8</p>
                                </article>
                                <article class="workspace-card rounded-md px-6 py-5">
                                    <p class="text-base font-bold text-slate-400">Clients</p>
                                    <p class="mt-3 text-4xl text-[#625e78]">24</p>
                                </article>
                                <article class="workspace-card rounded-md px-6 py-5">
                                    <p class="text-base font-bold text-slate-400">Revenue pipeline</p>
                                    <p class="mt-3 text-4xl text-[#625e78]">$46k</p>
                                </article>
                                <article class="workspace-card rounded-md px-6 py-5">
                                    <p class="text-base font-bold text-slate-400">Content items</p>
                                    <p class="mt-3 text-4xl text-[#625e78]">136</p>
                                </article>
                            </section>

                            <section class="grid min-h-[492px] items-center bg-white px-20 py-12 shadow-sm lg:grid-cols-[1fr_420px]">
                                <div>
                                    <h2 id="workspaceHeroTitle" class="max-w-3xl text-[42px] font-normal leading-tight text-[#625e78]">
                                        Efficiently build<br />
                                        beautiful and professional itineraries.
                                    </h2>
                                    <p class="mt-6 text-3xl font-bold text-slate-300">Make buying travel a first-class experience.</p>
                                    <button type="button" class="mt-20 rounded-md border border-slate-400 px-9 py-4 text-2xl text-slate-500 hover:border-[#68b742] hover:text-[#68b742]">
                                        Open personal itineraries
                                    </button>
                                </div>

                                <div class="relative hidden h-80 lg:block">
                                    <div class="absolute left-0 top-10 h-56 w-56 rounded-full bg-[#d8edce]"></div>
                                    <div class="absolute right-4 top-10 h-56 w-44 rounded-full bg-[#57546b]"></div>
                                    <div class="absolute right-0 top-2 h-24 w-24 rounded-full bg-white border-4 border-[#57546b]"></div>
                                    <div class="absolute left-24 top-20 h-20 w-28 rounded-md border-4 border-[#68b742] bg-white"></div>
                                    <div class="absolute bottom-4 left-20 h-40 w-28 rounded-full bg-white"></div>
                                    <div class="absolute bottom-0 left-0 h-4 w-24 rounded-full bg-slate-300"></div>
                                    <div class="absolute right-0 bottom-0 h-4 w-24 rounded-full bg-slate-300"></div>
                                </div>
                            </section>

                            <section class="grid gap-8 xl:grid-cols-[0.9fr_1.7fr]">
                                <article class="min-h-[300px] bg-white px-20 py-20 shadow-sm">
                                    <h2 class="text-3xl font-normal text-[#625e78]">Explore what we've been up to.</h2>
                                    <div class="mt-14 flex items-start gap-3">
                                        <svg class="h-7 w-7 text-[#625e78]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 21h8M12 16v5"/></svg>
                                        <div>
                                            <h3 class="text-2xl">Tiwi blog</h3>
                                            <p class="mt-4 max-w-sm text-2xl leading-snug text-slate-300">Read about our latest updates and industry insights, and more.</p>
                                        </div>
                                    </div>
                                    <a href="#" class="mt-12 inline-flex items-center gap-5 text-2xl text-[#68b742]">See all articles <span>-></span></a>
                                </article>

                                <article class="min-h-[300px] bg-white px-20 py-20 shadow-sm">
                                    <h2 class="text-3xl font-normal text-[#625e78]">Need some help?</h2>
                                    <div class="mt-14 flex items-start gap-3">
                                        <svg class="h-7 w-7 text-[#625e78]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg>
                                        <div>
                                            <h3 class="text-2xl">Knowledge base</h3>
                                            <p class="mt-4 text-2xl leading-snug text-slate-300">Find all the information you need in our documentation.</p>
                                        </div>
                                    </div>
                                    <div class="mt-16 flex flex-wrap gap-20">
                                        <a href="#" class="inline-flex items-center gap-5 text-2xl text-[#68b742]">Visit the Knowledge Base <span>-></span></a>
                                        <a href="#" class="inline-flex items-center gap-2 text-2xl font-bold text-[#68b742]">Request content <span>-></span></a>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>

                    <div id="createItineraryModal" class="fixed inset-0 z-[80] hidden bg-slate-900/35 px-4 py-10 backdrop-blur-sm">
                        <div class="mx-auto max-w-4xl overflow-hidden rounded-md bg-white shadow-2xl">
                            <header class="flex items-center justify-between bg-slate-50 px-8 py-5">
                                <h2 class="text-3xl font-normal text-[#625e78]">Create a new itinerary</h2>
                                <button type="button" id="closeItineraryModal" class="text-3xl leading-none text-[#625e78]" aria-label="Close create itinerary modal">&times;</button>
                            </header>

                            <div class="px-8 py-9">
                                <p class="mb-12 text-2xl text-[#625e78]">What type of itinerary would you like to create?</p>

                                <div class="space-y-5">
                                    <button type="button" class="itinerary-option flex min-h-[214px] w-full flex-col items-center justify-center rounded-lg border border-slate-300 bg-slate-50 px-8 text-center transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-type="personal">
                                        <span class="mb-4 flex items-center gap-4 text-3xl text-[#625e78]">
                                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="4"/><path d="M3 21v-2a6 6 0 0 1 6-6h2"/><path d="M17 11a3 3 0 1 0 0-6"/><path d="M21 21v-2a5 5 0 0 0-4-4.9"/></svg>
                                            Personal Itinerary
                                        </span>
                                        <span class="max-w-2xl text-2xl leading-snug text-slate-400">A customized itinerary tailored to a specific client or group, including their travel dates and personal details.</span>
                                    </button>

                                    <button type="button" class="itinerary-option flex min-h-[214px] w-full flex-col items-center justify-center rounded-lg border border-slate-300 bg-slate-50 px-8 text-center transition hover:border-[#68b742] hover:bg-[#eef8e9]" data-type="sample">
                                        <span class="mb-4 flex items-center gap-4 text-3xl text-[#625e78]">
                                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="4" width="6" height="6"/><rect x="14" y="4" width="6" height="6"/><rect x="4" y="14" width="6" height="6"/><rect x="14" y="14" width="6" height="6"/></svg>
                                            Sample Itinerary
                                        </span>
                                        <span class="max-w-2xl text-2xl leading-snug text-slate-400">A general example of a trip, often used to showcase packages or scheduled departures without fixed traveler details.</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section id="personalItineraryBuilder" class="fixed inset-0 z-[90] hidden overflow-y-auto bg-[#f4f4f4] text-[#6b6f73]">
                        <header class="sticky top-0 z-20 bg-white px-4 py-4 shadow-md">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <button type="button" id="closePersonalBuilder" class="inline-flex items-center gap-2 border-r border-slate-200 pr-4 text-2xl text-[#5bb53a]">
                                        <span class="text-4xl leading-none">&lsaquo;</span>
                                        Back
                                    </button>
                                    <h1 class="text-3xl font-normal text-slate-700">Personal itinerary</h1>
                                    <span class="text-2xl text-[#5bb53a]">Personal itineraries</span>
                                    <span class="text-3xl text-slate-500">&rsaquo;</span>
                                </div>

                                <div class="flex items-center gap-5">
                                    <span class="text-2xl">Regions: <strong class="font-normal text-[#5bb53a]">All</strong> <span class="text-lg text-[#5bb53a]">ⓘ</span></span>
                                    <button type="button" class="rounded-md border border-slate-500 bg-white px-8 py-4 text-2xl text-slate-500 shadow-sm">Save</button>
                                    <button type="button" class="inline-flex items-center gap-4 rounded-md bg-[#99cf7b] px-8 py-4 text-2xl font-bold text-white">
                                        <span>◉</span>
                                        Preview Classic
                                        <span class="border-l border-white/30 pl-7">⌄</span>
                                    </button>
                                </div>
                            </div>

                            <nav class="mt-10 flex flex-wrap justify-center gap-10 text-2xl font-bold text-slate-500">
                                <button id="stepTabDetails" class="border-b-4 border-[#5bb53a] px-3 pb-4 text-[#5bb53a]">1. Itinerary Details</button>
                                <button id="stepTabAccommodation" class="px-3 pb-4">2. Accommodation</button>
                                <button class="px-3 pb-4">3. Route Builder</button>
                                <button class="px-3 pb-4">4. Planner</button>
                                <button class="px-3 pb-4">5. Review</button>
                                <button class="px-3 pb-4">6. Additional Details</button>
                            </nav>
                        </header>

                        <main id="builderDetailsStep" class="grid gap-8 p-7 xl:grid-cols-[0.9fr_1.15fr_0.65fr]">
                            <section class="rounded-md border border-slate-300 bg-white shadow-sm">
                                <h2 class="bg-slate-200 px-6 py-4 text-xl font-bold">General details</h2>
                                <div class="space-y-2 p-6">
                                    <label class="grid items-center gap-4 md:grid-cols-[170px_1fr]">
                                        <span class="text-lg font-bold">Itinerary name *</span>
                                        <input class="h-12 rounded-md border border-slate-300 px-4 outline-none focus:border-[#5bb53a]" />
                                    </label>
                                    <label class="grid items-center gap-4 md:grid-cols-[170px_1fr]">
                                        <span class="text-lg font-bold">Client name</span>
                                        <input class="h-12 rounded-md border border-slate-300 px-4 outline-none focus:border-[#5bb53a]" />
                                    </label>
                                    <label class="grid items-center gap-4 md:grid-cols-[170px_1fr]">
                                        <span class="text-lg font-bold">Reference number</span>
                                        <input class="h-12 rounded-md border border-slate-300 px-4 outline-none focus:border-[#5bb53a]" />
                                    </label>
                                    <label class="grid items-center gap-4 md:grid-cols-[170px_1fr]">
                                        <span class="text-lg font-bold">Languages</span>
                                        <select class="h-12 rounded-md border border-slate-300 px-4 outline-none focus:border-[#5bb53a]"><option>English</option></select>
                                    </label>
                                    <label class="grid items-center gap-4 md:grid-cols-[170px_1fr]">
                                        <span class="text-lg font-bold">Client email</span>
                                        <input class="h-12 rounded-md border border-slate-300 px-4 outline-none focus:border-[#5bb53a]" />
                                    </label>
                                    <label class="grid items-center gap-4 md:grid-cols-[170px_1fr]">
                                        <span class="text-lg font-bold">Telephone</span>
                                        <input class="h-12 rounded-md border border-slate-300 px-4 outline-none focus:border-[#5bb53a]" />
                                    </label>
                                    <label class="grid items-start gap-4 md:grid-cols-[170px_1fr]">
                                        <span class="pt-3 text-lg font-bold">Special interests</span>
                                        <textarea class="min-h-28 rounded-md border border-slate-300 px-4 py-3 outline-none focus:border-[#5bb53a]"></textarea>
                                    </label>
                                </div>
                            </section>

                            <section>
                                <div class="flex">
                                    <button class="rounded-t-md border border-b-0 border-slate-300 bg-white px-7 py-4 text-xl font-bold">Price</button>
                                    <button class="border border-slate-300 bg-slate-200 px-7 py-4 text-xl">Price includes</button>
                                    <button class="border border-slate-300 bg-slate-200 px-7 py-4 text-xl">Price excludes</button>
                                    <button class="border border-slate-300 bg-slate-200 px-7 py-4 text-xl">T's and C's</button>
                                </div>
                                <div class="min-h-[452px] border border-slate-300 bg-white"></div>
                            </section>

                            <aside class="space-y-8">
                                <section class="rounded-md border border-slate-300 bg-white shadow-sm">
                                    <div class="flex items-center justify-between bg-slate-200 px-6 py-4">
                                        <h2 class="text-xl font-bold">Appearance & branding</h2>
                                        <button class="font-bold text-[#5bb53a]">SETUP OPTIONS</button>
                                    </div>
                                    <div class="space-y-4 p-6">
                                        <label class="grid items-center gap-4 md:grid-cols-[140px_1fr]">
                                            <span class="text-lg font-bold">Theme</span>
                                            <select class="h-12 rounded-md border border-slate-300 px-4"><option>Default (Classic)</option></select>
                                        </label>
                                        <label class="flex items-center gap-3 text-lg font-bold">Co-branding <span class="text-slate-400">ⓘ</span><input type="checkbox" class="h-5 w-5" /></label>
                                        <label class="grid items-center gap-4 md:grid-cols-[140px_1fr]">
                                            <span class="text-lg font-bold">Branding</span>
                                            <select class="h-12 rounded-md border border-slate-300 px-4"><option>reisen</option></select>
                                        </label>
                                    </div>
                                </section>

                                <section class="rounded-md border border-slate-300 bg-white shadow-sm">
                                    <div class="flex items-center justify-between bg-slate-200 px-6 py-4">
                                        <h2 class="text-xl font-bold">Contact & enquiry</h2>
                                        <button class="font-bold text-[#5bb53a]">SETUP OPTIONS</button>
                                    </div>
                                    <div class="space-y-4 p-6">
                                        <label class="grid items-center gap-4 md:grid-cols-[140px_1fr]">
                                            <span class="text-lg font-bold">Contact details</span>
                                            <select class="h-12 rounded-md border border-slate-300 px-4"><option>Joy</option></select>
                                        </label>
                                        <label class="grid items-center gap-4 md:grid-cols-[140px_1fr]">
                                            <span class="text-lg font-bold">Contact image</span>
                                            <select class="h-12 rounded-md border border-slate-300 px-4"><option>Joy</option></select>
                                        </label>
                                    </div>
                                </section>
                            </aside>

                            <section class="rounded-md border border-slate-300 bg-white shadow-sm xl:col-span-1">
                                <div class="flex items-center justify-between bg-slate-200 px-6 py-4">
                                    <h2 class="text-xl font-bold">Traveller details</h2>
                                    <button class="font-bold text-[#5bb53a]">SETUP OPTIONS</button>
                                </div>
                                <div class="flex gap-6 p-8">
                                    <div class="text-blue-400">
                                        <svg class="h-28 w-28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><circle cx="8" cy="8" r="4"/><path d="M2 22v-2a6 6 0 0 1 12 0v2"/><circle cx="17" cy="8" r="3"/><path d="M22 22v-2a5 5 0 0 0-4-4.5"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-lg">Add traveller information to keep track of everyone going on this trip.</p>
                                        <button class="mt-5 rounded-md border border-slate-400 px-8 py-3 text-lg">MANAGE TRAVELLERS</button>
                                    </div>
                                </div>
                            </section>

                            <section class="rounded-md border border-slate-300 bg-white shadow-sm xl:col-span-2">
                                <h2 class="bg-slate-200 px-6 py-4 text-xl font-bold">Room configuration</h2>
                                <div class="grid gap-8 p-8 md:grid-cols-3">
                                    @foreach (['Single', 'Twin', 'Family', 'Double', 'Triple', 'Quadruple', 'Campsite'] as $room)
                                        <div class="grid grid-cols-[90px_1fr] items-center gap-4">
                                            <span class="text-lg">{{ $room }}</span>
                                            <div class="grid grid-cols-3 rounded-md border border-slate-300 text-center text-lg">
                                                <button class="py-3">-</button>
                                                <span class="border-x border-slate-300 py-3">0</span>
                                                <button class="py-3">+</button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </main>

                        <main id="builderAccommodationStep" class="hidden min-h-[475px] p-10">
                            <div class="flex flex-wrap items-center gap-8">
                                <label class="flex items-center gap-6">
                                    <span class="text-xl font-bold">Start</span>
                                    <span class="flex h-12 overflow-hidden rounded-md border border-slate-300 bg-white">
                                        <input id="accommodationStartDate" type="date" class="w-52 px-3 outline-none" />
                                    </span>
                                </label>

                                <label class="flex items-center gap-6">
                                    <span class="text-xl font-bold">End</span>
                                    <span class="flex h-12 overflow-hidden rounded-md border border-slate-300 bg-white">
                                        <input id="accommodationEndDate" type="date" class="w-52 px-3 outline-none" />
                                    </span>
                                </label>

                                <button id="clearAccommodationDates" type="button" class="text-xl font-bold text-blue-500">CLEAR DATES</button>

                                <button class="ml-auto inline-flex items-center gap-4 text-xl font-bold text-[#5bb53a]">
                                    <span class="text-4xl">⬆</span>
                                    REVERSE ITINERARY
                                    <span class="text-3xl">ⓘ</span>
                                </button>
                            </div>

                            <div id="itineraryAddControls" class="mt-6 flex flex-wrap items-center gap-4">
                                <button class="flex h-11 w-11 items-center justify-center rounded-full border border-blue-500 text-3xl text-blue-500">−</button>
                                <span class="text-xl">Add:</span>
                                <button id="addAccommodationButton" type="button" class="rounded-md bg-blue-500 px-6 py-3 text-xl text-white">ACCOMMODATION</button>
                                <button class="rounded-md bg-blue-500 px-6 py-3 text-xl text-white">ADD COMPONENT</button>
                                <button id="addOvernightTravelButton" type="button" class="rounded-md bg-blue-500 px-6 py-3 text-xl text-white">OVERNIGHT TRAVEL</button>
                                <button class="rounded-md bg-blue-500 px-6 py-3 text-xl text-white">OWN ARRANGEMENTS</button>
                            </div>

                            <section id="accommodationEntry" class="mt-8 hidden rounded-md border border-slate-300 bg-white p-6">
                                <div class="mb-4 flex justify-end">
                                    <button id="deleteAccommodationEntry" type="button" class="inline-flex items-center gap-3 text-xl font-bold text-red-600">▣ DELETE</button>
                                </div>

                                <div class="grid gap-8 xl:grid-cols-[1.2fr_1fr_0.9fr_0.55fr_0.35fr]">
                                    <div class="space-y-8">
                                        <div class="flex flex-wrap items-center gap-4">
                                            <span class="flex h-12 w-12 items-center justify-center rounded-md bg-[#68b742] text-3xl font-bold text-white">A</span>
                                            <div class="flex h-12 min-w-[300px] flex-1 overflow-hidden rounded-md border border-slate-300 bg-white">
                                                <input id="accommodationName" value="NNN Guesthouse" class="min-w-0 flex-1 px-4 text-lg outline-none" />
                                                <button class="bg-[#68b742] px-4 text-2xl text-white">◉</button>
                                            </div>
                                            <button id="roomDetailsButton" type="button" class="rounded-md bg-orange-500 px-4 py-3 text-xl text-white">ROOM DETAILS</button>
                                        </div>

                                        <div class="grid items-center gap-4 md:grid-cols-[120px_1fr]">
                                            <label for="accommodationDestination" class="text-lg font-bold">Destination</label>
                                            <select id="accommodationDestination" class="h-12 rounded-md border border-slate-300 px-4 text-lg">
                                                <option>Africa</option>
                                                <option>Kenya</option>
                                                <option>Tanzania</option>
                                                <option>South Africa</option>
                                            </select>
                                        </div>

                                        <div class="grid items-center gap-4 md:grid-cols-[120px_1fr]">
                                            <label for="accommodationAlternative" class="text-lg font-bold">Alternative 1</label>
                                            <input id="accommodationAlternative" value="mm" class="h-12 rounded-md border border-slate-300 px-4 text-lg outline-none" />
                                        </div>
                                    </div>

                                    <div class="space-y-8">
                                        <label class="grid items-center gap-4 md:grid-cols-[80px_1fr]">
                                            <span class="text-lg font-bold">Basis</span>
                                            <select class="h-12 rounded-md border border-slate-300 px-4 text-lg">
                                                <option>B&B: Bed and Breakfast</option>
                                                <option>RO: Room Only</option>
                                                <option>HB: Half Board</option>
                                                <option>FB: Full Board</option>
                                            </select>
                                        </label>
                                        <label class="grid items-center gap-4 md:grid-cols-[130px_1fr]">
                                            <span class="text-lg font-bold">Day Grouping</span>
                                            <select class="h-12 rounded-md border border-slate-300 px-4 text-lg">
                                                <option>By Day</option>
                                                <option>Grouped</option>
                                            </select>
                                        </label>
                                    </div>

                                    <div>
                                        <label class="grid items-center gap-4 md:grid-cols-[80px_1fr]">
                                            <span class="text-lg font-bold">Drinks</span>
                                            <select class="h-12 rounded-md border border-slate-300 px-4 text-lg">
                                                <option>DEC: All Drinks</option>
                                                <option>No drinks</option>
                                                <option>Selected drinks</option>
                                            </select>
                                        </label>
                                    </div>

                                    <div>
                                        <div class="grid items-center gap-4 md:grid-cols-[70px_1fr]">
                                            <span class="text-lg font-bold">Nights</span>
                                            <div class="grid h-12 grid-cols-3 rounded-md border border-slate-300 text-center text-lg">
                                                <button id="decreaseNights" type="button">-</button>
                                                <span id="accommodationNights" class="border-x border-slate-300 py-3">7</span>
                                                <button id="increaseNights" type="button">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button class="mb-2 rounded-md bg-orange-400 px-4 py-3 text-3xl font-bold text-white">?</button>
                                        <p class="text-lg">Check In</p>
                                        <p id="checkInDateLabel" class="text-lg">05/05/2026</p>
                                    </div>
                                </div>
                            </section>

                            <section id="overnightTravelEntry" class="mt-8 hidden rounded-md border border-slate-300 bg-white p-6">
                                <div class="mb-4 flex justify-end">
                                    <button id="deleteOvernightTravelEntry" type="button" class="inline-flex items-center gap-3 text-xl font-bold text-red-600">DELETE</button>
                                </div>

                                <div class="grid items-center gap-8 xl:grid-cols-[1.5fr_1fr_0.8fr_0.55fr_0.35fr]">
                                    <div class="flex items-center gap-5">
                                        <span class="h-12 w-12 rounded-md bg-[#68b742]"></span>
                                        <h3 class="text-xl font-bold">Overnight Travel</h3>
                                    </div>

                                    <label class="grid items-center gap-4 md:grid-cols-[80px_1fr]">
                                        <span class="text-lg font-bold">Basis</span>
                                        <select class="h-12 rounded-md border border-slate-300 px-4 text-lg">
                                            <option>NONE: None</option>
                                            <option>Sleeper train</option>
                                            <option>Overnight bus</option>
                                            <option>Flight</option>
                                        </select>
                                    </label>

                                    <label class="grid items-center gap-4 md:grid-cols-[80px_1fr]">
                                        <span class="text-lg font-bold">Drinks</span>
                                        <select class="h-12 rounded-md border border-slate-300 px-4 text-lg">
                                            <option>NONE: No Drinks</option>
                                            <option>Included</option>
                                        </select>
                                    </label>

                                    <div class="grid items-center gap-4 md:grid-cols-[70px_1fr]">
                                        <span class="text-lg font-bold">Nights</span>
                                        <div class="grid h-12 grid-cols-3 rounded-md border border-slate-300 text-center text-lg">
                                            <button id="decreaseOvernightNights" type="button">-</button>
                                            <span id="overnightNights" class="border-x border-slate-300 py-3">1</span>
                                            <button id="increaseOvernightNights" type="button">+</button>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button class="mb-2 rounded-md bg-orange-400 px-4 py-3 text-3xl font-bold text-white">?</button>
                                        <p class="text-lg">Check In</p>
                                        <p id="overnightCheckInDateLabel" class="text-lg">12/05/2026</p>
                                    </div>
                                </div>
                            </section>
                        </main>

                        <footer class="sticky bottom-0 flex items-center justify-between border-t border-slate-300 bg-white px-3 py-5 md:px-14">
                            <button id="builderPreviousStep" class="hidden rounded-md bg-slate-500 px-6 py-3 text-xl font-bold text-white">&lsaquo; PREVIOUS STEP</button>
                            <button class="inline-flex items-center gap-3 text-2xl font-bold text-[#5bb53a]">? HELP</button>
                            <button class="text-2xl font-bold text-[#5bb53a]">↗ REQUEST CONTENT</button>
                            <div id="accommodationFooterActions" class="hidden items-center gap-6">
                                <button class="rounded-md bg-[#68b742] px-6 py-3 text-xl font-bold text-white">PRODUCT MANAGER</button>
                                <span id="totalItineraryNights" class="text-lg text-[#5bb53a]">0 Nights</span>
                            </div>
                            <button id="builderNextStep" class="rounded-md bg-[#68b742] px-8 py-4 text-xl font-bold text-white">NEXT STEP &rsaquo;</button>
                        </footer>
                    </section>
                </section>
            </div>
        </section>

        <section id="roomDetailsModal" class="fixed inset-0 z-[80] hidden bg-black/35 p-4">
            <div class="mx-auto mt-16 max-w-4xl rounded-md bg-white shadow-2xl">
                <header class="flex items-center justify-between border-b border-slate-200 px-8 py-5">
                    <div>
                        <h2 class="text-3xl font-semibold text-[#5f5a74]">Room details</h2>
                        <p class="mt-1 text-lg text-slate-500">Configure the rooms needed for this accommodation.</p>
                    </div>
                    <button id="closeRoomDetailsModal" type="button" class="text-3xl text-slate-500">&times;</button>
                </header>

                <div class="grid gap-5 p-8 md:grid-cols-2">
                    @foreach (['Single', 'Twin', 'Double', 'Triple', 'Family', 'Quadruple', 'Campsite'] as $room)
                        <div class="flex items-center justify-between rounded-md border border-slate-300 px-5 py-4">
                            <span class="text-xl font-semibold text-[#5f5a74]">{{ $room }}</span>
                            <div class="grid h-11 w-44 grid-cols-3 rounded-md border border-slate-300 text-center text-lg">
                                <button type="button" class="room-minus" data-room="{{ Str::slug($room) }}">-</button>
                                <span class="room-count border-x border-slate-300 py-2" data-room="{{ Str::slug($room) }}">0</span>
                                <button type="button" class="room-plus" data-room="{{ Str::slug($room) }}">+</button>
                            </div>
                        </div>
                    @endforeach
                </div>

                <footer class="flex items-center justify-between border-t border-slate-200 px-8 py-5">
                    <p id="roomDetailsSummary" class="text-lg text-slate-500">No rooms selected</p>
                    <div class="flex gap-3">
                        <button id="cancelRoomDetails" type="button" class="rounded-md border border-slate-400 px-6 py-3 text-lg font-semibold text-slate-600">Cancel</button>
                        <button id="saveRoomDetails" type="button" class="rounded-md bg-[#68b742] px-7 py-3 text-lg font-bold text-white">Apply room details</button>
                    </div>
                </footer>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const choiceCards = document.querySelectorAll('.choice-card');
        const loginStep = document.getElementById('loginStep');
        const loginForm = document.getElementById('loginForm');
        const loginMessage = document.getElementById('loginMessage');
        const onboardingStep = document.getElementById('onboardingStep');
        const accountSetupStep = document.getElementById('accountSetupStep');
        const completeStep = document.getElementById('completeStep');
        const workspaceStep = document.getElementById('workspaceStep');
        const nextButton = document.getElementById('nextButton');
        const previousButton = document.getElementById('previousButton');
        const goDashboardButton = document.getElementById('goDashboardButton');
        const editInformationButton = document.getElementById('editInformationButton');
        const accountSetupForm = document.getElementById('accountSetupForm');
        const accountSetupMessage = document.getElementById('accountSetupMessage');
        const workspaceMenuScreen = document.getElementById('workspaceMenuScreen');
        const homeDashboardScreen = document.getElementById('homeDashboardScreen');
        const homeRail = document.getElementById('homeRail');
        const homeRailToggle = document.getElementById('homeRailToggle');
        const homeSideDrawer = document.getElementById('homeSideDrawer');
        const homeDrawerBackdrop = document.getElementById('homeDrawerBackdrop');
        const homeDrawerClose = document.getElementById('homeDrawerClose');
        const tripSolutionsToggle = document.getElementById('tripSolutionsToggle');
        const tripSolutionsSubmenu = document.getElementById('tripSolutionsSubmenu');
        const tripSolutionsChevron = document.getElementById('tripSolutionsChevron');
        const itineraryBuilderToggle = document.getElementById('itineraryBuilderToggle');
        const itineraryBuilderSubmenu = document.getElementById('itineraryBuilderSubmenu');
        const itineraryBuilderChevron = document.getElementById('itineraryBuilderChevron');
        const homeDashboardTitle = document.getElementById('homeDashboardTitle');
        const homeDashboardHero = document.getElementById('homeDashboardHero');
        const homeDashboardImportContactsButton = document.getElementById('homeDashboardImportContactsButton');
        const homeDashboardCreateContactButton = document.getElementById('homeDashboardCreateContactButton');
        const contactWelcomeModal = document.getElementById('contactWelcomeModal');
        const contactWelcomeGotIt = document.getElementById('contactWelcomeGotIt');
        const workspaceAgencyMeta = document.getElementById('workspaceAgencyMeta');
        const workspaceHeroTitle = document.getElementById('workspaceHeroTitle');
        const homeNavButton = document.getElementById('homeNavButton');
        const homeContentPanel = document.getElementById('homeContentPanel');
        const homeCreateItineraryButton = document.getElementById('homeCreateItineraryButton');
        const homeDashboardCreateItineraryButton = document.getElementById('homeDashboardCreateItineraryButton');
        const createItineraryButton = document.getElementById('createItineraryButton');
        const createItineraryModal = document.getElementById('createItineraryModal');
        const closeItineraryModal = document.getElementById('closeItineraryModal');
        const personalItineraryBuilder = document.getElementById('personalItineraryBuilder');
        const closePersonalBuilder = document.getElementById('closePersonalBuilder');
        const builderDetailsStep = document.getElementById('builderDetailsStep');
        const builderAccommodationStep = document.getElementById('builderAccommodationStep');
        const stepTabDetails = document.getElementById('stepTabDetails');
        const stepTabAccommodation = document.getElementById('stepTabAccommodation');
        const builderNextStep = document.getElementById('builderNextStep');
        const builderPreviousStep = document.getElementById('builderPreviousStep');
        const accommodationFooterActions = document.getElementById('accommodationFooterActions');
        const accommodationStartDate = document.getElementById('accommodationStartDate');
        const accommodationEndDate = document.getElementById('accommodationEndDate');
        const clearAccommodationDates = document.getElementById('clearAccommodationDates');
        const itineraryAddControls = document.getElementById('itineraryAddControls');
        const addAccommodationButton = document.getElementById('addAccommodationButton');
        const accommodationEntry = document.getElementById('accommodationEntry');
        const deleteAccommodationEntry = document.getElementById('deleteAccommodationEntry');
        const accommodationNights = document.getElementById('accommodationNights');
        const decreaseNights = document.getElementById('decreaseNights');
        const increaseNights = document.getElementById('increaseNights');
        const checkInDateLabel = document.getElementById('checkInDateLabel');
        const addOvernightTravelButton = document.getElementById('addOvernightTravelButton');
        const overnightTravelEntry = document.getElementById('overnightTravelEntry');
        const deleteOvernightTravelEntry = document.getElementById('deleteOvernightTravelEntry');
        const overnightCheckInDateLabel = document.getElementById('overnightCheckInDateLabel');
        const overnightNights = document.getElementById('overnightNights');
        const decreaseOvernightNights = document.getElementById('decreaseOvernightNights');
        const increaseOvernightNights = document.getElementById('increaseOvernightNights');
        const totalItineraryNights = document.getElementById('totalItineraryNights');
        const roomDetailsButton = document.getElementById('roomDetailsButton');
        const roomDetailsModal = document.getElementById('roomDetailsModal');
        const closeRoomDetailsModal = document.getElementById('closeRoomDetailsModal');
        const cancelRoomDetails = document.getElementById('cancelRoomDetails');
        const saveRoomDetails = document.getElementById('saveRoomDetails');
        const roomDetailsSummary = document.getElementById('roomDetailsSummary');
        const roomCounts = document.querySelectorAll('.room-count');
        const initialDashboardView = @json(request('view'));
        const initialContactId = @json(request('contact'));
        const dashboardUrl = @json(route('dashboard'));
        const loginEndpoint = @json(url('/api/login'));
        const agencyEndpoint = @json(url('/api/agency'));
        let selectedRole = localStorage.getItem('tiwi_account_type') || 'Destination Management Company';
        let editingContactId = null;
        let activeContactId = null;
        let drawerHoverCloseTimer = null;
        let personalItineraryFiltersVisible = true;
        let personalItineraryRegion = 'All';
        let personalItineraryRows = [
            ['Example - The Great ...', 'English', '2027/02/02', '14', '2026/05/11'],
            ['Example - Experienc...', 'English', '2026/02/01', '9', '2026/05/11'],
        ];

        function getStoredUser() {
            try {
                return JSON.parse(localStorage.getItem('tiwi_user') || '{}');
            } catch (error) {
                return {};
            }
        }

        function hydrateWorkspace() {
            const setupData = JSON.parse(localStorage.getItem('tiwi_account_setup') || '{}');
            const user = getStoredUser();
            const companyName = setupData.company_name || user.agency?.name || 'your agency';
            const location = setupData.business_location || user.agency?.settings?.business_location || 'Trial workspace';
            const userEmail = document.getElementById('workspaceUserEmail');

            if (userEmail) {
                userEmail.textContent = user.email || 'agency@example.com';
            }
            if (workspaceAgencyMeta) {
                workspaceAgencyMeta.textContent = `${user.role === 'agent' ? 'Agent' : 'Admin'} | ${user.agency?.subscription_plan === 'trial' ? 'Trial' : location}`;
            }
            if (workspaceHeroTitle) {
                workspaceHeroTitle.innerHTML = `Efficiently build<br />beautiful itineraries for ${companyName}.`;
            }
        }

        function showWorkspace() {
            hydrateWorkspace();
            loginStep.classList.add('hidden');
            onboardingStep.classList.add('hidden');
            accountSetupStep.classList.add('hidden');
            completeStep.classList.add('hidden');
            if (['home', 'contacts'].includes(initialDashboardView)) {
                workspaceMenuScreen.classList.add('hidden');
                homeDashboardScreen.classList.remove('hidden');
            } else {
                workspaceMenuScreen.classList.remove('hidden');
                homeDashboardScreen.classList.add('hidden');
            }
            workspaceStep.classList.remove('hidden');
        }

        function showHomeDashboard() {
            workspaceMenuScreen.classList.add('hidden');
            homeDashboardScreen.classList.remove('hidden');
            homeDashboardScreen.scrollTo({ top: 0 });
        }

        function getStoredContacts() {
            return JSON.parse(localStorage.getItem('tiwi_contacts') || '[]');
        }

        function findStoredContact(contactId) {
            return getStoredContacts().find((contact, index) => String(contact.id || index) === String(contactId));
        }

        function getContactIdentifier(contact) {
            if (!contact) {
                return null;
            }

            if (contact.id) {
                return contact.id;
            }

            const index = getStoredContacts().findIndex((item) => {
                return item.firstName === contact.firstName
                    && item.lastName === contact.lastName
                    && item.email === contact.email
                    && item.phoneNumber === contact.phoneNumber;
            });

            return index >= 0 ? index : null;
        }

        function setDashboardHeaderMode(mode = 'default') {
            const header = homeDashboardTitle.closest('header');

            if (!header) {
                return;
            }

            if (mode === 'detail') {
                header.className = 'mx-5 mt-5 flex h-[72px] items-center justify-between rounded-md bg-white px-8 shadow-md';
                return;
            }

            header.className = 'flex h-[64px] items-center justify-between bg-white px-8 shadow-sm';
        }

        function setActiveDashboardSection(section) {
            document.querySelectorAll('.drawer-nav-item').forEach((item) => {
                const active = item.dataset.section === section;
                item.classList.toggle('bg-[#68b742]', active);
                item.classList.toggle('text-white', active);
                item.classList.toggle('text-[#625e78]', !active);
            });

            document.querySelectorAll('.rail-nav-icon').forEach((item) => {
                const active = item.dataset.section === section;
                item.classList.toggle('bg-[#68b742]', active);
                item.classList.toggle('text-white', active);
                item.classList.toggle('text-[#625e78]', !active);
                item.classList.toggle('rounded-md', active);
                item.classList.toggle('p-3', active);
            });
        }

        function openSavedContactFromUrl() {
            if (!initialContactId) {
                return false;
            }

            const contact = findStoredContact(initialContactId);

            if (!contact) {
                return false;
            }

            showHomeDashboard();
            renderContactDetails(contact);
            return true;
        }

        function openHomeDrawer() {
            clearTimeout(drawerHoverCloseTimer);
            homeSideDrawer.classList.remove('-translate-x-full');
            homeDrawerBackdrop.classList.remove('hidden');
            homeRailToggle.setAttribute('aria-expanded', 'true');
        }

        function closeHomeDrawer() {
            clearTimeout(drawerHoverCloseTimer);
            homeSideDrawer.classList.add('-translate-x-full');
            homeDrawerBackdrop.classList.add('hidden');
            homeRailToggle.setAttribute('aria-expanded', 'false');
        }

        function scheduleHomeDrawerClose() {
            clearTimeout(drawerHoverCloseTimer);
            drawerHoverCloseTimer = setTimeout(() => {
                closeHomeDrawer();
            }, 180);
        }

        function toggleHomeDrawer() {
            const isOpen = !homeSideDrawer.classList.contains('-translate-x-full');

            if (isOpen) {
                closeHomeDrawer();
            } else {
                openHomeDrawer();
            }
        }

        function toggleTripSolutionsSubmenu(forceOpen = null) {
            const shouldOpen = forceOpen ?? tripSolutionsSubmenu.classList.contains('hidden');

            tripSolutionsSubmenu.classList.toggle('hidden', !shouldOpen);
            tripSolutionsToggle.setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');
            tripSolutionsChevron.textContent = shouldOpen ? '⌃' : '⌄';
            tripSolutionsToggle.classList.toggle('bg-slate-100', shouldOpen);
        }

        function toggleItineraryBuilderSubmenu(forceOpen = null) {
            const shouldOpen = forceOpen ?? itineraryBuilderSubmenu.classList.contains('hidden');

            itineraryBuilderSubmenu.classList.toggle('hidden', !shouldOpen);
            itineraryBuilderToggle.setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');
            itineraryBuilderChevron.textContent = shouldOpen ? '⌃' : '⌄';
            itineraryBuilderToggle.classList.toggle('bg-slate-100', shouldOpen);
        }

        function toggleContactActions(show) {
            homeDashboardImportContactsButton.classList.toggle('hidden', !show);
            homeDashboardCreateContactButton.classList.toggle('hidden', !show);
            homeDashboardCreateItineraryButton.classList.toggle('hidden', show);
        }

        function showContactWelcome() {
            if (localStorage.getItem('tiwi_contact_manager_welcome_seen') === 'true') {
                return;
            }

            contactWelcomeModal.classList.remove('hidden');
            contactWelcomeModal.classList.add('flex');
        }

        function closeContactWelcome() {
            localStorage.setItem('tiwi_contact_manager_welcome_seen', 'true');
            contactWelcomeModal.classList.add('hidden');
            contactWelcomeModal.classList.remove('flex');
            renderContactManager();
        }

        const countryCallingCodes = [
            ['Kenya', '+254'],
            ['South Africa', '+27'],
            ['Tanzania', '+255'],
            ['Uganda', '+256'],
            ['Rwanda', '+250'],
            ['Ethiopia', '+251'],
            ['United States', '+1'],
            ['Canada', '+1'],
            ['United Kingdom', '+44'],
            ['Germany', '+49'],
            ['France', '+33'],
            ['Spain', '+34'],
            ['Italy', '+39'],
            ['Netherlands', '+31'],
            ['Portugal', '+351'],
            ['United Arab Emirates', '+971'],
            ['India', '+91'],
            ['China', '+86'],
            ['Japan', '+81'],
            ['Australia', '+61'],
            ['New Zealand', '+64'],
            ['Brazil', '+55'],
            ['Mexico', '+52'],
            ['Argentina', '+54'],
            ['Egypt', '+20'],
            ['Morocco', '+212'],
            ['Nigeria', '+234'],
            ['Ghana', '+233'],
            ['Botswana', '+267'],
            ['Namibia', '+264'],
            ['Zimbabwe', '+263'],
            ['Zambia', '+260'],
            ['Mozambique', '+258'],
            ['Seychelles', '+248'],
            ['Mauritius', '+230'],
            ['Singapore', '+65'],
            ['Thailand', '+66'],
            ['Malaysia', '+60'],
            ['Indonesia', '+62'],
            ['Philippines', '+63'],
            ['Turkey', '+90'],
        ];

        const countryIsoCodes = {
            Kenya: 'KE',
            'South Africa': 'ZA',
            Tanzania: 'TZ',
            Uganda: 'UG',
            Rwanda: 'RW',
            Ethiopia: 'ET',
            'United States': 'US',
            Canada: 'CA',
            'United Kingdom': 'GB',
            Germany: 'DE',
            France: 'FR',
            Spain: 'ES',
            Italy: 'IT',
            Netherlands: 'NL',
            Portugal: 'PT',
            'United Arab Emirates': 'AE',
            India: 'IN',
            China: 'CN',
            Japan: 'JP',
            Australia: 'AU',
            'New Zealand': 'NZ',
            Brazil: 'BR',
            Mexico: 'MX',
            Argentina: 'AR',
            Egypt: 'EG',
            Morocco: 'MA',
            Nigeria: 'NG',
            Ghana: 'GH',
            Botswana: 'BW',
            Namibia: 'NA',
            Zimbabwe: 'ZW',
            Zambia: 'ZM',
            Mozambique: 'MZ',
            Seychelles: 'SC',
            Mauritius: 'MU',
            Singapore: 'SG',
            Thailand: 'TH',
            Malaysia: 'MY',
            Indonesia: 'ID',
            Philippines: 'PH',
            Turkey: 'TR',
        };

        function countryCodeOptions() {
            return countryCallingCodes
                .map(([, code]) => `<option value="${code}">${code}</option>`)
                .join('');
        }

        function countryCallingCodeButtons() {
            return countryCallingCodes
                .map(([country, code], index) => `
                    <button type="button" class="phone-code-option flex w-full items-center justify-between px-4 py-3 text-left text-sm ${index === 0 ? 'bg-[#eef8e9] text-[#078000]' : 'text-[#57546b]'}" data-code="${code}" data-country="${country}">
                        <span>${country}</span>
                        <span class="flex items-center gap-3">
                            <span>${code}</span>
                            <span class="phone-code-check ${index === 0 ? '' : 'hidden'}">✓</span>
                        </span>
                    </button>
                `)
                .join('');
        }

        function countryOptions() {
            return countryCallingCodes
                .map(([country]) => `<option value="${country}">${country}</option>`)
                .join('');
        }

        function flagMarkup(country) {
            const isoCode = countryIsoCodes[country];

            if (!isoCode) {
                return '';
            }

            const flag = isoCode
                .toUpperCase()
                .split('')
                .map((letter) => String.fromCodePoint(127397 + letter.charCodeAt(0)))
                .join('');

            return `<span class="mr-2 text-base leading-none" aria-label="${country} flag">${flag}</span>`;
        }

        function renderContactManager() {
            setDashboardHeaderMode();
            const contacts = JSON.parse(localStorage.getItem('tiwi_contacts') || '[]');
            homeDashboardTitle.textContent = 'Contact manager';
            toggleContactActions(true);
            homeDashboardHero.className = 'min-h-[540px] bg-white px-8 py-10 shadow-sm';
            if (contacts.length) {
                homeDashboardHero.innerHTML = `
                    <div class="max-w-6xl">
                        <div class="grid max-w-3xl gap-4 md:grid-cols-2">
                            <input class="h-11 rounded-md border border-[#9690ad] px-4 text-sm italic outline-none focus:border-[#68b742]" placeholder="Search by name or email" />
                            <input class="h-11 rounded-md border border-[#9690ad] px-4 text-sm italic outline-none focus:border-[#68b742]" placeholder="Filter by consultant" />
                        </div>
                        <div class="mt-4 max-w-3xl">
                            <select class="h-11 w-full rounded-md border border-[#9690ad] bg-white px-4 text-sm italic text-[#625e78] outline-none focus:border-[#68b742]">
                                <option>Search & select a country</option>
                                ${countryOptions()}
                            </select>
                        </div>
                        <div class="mt-5 flex items-center gap-5">
                            <button type="button" class="rounded-md border border-slate-200 px-8 py-3 text-sm font-semibold text-slate-300">Delete</button>
                            <span class="text-base text-[#625e78]">Selected: 0</span>
                        </div>
                    </div>

                    <div class="mt-6 overflow-x-auto">
                        <table class="w-full min-w-[980px] border-collapse text-left text-sm text-[#30384f]">
                            <thead>
                                <tr class="bg-[#e7e4e5] text-xs font-bold uppercase tracking-wide">
                                    <th class="w-16 px-5 py-4">
                                        <span class="block h-5 w-5 rounded border border-[#9690ad] bg-white"></span>
                                    </th>
                                    <th class="px-5 py-4">Contact name <span class="ml-2 text-slate-400">&#9670;</span></th>
                                    <th class="px-5 py-4">Email <span class="ml-2 text-slate-400">&#9670;</span></th>
                                    <th class="px-5 py-4">Phone <span class="ml-2 text-slate-400">&#9670;</span></th>
                                    <th class="px-5 py-4">Country <span class="ml-2 text-slate-400">&#9670;</span></th>
                                    <th class="px-5 py-4">Assigned to <span class="ml-2 text-slate-400">&#9670;</span></th>
                                    <th class="w-16 px-5 py-4"></th>
                                </tr>
                            </thead>
                            <tbody>
                                ${contacts.map((contact, index) => {
                                    const fullName = `${contact.firstName || ''} ${contact.lastName || ''}`.trim() || 'Contact';
                                    const phone = `${contact.phoneCode || ''}${contact.phoneNumber || ''}`.replace(/\s+/g, '');

                                    return `
                                        <tr class="js-open-contact cursor-pointer border-b border-slate-100 bg-white hover:bg-[#f7fbf4]" data-contact-index="${index}">
                                            <td class="px-5 py-5">
                                                <span class="block h-5 w-5 rounded border border-[#9690ad] bg-white"></span>
                                            </td>
                                            <td class="px-5 py-5 text-base">${fullName}</td>
                                            <td class="px-5 py-5 text-base">${contact.email || 'No email added'}</td>
                                            <td class="px-5 py-5 text-base">${phone || 'Not provided'}</td>
                                            <td class="px-5 py-5 text-base">${flagMarkup(contact.country)}${contact.country || 'Not provided'}</td>
                                            <td class="px-5 py-5 text-base">${contact.assignedTo || 'None'}</td>
                                            <td class="px-5 py-5 text-2xl text-[#625e78]">&rsaquo;</td>
                                        </tr>
                                    `;
                                }).join('')}
                            </tbody>
                        </table>
                    </div>
                `;
                return;
            }

            homeDashboardHero.innerHTML = `
                <div class="mx-auto flex max-w-3xl flex-col items-center text-center">
                    <div class="relative h-64 w-[430px] max-w-full">
                        <div class="absolute left-20 top-8 h-48 w-48 rounded-full bg-[#d7edcd]"></div>
                        <div class="absolute left-24 top-22 h-36 w-28 rounded-t-full bg-[#4f8588]"></div>
                        <div class="absolute left-32 top-12 h-16 w-14 rounded-full bg-[#57546b]"></div>
                        <div class="absolute left-40 top-24 h-8 w-20 rounded-full border-4 border-[#68b742]"></div>
                        <div class="absolute left-64 top-20 h-36 w-36 border-2 border-[#07545c] bg-white"></div>
                        <div class="absolute left-68 top-24 h-3 w-3 rounded-full bg-[#8fb1b8]"></div>
                        <div class="absolute left-74 top-24 h-3 w-3 rounded-full bg-[#8fb1b8]"></div>
                        <div class="absolute left-80 top-24 h-3 w-3 rounded-full bg-[#8fb1b8]"></div>
                        <div class="absolute left-72 top-36 h-8 w-8 border-4 border-[#4f8588] bg-slate-100"></div>
                        <div class="absolute right-20 top-10 h-28 w-20 rounded-t-full bg-[#68b742]"></div>
                        <div class="absolute right-24 top-16 h-16 w-14 rounded-full border border-[#57546b] bg-white"></div>
                        <div class="absolute right-28 top-28 h-28 w-28 rounded-t-full bg-[#6c687a]"></div>
                        <div class="absolute left-52 top-48 h-12 w-24 rotate-12 rounded-full border-4 border-white bg-[#4f8588]"></div>
                        <div class="absolute left-60 top-52 h-10 w-24 -rotate-12 rounded-full border-4 border-white bg-[#6c687a]"></div>
                        <div class="absolute left-28 bottom-4 h-1 w-36 bg-[#07545c]"></div>
                    </div>

                    <h2 class="mt-3 text-[24px] font-normal text-[#57546b]">You do not have any contacts yet</h2>
                    <p class="mt-4 max-w-lg text-base leading-7 text-[#625e78]">
                        Personalize connections with travelers and<br />
                        keep track of the people behind itineraries.
                    </p>
                    <button type="button" class="js-create-contact mt-8 rounded-md bg-[#078000] px-9 py-3 text-sm font-bold text-white hover:bg-[#066d00]">
                        + Create contact
                    </button>
                </div>
            `;
        }

        function parseCsvLine(line) {
            const values = [];
            let current = '';
            let inQuotes = false;

            for (const character of line) {
                if (character === '"') {
                    inQuotes = !inQuotes;
                } else if (character === ',' && !inQuotes) {
                    values.push(current.trim());
                    current = '';
                } else {
                    current += character;
                }
            }

            values.push(current.trim());
            return values;
        }

        function importContactsFromCsv(csvText) {
            const rows = csvText.split(/\r?\n/).map((row) => row.trim()).filter(Boolean);

            if (rows.length < 2) {
                return 0;
            }

            const headers = parseCsvLine(rows[0]).map((header) => header.toLowerCase().replace(/\s+/g, ''));
            const contacts = getStoredContacts();
            let importedCount = 0;

            rows.slice(1).forEach((row) => {
                const values = parseCsvLine(row);
                const data = {};

                headers.forEach((header, index) => {
                    data[header] = values[index] || '';
                });

                const firstName = data.firstname || data.name || '';
                const lastName = data.lastname || '';

                if (!firstName && !data.email) {
                    return;
                }

                contacts.push({
                    id: Date.now() + importedCount,
                    title: data.title || 'None',
                    firstName,
                    lastName,
                    email: data.email || '',
                    phoneCode: data.phonecode || '+254',
                    phoneNumber: data.phonenumber || data.phone || '',
                    country: data.country || '',
                    passportNumber: data.passportnumber || '',
                    idNumber: data.idnumber || '',
                    assignedTo: data.assignedto || 'Joy',
                    contactSource: data.contactsource || 'None',
                    specialRequests: data.specialrequests || '',
                    preferences: [
                        { label: 'Activities and interests', tags: data.activities ? [data.activities] : [] },
                        { label: 'Food & drink preferences', tags: data.food ? [data.food] : [] },
                        { label: 'Allergies', tags: data.allergies ? [data.allergies] : [] },
                        { label: 'Travel preferences', tags: data.travelpreferences ? [data.travelpreferences] : [] },
                    ],
                });
                importedCount += 1;
            });

            localStorage.setItem('tiwi_contacts', JSON.stringify(contacts));
            return importedCount;
        }

        function renderImportContactsPanel() {
            setDashboardHeaderMode();
            setActiveDashboardSection('contacts');
            homeDashboardTitle.textContent = 'Contact manager';
            toggleContactActions(true);
            homeDashboardHero.className = 'min-h-[420px] bg-white px-8 py-10 shadow-sm';
            homeDashboardHero.innerHTML = `
                <div class="max-w-3xl">
                    <h2 class="text-[22px] font-semibold text-[#30384f]">Import contacts</h2>
                    <p class="mt-3 text-sm leading-6 text-[#625e78]">
                        Upload a CSV file with columns like firstName, lastName, email, phoneCode, phoneNumber, country, assignedTo.
                    </p>
                    <div class="mt-8 rounded-md border border-dashed border-[#9690ad] bg-[#fbfbfb] px-8 py-10 text-center">
                        <input id="contactImportFile" type="file" accept=".csv,text/csv" class="hidden" />
                        <button type="button" id="chooseContactImportFile" class="rounded-md border border-[#68b742] px-8 py-3 text-sm font-semibold text-[#078000] hover:bg-[#eef8e9]">
                            Choose CSV file
                        </button>
                        <p id="contactImportStatus" class="mt-4 text-sm text-[#625e78]">No file selected</p>
                    </div>
                    <div class="mt-8 flex gap-4">
                        <button type="button" class="js-contact-back rounded-md border border-[#9690ad] px-7 py-3 text-sm font-semibold text-[#57546b]">Back to contacts</button>
                        <button type="button" class="js-create-contact rounded-md bg-[#078000] px-7 py-3 text-sm font-semibold text-white">Create contact manually</button>
                    </div>
                </div>
            `;
        }

        function setInputValue(id, value) {
            const input = document.getElementById(id);
            if (input) {
                input.value = value || '';
            }
        }

        function setSelectValue(id, value) {
            const select = document.getElementById(id);
            if (select && value) {
                select.value = value;
            }
        }

        function addPreferenceTag(wrap, value) {
            if (!wrap || !value) {
                return;
            }

            const input = wrap.querySelector('.tag-input');
            input.insertAdjacentHTML('beforebegin', `
                <span class="preference-tag inline-flex items-center gap-2 rounded-full bg-slate-100 px-3 py-1 text-sm text-[#57546b]">
                    ${value}
                    <button type="button" class="remove-preference-tag text-lg leading-none text-[#57546b]">×</button>
                </span>
            `);
        }

        function hydrateContactForm(contact) {
            if (!contact) {
                return;
            }

            setSelectValue('newContactTitle', contact.title || 'None');
            setInputValue('newContactFirstName', contact.firstName);
            setInputValue('newContactLastName', contact.lastName);
            setInputValue('newContactPhoneNumber', contact.phoneNumber);
            setSelectValue('newContactCountry', contact.country);
            setInputValue('newContactEmail', contact.email);
            setInputValue('newContactPassportNumber', contact.passportNumber);
            setInputValue('newContactIdNumber', contact.idNumber);
            setInputValue('specialRequestsInput', contact.specialRequests);

            const phoneCodeValue = document.getElementById('phoneCodeValue');
            if (phoneCodeValue) {
                phoneCodeValue.textContent = contact.phoneCode || '+254';
            }

            const assignedToValue = document.getElementById('assignedToValue');
            if (assignedToValue) {
                assignedToValue.textContent = contact.assignedTo || 'None';
            }

            const contactSourceValue = document.getElementById('contactSourceValue');
            if (contactSourceValue) {
                contactSourceValue.textContent = contact.contactSource || 'None';
            }

            const count = document.getElementById('specialRequestsCount');
            if (count) {
                count.textContent = `${(contact.specialRequests || '').length}/500`;
            }

            const fields = document.querySelectorAll('.preference-tag-field');
            (contact.preferences || []).forEach((group, index) => {
                const wrap = fields[index]?.querySelector('.tag-input-wrap');
                (group.tags || []).forEach((tag) => addPreferenceTag(wrap, tag));
            });
        }

        function renderNewContactForm(contact = null) {
            const contactIdentifier = getContactIdentifier(contact);
            editingContactId = contactIdentifier !== null ? String(contactIdentifier) : null;
            setDashboardHeaderMode('detail');
            setActiveDashboardSection('contacts');
            const fullName = contact ? `${contact.firstName || ''} ${contact.lastName || ''}`.trim() : '';
            homeDashboardTitle.innerHTML = `
                <button type="button" class="js-contact-back text-base text-[#078000] underline">‹ Back</button>
                <span class="mx-4 text-slate-400">|</span>
                <span>Contact manager</span>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-base text-[#078000]">Contacts</span>
                <span class="mx-3 text-slate-400">›</span>
                ${contact ? `<span class="text-base text-[#078000]">${fullName || 'Contact'}</span><span class="mx-3 text-slate-400">â€º</span><span class="text-base">Edit</span>` : '<span class="text-base">New contact</span>'}
            `;
            toggleContactActions(false);
            homeDashboardCreateItineraryButton.classList.add('hidden');
            homeDashboardHero.className = 'space-y-5 bg-transparent p-0 shadow-none';
            homeDashboardHero.innerHTML = `
                <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                    <h2 class="text-[20px] font-semibold text-[#30384f]">Personal information</h2>
                    <div class="mt-7 grid gap-5 lg:grid-cols-[160px_1fr_1fr_2.6fr]">
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">Title</span>
                            <select id="newContactTitle" class="mt-2 h-11 w-full rounded-md border border-[#9690ad] bg-white px-4 text-sm text-[#57546b]">
                                <option>None</option>
                                <option>Mr</option>
                                <option>Ms</option>
                                <option>Mrs</option>
                                <option>Dr</option>
                            </select>
                        </label>
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">First name <span class="text-red-500">*</span></span>
                                    <input id="newContactFirstName" class="mt-2 h-11 w-full rounded-md border border-[#9690ad] px-4 text-sm italic outline-none focus:border-[#68b742]" placeholder="Jane" />
                                    <p id="newContactFirstNameError" class="mt-1 hidden text-sm text-red-600">First name is required</p>
                        </label>
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">Last name</span>
                            <input id="newContactLastName" class="mt-2 h-11 w-full rounded-md border border-[#9690ad] px-4 text-sm italic outline-none focus:border-[#68b742]" placeholder="Doe" />
                        </label>
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">Phone number</span>
                            <div class="mt-2 flex h-11 rounded-md border border-[#9690ad]">
                                <div class="relative w-28 border-r border-[#9690ad] bg-slate-50">
                                    <button type="button" id="phoneCodeButton" class="flex h-full w-full items-center justify-between px-3 text-sm text-[#57546b]">
                                        <span id="phoneCodeValue">+254</span>
                                        <span id="phoneCodeChevron">⌄</span>
                                    </button>
                                    <div id="phoneCodeMenu" class="absolute left-0 top-full z-40 mt-1 hidden max-h-72 w-72 overflow-y-auto rounded-md border border-slate-200 bg-white shadow-xl">
                                        ${countryCallingCodeButtons()}
                                    </div>
                                </div>
                                <input id="newContactPhoneNumber" class="min-w-0 flex-1 px-4 text-sm italic outline-none" placeholder="82 123 4567" />
                            </div>
                        </label>
                    </div>
                    <div class="mt-6 grid gap-5 lg:grid-cols-2">
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">Country</span>
                            <select id="newContactCountry" class="mt-2 h-11 w-full rounded-md border border-[#9690ad] bg-white px-4 text-sm text-[#57546b] outline-none focus:border-[#68b742]">
                                <option value="">Search & select a country</option>
                                ${countryOptions()}
                            </select>
                        </label>
                        <div id="newContactEmailList" class="space-y-3">
                            <label class="block">
                                <span class="text-sm font-semibold text-[#57546b]">Email</span>
                                <input id="newContactEmail" class="mt-2 h-11 w-full rounded-md border border-[#9690ad] px-4 text-sm italic outline-none focus:border-[#68b742]" placeholder="janedoe@example.com" />
                            </label>
                        </div>
                    </div>
                    <div class="mt-8 text-right">
                        <button type="button" class="js-add-email text-sm font-semibold text-[#078000] underline">+ Add email</button>
                    </div>
                </section>

                <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                    <h2 class="text-[20px] font-semibold text-[#30384f]">Preferences</h2>
                    <div class="mt-7 grid gap-6 lg:grid-cols-2">
                        <div class="space-y-5">
                            <div class="preference-tag-field block">
                                <span class="text-sm font-semibold text-[#57546b]">Activities and interests</span>
                                <div class="tag-input-wrap mt-2 flex min-h-11 flex-wrap items-center gap-2 rounded-md border border-[#9690ad] px-3 py-2 focus-within:border-[#68b742]" data-placeholder="Hiking, cycling, guided walks">
                                    <input class="tag-input min-w-[180px] flex-1 text-sm italic outline-none" placeholder="Hiking, cycling, guided walks" />
                                </div>
                                <p class="tag-warning mt-1 hidden text-sm text-red-600">Press enter to add a new tag</p>
                            </div>
                            <div class="preference-tag-field block">
                                <span class="text-sm font-semibold text-[#57546b]">Food & drink preferences</span>
                                <div class="tag-input-wrap mt-2 flex min-h-11 flex-wrap items-center gap-2 rounded-md border border-[#9690ad] px-3 py-2 focus-within:border-[#68b742]" data-placeholder="Vegetarian food, wine, no brussel sprouts!">
                                    <input class="tag-input min-w-[180px] flex-1 text-sm italic outline-none" placeholder="Vegetarian food, wine, no brussel sprouts!" />
                                </div>
                                <p class="tag-warning mt-1 hidden text-sm text-red-600">Press enter to add a new tag</p>
                            </div>
                            <div class="preference-tag-field block">
                                <span class="text-sm font-semibold text-[#57546b]">Allergies</span>
                                <div class="tag-input-wrap mt-2 flex min-h-11 flex-wrap items-center gap-2 rounded-md border border-[#9690ad] px-3 py-2 focus-within:border-[#68b742]" data-placeholder="Peanuts, gluten">
                                    <input class="tag-input min-w-[180px] flex-1 text-sm italic outline-none" placeholder="Peanuts, gluten" />
                                </div>
                                <p class="tag-warning mt-1 hidden text-sm text-red-600">Press enter to add a new tag</p>
                            </div>
                            <div class="preference-tag-field block">
                                <span class="text-sm font-semibold text-[#57546b]">Travel preferences</span>
                                <div class="tag-input-wrap mt-2 flex min-h-11 flex-wrap items-center gap-2 rounded-md border border-[#9690ad] px-3 py-2 focus-within:border-[#68b742]" data-placeholder="Business class, trains, no flights">
                                    <input class="tag-input min-w-[180px] flex-1 text-sm italic outline-none" placeholder="Business class, trains, no flights" />
                                </div>
                                <p class="tag-warning mt-1 hidden text-sm text-red-600">Press enter to add a new tag</p>
                            </div>
                        </div>
                        <label class="block">
                            <span class="flex justify-between text-sm font-semibold text-[#57546b]">
                                <span>Special requests</span>
                                <span id="specialRequestsCount">0/500</span>
                            </span>
                            <textarea id="specialRequestsInput" class="mt-2 h-[260px] w-full rounded-md border border-[#9690ad] px-4 py-3 text-sm italic outline-none" placeholder="Must have a room with a sunset view"></textarea>
                            <p id="specialRequestsWarning" class="mt-1 hidden text-sm text-red-600">Maximum is 500 letters.</p>
                        </label>
                    </div>
                </section>

                <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                    <h2 class="text-[20px] font-semibold text-[#30384f]">Traveler information</h2>
                    <div class="mt-7 grid gap-5 lg:grid-cols-2">
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">Passport number</span>
                            <input id="newContactPassportNumber" class="mt-2 h-11 w-full rounded-md border border-[#9690ad] px-4 text-sm italic outline-none" placeholder="9876543210" />
                        </label>
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">ID number</span>
                            <input id="newContactIdNumber" class="mt-2 h-11 w-full rounded-md border border-[#9690ad] px-4 text-sm italic outline-none" placeholder="987654321" />
                        </label>
                    </div>
                </section>

                <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                    <h2 class="text-[20px] font-semibold text-[#30384f]">Other details</h2>
                    <div class="mt-7 grid gap-5 lg:grid-cols-2">
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">Assigned to</span>
                            <div class="relative mt-2">
                                <button type="button" id="assignedToButton" class="flex h-11 w-full items-center justify-between rounded-md border border-[#9690ad] bg-white px-4 text-sm text-[#57546b]">
                                    <span id="assignedToValue">Joy</span>
                                    <span class="flex items-center gap-4">
                                        <span id="assignedToClear" class="flex h-5 w-5 items-center justify-center rounded-full border border-[#9690ad] text-xs">×</span>
                                        <span id="assignedToChevron">⌄</span>
                                    </span>
                                </button>
                                <div id="assignedToMenu" class="absolute bottom-full left-0 z-30 mb-2 hidden max-h-72 w-full overflow-y-auto rounded-md border border-slate-200 bg-white shadow-xl">
                                    <button type="button" class="assigned-to-option flex w-full items-center justify-between bg-[#eef8e9] px-5 py-3 text-left text-sm text-[#078000]" data-value="Joy">
                                        <span>Joy</span>
                                        <span class="assigned-to-check">✓</span>
                                    </button>
                                    <button type="button" class="assigned-to-option flex w-full items-center justify-between px-5 py-3 text-left text-sm text-[#57546b]" data-value="Admin">
                                        <span>Admin</span>
                                        <span class="assigned-to-check hidden">✓</span>
                                    </button>
                                    <button type="button" class="assigned-to-option flex w-full items-center justify-between px-5 py-3 text-left text-sm text-[#57546b]" data-value="Reservations">
                                        <span>Reservations</span>
                                        <span class="assigned-to-check hidden">✓</span>
                                    </button>
                                    <button type="button" class="assigned-to-option flex w-full items-center justify-between px-5 py-3 text-left text-sm text-[#57546b]" data-value="Sales">
                                        <span>Sales</span>
                                        <span class="assigned-to-check hidden">✓</span>
                                    </button>
                                </div>
                            </div>
                        </label>
                        <label class="block">
                            <span class="text-sm font-semibold text-[#57546b]">Contact source</span>
                            <div class="relative mt-2">
                                <button type="button" id="contactSourceButton" class="flex h-11 w-full items-center justify-between rounded-md border border-[#9690ad] bg-white px-4 text-sm text-[#57546b]">
                                    <span id="contactSourceValue">None</span>
                                    <span id="contactSourceChevron">⌄</span>
                                </button>
                                <div id="contactSourceMenu" class="absolute bottom-full left-0 z-30 mb-2 hidden max-h-80 w-full overflow-y-auto rounded-md border border-slate-200 bg-white py-0 shadow-xl">
                                    <button type="button" class="contact-source-option flex w-full items-center justify-between bg-[#eef8e9] px-5 py-3 text-left text-sm text-[#078000]" data-value="None">
                                        <span>None</span>
                                        <span class="contact-source-check">✓</span>
                                    </button>
                                    <button type="button" class="contact-source-option flex w-full items-center justify-between px-5 py-3 text-left text-sm text-[#57546b]" data-value="Cold call">
                                        <span>Cold call</span>
                                        <span class="contact-source-check hidden">✓</span>
                                    </button>
                                    <button type="button" class="contact-source-option flex w-full items-center justify-between px-5 py-3 text-left text-sm text-[#57546b]" data-value="Existing customer">
                                        <span>Existing customer</span>
                                        <span class="contact-source-check hidden">✓</span>
                                    </button>
                                    <button type="button" class="contact-source-option flex w-full items-center justify-between bg-[#eef8e9] px-5 py-3 text-left text-sm text-[#078000]" data-value="Self generated">
                                        <span>Self generated</span>
                                        <span class="contact-source-check hidden">✓</span>
                                    </button>
                                    <button type="button" class="contact-source-option flex w-full items-center justify-between px-5 py-3 text-left text-sm text-[#57546b]" data-value="Employee">
                                        <span>Employee</span>
                                        <span class="contact-source-check hidden">✓</span>
                                    </button>
                                    <button type="button" class="contact-source-option flex w-full items-center justify-between px-5 py-3 text-left text-sm text-[#57546b]" data-value="Partner">
                                        <span>Partner</span>
                                        <span class="contact-source-check hidden">✓</span>
                                    </button>
                                </div>
                            </div>
                        </label>
                    </div>
                </section>
            `;
            homeDashboardTitle.closest('header').querySelector('div:last-child').innerHTML = `
                <button type="button" class="js-contact-cancel rounded-md border border-[#9690ad] px-7 py-3 text-sm font-semibold text-[#57546b]">Cancel</button>
                <button type="button" class="js-contact-save rounded-md bg-[#078000] px-7 py-3 text-sm font-semibold text-white">Save</button>
            `;
            hydrateContactForm(contact);
        }

        function saveContact() {
            const firstNameInput = document.getElementById('newContactFirstName');
            const firstNameError = document.getElementById('newContactFirstNameError');
            const firstName = firstNameInput?.value.trim() || '';

            if (!firstName) {
                firstNameInput.classList.add('border-red-500', 'bg-red-50');
                firstNameError.classList.remove('hidden');
                firstNameInput.focus();
                return;
            }

            const contacts = JSON.parse(localStorage.getItem('tiwi_contacts') || '[]');
            const editingIndex = editingContactId ? contacts.findIndex((item, index) => String(item.id || index) === editingContactId) : -1;
            const existingContact = editingIndex >= 0 ? contacts[editingIndex] : null;
            const contact = {
                id: existingContact?.id || Date.now(),
                title: document.getElementById('newContactTitle')?.value || 'None',
                firstName,
                lastName: document.getElementById('newContactLastName')?.value.trim() || '',
                email: document.getElementById('newContactEmail')?.value.trim() || '',
                phoneCode: document.getElementById('phoneCodeValue')?.textContent.trim() || '',
                phoneNumber: document.getElementById('newContactPhoneNumber')?.value.trim() || '',
                country: document.getElementById('newContactCountry')?.value || '',
                passportNumber: document.getElementById('newContactPassportNumber')?.value.trim() || '',
                idNumber: document.getElementById('newContactIdNumber')?.value.trim() || '',
                assignedTo: document.getElementById('assignedToValue')?.textContent.trim() || 'None',
                contactSource: document.getElementById('contactSourceValue')?.textContent.trim() || 'None',
                specialRequests: document.getElementById('specialRequestsInput')?.value.trim() || '',
                preferences: Array.from(document.querySelectorAll('.preference-tag-field')).map((field) => ({
                    label: field.querySelector('span')?.textContent.trim() || '',
                    tags: Array.from(field.querySelectorAll('.preference-tag')).map((tag) => tag.firstChild.textContent.trim()),
                })),
            };
            if (editingIndex >= 0) {
                contacts[editingIndex] = contact;
            } else {
                contacts.push(contact);
            }
            localStorage.setItem('tiwi_contacts', JSON.stringify(contacts));
            localStorage.setItem('tiwi_selected_contact_id', String(contact.id));
            editingContactId = null;
            window.location.href = `${dashboardUrl}?view=contacts&contact=${encodeURIComponent(contact.id)}`;
        }

        function renderContactDetailsLegacy(contact) {
            const fullName = `${contact.firstName} ${contact.lastName}`.trim();
            const titlePrefix = contact.title && contact.title !== 'None' ? `${contact.title} ` : '';
            const displayName = `${titlePrefix}${fullName}`.trim();
            homeDashboardTitle.innerHTML = `
                <button type="button" class="js-contact-back text-base text-[#078000] underline">‹ Back</button>
                <span class="mx-4 text-slate-400">|</span>
                <span>Contact manager</span>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-base text-[#078000]">Contacts</span>
                <span class="mx-3 text-slate-400">›</span>
                <span class="text-base">${fullName || 'Contact'}</span>
            `;
            homeDashboardTitle.closest('header').querySelector('div:last-child').innerHTML = '';
            homeDashboardHero.className = 'grid gap-5 bg-transparent p-0 shadow-none lg:grid-cols-[1fr_360px]';
            homeDashboardHero.innerHTML = `
                <div class="space-y-5">
                    <nav class="flex gap-8 text-base">
                        <span class="border-b-2 border-[#078000] pb-3 text-[#078000]">Details</span>
                        <span>Documents</span>
                        <span>Itineraries</span>
                    </nav>

                    <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                        <div class="mb-6 flex justify-end gap-3">
                            <button type="button" class="rounded-md border border-[#9690ad] px-7 py-3 text-sm font-semibold text-[#57546b]">Edit details</button>
                            <button type="button" class="rounded-md border border-[#9690ad] px-4 py-3 text-sm text-[#57546b]">↻</button>
                        </div>
                        <h2 class="text-[20px] font-semibold text-[#30384f]">Personal information</h2>
                        <div class="mt-7 grid gap-8 md:grid-cols-2">
                            <div>
                                <p class="text-sm text-[#57546b]">Full name</p>
                                <p class="mt-2 text-base">${displayName || 'Not provided'}</p>
                            </div>
                            <div>
                                <p class="text-sm text-[#57546b]">Phone</p>
                                <p class="mt-2 text-base text-[#078000]">${contact.phoneCode}${contact.phoneNumber}</p>
                            </div>
                            <div>
                                <p class="text-sm text-[#57546b]">Country</p>
                                <p class="mt-2 text-base">${contact.country === 'Kenya' ? '🇰🇪 ' : ''}${contact.country || 'Not provided'}</p>
                            </div>
                            <div>
                                <p class="text-sm text-[#57546b]">Email</p>
                                <p class="mt-2 text-base text-[#078000]">${contact.email || 'Not provided'}</p>
                            </div>
                        </div>
                    </section>

                    <div class="grid gap-5 md:grid-cols-2">
                        <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                            <h2 class="text-[20px] font-semibold text-[#30384f]">Preferences</h2>
                            <div class="mt-7 space-y-5">
                                ${contact.preferences.map((group) => `
                                    <div>
                                        <p class="text-sm text-[#57546b]">${group.label}</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            ${group.tags.length ? group.tags.map((tag) => `<span class="rounded-full bg-slate-100 px-3 py-1 text-sm">${tag}</span>`).join('') : '<span class="text-sm text-slate-400">None</span>'}
                                        </div>
                                    </div>
                                `).join('')}
                            </div>
                        </section>

                        <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                            <h2 class="text-[20px] font-semibold text-[#30384f]">Special requests</h2>
                            <p class="mt-7 text-base leading-7">${contact.specialRequests || 'None'}</p>
                        </section>
                    </div>

                    <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                        <h2 class="text-[20px] font-semibold text-[#30384f]">Traveler information</h2>
                        <div class="mt-7 grid gap-8 md:grid-cols-2">
                            <div>
                                <p class="text-sm text-[#57546b]">Passport number</p>
                                <p class="mt-2 text-base">${contact.passportNumber || 'Not provided'}</p>
                            </div>
                            <div>
                                <p class="text-sm text-[#57546b]">ID number</p>
                                <p class="mt-2 text-base">${contact.idNumber || 'Not provided'}</p>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-md bg-white px-7 py-7 shadow-sm">
                        <h2 class="text-[20px] font-semibold text-[#30384f]">Other details</h2>
                        <div class="mt-7 grid gap-8 md:grid-cols-2">
                            <div>
                                <p class="text-sm text-[#57546b]">Assigned to</p>
                                <p class="mt-2 text-base">${contact.assignedTo || 'None'}</p>
                            </div>
                            <div>
                                <p class="text-sm text-[#57546b]">Contact source</p>
                                <p class="mt-2 text-base">${contact.contactSource || 'None'}</p>
                            </div>
                        </div>
                    </section>
                </div>

                <aside class="space-y-5">
                    <section class="rounded-md bg-white shadow-sm">
                        <header class="flex items-center justify-between border-b border-slate-200 px-6 py-5">
                            <h3 class="text-base">⌃ Notes</h3>
                            <button type="button" class="text-[#078000] underline">+ Add note</button>
                        </header>
                        <div class="px-8 py-12 text-center text-[#625e78]">
                            <div class="mx-auto mb-7 h-14 w-14 rounded-full border-4 border-[#9690ad]"></div>
                            <p class="text-sm leading-6">Keep any extra notes or details<br />about this contact here.</p>
                        </div>
                    </section>
                    <section class="rounded-md bg-white px-6 py-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <h3 class="text-base">⌄ Tasks</h3>
                            <button type="button" class="text-[#078000] underline">+ Add task</button>
                        </div>
                    </section>
                </aside>
            `;
        }

        function renderContactDetails(contact) {
            activeContactId = getContactIdentifier(contact);
            if (activeContactId !== null) {
                localStorage.setItem('tiwi_selected_contact_id', String(activeContactId));
            }
            const fullName = `${contact.firstName || ''} ${contact.lastName || ''}`.trim();
            const titlePrefix = contact.title && contact.title !== 'None' ? `${contact.title} ` : '';
            const displayName = `${titlePrefix}${fullName}`.trim() || 'Contact';
            const formattedPhone = `${contact.phoneCode || ''}${contact.phoneNumber || ''}`.replace(/\s+/g, '');
            const countryFlag = flagMarkup(contact.country);
            const preferenceGroups = contact.preferences || [];
            const notes = contact.notes || [];
            const tasks = contact.tasks || [];
            const notesMarkup = notes.length
                ? `<div class="space-y-3 px-7 py-6">${notes.map((note) => `
                    <article class="rounded-md border border-slate-200 bg-white px-4 py-3 text-left">
                        <h4 class="text-sm font-semibold text-[#30384f]">${note.title || 'Note'}</h4>
                        <p class="mt-1 text-sm leading-6 text-[#30384f]">${note.description || note.text || ''}</p>
                        <p class="mt-2 text-xs text-slate-400">${note.createdAt}</p>
                    </article>
                `).join('')}</div>`
                : `<div class="px-8 py-12 text-center text-[#625e78]">
                    <svg class="mx-auto mb-7 h-16 w-16 text-[#9690ad]" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="4">
                        <path d="M46 12C25 13 15 26 15 52C35 50 49 39 52 18C51 14 50 13 46 12Z"/>
                        <path d="M17 49C25 36 33 29 45 23"/>
                        <path d="M31 34H45"/>
                    </svg>
                    <p class="text-sm leading-6">Keep any extra notes or details<br />about this contact here.</p>
                </div>`;
            const tasksMarkup = tasks.length
                ? `<div class="space-y-3 border-t border-slate-200 px-7 py-5">${tasks.map((task) => `
                    <article class="rounded-md border border-slate-200 bg-white px-4 py-3">
                        <h4 class="text-sm font-semibold text-[#30384f]">${task.title}</h4>
                        <p class="mt-1 text-sm leading-6 text-[#30384f]">${task.description || ''}</p>
                        <p class="mt-2 text-xs text-slate-400">${task.dueDate ? `Due ${task.dueDate}` : 'No due date'}</p>
                    </article>
                `).join('')}</div>`
                : '';
            const preferenceMarkup = preferenceGroups.map((group) => `
                <div>
                    <p class="text-sm font-medium text-[#57546b]">${group.label}</p>
                    <div class="mt-2 flex flex-wrap gap-2">
                        ${group.tags.length ? group.tags.map((tag) => `<span class="rounded-full bg-slate-100 px-3 py-1 text-sm text-[#30384f]">${tag}</span>`).join('') : '<span class="text-sm text-slate-400">None</span>'}
                    </div>
                </div>
            `).join('');

            setDashboardHeaderMode('detail');
            setActiveDashboardSection('contacts');
            toggleContactActions(false);
            homeDashboardCreateItineraryButton.classList.add('hidden');
            homeDashboardTitle.innerHTML = `
                <button type="button" class="js-contact-back text-base text-[#078000] underline">&lsaquo; Back</button>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-[26px]">Contact manager</span>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-base text-[#078000]">Contacts</span>
                <span class="mx-3 text-slate-400">&rsaquo;</span>
                <span class="text-base">${fullName || 'Contact'}</span>
            `;
            homeDashboardTitle.closest('header').querySelector('div:last-child').innerHTML = '';
            homeDashboardHero.className = 'grid gap-7 bg-transparent p-0 shadow-none xl:grid-cols-[1fr_480px]';
            homeDashboardHero.innerHTML = `
                <div class="space-y-5">
                    <div class="flex min-h-[74px] items-end justify-between gap-4">
                        <nav class="flex gap-8 text-base">
                            <span class="border-b-2 border-[#078000] pb-3 text-[#078000]">Details</span>
                            <button type="button" class="js-contact-documents-tab pb-3">Documents</button>
                            <button type="button" class="js-contact-itineraries-tab pb-3">Itineraries</button>
                        </nav>
                        <div class="flex gap-3 pb-1">
                            <button type="button" class="js-edit-contact rounded-md border border-[#9690ad] bg-white px-9 py-3 text-sm font-semibold text-[#57546b] shadow-sm" data-contact-id="${activeContactId}">Edit details</button>
                            <button type="button" class="rounded-md border border-[#9690ad] bg-white px-4 py-3 text-sm text-[#57546b] shadow-sm">&#8635;</button>
                        </div>
                    </div>

                    <section class="rounded-md bg-white px-8 py-8 shadow-md">
                        <h2 class="text-[20px] font-semibold text-[#30384f]">Personal information</h2>
                        <div class="mt-8 grid gap-x-20 gap-y-7 md:grid-cols-2">
                            <div>
                                <p class="text-sm font-medium text-[#57546b]">Full name</p>
                                <p class="mt-2 text-base text-[#625e78]">${displayName}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-[#57546b]">Phone</p>
                                <p class="mt-2 text-base text-[#078000]">${formattedPhone || 'Not provided'}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-[#57546b]">Country</p>
                                <p class="mt-2 flex items-center text-base text-[#625e78]">${countryFlag}${contact.country || 'Not provided'}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-[#57546b]">Email</p>
                                <p class="mt-2 text-base text-[#078000]">${contact.email || 'Not provided'}</p>
                            </div>
                        </div>
                    </section>

                    <div class="grid gap-5 md:grid-cols-2">
                        <section class="min-h-[280px] rounded-md bg-white px-8 py-8 shadow-md">
                            <h2 class="text-[20px] font-semibold text-[#30384f]">Preferences</h2>
                            <div class="mt-7 space-y-5">
                                ${preferenceMarkup || '<span class="text-sm text-slate-400">None</span>'}
                            </div>
                        </section>

                        <section class="min-h-[280px] rounded-md bg-white px-8 py-8 shadow-md">
                            <h2 class="text-[20px] font-semibold text-[#30384f]">Special requests</h2>
                            <p class="mt-7 text-base leading-7 text-[#625e78]">${contact.specialRequests || 'None'}</p>
                        </section>
                    </div>

                    <section class="rounded-md bg-white px-8 py-8 shadow-md">
                        <h2 class="text-[20px] font-semibold text-[#30384f]">Traveler information</h2>
                        <div class="mt-8 grid gap-8 md:grid-cols-2">
                            <div>
                                <p class="text-sm font-medium text-[#57546b]">Passport number</p>
                                <p class="mt-2 text-base text-[#625e78]">${contact.passportNumber || 'Not provided'}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-[#57546b]">ID number</p>
                                <p class="mt-2 text-base text-[#625e78]">${contact.idNumber || 'Not provided'}</p>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-md bg-white px-8 py-8 shadow-md">
                        <h2 class="text-[20px] font-semibold text-[#30384f]">Other details</h2>
                        <div class="mt-8 grid gap-8 md:grid-cols-2">
                            <div>
                                <p class="text-sm font-medium text-[#57546b]">Assigned to</p>
                                <p class="mt-2 text-base text-[#625e78]">${contact.assignedTo || 'None'}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-[#57546b]">Contact source</p>
                                <p class="mt-2 text-base text-[#625e78]">${contact.contactSource || 'None'}</p>
                            </div>
                        </div>
                    </section>
                </div>

                <aside class="space-y-5 pt-[74px]">
                    <section class="js-notes-card rounded-md bg-white shadow-md">
                        <header class="flex items-center justify-between border-b border-slate-200 px-7 py-5">
                            <h3 class="flex items-center gap-5 text-base text-[#30384f]">
                                <span class="text-lg">&#8963;</span>
                                Notes
                            </h3>
                            <button type="button" class="js-add-note text-base text-[#078000] underline">+ Add note</button>
                        </header>
                        <div id="contactNotesPanel">${notesMarkup}</div>
                    </section>
                    <section class="js-tasks-card rounded-md bg-white shadow-md">
                        <div class="flex items-center justify-between">
                            <h3 class="flex items-center gap-5 text-base text-[#30384f]">
                                <span class="text-lg">&#8964;</span>
                                Tasks
                            </h3>
                            <button type="button" class="js-add-task text-base text-[#078000] underline">+ Add task</button>
                        </div>
                        <div id="contactTasksPanel">${tasksMarkup}</div>
                    </section>
                </aside>
            `;
        }

        function renderContactDocuments(contact) {
            activeContactId = getContactIdentifier(contact);
            if (activeContactId !== null) {
                localStorage.setItem('tiwi_selected_contact_id', String(activeContactId));
            }

            const fullName = `${contact.firstName || ''} ${contact.lastName || ''}`.trim();
            const documents = contact.documents || [];

            setDashboardHeaderMode('detail');
            setActiveDashboardSection('contacts');
            toggleContactActions(false);
            homeDashboardCreateItineraryButton.classList.add('hidden');
            homeDashboardTitle.innerHTML = `
                <button type="button" class="js-contact-back text-base text-[#078000] underline">&lsaquo; Back</button>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-[26px]">Contact manager</span>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-base text-[#078000]">Contacts</span>
                <span class="mx-3 text-slate-400">&rsaquo;</span>
                <span class="text-base">${fullName || 'Contact'}</span>
            `;
            homeDashboardTitle.closest('header').querySelector('div:last-child').innerHTML = '';
            homeDashboardHero.className = 'grid gap-7 bg-transparent p-0 shadow-none xl:grid-cols-[1fr_480px]';
            homeDashboardHero.innerHTML = `
                <div class="space-y-5">
                    <div class="flex min-h-[74px] items-end justify-between gap-4">
                    <nav class="flex gap-8 text-base">
                        <button type="button" class="js-contact-details-tab pb-3">Details</button>
                        <span class="border-b-2 border-[#078000] pb-3 text-[#078000]">Documents</span>
                        <button type="button" class="js-contact-itineraries-tab pb-3">Itineraries</button>
                    </nav>
                        <div class="flex gap-3 pb-1">
                            <input id="contactDocumentFile" type="file" class="hidden" multiple />
                            <button type="button" class="js-add-document rounded-md border border-[#9690ad] bg-white px-8 py-3 text-sm font-semibold text-[#57546b] shadow-sm">Upload document</button>
                        </div>
                    </div>

                    <section class="min-h-[620px] rounded-md bg-white px-8 py-8 shadow-md">
                        ${documents.length ? `
                            <div class="overflow-x-auto">
                                <table class="w-full min-w-[760px] text-left text-sm text-[#30384f]">
                                    <thead>
                                        <tr class="border-b border-slate-200 text-xs uppercase tracking-wide text-[#57546b]">
                                            <th class="py-3">Document name</th>
                                            <th class="py-3">Size</th>
                                            <th class="py-3">Date added</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ${documents.map((document) => `
                                            <tr class="border-b border-slate-100">
                                                <td class="py-4 text-base">${document.name}</td>
                                                <td class="py-4">${document.size}</td>
                                                <td class="py-4">${document.createdAt}</td>
                                            </tr>
                                        `).join('')}
                                    </tbody>
                                </table>
                            </div>
                        ` : `
                            <div class="flex min-h-[540px] flex-col items-center justify-center text-center text-[#625e78]">
                                <svg class="mb-8 h-16 w-16 text-[#6f6a82]" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="4">
                                    <path d="M18 8h20l10 10v38H18z"/>
                                    <path d="M38 8v12h10"/>
                                </svg>
                                <p class="text-base leading-6">Store documents related to this contact here</p>
                                <button type="button" class="js-add-document mt-9 text-base font-semibold text-[#078000] underline">Upload document</button>
                            </div>
                        `}
                    </section>
                </div>

                <aside class="space-y-5 pt-[74px]">
                    <section class="js-notes-card rounded-md bg-white shadow-md">
                        <header class="flex items-center justify-between px-7 py-5">
                            <h3 class="flex items-center gap-5 text-base text-[#30384f]">
                                <span class="text-lg">&#8964;</span>
                                Notes
                            </h3>
                            <button type="button" class="js-add-note text-base text-[#078000] underline">+ Add note</button>
                        </header>
                    </section>
                    <section class="js-tasks-card rounded-md bg-white shadow-md">
                        <div class="flex items-center justify-between px-7 py-5">
                            <h3 class="flex items-center gap-5 text-base text-[#30384f]">
                                <span class="text-lg">&#8964;</span>
                                Tasks
                            </h3>
                            <button type="button" class="js-add-task text-base text-[#078000] underline">+ Add task</button>
                        </div>
                    </section>
                </aside>
            `;
        }

        function renderContactItineraries(contact) {
            activeContactId = getContactIdentifier(contact);
            if (activeContactId !== null) {
                localStorage.setItem('tiwi_selected_contact_id', String(activeContactId));
            }

            const fullName = `${contact.firstName || ''} ${contact.lastName || ''}`.trim();
            const itineraries = contact.itineraries || [];

            setDashboardHeaderMode('detail');
            setActiveDashboardSection('contacts');
            toggleContactActions(false);
            homeDashboardCreateItineraryButton.classList.add('hidden');
            homeDashboardTitle.innerHTML = `
                <button type="button" class="js-contact-back text-base text-[#078000] underline">&lsaquo; Back</button>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-[26px]">Contact manager</span>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-base text-[#078000]">Contacts</span>
                <span class="mx-3 text-slate-400">&rsaquo;</span>
                <span class="text-base">${fullName || 'Contact'}</span>
            `;
            homeDashboardTitle.closest('header').querySelector('div:last-child').innerHTML = '';
            homeDashboardHero.className = 'grid gap-7 bg-transparent p-0 shadow-none xl:grid-cols-[1fr_480px]';
            homeDashboardHero.innerHTML = `
                <div class="space-y-5">
                    <div class="flex min-h-[74px] items-end justify-between gap-4">
                        <nav class="flex gap-8 text-base">
                            <button type="button" class="js-contact-details-tab pb-3">Details</button>
                            <button type="button" class="js-contact-documents-tab pb-3">Documents</button>
                            <span class="border-b-2 border-[#078000] pb-3 text-[#078000]">Itineraries</span>
                        </nav>
                        <div class="flex gap-3 pb-1">
                            <button type="button" class="js-add-itinerary rounded-md border border-[#9690ad] bg-white px-8 py-3 text-sm font-semibold text-[#57546b] shadow-sm">Add Itinerary</button>
                        </div>
                    </div>

                    <section class="min-h-[620px] rounded-md bg-white px-8 py-8 shadow-md">
                        ${itineraries.length ? `
                            <div class="space-y-3">
                                ${itineraries.map((itinerary) => `
                                    <article class="rounded-md border border-slate-200 px-5 py-4">
                                        <h3 class="text-base font-semibold text-[#30384f]">${itinerary.name}</h3>
                                        <p class="mt-2 text-sm text-[#625e78]">${itinerary.createdAt}</p>
                                    </article>
                                `).join('')}
                            </div>
                        ` : `
                            <div class="flex min-h-[540px] flex-col items-center justify-center text-center text-[#625e78]">
                                <svg class="mb-8 h-20 w-20 text-[#6f6a82]" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="4">
                                    <path d="m58 8-22 48-8-21-21-8 51-19Z"/>
                                    <path d="M58 8 28 35"/>
                                </svg>
                                <p class="text-base leading-6">Keep track of this contact's itineraries here</p>
                                <button type="button" class="js-add-itinerary mt-9 text-base font-semibold text-[#078000] underline">+ Add Itinerary</button>
                            </div>
                        `}
                    </section>
                </div>

                <aside class="space-y-5 pt-[74px]">
                    <section class="js-notes-card rounded-md bg-white shadow-md">
                        <header class="flex items-center justify-between px-7 py-5">
                            <h3 class="flex items-center gap-5 text-base text-[#30384f]">
                                <span class="text-lg">&#8964;</span>
                                Notes
                            </h3>
                            <button type="button" class="js-add-note text-base text-[#078000] underline">+ Add note</button>
                        </header>
                    </section>
                    <section class="js-tasks-card rounded-md bg-white shadow-md">
                        <div class="flex items-center justify-between px-7 py-5">
                            <h3 class="flex items-center gap-5 text-base text-[#30384f]">
                                <span class="text-lg">&#8964;</span>
                                Tasks
                            </h3>
                            <button type="button" class="js-add-task text-base text-[#078000] underline">+ Add task</button>
                        </div>
                    </section>
                </aside>
            `;
        }

        function renderPersonalItineraries() {
            setDashboardHeaderMode();
            setActiveDashboardSection('trip');
            toggleContactActions(false);
            homeDashboardCreateItineraryButton.classList.add('hidden');
            homeDashboardTitle.textContent = 'Personal itineraries';
            homeDashboardHero.className = 'space-y-5 bg-transparent p-0 shadow-none';
            homeDashboardHero.innerHTML = `
                <section class="flex items-center justify-between rounded-md bg-white px-4 py-4 shadow-sm">
                    <h2 class="text-[22px] font-normal text-[#57546b]">Personal itineraries</h2>
                    <div class="flex items-center gap-4">
                        <button type="button" class="js-region-filter text-base text-[#625e78]">
                            Regions: <span class="text-[#078000]">${personalItineraryRegion}</span>
                            <span class="ml-2 inline-flex h-4 w-4 items-center justify-center rounded-full border border-[#68b742] text-xs text-[#68b742]">i</span>
                        </button>
                        <button type="button" class="js-toggle-itinerary-filters rounded-md border border-[#9690ad] bg-white px-7 py-3 text-base text-[#57546b] shadow-sm">Filter</button>
                        <button type="button" class="js-create-personal-itinerary rounded-md bg-[#68b742] px-7 py-3 text-base font-semibold text-white shadow-sm">Create new</button>
                    </div>
                </section>

                <div class="overflow-x-auto bg-white shadow-sm">
                <table class="w-full min-w-[1320px] border-collapse text-sm text-[#57546b]">
                    <thead>
                        <tr class="border-b border-slate-300 bg-white text-left">
                            <th class="w-12 border-r border-slate-200 px-3 py-3"></th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Itinerary <button type="button" class="ml-2 rounded bg-[#68b742] px-2 py-1 text-white">↪</button></th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Client</th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Language</th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Ref no. <button type="button" class="ml-2 rounded bg-[#68b742] px-2 py-1 text-white">↪</button></th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Start Date</th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Nights</th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Modified <span class="ml-1 rounded-full bg-[#68b742] px-2 text-white">i</span> ▲</th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Branding</th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Viewed</th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Last<br />Viewed</th>
                            <th class="border-r border-slate-200 px-3 py-3 font-semibold">Consultant</th>
                            <th class="px-3 py-3 font-semibold">Status</th>
                        </tr>
                        <tr class="${personalItineraryFiltersVisible ? '' : 'hidden'} border-b border-slate-300 bg-white">
                            <th class="border-r border-slate-200 px-3 py-2"><span class="block h-4 w-4 rounded border border-slate-400"></span></th>
                            <th class="border-r border-slate-200 px-3 py-2"><input class="h-9 w-full rounded border border-slate-300 px-3 italic" placeholder="Search" /></th>
                            <th class="border-r border-slate-200 px-3 py-2"><input class="h-9 w-full rounded border border-slate-300 px-3 italic" placeholder="Search" /></th>
                            <th class="border-r border-slate-200 px-3 py-2"><select class="h-9 w-full rounded border border-slate-300 px-3"><option>All</option><option>English</option></select></th>
                            <th class="border-r border-slate-200 px-3 py-2"><input class="h-9 w-full rounded border border-slate-300 px-3 italic" placeholder="Search" /></th>
                            <th class="border-r border-slate-200 px-3 py-2"></th>
                            <th class="border-r border-slate-200 px-3 py-2"></th>
                            <th class="border-r border-slate-200 px-3 py-2"></th>
                            <th class="border-r border-slate-200 px-3 py-2"><select class="h-9 w-full rounded border border-slate-300 px-3"><option>All</option></select></th>
                            <th class="border-r border-slate-200 px-3 py-2"></th>
                            <th class="border-r border-slate-200 px-3 py-2"></th>
                            <th class="border-r border-slate-200 px-3 py-2"><select class="h-9 w-full rounded border border-slate-300 px-3"><option>Joy</option></select></th>
                            <th class="px-3 py-2">
                                <select class="h-9 w-full rounded border border-orange-400 px-3 outline-none focus:border-orange-500">
                                    <option>All</option>
                                    <option>None</option>
                                    <option>Awaiting Quote</option>
                                    <option>Booked</option>
                                    <option>Cancelled</option>
                                    <option>Did Not Book</option>
                                    <option>Invoiced</option>
                                    <option>Paid</option>
                                    <option>Payment Due</option>
                                    <option>Provisional</option>
                                    <option>Quoted</option>
                                    <option>Travelled</option>
                                </select>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        ${personalItineraryRows.map((row) => `
                            <tr class="border-b border-slate-200 odd:bg-white even:bg-[#f5fbfc]">
                                <td class="border-r border-slate-200 px-3 py-4"><span class="block h-4 w-4 rounded border border-slate-400"></span></td>
                                <td class="border-r border-slate-200 px-3 py-4">${row[0]}</td>
                                <td class="border-r border-slate-200 px-3 py-4"></td>
                                <td class="border-r border-slate-200 px-3 py-4 text-center">${row[1]}</td>
                                <td class="border-r border-slate-200 px-3 py-4"></td>
                                <td class="border-r border-slate-200 px-3 py-4 text-center">${row[2]}</td>
                                <td class="border-r border-slate-200 px-3 py-4 text-center">${row[3]}</td>
                                <td class="border-r border-slate-200 px-3 py-4 text-center">${row[4]}</td>
                                <td class="border-r border-slate-200 px-3 py-4"></td>
                                <td class="border-r border-slate-200 px-3 py-4 text-center">0</td>
                                <td class="border-r border-slate-200 px-3 py-4"></td>
                                <td class="border-r border-slate-200 px-3 py-4 text-center">Joy</td>
                                <td class="px-3 py-2"><button class="rounded border border-slate-300 px-4 py-2">Provisional</button></td>
                            </tr>
                        `).join('')}
                    </tbody>
                </table>
                </div>
            `;
        }

        function renderCreatePersonalItinerary() {
            setDashboardHeaderMode('detail');
            setActiveDashboardSection('trip');
            toggleContactActions(false);
            homeDashboardCreateItineraryButton.classList.add('hidden');
            homeDashboardTitle.innerHTML = `
                <button type="button" class="js-personal-itinerary-back text-base text-[#078000] underline">&lsaquo; Back</button>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-[26px]">Personal itinerary</span>
                <span class="mx-4 text-slate-400">|</span>
                <span class="text-base text-[#078000]">Personal itineraries</span>
                <span class="mx-3 text-slate-400">&rsaquo;</span>
            `;
            homeDashboardTitle.closest('header').querySelector('div:last-child').innerHTML = `
                <span class="text-base text-[#625e78]">Regions: <span class="text-[#68b742]">${personalItineraryRegion}</span></span>
                <button type="button" class="rounded-md border border-[#9690ad] bg-white px-7 py-3 text-sm font-semibold text-[#57546b] shadow-sm">Save</button>
                <button type="button" class="rounded-md bg-[#9bd47f] px-7 py-3 text-sm font-semibold text-white shadow-sm">◉ Preview Classic <span class="ml-7">⌄</span></button>
            `;
            homeDashboardHero.className = 'space-y-0 bg-transparent p-0 shadow-none';
            homeDashboardHero.innerHTML = `
                <nav class="flex justify-center gap-10 border-b border-slate-300 bg-white px-8 py-6 text-base font-semibold text-[#6b6f73] shadow-sm">
                    <span class="border-b-2 border-[#68b742] pb-4 text-[#68b742]">1. Itinerary Details</span>
                    <span>2. Accommodation</span>
                    <span>3. Route Builder</span>
                    <span>4. Planner</span>
                    <span>5. Review</span>
                    <span>6. Additional Details</span>
                </nav>

                <main class="grid gap-8 bg-[#f5f5f5] p-7 xl:grid-cols-[0.9fr_1.15fr_0.65fr]">
                    <section class="rounded-md border border-slate-300 bg-white shadow-sm">
                        <header class="border-b border-slate-300 bg-[#e7e7e7] px-5 py-4 text-sm font-semibold text-[#6b6f73]">General details</header>
                        <div class="space-y-3 p-5 text-sm">
                            ${[
                                ['Itinerary name *', ''],
                                ['Client name', ''],
                                ['Reference number', ''],
                                ['Languages', 'English'],
                                ['Client email', ''],
                                ['Telephone', ''],
                            ].map((field) => `
                                <label class="grid grid-cols-[160px_1fr] items-center gap-4">
                                    <span class="font-semibold text-[#6b6f73]">${field[0]}</span>
                                    ${field[0] === 'Languages'
                                        ? '<select class="h-10 rounded border border-slate-300 px-3"><option>English</option></select>'
                                        : `<input class="h-10 rounded border border-slate-300 px-3" value="${field[1]}" />`}
                                </label>
                            `).join('')}
                            <label class="grid grid-cols-[160px_1fr] items-center gap-4">
                                <span class="font-semibold text-[#6b6f73]">Special interests</span>
                                <span class="flex h-10 overflow-hidden rounded border border-slate-300">
                                    <input class="min-w-0 flex-1 px-3" />
                                    <button type="button" class="w-12 bg-[#68b742] text-white">⛶</button>
                                </span>
                            </label>
                        </div>
                    </section>

                    <section class="min-h-[520px] rounded-md border border-slate-300 bg-white shadow-sm">
                        <nav class="flex border-b border-slate-300 bg-[#e7e7e7] text-sm text-[#57546b]">
                            <span class="border-r border-slate-300 bg-white px-6 py-4 font-semibold">Price</span>
                            <span class="border-r border-slate-300 px-6 py-4">Price includes</span>
                            <span class="border-r border-slate-300 px-6 py-4">Price excludes</span>
                            <span class="px-6 py-4">T's and C's</span>
                        </nav>
                        <div class="min-h-[430px]"></div>
                        <footer class="border-t border-slate-300 px-5 py-3 text-sm text-[#57546b]">B &nbsp; <strong>I</strong> &nbsp; <u>U</u> &nbsp; ≡ &nbsp; ••</footer>
                    </section>

                    <aside class="space-y-7">
                        <section class="rounded-md border border-slate-300 bg-white shadow-sm">
                            <header class="flex justify-between border-b border-slate-300 bg-[#e7e7e7] px-5 py-4 text-sm font-semibold text-[#6b6f73]">
                                <span>Appearance & branding</span>
                                <span class="text-[#68b742]">SETUP OPTIONS</span>
                            </header>
                            <div class="space-y-5 p-5 text-sm">
                                <label class="grid grid-cols-[120px_1fr] items-center gap-4">
                                    <span class="font-semibold">Theme</span>
                                    <select class="h-10 rounded border border-slate-300 px-3"><option>Default (Classic)</option></select>
                                </label>
                                <label class="flex items-center gap-3 font-semibold">Co-branding <input type="checkbox" /></label>
                                <label class="grid grid-cols-[120px_1fr] items-center gap-4">
                                    <span class="font-semibold">Branding</span>
                                    <select class="h-10 rounded border border-slate-300 px-3"><option>reisen</option></select>
                                </label>
                            </div>
                        </section>

                        <section class="rounded-md border border-slate-300 bg-white shadow-sm">
                            <header class="flex justify-between border-b border-slate-300 bg-[#e7e7e7] px-5 py-4 text-sm font-semibold text-[#6b6f73]">
                                <span>Contact & enquiry</span>
                                <span class="text-[#68b742]">SETUP OPTIONS</span>
                            </header>
                            <div class="space-y-5 p-5 text-sm">
                                <label class="grid grid-cols-[120px_1fr] items-center gap-4">
                                    <span class="font-semibold">Contact details</span>
                                    <select class="h-10 rounded border border-slate-300 px-3"><option>Joy</option></select>
                                </label>
                                <label class="grid grid-cols-[120px_1fr] items-center gap-4">
                                    <span class="font-semibold">Contact image</span>
                                    <select class="h-10 rounded border border-slate-300 px-3"><option>Joy</option></select>
                                </label>
                            </div>
                        </section>
                    </aside>
                </main>
            `;
        }

        function renderInitialContactIfNeeded() {
            if (!initialContactId) {
                return;
            }

            const contacts = JSON.parse(localStorage.getItem('tiwi_contacts') || '[]');
            const contact = contacts.find((item) => String(item.id) === String(initialContactId));
            if (contact) {
                showHomeDashboard();
                renderContactDetails(contact);
            }
        }

        function renderAddNoteEditor() {
            const panel = document.querySelector('.js-notes-card');

            if (!panel) {
                return;
            }

            panel.innerHTML = `
                <header class="flex items-center justify-between border-b border-slate-200 px-7 py-5">
                    <h3 class="flex items-center gap-5 text-base text-[#30384f]">
                        <span class="text-lg">&#8963;</span>
                        Notes
                    </h3>
                    <button type="button" class="js-cancel-note text-base text-[#078000] underline">
                        <span class="mr-3 text-xl text-[#57546b]">×</span>Cancel
                    </button>
                </header>
                <div class="space-y-5 px-6 py-6">
                    <label class="block">
                        <span class="text-sm font-medium text-[#30384f]">What should be noted?<span class="text-red-500">*</span></span>
                        <input id="contactNoteTitle" class="mt-2 h-12 w-full rounded-md border border-[#9690ad] px-4 text-sm italic outline-none focus:border-[#68b742]" placeholder="Small talk" />
                        <p id="contactNoteError" class="mt-1 hidden text-sm text-red-600">Please enter what should be noted.</p>
                    </label>
                    <label class="block">
                        <span class="flex justify-between text-sm font-medium text-[#30384f]">
                            <span>Description</span>
                            <span id="contactNoteDescriptionCount">0/500</span>
                        </span>
                        <textarea id="contactNoteDescription" maxlength="500" class="mt-2 h-28 w-full rounded-md border border-[#9690ad] px-4 py-3 text-sm italic outline-none focus:border-[#68b742]" placeholder="Remember to ask about their family when you talk to them over the phone."></textarea>
                    </label>
                    <div class="flex justify-end pt-5">
                        <button type="button" class="js-save-note rounded-md bg-[#d7edcd] px-9 py-4 text-base font-semibold text-white" disabled>Add</button>
                    </div>
                </div>
            `;
            document.getElementById('contactNoteTitle')?.focus();
        }

        function saveContactNote() {
            const titleInput = document.getElementById('contactNoteTitle');
            const descriptionInput = document.getElementById('contactNoteDescription');
            const title = titleInput?.value.trim() || '';
            const description = descriptionInput?.value.trim() || '';

            if (!title) {
                document.getElementById('contactNoteError')?.classList.remove('hidden');
                titleInput?.focus();
                return;
            }

            const contacts = getStoredContacts();
            const contactId = activeContactId || localStorage.getItem('tiwi_selected_contact_id');
            const contactIndex = contacts.findIndex((contact, index) => String(contact.id || index) === String(contactId));

            if (contactIndex < 0) {
                return;
            }

            contacts[contactIndex].notes = contacts[contactIndex].notes || [];
            contacts[contactIndex].notes.push({
                title,
                description,
                text: description || title,
                createdAt: new Date().toLocaleDateString([], { year: 'numeric', month: 'short', day: 'numeric' }),
            });
            localStorage.setItem('tiwi_contacts', JSON.stringify(contacts));
            renderContactDetails(contacts[contactIndex]);
        }

        function renderAddTaskEditor() {
            const panel = document.querySelector('.js-tasks-card');

            if (!panel) {
                return;
            }

            panel.innerHTML = `
                <header class="flex items-center justify-between border-b border-slate-200 px-7 py-5">
                    <h3 class="flex items-center gap-5 text-base text-[#30384f]">
                        <span class="text-lg">&#8963;</span>
                        Tasks
                    </h3>
                    <button type="button" class="js-cancel-task text-base text-[#078000] underline">
                        <span class="mr-3 text-xl text-[#57546b]">×</span>Cancel
                    </button>
                </header>
                <div class="space-y-5 px-6 py-6">
                    <label class="block">
                        <span class="text-sm font-medium text-[#30384f]">What needs to be done?<span class="text-red-500">*</span></span>
                        <input id="contactTaskTitle" class="mt-2 h-12 w-full rounded-md border border-[#9690ad] px-4 text-sm italic outline-none focus:border-[#68b742]" placeholder="Contact accommodation" />
                        <p id="contactTaskError" class="mt-1 hidden text-sm text-red-600">Please enter what needs to be done.</p>
                    </label>
                    <label class="block">
                        <span class="flex justify-between text-sm font-medium text-[#30384f]">
                            <span>Description</span>
                            <span id="contactTaskDescriptionCount">0/500</span>
                        </span>
                        <textarea id="contactTaskDescription" maxlength="500" class="mt-2 h-28 w-full rounded-md border border-[#9690ad] px-4 py-3 text-sm italic outline-none focus:border-[#68b742]" placeholder="Phone accommodations and confirm provisional bookings."></textarea>
                    </label>
                    <label class="block">
                        <span class="text-sm font-medium text-[#30384f]">Due date</span>
                        <input id="contactTaskDueDate" type="date" class="mt-2 h-12 w-full rounded-md border border-[#9690ad] px-4 text-sm italic text-[#625e78] outline-none focus:border-[#68b742]" />
                    </label>
                    <div class="flex justify-end pt-5">
                        <button type="button" class="js-save-task rounded-md bg-[#d7edcd] px-9 py-4 text-base font-semibold text-white" disabled>Add</button>
                    </div>
                </div>
            `;
            document.getElementById('contactTaskTitle')?.focus();
        }

        function saveContactTask() {
            const titleInput = document.getElementById('contactTaskTitle');
            const descriptionInput = document.getElementById('contactTaskDescription');
            const dueDateInput = document.getElementById('contactTaskDueDate');
            const title = titleInput?.value.trim() || '';

            if (!title) {
                document.getElementById('contactTaskError')?.classList.remove('hidden');
                titleInput?.focus();
                return;
            }

            const contacts = getStoredContacts();
            const contactId = activeContactId || localStorage.getItem('tiwi_selected_contact_id');
            const contactIndex = contacts.findIndex((contact, index) => String(contact.id || index) === String(contactId));

            if (contactIndex < 0) {
                return;
            }

            contacts[contactIndex].tasks = contacts[contactIndex].tasks || [];
            contacts[contactIndex].tasks.push({
                title,
                description: descriptionInput?.value.trim() || '',
                dueDate: dueDateInput?.value || '',
                createdAt: new Date().toLocaleDateString([], { year: 'numeric', month: 'short', day: 'numeric' }),
            });
            localStorage.setItem('tiwi_contacts', JSON.stringify(contacts));
            renderContactDetails(contacts[contactIndex]);
        }

        function selectDashboardSection(section) {
            setDashboardHeaderMode();
            const labels = {
                notifications: 'Notifications',
                home: 'Home',
                contacts: 'Contacts',
                trip: 'Trip solutions',
                content: 'Content solutions',
                account: 'Account setup',
            };
            const label = labels[section] || 'Home';

            homeDashboardTitle.textContent = label;
            toggleContactActions(section === 'contacts');
            setActiveDashboardSection(section);

            if (section === 'home') {
                homeDashboardHero.className = 'grid min-h-[310px] items-center bg-white px-12 py-10 shadow-sm lg:grid-cols-[1fr_360px]';
                homeDashboardHero.innerHTML = `
                    <div>
                        <h2 class="max-w-2xl text-[28px] font-normal leading-tight text-[#57546b]">
                            Efficiently build<br />
                            beautiful and professional itineraries.
                        </h2>
                        <p class="mt-5 text-lg font-semibold text-slate-300">Make buying travel a first-class experience.</p>
                        <button type="button" class="mt-10 rounded-md border border-slate-400 px-7 py-3 text-sm text-slate-500 hover:border-[#68b742] hover:text-[#68b742]">
                            Open personal itineraries
                        </button>
                    </div>
                    <div class="relative hidden h-56 lg:block">
                        <div class="absolute left-3 top-10 h-36 w-52 rounded-full bg-[#d7edcd]"></div>
                        <div class="absolute left-24 top-16 h-16 w-28 rounded-lg border-4 border-[#68b742] bg-white"></div>
                        <div class="absolute left-32 top-20 h-8 w-8 rounded-full border-2 border-[#57546b]"></div>
                        <div class="absolute left-44 top-28 h-28 w-20 rounded-t-full bg-[#57546b]"></div>
                        <div class="absolute right-6 top-20 h-8 w-8 rounded-full bg-[#d7edcd]"></div>
                        <div class="absolute right-24 top-2 h-6 w-20 rounded-t-full border-2 border-[#b8cbd0] border-b-0"></div>
                    </div>
                `;
            } else if (section === 'contacts') {
                renderContactManager();
                showContactWelcome();
            } else {
                homeDashboardHero.className = 'grid min-h-[310px] items-center bg-white px-12 py-10 shadow-sm lg:grid-cols-[1fr_360px]';
                homeDashboardHero.innerHTML = `
                    <div>
                        <h2 class="max-w-2xl text-[28px] font-normal leading-tight text-[#57546b]">${label}</h2>
                        <p class="mt-5 text-lg font-semibold text-slate-300">This workspace area is ready for your next Tiwi tools.</p>
                        <button type="button" class="mt-10 rounded-md border border-slate-400 px-7 py-3 text-sm text-slate-500 hover:border-[#68b742] hover:text-[#68b742]">
                            Open ${label}
                        </button>
                    </div>
                `;
            }

            closeHomeDrawer();
        }

        document.addEventListener('click', (event) => {
            if (event.target.closest('.js-region-filter')) {
                const regions = ['All', 'Africa', 'Europe', 'Asia', 'Americas'];
                const currentIndex = regions.indexOf(personalItineraryRegion);
                personalItineraryRegion = regions[(currentIndex + 1) % regions.length];
                renderPersonalItineraries();
            }

            if (event.target.closest('.js-toggle-itinerary-filters')) {
                personalItineraryFiltersVisible = !personalItineraryFiltersVisible;
                renderPersonalItineraries();
            }

            if (event.target.closest('.js-create-personal-itinerary')) {
                renderCreatePersonalItinerary();
            }

            if (event.target.closest('.js-personal-itinerary-back')) {
                renderPersonalItineraries();
            }

            if (event.target.closest('.js-create-contact') || event.target.closest('#homeDashboardCreateContactButton')) {
                renderNewContactForm();
            }

            if (event.target.closest('#homeDashboardImportContactsButton')) {
                renderImportContactsPanel();
            }

            if (event.target.closest('#chooseContactImportFile')) {
                document.getElementById('contactImportFile')?.click();
            }

            if (event.target.closest('.js-add-note')) {
                renderAddNoteEditor();
            }

            if (event.target.closest('.js-cancel-note')) {
                const contact = findStoredContact(activeContactId || localStorage.getItem('tiwi_selected_contact_id'));
                if (contact) {
                    renderContactDetails(contact);
                }
            }

            if (event.target.closest('.js-save-note')) {
                saveContactNote();
            }

            if (event.target.closest('.js-add-task')) {
                renderAddTaskEditor();
            }

            if (event.target.closest('.js-cancel-task')) {
                const contact = findStoredContact(activeContactId || localStorage.getItem('tiwi_selected_contact_id'));
                if (contact) {
                    renderContactDetails(contact);
                }
            }

            if (event.target.closest('.js-save-task')) {
                saveContactTask();
            }

            if (event.target.closest('.js-contact-documents-tab')) {
                const contact = findStoredContact(activeContactId || localStorage.getItem('tiwi_selected_contact_id'));
                if (contact) {
                    renderContactDocuments(contact);
                }
            }

            if (event.target.closest('.js-contact-itineraries-tab')) {
                const contact = findStoredContact(activeContactId || localStorage.getItem('tiwi_selected_contact_id'));
                if (contact) {
                    renderContactItineraries(contact);
                }
            }

            if (event.target.closest('.js-contact-details-tab')) {
                const contact = findStoredContact(activeContactId || localStorage.getItem('tiwi_selected_contact_id'));
                if (contact) {
                    renderContactDetails(contact);
                }
            }

            if (event.target.closest('.js-add-itinerary')) {
                const contacts = getStoredContacts();
                const contactId = activeContactId || localStorage.getItem('tiwi_selected_contact_id');
                const contactIndex = contacts.findIndex((contact, index) => String(contact.id || index) === String(contactId));

                if (contactIndex >= 0) {
                    contacts[contactIndex].itineraries = contacts[contactIndex].itineraries || [];
                    contacts[contactIndex].itineraries.push({
                        name: `Itinerary ${contacts[contactIndex].itineraries.length + 1}`,
                        createdAt: new Date().toLocaleDateString([], { year: 'numeric', month: 'short', day: 'numeric' }),
                    });
                    localStorage.setItem('tiwi_contacts', JSON.stringify(contacts));
                    renderContactItineraries(contacts[contactIndex]);
                }
            }

            if (event.target.closest('.js-add-document')) {
                document.getElementById('contactDocumentFile')?.click();
            }

            const clickedButton = event.target.closest('button');
            const editContactButton = event.target.closest('.js-edit-contact')
                || (clickedButton?.textContent.trim() === 'Edit details' ? clickedButton : null);
            if (editContactButton) {
                const contactId = editContactButton.dataset.contactId || activeContactId || localStorage.getItem('tiwi_selected_contact_id');
                const contact = findStoredContact(contactId);
                if (contact) {
                    renderNewContactForm(contact);
                }
            }

            const openContactButton = event.target.closest('.js-open-contact');
            if (openContactButton) {
                const contacts = getStoredContacts();
                const contact = contacts[Number(openContactButton.dataset.contactIndex)];
                if (contact) {
                    const contactId = contact.id || openContactButton.dataset.contactIndex;
                    localStorage.setItem('tiwi_selected_contact_id', String(contactId));
                    window.location.href = `${dashboardUrl}?view=contacts&contact=${encodeURIComponent(contactId)}`;
                }
            }

            if (event.target.closest('.js-add-email')) {
                const emailList = document.getElementById('newContactEmailList');
                const count = emailList.querySelectorAll('input').length + 1;
                emailList.insertAdjacentHTML('beforeend', `
                    <label class="js-extra-email block">
                        <span class="text-sm font-semibold text-[#57546b]">Email ${count}</span>
                        <input class="mt-2 h-11 w-full rounded-md border border-[#9690ad] px-4 text-sm italic outline-none focus:border-[#68b742]" placeholder="another@example.com" />
                        <button type="button" class="js-remove-email mt-3 inline-flex items-center gap-2 text-sm font-semibold text-[#078000] underline">
                            Remove email
                        </button>
                    </label>
                `);
            }

            if (event.target.closest('.js-remove-email')) {
                event.target.closest('.js-extra-email')?.remove();
            }

            if (event.target.closest('#phoneCodeButton')) {
                const menu = document.getElementById('phoneCodeMenu');
                const chevron = document.getElementById('phoneCodeChevron');
                menu.classList.toggle('hidden');
                chevron.textContent = menu.classList.contains('hidden') ? '⌄' : '⌃';
            }

            const phoneCodeOption = event.target.closest('.phone-code-option');
            if (phoneCodeOption) {
                document.getElementById('phoneCodeValue').textContent = phoneCodeOption.dataset.code;
                document.querySelectorAll('.phone-code-option').forEach((option) => {
                    const active = option === phoneCodeOption;
                    option.classList.toggle('bg-[#eef8e9]', active);
                    option.classList.toggle('text-[#078000]', active);
                    option.classList.toggle('text-[#57546b]', !active);
                    option.querySelector('.phone-code-check').classList.toggle('hidden', !active);
                });
                document.getElementById('phoneCodeMenu').classList.add('hidden');
                document.getElementById('phoneCodeChevron').textContent = '⌄';
            }

            if (event.target.closest('#contactSourceButton')) {
                const menu = document.getElementById('contactSourceMenu');
                const chevron = document.getElementById('contactSourceChevron');
                menu.classList.toggle('hidden');
                chevron.textContent = menu.classList.contains('hidden') ? '⌄' : '⌃';
            }

            if (event.target.closest('#assignedToClear')) {
                event.stopPropagation();
                document.getElementById('assignedToValue').textContent = 'None';
                document.querySelectorAll('.assigned-to-option').forEach((option) => {
                    option.classList.remove('bg-[#eef8e9]', 'text-[#078000]');
                    option.classList.add('text-[#57546b]');
                    option.querySelector('.assigned-to-check').classList.add('hidden');
                });
                document.getElementById('assignedToMenu').classList.add('hidden');
                document.getElementById('assignedToChevron').textContent = '⌄';
            } else if (event.target.closest('#assignedToButton')) {
                const menu = document.getElementById('assignedToMenu');
                const chevron = document.getElementById('assignedToChevron');
                menu.classList.toggle('hidden');
                chevron.textContent = menu.classList.contains('hidden') ? '⌄' : '⌃';
            }

            const assignedOption = event.target.closest('.assigned-to-option');
            if (assignedOption) {
                const value = assignedOption.dataset.value;
                document.getElementById('assignedToValue').textContent = value;
                document.querySelectorAll('.assigned-to-option').forEach((option) => {
                    const active = option.dataset.value === value;
                    option.classList.toggle('bg-[#eef8e9]', active);
                    option.classList.toggle('text-[#078000]', active);
                    option.classList.toggle('text-[#57546b]', !active);
                    option.querySelector('.assigned-to-check').classList.toggle('hidden', !active);
                });
                document.getElementById('assignedToMenu').classList.add('hidden');
                document.getElementById('assignedToChevron').textContent = '⌄';
            }

            const sourceOption = event.target.closest('.contact-source-option');
            if (sourceOption) {
                const value = sourceOption.dataset.value;
                document.getElementById('contactSourceValue').textContent = value;
                document.querySelectorAll('.contact-source-option').forEach((option) => {
                    const active = option.dataset.value === value;
                    option.classList.toggle('bg-[#eef8e9]', active || option.dataset.value === 'Self generated');
                    option.classList.toggle('text-[#078000]', active || option.dataset.value === 'Self generated');
                    option.classList.toggle('text-[#57546b]', !active && option.dataset.value !== 'Self generated');
                    option.querySelector('.contact-source-check').classList.toggle('hidden', !active);
                });
                document.getElementById('contactSourceMenu').classList.add('hidden');
                document.getElementById('contactSourceChevron').textContent = '⌄';
            }

            if (event.target.closest('.js-contact-back') || event.target.closest('.js-contact-cancel')) {
                if (editingContactId) {
                    const contact = findStoredContact(editingContactId);
                    editingContactId = null;
                    if (contact) {
                        history.replaceState(null, '', `${dashboardUrl}?view=contacts&contact=${encodeURIComponent(contact.id)}`);
                        renderContactDetails(contact);
                        return;
                    }
                }
                history.replaceState(null, '', `${dashboardUrl}?view=contacts`);
                selectDashboardSection('contacts');
            }

            if (event.target.closest('.js-contact-save')) {
                event.preventDefault();
                event.stopPropagation();
                saveContact();
            }
        });

        document.addEventListener('input', (event) => {
            if (event.target.id === 'contactNoteTitle') {
                const saveButton = document.querySelector('.js-save-note');
                const hasTitle = event.target.value.trim().length > 0;

                document.getElementById('contactNoteError')?.classList.add('hidden');
                saveButton?.classList.toggle('bg-[#078000]', hasTitle);
                saveButton?.classList.toggle('bg-[#d7edcd]', !hasTitle);

                if (saveButton) {
                    saveButton.disabled = !hasTitle;
                }
            }

            if (event.target.id === 'contactNoteDescription') {
                if (event.target.value.length > 500) {
                    event.target.value = event.target.value.slice(0, 500);
                }

                document.getElementById('contactNoteDescriptionCount').textContent = `${event.target.value.length}/500`;
            }

            if (event.target.id === 'contactTaskTitle') {
                const saveButton = document.querySelector('.js-save-task');
                const hasTitle = event.target.value.trim().length > 0;

                document.getElementById('contactTaskError')?.classList.add('hidden');
                saveButton?.classList.toggle('bg-[#078000]', hasTitle);
                saveButton?.classList.toggle('bg-[#d7edcd]', !hasTitle);

                if (saveButton) {
                    saveButton.disabled = !hasTitle;
                }
            }

            if (event.target.id === 'contactTaskDescription') {
                if (event.target.value.length > 500) {
                    event.target.value = event.target.value.slice(0, 500);
                }

                document.getElementById('contactTaskDescriptionCount').textContent = `${event.target.value.length}/500`;
            }

            if (event.target.id === 'newContactFirstName') {
                event.target.classList.remove('border-red-500', 'bg-red-50');
                document.getElementById('newContactFirstNameError')?.classList.add('hidden');
            }

            if (event.target.id === 'specialRequestsInput') {
                if (event.target.value.length > 500) {
                    event.target.value = event.target.value.slice(0, 500);
                    document.getElementById('specialRequestsWarning')?.classList.remove('hidden');
                } else {
                    document.getElementById('specialRequestsWarning')?.classList.add('hidden');
                }

                document.getElementById('specialRequestsCount').textContent = `${event.target.value.length}/500`;
            }
        });

        document.addEventListener('change', (event) => {
            if (event.target.id === 'contactDocumentFile') {
                const files = Array.from(event.target.files || []);

                if (!files.length) {
                    return;
                }

                const contacts = getStoredContacts();
                const contactId = activeContactId || localStorage.getItem('tiwi_selected_contact_id');
                const contactIndex = contacts.findIndex((contact, index) => String(contact.id || index) === String(contactId));

                if (contactIndex < 0) {
                    return;
                }

                contacts[contactIndex].documents = contacts[contactIndex].documents || [];
                files.forEach((file) => {
                    contacts[contactIndex].documents.push({
                        name: file.name,
                        size: `${Math.max(1, Math.round(file.size / 1024))} KB`,
                        createdAt: new Date().toLocaleDateString([], { year: 'numeric', month: 'short', day: 'numeric' }),
                    });
                });
                localStorage.setItem('tiwi_contacts', JSON.stringify(contacts));
                renderContactDocuments(contacts[contactIndex]);
                return;
            }

            if (event.target.id !== 'contactImportFile') {
                return;
            }

            const file = event.target.files?.[0];
            const status = document.getElementById('contactImportStatus');

            if (!file) {
                if (status) {
                    status.textContent = 'No file selected';
                }
                return;
            }

            const reader = new FileReader();
            reader.onload = () => {
                const importedCount = importContactsFromCsv(String(reader.result || ''));

                if (status) {
                    status.textContent = importedCount
                        ? `${importedCount} contact${importedCount === 1 ? '' : 's'} imported successfully.`
                        : 'No contacts were found in that CSV file.';
                }

                if (importedCount) {
                    setTimeout(() => selectDashboardSection('contacts'), 700);
                }
            };
            reader.readAsText(file);
        });

        document.addEventListener('keydown', (event) => {
            const input = event.target.closest('.tag-input');
            if (!input || event.key !== 'Enter') {
                return;
            }

            event.preventDefault();
            const value = input.value.trim();
            if (!value) {
                return;
            }

            const field = input.closest('.preference-tag-field');
            const wrap = field.querySelector('.tag-input-wrap');
            const warning = field.querySelector('.tag-warning');
            value.split(',').map((tag) => tag.trim()).filter(Boolean).forEach((tag) => {
                input.insertAdjacentHTML('beforebegin', `
                    <span class="preference-tag inline-flex items-center gap-2 rounded-full bg-slate-100 px-3 py-1 text-sm text-[#57546b]">
                        ${tag}
                        <button type="button" class="remove-preference-tag text-lg leading-none text-[#57546b]">×</button>
                    </span>
                `);
            });

            input.value = '';
            input.placeholder = '';
            wrap.classList.remove('border-red-500', 'bg-red-50');
            warning.classList.add('hidden');
        });

        document.addEventListener('focusout', (event) => {
            const input = event.target.closest('.tag-input');
            if (!input) {
                return;
            }

            const field = input.closest('.preference-tag-field');
            const wrap = field.querySelector('.tag-input-wrap');
            const warning = field.querySelector('.tag-warning');
            const hasUncommittedText = input.value.trim().length > 0;
            wrap.classList.toggle('border-red-500', hasUncommittedText);
            wrap.classList.toggle('bg-red-50', hasUncommittedText);
            warning.classList.toggle('hidden', !hasUncommittedText);
        });

        document.addEventListener('click', (event) => {
            const removeButton = event.target.closest('.remove-preference-tag');
            if (removeButton) {
                removeButton.closest('.preference-tag')?.remove();
            }
        });

        function selectRole(role) {
            selectedRole = role;
            localStorage.setItem('tiwi_account_type', role);
            choiceCards.forEach((card) => {
                card.setAttribute('aria-pressed', card.dataset.role === role ? 'true' : 'false');
            });
        }

        choiceCards.forEach((card) => {
            card.addEventListener('click', () => selectRole(card.dataset.role));
        });

        loginForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            loginMessage.className = 'rounded-md bg-slate-100 px-4 py-3 text-base text-[#57546b]';
            loginMessage.textContent = 'Logging you in...';

            try {
                const response = await fetch(loginEndpoint, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(Object.fromEntries(new FormData(loginForm).entries())),
                });
                const result = await response.json();

                if (!response.ok) {
                    const errors = result.errors ? Object.values(result.errors).flat().join(' ') : result.message;
                    throw new Error(errors || 'Login failed.');
                }

                localStorage.setItem('tiwi_api_token', result.data.token);
                localStorage.setItem('tiwi_user', JSON.stringify(result.data.user));
                loginMessage.className = 'rounded-md bg-[#eef8e9] px-4 py-3 text-base text-[#356f22]';
                loginMessage.textContent = 'Login successful.';
                showWorkspace();
            } catch (error) {
                loginMessage.className = 'rounded-md bg-red-50 px-4 py-3 text-base text-red-700';
                loginMessage.textContent = error.message;
            }
        });

        nextButton.addEventListener('click', () => {
            onboardingStep.classList.add('hidden');
            accountSetupStep.classList.remove('hidden');
        });

        previousButton.addEventListener('click', () => {
            accountSetupStep.classList.add('hidden');
            onboardingStep.classList.remove('hidden');
        });

        accountSetupForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            const setupData = {
                ...Object.fromEntries(new FormData(accountSetupForm).entries()),
                account_type: selectedRole,
            };
            localStorage.setItem('tiwi_account_setup', JSON.stringify(setupData));
            accountSetupMessage.className = 'rounded-md bg-slate-100 px-4 py-3 text-base text-[#57546b]';
            accountSetupMessage.textContent = 'Saving your workspace...';

            const token = localStorage.getItem('tiwi_api_token');

            if (token) {
                try {
                    const response = await fetch(agencyEndpoint, {
                        method: 'PUT',
                        headers: {
                            'Accept': 'application/json',
                            'Authorization': `Bearer ${token}`,
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(setupData),
                    });
                    const result = await response.json();

                    if (!response.ok) {
                        const errors = result.errors ? Object.values(result.errors).flat().join(' ') : result.message;
                        throw new Error(errors || 'Could not save agency setup.');
                    }

                    const user = getStoredUser();
                    user.agency = result.data.agency;
                    localStorage.setItem('tiwi_user', JSON.stringify(user));
                    accountSetupMessage.className = 'rounded-md bg-[#eef8e9] px-4 py-3 text-base text-[#356f22]';
                    accountSetupMessage.textContent = 'Workspace saved.';
                } catch (error) {
                    accountSetupMessage.className = 'rounded-md bg-amber-50 px-4 py-3 text-base text-amber-700';
                    accountSetupMessage.textContent = `${error.message} Your details are saved in this browser for now.`;
                }
            }

            hydrateWorkspace();
            accountSetupStep.classList.add('hidden');
            completeStep.classList.remove('hidden');
        });

        goDashboardButton.addEventListener('click', () => {
            showWorkspace();
        });

        editInformationButton.addEventListener('click', () => {
            completeStep.classList.add('hidden');
            accountSetupStep.classList.remove('hidden');
        });

        homeNavButton.addEventListener('click', () => {
            showHomeDashboard();
        });

        homeRail.addEventListener('mouseenter', openHomeDrawer);
        homeRail.addEventListener('mouseleave', scheduleHomeDrawerClose);
        homeSideDrawer.addEventListener('mouseenter', openHomeDrawer);
        homeSideDrawer.addEventListener('mouseleave', scheduleHomeDrawerClose);
        homeRailToggle.addEventListener('click', toggleHomeDrawer);
        homeDrawerBackdrop.addEventListener('click', closeHomeDrawer);
        homeDrawerClose.addEventListener('click', closeHomeDrawer);

        document.querySelectorAll('.rail-nav-icon').forEach((item) => {
            item.addEventListener('click', () => {
                selectDashboardSection(item.dataset.section);
            });
        });

        document.querySelectorAll('.drawer-nav-item').forEach((item) => {
            item.addEventListener('click', () => {
                if (item.dataset.section === 'trip') {
                    toggleTripSolutionsSubmenu();
                    return;
                }

                selectDashboardSection(item.dataset.section);
            });
        });

        document.querySelectorAll('.trip-submenu-item').forEach((item) => {
            item.addEventListener('click', () => {
                const label = item.dataset.tripSection;

                selectDashboardSection('trip');
                toggleTripSolutionsSubmenu(true);
                homeDashboardTitle.textContent = label;
                homeDashboardHero.className = 'grid min-h-[310px] items-center bg-white px-12 py-10 shadow-sm lg:grid-cols-[1fr_360px]';
                homeDashboardHero.innerHTML = `
                    <div>
                        <h2 class="max-w-2xl text-[28px] font-normal leading-tight text-[#57546b]">${label}</h2>
                        <p class="mt-5 text-lg font-semibold text-slate-300">This Trip solutions area is ready for your next Tiwi workflow.</p>
                        <button type="button" class="mt-10 rounded-md border border-slate-400 px-7 py-3 text-sm text-slate-500 hover:border-[#68b742] hover:text-[#68b742]">
                            Open ${label}
                        </button>
                    </div>
                `;
            });
        });

        itineraryBuilderToggle.addEventListener('click', () => {
            toggleItineraryBuilderSubmenu();
        });

        document.querySelectorAll('.itinerary-builder-subitem').forEach((item) => {
            item.addEventListener('click', () => {
                const label = item.dataset.builderSection;

                selectDashboardSection('trip');
                toggleTripSolutionsSubmenu(true);
                toggleItineraryBuilderSubmenu(true);

                if (label === 'Personal itineraries') {
                    renderPersonalItineraries();
                    return;
                }

                homeDashboardTitle.textContent = label;
                homeDashboardHero.className = 'grid min-h-[310px] items-center bg-white px-12 py-10 shadow-sm lg:grid-cols-[1fr_360px]';
                homeDashboardHero.innerHTML = `
                    <div>
                        <h2 class="max-w-2xl text-[28px] font-normal leading-tight text-[#57546b]">${label}</h2>
                        <p class="mt-5 text-lg font-semibold text-slate-300">This Itinerary builder area is ready for your Tiwi workflow.</p>
                        <button type="button" class="mt-10 rounded-md border border-slate-400 px-7 py-3 text-sm text-slate-500 hover:border-[#68b742] hover:text-[#68b742]">
                            Open ${label}
                        </button>
                    </div>
                `;
            });
        });

        createItineraryButton.addEventListener('click', () => {
            createItineraryModal.classList.remove('hidden');
        });

        homeCreateItineraryButton.addEventListener('click', () => {
            createItineraryModal.classList.remove('hidden');
        });

        homeDashboardCreateItineraryButton.addEventListener('click', () => {
            createItineraryModal.classList.remove('hidden');
        });

        contactWelcomeGotIt.addEventListener('click', closeContactWelcome);

        closeItineraryModal.addEventListener('click', () => {
            createItineraryModal.classList.add('hidden');
        });

        createItineraryModal.addEventListener('click', (event) => {
            if (event.target === createItineraryModal) {
                createItineraryModal.classList.add('hidden');
            }
        });

        document.querySelectorAll('.itinerary-option').forEach((option) => {
            option.addEventListener('click', () => {
                localStorage.setItem('tiwi_itinerary_type', option.dataset.type);
                createItineraryModal.classList.add('hidden');
                if (option.dataset.type === 'personal') {
                    personalItineraryBuilder.classList.remove('hidden');
                }
            });
        });

        closePersonalBuilder.addEventListener('click', () => {
            personalItineraryBuilder.classList.add('hidden');
        });

        function showBuilderStep(step) {
            const accommodation = step === 'accommodation';
            builderDetailsStep.classList.toggle('hidden', accommodation);
            builderAccommodationStep.classList.toggle('hidden', !accommodation);
            stepTabDetails.className = accommodation ? 'px-3 pb-4' : 'border-b-4 border-[#5bb53a] px-3 pb-4 text-[#5bb53a]';
            stepTabAccommodation.className = accommodation ? 'border-b-4 border-[#5bb53a] px-3 pb-4 text-[#5bb53a]' : 'px-3 pb-4';
            builderPreviousStep.classList.toggle('hidden', !accommodation);
            accommodationFooterActions.classList.toggle('hidden', !accommodation);
            accommodationFooterActions.classList.toggle('flex', accommodation);
        }

        builderNextStep.addEventListener('click', () => {
            showBuilderStep('accommodation');
        });

        builderPreviousStep.addEventListener('click', () => {
            showBuilderStep('details');
        });

        function formatDateLabel(value) {
            if (!value) return '';
            const [year, month, day] = value.split('-');
            return `${day}/${month}/${year}`;
        }

        function getDateRangeNights() {
            if (!accommodationStartDate.value || !accommodationEndDate.value) {
                return 1;
            }

            const start = new Date(`${accommodationStartDate.value}T00:00:00`);
            const end = new Date(`${accommodationEndDate.value}T00:00:00`);
            const nights = Math.round((end - start) / 86400000);

            return Math.max(1, nights);
        }

        function setNightCount(element, value) {
            element.textContent = Math.max(1, Number(value) || 1);
            updateTotalNights();
        }

        function updateTotalNights() {
            const accommodationCount = accommodationEntry.classList.contains('hidden')
                ? 0
                : Number(accommodationNights.textContent) || 0;
            const overnightCount = overnightTravelEntry.classList.contains('hidden')
                ? 0
                : Number(overnightNights.textContent) || 0;
            const total = accommodationCount + overnightCount;
            totalItineraryNights.textContent = `${total} ${total === 1 ? 'Night' : 'Nights'}`;
        }

        function placeItemAboveAddControls(entry) {
            itineraryAddControls.before(entry);
        }

        function updateRoomDetailsSummary() {
            const selectedRooms = Array.from(roomCounts)
                .map((count) => ({
                    label: count.closest('.flex').querySelector('span').textContent.trim(),
                    amount: Number(count.textContent) || 0,
                }))
                .filter((room) => room.amount > 0)
                .map((room) => `${room.amount} ${room.label}`);

            roomDetailsSummary.textContent = selectedRooms.length ? selectedRooms.join(', ') : 'No rooms selected';
        }

        function setRoomCount(room, value) {
            const count = document.querySelector(`.room-count[data-room="${room}"]`);
            if (!count) return;
            count.textContent = Math.max(0, Number(value) || 0);
            updateRoomDetailsSummary();
        }

        function closeRoomDetails() {
            roomDetailsModal.classList.add('hidden');
        }

        function syncAccommodationDates() {
            checkInDateLabel.textContent = formatDateLabel(accommodationStartDate.value) || 'No date';
            overnightCheckInDateLabel.textContent = formatDateLabel(accommodationEndDate.value) || 'No date';
            setNightCount(accommodationNights, getDateRangeNights());
        }

        accommodationStartDate.addEventListener('change', syncAccommodationDates);
        accommodationEndDate.addEventListener('change', syncAccommodationDates);

        clearAccommodationDates.addEventListener('click', () => {
            accommodationStartDate.value = '';
            accommodationEndDate.value = '';
            syncAccommodationDates();
        });

        addAccommodationButton.addEventListener('click', () => {
            if (!accommodationStartDate.value) {
                accommodationStartDate.value = '2026-05-05';
            }
            if (!accommodationEndDate.value) {
                accommodationEndDate.value = '2026-05-12';
            }
            syncAccommodationDates();
            placeItemAboveAddControls(accommodationEntry);
            accommodationEntry.classList.remove('hidden');
            updateTotalNights();
        });

        deleteAccommodationEntry.addEventListener('click', () => {
            accommodationEntry.classList.add('hidden');
            updateTotalNights();
        });

        decreaseNights.addEventListener('click', () => {
            const current = Number(accommodationNights.textContent);
            setNightCount(accommodationNights, current - 1);
        });

        increaseNights.addEventListener('click', () => {
            const current = Number(accommodationNights.textContent);
            setNightCount(accommodationNights, current + 1);
        });

        addOvernightTravelButton.addEventListener('click', () => {
            if (!accommodationEndDate.value) {
                accommodationEndDate.value = '2026-05-12';
            }
            syncAccommodationDates();
            placeItemAboveAddControls(overnightTravelEntry);
            overnightTravelEntry.classList.remove('hidden');
            setNightCount(overnightNights, overnightNights.textContent);
        });

        deleteOvernightTravelEntry.addEventListener('click', () => {
            overnightTravelEntry.classList.add('hidden');
            updateTotalNights();
        });

        decreaseOvernightNights.addEventListener('click', () => {
            const current = Number(overnightNights.textContent);
            setNightCount(overnightNights, current - 1);
        });

        increaseOvernightNights.addEventListener('click', () => {
            const current = Number(overnightNights.textContent);
            setNightCount(overnightNights, current + 1);
        });

        roomDetailsButton.addEventListener('click', () => {
            roomDetailsModal.classList.remove('hidden');
        });

        closeRoomDetailsModal.addEventListener('click', closeRoomDetails);
        cancelRoomDetails.addEventListener('click', closeRoomDetails);
        saveRoomDetails.addEventListener('click', closeRoomDetails);

        roomDetailsModal.addEventListener('click', (event) => {
            if (event.target === roomDetailsModal) {
                closeRoomDetails();
            }
        });

        document.querySelectorAll('.room-minus').forEach((button) => {
            button.addEventListener('click', () => {
                const count = document.querySelector(`.room-count[data-room="${button.dataset.room}"]`);
                setRoomCount(button.dataset.room, Number(count.textContent) - 1);
            });
        });

        document.querySelectorAll('.room-plus').forEach((button) => {
            button.addEventListener('click', () => {
                const count = document.querySelector(`.room-count[data-room="${button.dataset.room}"]`);
                setRoomCount(button.dataset.room, Number(count.textContent) + 1);
            });
        });

        overnightTravelEntry.after(itineraryAddControls);
        updateRoomDetailsSummary();
        updateTotalNights();
        selectRole(selectedRole);

        showWorkspace();
        if (!openSavedContactFromUrl() && initialDashboardView === 'contacts') {
            selectDashboardSection('contacts');
        }
    </script>
</body>
</html>

