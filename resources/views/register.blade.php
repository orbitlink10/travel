@php
    $client = request('client') === 'supplier' ? 'supplier' : 'operator';
    $clientLabel = $client === 'supplier'
        ? 'DMO / Accommodation / Restaurants / Activities'
        : 'Tour Operators / DMCs / Travel Agents';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Try Wetu for free</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            color: #57546b;
            font-family: "Trebuchet MS", "Segoe UI", Arial, sans-serif;
            letter-spacing: 0;
        }
    </style>
</head>
<body class="min-h-screen bg-white">
    <main class="mx-auto max-w-[770px] px-6 pb-10">
        <header class="border-t border-slate-200 pt-2 text-center">
            <a href="{{ route('home') }}" class="inline-block text-[76px] font-black leading-[0.8] text-[#555260] md:text-[84px]">
                wetu
            </a>
            <p class="mt-1 text-base font-bold text-[#555260]">Connect - Collaborate - Thrive</p>
        </header>

        <section class="pt-20">
            <p class="mb-4 text-sm font-semibold text-[#68b742]">{{ $clientLabel }}</p>
            <h1 class="mb-4 text-[38px] font-normal leading-tight text-[#57546b]">Try Wetu for free!</h1>
            <p class="max-w-[680px] text-[23px] leading-snug text-[#6a667f]">
                Start your <strong class="font-bold">14-day trial</strong> by providing your email and creating a secure password.
            </p>
        </section>

        <form id="registerForm" class="mt-20 space-y-6">
            <input type="hidden" name="role" value="agency_owner" />
            <input type="hidden" name="client_type" value="{{ $client }}" />

            <div>
                <label for="firstName" class="mb-2 block text-xl font-bold text-[#555260]">First name <span class="text-red-500">*</span></label>
                <input id="firstName" name="first_name" type="text" required class="h-[58px] w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
            </div>

            <div>
                <label for="lastName" class="mb-2 block text-xl font-bold text-[#555260]">Last name <span class="text-red-500">*</span></label>
                <input id="lastName" name="last_name" type="text" required class="h-[58px] w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
            </div>

            <div>
                <label for="agencyName" class="mb-2 block text-xl font-bold text-[#555260]">Company name <span class="text-red-500">*</span></label>
                <input id="agencyName" name="agency_name" type="text" required class="h-[58px] w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
            </div>

            <div>
                <label for="email" class="mb-2 block text-xl font-bold text-[#555260]">Email <span class="text-red-500">*</span></label>
                <p class="mb-3 text-xl text-[#6a667f]">This will be your Username</p>
                <input id="email" name="email" type="email" required class="h-[58px] w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
            </div>

            <div>
                <label for="password" class="mb-2 block text-xl font-bold text-[#555260]">Password <span class="text-red-500">*</span></label>
                <input id="password" name="password" type="password" minlength="8" required class="h-[58px] w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
                <p id="passwordStrength" class="mt-2 text-right text-sm text-[#77738b]">Very weak</p>
            </div>

            <div>
                <label for="passwordConfirmation" class="mb-2 block text-xl font-bold text-[#555260]">Confirm password <span class="text-red-500">*</span></label>
                <input id="passwordConfirmation" name="password_confirmation" type="password" minlength="8" required class="h-[58px] w-full rounded-md border border-[#d2d0dc] px-4 text-xl outline-none transition focus:border-[#6bb645] focus:ring-2 focus:ring-[#6bb645]/20" />
            </div>

            <label class="flex items-center gap-3 text-[23px] leading-snug text-[#6a667f]">
                <input id="terms" type="checkbox" required class="h-7 w-7 rounded border-[#d2d0dc] text-[#6bb645] focus:ring-[#6bb645]" />
                <span>I accept the <a href="#" class="text-[#4fa52f]">Terms of Use</a> and <a href="#" class="text-[#4fa52f]">Privacy Policy</a> <span class="text-red-500">*</span></span>
            </label>

            <label class="block w-[236px] cursor-pointer rounded-sm border border-[#d9d9d9] bg-[#fafafa] p-5 shadow-sm">
                <span class="flex items-center gap-5">
                    <input id="captcha" type="checkbox" required class="h-10 w-10 border-2 border-[#555] text-[#6bb645] focus:ring-[#6bb645]" />
                    <span class="text-xl text-[#222]">I'm not a robot</span>
                </span>
                <span class="mt-11 flex items-end justify-end gap-2 text-sm text-[#555]">
                    <span class="inline-block h-8 w-8 rounded bg-[#4d8df7]"></span>
                    reCAPTCHA
                </span>
            </label>

            <p class="text-[23px] leading-snug text-[#6a667f]">
                Wetu uses your contact details to share relevant updates. You can unsubscribe at any time.
            </p>

            <button type="submit" class="h-[57px] w-full rounded-md bg-[#68b742] text-2xl font-bold text-white transition hover:bg-[#5ba337]">
                Register
            </button>

            <p class="text-[23px] text-[#6a667f]">
                Already have an account?
                <a href="{{ route('dashboard') }}" class="text-[#4fa52f]">Log in</a>
            </p>

            <div id="formMessage" class="hidden rounded-md px-4 py-3 text-base"></div>
        </form>
    </main>

    <script>
        const form = document.getElementById('registerForm');
        const message = document.getElementById('formMessage');
        const password = document.getElementById('password');
        const passwordStrength = document.getElementById('passwordStrength');

        password.addEventListener('input', () => {
            let score = 0;
            if (password.value.length >= 8) score++;
            if (/[A-Z]/.test(password.value)) score++;
            if (/[0-9]/.test(password.value)) score++;
            if (/[^A-Za-z0-9]/.test(password.value)) score++;

            const labels = ['Very weak', 'Weak', 'Fair', 'Good', 'Strong'];
            passwordStrength.textContent = labels[score];
            passwordStrength.className = score >= 3 ? 'mt-2 text-right text-sm text-[#4fa52f]' : 'mt-2 text-right text-sm text-[#77738b]';
        });

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            message.className = 'rounded-md bg-slate-100 px-4 py-3 text-base text-[#57546b]';
            message.textContent = 'Creating your account...';

            const formData = new FormData(form);
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
                const response = await fetch('api/register', {
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

                message.className = 'rounded-md bg-[#eef8e9] px-4 py-3 text-base text-[#356f22]';
                localStorage.setItem('tiwi_api_token', result.data.token);
                localStorage.setItem('tiwi_user', JSON.stringify(result.data.user));
                message.textContent = 'Account created. Taking you to your dashboard...';
                form.reset();
                passwordStrength.textContent = 'Very weak';
                window.location.href = @json(route('dashboard'));
            } catch (error) {
                message.className = 'rounded-md bg-red-50 px-4 py-3 text-base text-red-700';
                message.textContent = error.message;
            }
        });
    </script>
</body>
</html>
