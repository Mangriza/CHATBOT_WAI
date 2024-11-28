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
    <header class="flex justify-between items-center p-4 bg-white text-white">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/wai.png') }}" alt="Logo" class="h-10 w-15">
        </div>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="text-black hover:text-gray-400">Log In</a>
            <a href="{{ route('register') }}" class="text-black hover:text-gray-400">Register</a>
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
    <div class="mb-6">
        <label for="password" class="block text-sm font-semibold text-gray-500">Password</label>
        <input id="password" type="password" name="password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none bg-gray-100 text-black" required autocomplete="current-password">
        @error('password')
            <p class="text-sm text-red-500">{{ $message }}</p>
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


</body>
</html>
