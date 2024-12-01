<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WAI - Dashboard</title>

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
        <div class="space-x-4 flex items-center">
            <a href="{{ route('profile.edit') }}" class="text-white hover:text-gray-400">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-white hover:text-gray-400">Log Out</button>
            </form>
        </div>
    </header>

    <!-- Main Section -->
    <main class="py-16 px-6 bg-gray-100">
        <div class="max-w-6xl mx-auto bg-white p-10 shadow-xl rounded-lg">
            <h2 class="text-4xl font-semibold mb-8 text-center text-gray-800">Welcome to Your Dashboard</h2>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12">
                {{ __("You're logged in!") }}
            </p>

            <!-- AI Selection -->
<!-- Container untuk kartu AI dengan scroll horizontal -->
<div class="scroll-container">
    <!-- Card 1 -->
    <a href="{{ route('chatbox', ['model' => 'text-davinci']) }}" class="card-item">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="card-image">
        <h4 class="card-title">Text Davinci</h4>
        <p class="card-description">Advanced text generation model for creative tasks.</p>
    </a>

    <!-- Card 2 -->
    <a href="{{ route('chatbox', ['model' => 'gpt-4']) }}" class="card-item">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="card-image">
        <h4 class="card-title">GPT-4</h4>
        <p class="card-description">Highly accurate and intelligent conversational AI.</p>
    </a>

    <!-- Card 3 -->
    <a href="{{ route('chatbox', ['model' => 'code-davinci']) }}" class="card-item">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="card-image">
        <h4 class="card-title">Code Davinci</h4>
        <p class="card-description">Optimized for code generation and programming assistance.</p>
    </a>

    <!-- Card 4 (Optional) -->
    <a href="{{ route('chatbox', ['model' => 'new-model']) }}" class="card-item">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="card-image">
        <h4 class="card-title">New Model</h4>
        <p class="card-description">A new AI model for experimental purposes.</p>
    </a>

    <!-- Card 5 (Optional) -->
    <a href="{{ route('chatbox', ['model' => 'another-model']) }}" class="card-item">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="card-image">
        <h4 class="card-title">Another Model</h4>
        <p class="card-description">Another model to explore AI possibilities.</p>
    </a>
</div>

</section>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Top Section: Contact and Social Media Links -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-10 ml-10">
                <div class="ml-4">
                    <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                    <ul>
                        <li><a href="mailto:contact@wai.com" class="hover:text-[#0000FF]">Email: contact@wai.com</a></li>
                        <li><a href="tel:+1234567890" class="hover:text-[#0000FF]">Phone: +1 (234) 567-890</a></li>
                    </ul>
                </div>

                <div class="ml-4">
                    <h4 class="font-bold text-lg mb-4">Follow Us</h4>
                    <ul>
                        <li><a href="https://www.instagram.com" class="hover:text-[#0000FF]" target="_blank">Instagram</a></li>
                        <li><a href="https://www.twitter.com" class="hover:text-[#0000FF]" target="_blank">Twitter</a></li>
                        <li><a href="https://www.facebook.com" class="hover:text-[#0000FF]" target="_blank">Facebook</a></li>
                        <li><a href="https://www.linkedin.com" class="hover:text-[#0000FF]" target="_blank">LinkedIn</a></li>
                    </ul>
                </div>

                <div class="ml-4">
                    <h4 class="font-bold text-lg mb-4">Resources</h4>
                    <ul>
                        <li><a href="#" class="hover:text-[#0000FF]">Documentation</a></li>
                        <li><a href="#" class="hover:text-[#0000FF]">Blog</a></li>
                        <li><a href="#" class="hover:text-[#0000FF]">API Reference</a></li>
                    </ul>
                </div>

                <div class="ml-4">
                    <h4 class="font-bold text-lg mb-4">References</h4>
                    <ul>
                        <li><a href="#" class="hover:text-[#0000FF]">Tutorials</a></li>
                        <li><a href="#" class="hover:text-[#0000FF]">Case Studies</a></li>
                        <li><a href="#" class="hover:text-[#0000FF]">Whitepapers</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center">
                <p class="text-sm mb-2">© 2024 WAI - All Rights Reserved</p>
                <p class="text-sm">For inquiries, contact us at <a href="mailto:contact@wai.com" class="underline hover:text-[#0000FF]">contact@wai.com</a></p>
            </div>
        </div>
    </footer>

</body>
</html>
