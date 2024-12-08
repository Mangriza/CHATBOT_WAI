<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WAI - Edit Profile</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/LOGO_DOANG.png') }}" type="image/png">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Tailwind CSS (optional, if not using Vite for CSS) -->
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
        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-purple-500">Dashboard</a>
<form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-gray-700 hover:text-purple-500">Log Out</button>
            </form>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-gray-300 flex-col space-y-2 py-4 px-4 shadow-lg">
        <a href="{{ route('dashboard') }}" class="block text-gray-700 hover:text-purple-500">Dashboard</a>
<form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-gray-700 hover:text-purple-500">Log Out</button>
            </form>
    </div>
</header>

    <main class="py-16 px-6 bg-gray-100">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between mb-10">

            <!-- Profile Edit Form Content -->
            <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 p-8 shadow-xl rounded-lg">
    <h2 class="text-3xl font-semibold mb-4 text-center text-gray-800 dark:text-gray-200">
        {{ __("Edit Your Profile") }}
    </h2>
    <p class="text-center text-gray-600 dark:text-gray-400 mb-6">
        {{ __("Keep your profile up-to-date for a better experience.") }}
    </p>

    <!-- Profile Information Form -->
    <div class="mt-6 bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-3">
            {{-- {{ __("Profile Information") }} --}}
        </h3>
        @include('profile.partials.update-profile-information-form')
    </div>

    <!-- Password Update Form -->
    <div class="mt-6 bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-3">
            {{-- {{ __("Update Password") }} --}}
        </h3>
        @include('profile.partials.update-password-form')
    </div>

    <!-- Delete User Form -->
    <div class="mt-6 bg-red-100 dark:bg-red-700 p-6 rounded-lg shadow-sm">
        <h3 class="text-lg font-medium text-red-700 dark:text-red-300 mb-3">
            {{-- {{ __("Delete Account") }} --}}
        </h3>
        <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
            {{-- {{ __("Once you delete your account, there is no going back. Please be certain.") }} --}}
        </p>
        @include('profile.partials.delete-user-form')
    </div>
</div>

        </div>
    </div>
</main>


    <!-- Footer -->
<footer class="bg-gray-800 text-white py-10 px-6" data-aos="fade-in-up" id="contact">
    <div class="max-w-7xl mx-auto">
        <!-- Top Section: Contact and Social Media Links -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
            <!-- Contact Info -->
            <div>
                <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="mailto:contact@wai.com" class="hover:text-[#0000FF] block">Email: ijotomat@wai.com</a>
                    </li>
                    <li>
                        <a href="tel:+1234567890" class="hover:text-[#0000FF] block">Phone: +1 (234) 567-890</a>
                    </li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div>
                <h4 class="font-bold text-lg mb-4">Follow Us</h4>
                <ul class="space-y-2">
                    <li><a href="https://www.instagram.com" class="hover:text-[#0000FF]" target="_blank">Instagram</a></li>
                    <li><a href="https://www.twitter.com" class="hover:text-[#0000FF]" target="_blank">Twitter</a></li>
                    <li><a href="https://www.facebook.com" class="hover:text-[#0000FF]" target="_blank">Facebook</a></li>
                    <li><a href="https://www.linkedin.com" class="hover:text-[#0000FF]" target="_blank">LinkedIn</a></li>
                </ul>
            </div>

            <!-- Resources Section -->
            <div>
                <h4 class="font-bold text-lg mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#0000FF]">Documentation</a></li>
                    <li><a href="#" class="hover:text-[#0000FF]">Blog</a></li>
                    <li><a href="#" class="hover:text-[#0000FF]">API Reference</a></li>
                </ul>
            </div>

            <!-- References Section -->
            <div>
                <h4 class="font-bold text-lg mb-4">References</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-[#0000FF]">Tutorials</a></li>
                    <li><a href="#" class="hover:text-[#0000FF]">Case Studies</a></li>
                    <li><a href="#" class="hover:text-[#0000FF]">Whitepapers</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section: Copyright -->
        <div class="text-center">
            <p class="text-sm mb-2">© 2024 WAI by IjoTomat - All Rights Reserved</p>
            <p class="text-sm">
                <a href="mailto:ijotomat@wai.com" class="underline hover:text-[#0000FF]">ijotomat@wai.com</a>
            </p>
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
