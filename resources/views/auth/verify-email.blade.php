<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAI - With AI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/scroll.js') }}"></script>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- Header -->
<header class="relative flex flex-wrap items-center justify-between p-4 bg-white text-gray-700">
    <!-- Logo & Name -->
    <div class="flex items-center space-x-3">
        <img src="{{ asset('img/WAI.png') }}" alt="Logo" class="h-10 w-auto">
    </div>

    <!-- Log In / Register (hidden on small screens) -->
    <div class="hidden md:flex space-x-4">
        <a href="{{ route('login') }}" class="text-gray-700 hover:text-purple-500">Log In</a>
        <a href="{{ route('register') }}" class="text-gray-700 hover:text-purple-500">Register</a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-gray-300 flex-col space-y-2 py-4 px-4 shadow-lg">
        <a href="{{ route('login') }}" class="block text-gray-700 hover:text-purple-500">Log In</a>
        <a href="{{ route('register') }}" class="block text-gray-700 hover:text-purple-500">Register</a>
    </div>
</header>

    <!-- Main Section -->
    <main class="py-16 px-6 bg-gray-100">
        <div class="max-w-9xl mx-auto">
            <div class="flex items-center justify-center space-x-12">

        

                <!-- Email Verification Info -->
                <div class="w-full max-w-3xl bg-white p-10 shadow-xl rounded-2xl">
                    <h2 class="text-2xl font-semibold mb-8 text-center text-gray-800">Verify Your Email</h2>

                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <div class="mt-4 flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div>
                                <x-primary-button>
                                    {{ __('Resend Verification Email') }}
                                </x-primary-button>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Top Section: Contact and Social Media Links -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-10 ml-10">
                <!-- Contact Info -->
                <div class="ml-4">
                    <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                    <ul>
                        <li><a href="mailto:contact@wai.com" class="hover:text-[#0000FF]">Email: contact@wai.com</a></li>
                        <li><a href="tel:+1234567890" class="hover:text-[#0000FF]">Phone: +1 (234) 567-890</a></li>
                    </ul>
                </div>

                <!-- Social Media Links -->
                <div class="ml-4">
                    <h4 class="font-bold text-lg mb-4">Follow Us</h4>
                    <ul>
                        <li><a href="https://www.instagram.com" class="hover:text-[#0000FF]" target="_blank">Instagram</a></li>
                        <li><a href="https://www.twitter.com" class="hover:text-[#0000FF]" target="_blank">Twitter</a></li>
                        <li><a href="https://www.facebook.com" class="hover:text-[#0000FF]" target="_blank">Facebook</a></li>
                        <li><a href="https://www.linkedin.com" class="hover:text-[#0000FF]" target="_blank">LinkedIn</a></li>
                    </ul>
                </div>

                <!-- Resources Section -->
                <div class="ml-4">
                    <h4 class="font-bold text-lg mb-4">Resources</h4>
                    <ul>
                        <li><a href="#" class="hover:text-[#0000FF]">Documentation</a></li>
                        <li><a href="#" class="hover:text-[#0000FF]">Blog</a></li>
                        <li><a href="#" class="hover:text-[#0000FF]">API Reference</a></li>
                    </ul>
                </div>

                <!-- References Section -->
                <div class="ml-4">
                    <h4 class="font-bold text-lg mb-4">References</h4>
                    <ul>
                        <li><a href="#" class="hover:text-[#0000FF]">Tutorials</a></li>
                        <li><a href="#" class="hover:text-[#0000FF]">Case Studies</a></li>
                        <li><a href="#" class="hover:text-[#0000FF]">Whitepapers</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Section: Copyright -->
            <div class="text-center">
                <p class="text-sm mb-2">© 2024 WAI - All Rights Reserved</p>
                <p class="text-sm">For inquiries, contact us at <a href="mailto:contact@wai.com" class="underline hover:text-[#0000FF]">contact@wai.com</a></p>
            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
