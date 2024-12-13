<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAI - With AI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/LOGO_DOANG.png') }}" type="image/png">

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

    <!-- Main Section -->
    <main class="py-16 px-6 bg-gray-100">
        <div class="max-w-9xl mx-auto">
            <div class="flex items-center justify-center space-x-12">
                <!-- Logo Section -->
          

                <!-- Password Reset Form -->
                <div class="w-full max-w-3xl bg-white p-10 shadow-xl rounded-2xl">
                    <h2 class="text-2xl font-semibold mb-8 text-center text-gray-800">Reset Your Password</h2>

                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                          type="password"
                                          name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </div>
                    </form>
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
</body>
</html>
