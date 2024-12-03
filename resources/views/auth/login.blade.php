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
<div class="max-w-2xl mx-auto bg-white p-10 shadow-2xl rounded-lg flex flex-col items-center">
    <img src="{{ asset('img/wai.png') }}" alt="Main Logo" class="w-48 h-40 object-contain mb-8">
    <h2 class="text-4xl font-semibold mb-8 text-center text-gray-800">Log In to Your Account</h2>
    <form method="POST" action="{{ route('login') }}" class="w-full">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <label for="email" class="block text-sm font-semibold text-gray-500">Email</label>
            <input id="email" type="email" name="email" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none bg-gray-100 text-black" required autofocus autocomplete="username">
            @error('email')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
<div class="mb-6 relative">
    <label for="password" class="block text-sm font-semibold text-gray-500 mb-2">Password</label>
    <div class="relative flex items-center">
        <!-- Input Password -->
        <input id="password" type="password" name="password" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none bg-gray-100 text-black" 
               required autocomplete="current-password">
        <!-- Icon Mata -->
        <span id="toggle-password" class="absolute right-3 flex items-center cursor-pointer text-gray-500">
            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 4.5C7.305 4.5 3.403 7.274 2 12c1.403 4.726 5.305 7.5 10 7.5s8.597-2.774 10-7.5C20.597 7.274 16.695 4.5 12 4.5zM12 16.5c-2.485 0-4.5-2.015-4.5-4.5s2.015-4.5 4.5-4.5 4.5 2.015 4.5 4.5-2.015 4.5-4.5 4.5zM12 9a3 3 0 100 6 3 3 0 000-6z" />
            </svg>
        </span>
    </div>
    @error('password')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>


        <!-- Remember Me -->
        <div class="block mt-4 mb-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="text-indigo-600">
                <span class="ml-2 text-sm text-gray-400">Remember me</span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-between mt-6">
                <button type="submit" class="px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-purple-500 transition-all duration-200 ease-in-out focus:outline-none">
                Log In
            </button>

            <a href="{{ route('password.request') }}" class="text-sm text-indigo-400 hover:text-indigo-300">Forgot your password?</a>
        </div>
    </form>
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

    <!-- Mobile Menu Script -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("toggle-password");
    const eyeIcon = document.getElementById("eye-icon");

    togglePassword.addEventListener("click", function () {
        const isPassword = passwordInput.getAttribute("type") === "password";
        passwordInput.setAttribute("type", isPassword ? "text" : "password");

        // Update icon
        eyeIcon.setAttribute(
            "d",
            isPassword
                ? "M10 3c-3.866 0-7.092 2.66-8.294 6.4a1 1 0 000 .6C2.908 14.34 6.134 17 10 17s7.092-2.66 8.294-6.4a1 1 0 000-.6C17.092 5.66 13.866 3 10 3zM10 5c2.893 0 5.364 1.916 6.486 4.6C15.364 13.084 12.893 15 10 15s-5.364-1.916-6.486-4.6C4.636 6.916 7.107 5 10 5z"
                : "M10 7a3 3 0 100 6 3 3 0 000-6z"
        );
    });
});

    </script>

</body>
</html>
