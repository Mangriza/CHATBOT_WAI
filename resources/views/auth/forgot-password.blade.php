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
    <header class="flex justify-between items-center p-4 bg-gray-800 text-white">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-10 w-15">
            <span class="font-semibold text-2xl">With AI</span>
        </div>
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="text-white hover:text-gray-400">Log In</a>
            <a href="{{ route('register') }}" class="text-white hover:text-gray-400">Register</a>
        </div>
    </header>

    <!-- Main Section for Forgot Password -->
    <main class="py-16 px-6 bg-gray-100">
        <div class="max-w-9xl mx-auto">
            <div class="flex items-center justify-center space-x-12">
                <!-- Logo Section -->
                <img src="{{ asset('img/logo.png') }}" alt="Main Logo" class="w-45 h-45 object-contain">

                <!-- Forgot Password Form -->
                <div class="w-full max-w-3xl bg-white p-10 shadow-xl rounded-2xl">
                    <h2 class="text-2xl font-semibold mb-8 text-center text-gray-800">Forgot Your Password?</h2>

                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-6">
                            <label for="email" class="block text-base font-medium text-gray-700">Email</label>
                            <input id="email" type="email" name="email" :value="old('email')" class="w-full mt-3 px-5 py-3 border border-gray-300 rounded-lg focus:ring-4 focus:ring-indigo-500 focus:outline-none bg-gray-50 text-gray-800" required autofocus />
                            @error('email')
                                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="px-6 py-3 bg-gray-600 text-white rounded-lg text-base font-medium hover:bg-gray-700 transition-all duration-200 ease-in-out focus:outline-none">
                                {{ __('Email Password Reset Link') }}
                            </button>
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
