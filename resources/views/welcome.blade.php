<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WAI - WIth AI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <link rel="stylesheet" href="/pat_chatbot/resources/css/style.css"> 
    <!-- Tailwind CSS (optional, if not using Vite for CSS) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- Header -->
    <header class="flex justify-between items-center p-4 bg-gray-800 text-white">
        <!-- Logo & Name -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-20 w-30">
            <span class="font-semibold text-xl">WIth AI</span>
        </div>
        <!-- Navigation (Login/Register) -->
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="text-white hover:text-gray-400">Log In</a>
            <a href="{{ route('register') }}" class="text-white hover:text-gray-400">Register</a>
        </div>
    </header>

    <!-- Main Section -->
    <main class="py-16 px-6 bg-gray-100">
    <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-10">
        <!-- Logo di kiri dengan flex-shrink-0 agar tidak mengecil -->
        <div class="flex items-center space-x-4 flex-shrink-0">
            <img src="{{ asset('img/logo.png') }}" alt="Main Logo" class="w-50 h-65 object-contain">
        </div>
        <!-- Teks "With AI" dan Deskripsi dalam dua bagian terpisah -->
        <div>
            <h1 class="text-8xl font-bold text-black">With AI</h1>
            <p class="text-lg text-gray-700 mt-4">Nikmati pengalaman unik dengan WAI, aplikasi yang menyajikan chatbot bergaya anime, siap memberikan bantuan dan solusi efisien dalam setiap langkah Anda</p>
        </div>
    </div>
</div>

        <!-- Foto di bawah -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <div>
                <img src="https://via.placeholder.com/250" alt="Foto 1" class="w-full h-64 object-cover rounded-lg shadow-lg">
            </div>
            <div>
                <img src="https://via.placeholder.com/250" alt="Foto 2" class="w-full h-64 object-cover rounded-lg shadow-lg">
            </div>
            <div>
                <img src="https://via.placeholder.com/250" alt="Foto 3" class="w-full h-64 object-cover rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</main>



<section class="bg-gray-800 text-white py-16 px-6">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Meet Our AI Personalities</h2>
        <div class="flex space-x-8 overflow-x-auto pb-8 scroll-smooth hide-scrollbar">
            <!-- Sifa AI - The Empath -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg">
                <img src="path/to/sifa_image.jpg" alt="Sifa AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Sifa AI - The Empath</h3>
                <p>Sifa AI is an understanding companion, always ready to listen and offer comforting advice tailored to your emotional needs. Whether you're feeling stressed or joyful, Sifa adjusts to your mood.</p>
            </div>

            <!-- Darwin AI - The Thinker -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg">
                <img src="path/to/darwin_image.jpg" alt="Darwin AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Darwin AI - The Thinker</h3>
                <p>Darwin AI is analytical and logical, always seeking to solve problems with precision. He offers data-driven advice and explores different solutions to help you achieve your goals.</p>
            </div>

            <!-- A0pa AI - The Humorist -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg">
                <img src="path/to/a0pa_image.jpg" alt="A0pa AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">A0pa AI - The Humorist</h3>
                <p>A0pa AI brings humor and lightheartedness to every conversation. Whether you're feeling down or just need a laugh, A0pa's jokes and fun personality will brighten your day.</p>
            </div>

            <!-- Zara AI - The Mentor -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg">
                <img src="path/to/zara_image.jpg" alt="Zara AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Zara AI - The Mentor</h3>
                <p>Zara AI is a patient and wise guide, always ready to help you navigate challenges. She listens carefully and offers calm, constructive advice to ensure your success.</p>
            </div>
        </div>
    </div>
</section>



<!-- FAQ Section -->
<section class="py-16 px-6 bg-gray-100">
    <div class="max-w-3xl mx-auto text-left">
        <h2 class="text-4xl font-bold mb-8 text-black">Frequently Asked Questions</h2>
        <div class="space-y-6 text-black text-xl">
            <!-- First FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-2xl cursor-pointer hover:text-[#003366] transition duration-200 w-full px-6 py-3">
                    What is WAI?
                </summary>
                <p class="mt-2 text-lg">WAI is an innovative platform designed to offer efficient solutions for your everyday tasks. It leverages cutting-edge technology to help you achieve your goals quickly and effectively.</p>
            </details>
            
            <!-- Second FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-2xl cursor-pointer hover:text-[#003366] transition duration-200 w-full px-6 py-3">
                    How can I register?
                </summary>
                <p class="mt-2 text-lg">You can register by clicking the "Register" button in the header or visiting the registration page. It takes just a few minutes to sign up and get started with all the features.</p>
            </details>

            <!-- Third FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-2xl cursor-pointer hover:text-[#003366] transition duration-200 w-full px-6 py-3">
                    What services do you offer?
                </summary>
                <p class="mt-2 text-lg">We offer various tools and services to streamline your workflow, including task management, data analysis, and automation solutions, all designed to enhance productivity.</p>
            </details>

            <!-- Fourth FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-2xl cursor-pointer hover:text-[#003366] transition duration-200 w-full px-6 py-3">
                    Is WAI available on mobile devices?
                </summary>
                <p class="mt-2 text-lg">Yes, WAI is fully optimized for mobile devices, allowing you to use all its features on the go. Simply visit our website or download the app from your device's store.</p>
            </details>

            <!-- Fifth FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-2xl cursor-pointer hover:text-[#003366] transition duration-200 w-full px-6 py-3">
                    How do I contact customer support?
                </summary>
                <p class="mt-2 text-lg">You can contact our support team through the "Contact Us" page, or email us directly at <a href="mailto:support@wai.com" class="underline text-[#003366]">support@wai.com</a>. Our team will respond to your inquiries as soon as possible.</p>
            </details>

            <!-- Sixth FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-2xl cursor-pointer hover:text-[#003366] transition duration-200 w-full px-6 py-3">
                    Is there a free trial available?
                </summary>
                <p class="mt-2 text-lg">Yes, WAI offers a 14-day free trial so you can explore all the features before committing. You can start your trial by signing up on our website.</p>
            </details>

            <!-- Seventh FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-2xl cursor-pointer hover:text-[#003366] transition duration-200 w-full px-6 py-3">
                    Can I cancel my subscription anytime?
                </summary>
                <p class="mt-2 text-lg">Yes, you can cancel your subscription at any time by going to your account settings. There are no long-term commitments, and you can cancel without any penalties.</p>
            </details>
        </div>
    </div>
</section>




    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Top Section: Contact and Social Media Links -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">
            <!-- Contact Info -->
            <div>
                <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                <ul>
                    <li><a href="mailto:contact@wai.com" class="hover:text-[#FF2D20]">Email: contact@wai.com</a></li>
                    <li><a href="tel:+1234567890" class="hover:text-[#FF2D20]">Phone: +1 (234) 567-890</a></li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div>
                <h4 class="font-bold text-lg mb-4">Follow Us</h4>
                <ul>
                    <li><a href="https://www.instagram.com" class="hover:text-[#FF2D20]" target="_blank">Instagram</a></li>
                    <li><a href="https://www.twitter.com" class="hover:text-[#FF2D20]" target="_blank">Twitter</a></li>
                    <li><a href="https://www.facebook.com" class="hover:text-[#FF2D20]" target="_blank">Facebook</a></li>
                    <li><a href="https://www.linkedin.com" class="hover:text-[#FF2D20]" target="_blank">LinkedIn</a></li>
                </ul>
            </div>

            <!-- Resources Section -->
            <div>
                <h4 class="font-bold text-lg mb-4">Resources</h4>
                <ul>
                    <li><a href="#" class="hover:text-[#FF2D20]">Documentation</a></li>
                    <li><a href="#" class="hover:text-[#FF2D20]">Blog</a></li>
                    <li><a href="#" class="hover:text-[#FF2D20]">API Reference</a></li>
                </ul>
            </div>

            <!-- References Section -->
            <div>
                <h4 class="font-bold text-lg mb-4">References</h4>
                <ul>
                    <li><a href="#" class="hover:text-[#FF2D20]">Tutorials</a></li>
                    <li><a href="#" class="hover:text-[#FF2D20]">Case Studies</a></li>
                    <li><a href="#" class="hover:text-[#FF2D20]">Whitepapers</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section: Copyright -->
        <div class="text-center">
            <p class="text-sm mb-2">© 2024 WAI - All Rights Reserved</p>
            <p class="text-sm">For inquiries, contact us at <a href="mailto:contact@wai.com" class="underline hover:text-[#FF2D20]">contact@wai.com</a></p>
        </div>
    </div>
</footer>

</body>
</html>
