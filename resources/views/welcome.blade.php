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

    <!-- Custom JS (Pastikan path sesuai dengan lokasi file js di public/js) -->
    <script src="{{ asset('js/scroll.js') }}"></script> <!-- Tambahkan path file JS di sini -->
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- Header -->
    <header class="relative flex flex-wrap items-center justify-between p-4 bg-white text-gray-700">
    <!-- Logo & Name -->
    <div class="flex items-center space-x-3">
        <img src="{{ asset('img/WAI.png') }}" alt="Logo" class="h-10 w-auto">
    </div>

    <!-- Navigation Menu (hidden on small screens) -->
    <nav class="hidden md:flex space-x-4 items-center">
        <a href="#contact" class="text-gray-700 hover:text-purple-500">Contact</a>
        <a href="#ai" class="text-gray-700 hover:text-purple-500">AI</a>
        <a href="#faq" class="text-gray-700 hover:text-purple-500">FAQ</a>
        <a href="#ulasan" class="text-gray-700 hover:text-purple-500">Ulasan</a>
        <a href="#video" class="text-gray-700 hover:text-purple-500">Video</a>
    </nav>

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
        <a href="#contact" class="block text-gray-700 hover:text-purple-500">Contact</a>
        <a href="#ai" class="block text-gray-700 hover:text-purple-500">AI</a>
        <a href="#faq" class="block text-gray-700 hover:text-purple-500">FAQ</a>
        <a href="#ulasan" class="block text-gray-700 hover:text-purple-500">Ulasan</a>
        <a href="#video" class="block text-gray-700 hover:text-purple-500">Video</a>
        <a href="{{ route('login') }}" class="block text-gray-700 hover:text-purple-500">Log In</a>
        <a href="{{ route('register') }}" class="block text-gray-700 hover:text-purple-500">Register</a>
    </div>
</header>

    <!-- Main Section -->
    <main class="py-16 px-6 bg-gray-100">
    <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-10">
        <!-- Logo di kiri dengan flex-shrink-0 agar tidak mengecil -->
        <div class="flex items-center space-x-4 flex-shrink-0">
            <img src="{{ asset('img/wai.png') }}" alt="Main Logo" class="w-80 h-48 object-contain" data-aos="fade-up">
        </div>
        <!-- Teks "With AI" dan Deskripsi dalam dua bagian terpisah -->
        <div class="pl-4">
            <p class="text-lg text-gray-700 mt-4" data-aos="fade-right">
                Nikmati pengalaman unik dengan WAI, aplikasi yang menyajikan chatbot bergaya anime, siap memberikan bantuan dan solusi efisien dalam setiap langkah Anda
            </p>
        </div>
    </div>
</div>


      <!-- Foto di bawah -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-8" data-aos="fade-up">
    <div class="text-center">
        <img src="https://via.placeholder.com/250" alt="Foto 1" class="w-full h-64 object-cover rounded-lg shadow-lg">
        <p class="mt-2 text-gray-600">Tampilan Antarmuka Chatbot - Mudah digunakan dan interaktif.</p>
    </div>
    <div class="text-center">
        <img src="https://via.placeholder.com/250" alt="Foto 2" class="w-full h-64 object-cover rounded-lg shadow-lg">
        <p class="mt-2 text-gray-600">Fitur Personalisasi - Sesuaikan gaya chatbot sesuai keinginan Anda.</p>
    </div>
    <div class="text-center">
        <img src="https://via.placeholder.com/250" alt="Foto 3" class="w-full h-64 object-cover rounded-lg shadow-lg">
        <p class="mt-2 text-gray-600">Percakapan dengan Chatbot - Interaksi yang menyenangkan dan responsif.</p>
    </div>
</div>

<!-- Running Text Footer -->
<footer class="bg-gray-800 text-white py-4 mt-10" data-aos="fade-left">
    <div class="max-w-7xl mx-auto">
        <div class="overflow-hidden">
            <div class="whitespace-nowrap animate-marquee text-center text-sm text-gray-400">
                <span>🌟 Join WAI Chatbot now for exclusive offers and the latest updates! 🌟 | 🌟 Enjoy personalized chatbot conversations and make your interactions smarter! 🌟</span>

                <span>🌟 Join WAI Chatbot now for exclusive offers and the latest updates! 🌟 | 🌟 Enjoy personalized chatbot conversations and make your interactions smarter! 🌟</span>

                <span>🌟 Join WAI Chatbot now for exclusive offers and the latest updates! 🌟 | 🌟 Enjoy personalized chatbot conversations and make your interactions smarter! 🌟</span>
            </div>
        </div>
    </div>
</footer>




<!-- Sign Up Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Kiri: Gambar chatting bot -->
        <div class="w-full sm:w-1/2">
            <img src="{{ asset('img/wai.png') }}" alt="Chatting with Bot" class="w-full h-auto rounded-lg shadow-lg">
        </div>

        <!-- Kanan: Teks Promosi & Button -->
        <div class="w-full sm:w-1/2 pl-8" data-aos="fade-left">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Bergabunglah dengan WAI!</h2>
            <p class="text-lg text-gray-600 mb-6">
                Nikmati pengalaman interaktif dengan chatbot bergaya anime! Dapatkan solusi cepat dan personal dalam setiap percakapan. 
                Daftar sekarang dan mulailah berinteraksi dengan WAI untuk pengalaman yang lebih menyenangkan!
            </p>
            <a href="/register" class="inline-block px-6 py-3 bg-gray-600   text-white font-semibold rounded-lg hover:bg-gray-800 transition-colors">
                Daftar Sekarang
            </a>
        </div>
    </div>
</section>

<section class="bg-gray-800 text-white py-16 px-6" data-aos="fade-up" id="ai">
    <div class="max-w-full mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Temukan AI Sesuai Personalitasnya</h2>

        <!-- Container untuk gambar dengan scrollbar -->
        <div class="flex overflow-x-auto px-4" id="scroll-container">
            <!-- Card 1 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="img/sample_placeholder.png" alt="Sifa AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Sifa AI - The Empath</h3>
                <p>Sifa AI is an understanding companion...</p>
            </div>

            <!-- Card 2 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="img/sample_placeholder.png" alt="Darwin AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Darwin AI - The Thinker</h3>
                <p>Darwin AI is analytical and logical...</p>
            </div>

            <!-- Card 3 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="img/sample_placeholder.png" alt="A0pa AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">A0pa AI - The Humorist</h3>
                <p>A0pa AI brings humor and lightheartedness...</p>
            </div>

            <!-- Card 4 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="img/sample_placeholder.png" alt="Zara AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Zara AI - The Mentor</h3>
                <p>Zara AI is a patient and wise guide...</p>
            </div>

            <!-- Card 5 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="img/sample_placeholder.png" alt="Sifa AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Sifa AI - The Empath</h3>
                <p>Sifa AI is an understanding companion...</p>
            </div>

            <!-- Card 6 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="img/sample_placeholder.png" alt="Darwin AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Darwin AI - The Thinker</h3>
                <p>Darwin AI is analytical and logical...</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-700 text-white py-10 px-4" data-aos="fade-up">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8">Partner Kami</h2>

        <!-- Logo Partner Section -->
        <div class="flex justify-center items-center gap-10 flex-wrap">
            <div>
                <img src="{{ asset('img/LOGO_DOANG.png') }}" alt="Partner 1" class="h-16 object-contain">
            </div>
            <div>
                <img src="{{ asset('img/gemini.png') }}" alt="Partner 2" class="h-16 object-contain">
            </div>
            <div>
                <img src="{{ asset('img/UpiLogo.png') }}" alt="Partner 3" class="h-16 object-contain">
            </div>
            <div>
                <img src="{{ asset('img/ctf.png') }}" alt="Partner 4" class="h-16 object-contain">
            </div>
        </div>
    </div>
</footer>



<!-- Video Demonstrasi -->
<section class="bg-white py-10" id="video">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-black mb-6">Tonton Demo Chatbot Kami</h2>
        <video class="w-full h-auto rounded-lg shadow-lg" controls>
            <source src="video-demo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-gray-900 py-10">
    <div class="max-w-7xl mx-auto text-center text-white">
        <h2 class="text-3xl font-bold mb-6">Siap Mencoba Chatbot Kami?</h2>
        <p class="text-lg mb-8">Unduh aplikasi atau coba chatbot kami langsung dan nikmati pengalaman yang tak terlupakan!</p>
        <a href="/register" class="bg-white hover:bg-[#DCDCDC] text-blue-600 py-3 px-6 rounded-lg text-lg font-semibold hover:text-[#0000FF]">Coba Sekarang</a>
    </div>
</section>

<!-- Fitur Aplikasi Chatbot -->
<section class="bg-gray-100 py-10" data-aos="fade-up" id="ulasan">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-black mb-6">Fitur Utama Chatbot Kami</h2>
        <p class="text-lg text-gray-700 mb-12">Nikmati pengalaman interaktif dengan chatbot bergaya anime yang siap membantu Anda kapan saja.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-indigo-400 mb-5" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2s0 0 0 0s0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.2-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9c0 0 0 0 0 0s0 0 0 0l-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"/></svg>
                <h3 class="text-xl font-semibold mb-4 text-indigo-700">Chatbot Interaktif</h3>
                <p class="text-gray-600 text-center">Nikmati percakapan yang menyenangkan dan interaktif dengan chatbot kami yang responsif dan pintar.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-indigo-400 mb-5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                <h3 class="text-xl font-semibold mb-4 text-indigo-700">Personalisasi</h3>
                <p class="text-gray-600 text-center">Sesuaikan gaya chatbot sesuai keinginan Anda, dari gaya anime hingga pilihan karakter lainnya.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-indigo-400 mb-5" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.2s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16l-97.5 0c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8l97.5 0c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32L0 448c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-224c0-17.7-14.3-32-32-32l-64 0z"/></svg>
                <h3 class="text-xl font-semibold mb-4 text-indigo-700">Tanya Jawab Cepat</h3>
                <p class="text-gray-600 text-center">Dapatkan solusi cepat dan tepat untuk pertanyaan Anda dengan fitur tanya jawab otomatis.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni Pengguna -->
<!-- Testimoni Pengguna -->
<section class="bg-gray-200 py-10" data-aos="fade-up">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-black mb-6">Testimoni Pengguna</h2>
        <p class="text-lg text-gray-700 mb-12">Dengar pendapat pengguna kami tentang pengalaman menggunakan WAI.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4 text-indigo-700">Andre</h3>
                <p class="text-gray-600">“Chatbot ini sangat membantu saya dalam mencari solusi cepat!”</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4 text-indigo-700">Lisa</h3>
                <p class="text-gray-600">“Saya suka karakter anime-nya yang sangat interaktif!”</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4 text-indigo-700">Dina</h3>
                <p class="text-gray-600">“Fitur personalisasinya membuat chatbot ini terasa lebih hidup.”</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4 text-indigo-700">Hasan</h3>
                <p class="text-gray-600">“Mantap!.”</p>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="py-16 px-6 bg-gray-100" id="faq">
    <div class="max-w-3xl mx-auto text-left">
        <h2 class="text-3xl font-bold mb-8 text-black">Frequently Asked Questions</h2>
        <div class="space-y-6 text-black text-xl">
            <!-- First FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4" data-aos="fade-right">
                <summary class="font-semibold text-xl cursor-pointer hover:text-[#0000FF] transition duration-200 w-full px-6 py-3">
                    What is WAI?
                </summary>
                <p class="mt-2 text-lg">WAI is an innovative platform designed to offer efficient solutions for your everyday tasks. It leverages cutting-edge technology to help you achieve your goals quickly and effectively.</p>
            </details>
            
            <!-- Second FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-xl cursor-pointer hover:text-[#0000FF] transition duration-200 w-full px-6 py-3">
                    How can I register?
                </summary>
                <p class="mt-2 text-lg">You can register by clicking the "Register" button in the header or visiting the registration page. It takes just a few minutes to sign up and get started with all the features.</p>
            </details>

            <!-- Third FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-xl cursor-pointer hover:text-[#0000FF] transition duration-200 w-full px-6 py-3">
                    What services do you offer?
                </summary>
                <p class="mt-2 text-lg">We offer various tools and services to streamline your workflow, including task management, data analysis, and automation solutions, all designed to enhance productivity.</p>
            </details>

            <!-- Fourth FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-xl cursor-pointer hover:text-[#0000FF] transition duration-200 w-full px-6 py-3">
                    Is WAI available on mobile devices?
                </summary>
                <p class="mt-2 text-lg">Yes, WAI is fully optimized for mobile devices, allowing you to use all its features on the go. Simply visit our website or download the app from your device's store.</p>
            </details>

            <!-- Fifth FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-xl cursor-pointer hover:text-[#0000FF] transition duration-200 w-full px-6 py-3">
                    How do I contact customer support?
                </summary>
                <p class="mt-2 text-lg">You can contact our support team through the "Contact Us" page, or email us directly at <a href="mailto:support@wai.com" class="underline text-[#0000FF]">support@wai.com</a>. Our team will respond to your inquiries as soon as possible.</p>
            </details>

            <!-- Sixth FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-xl cursor-pointer hover:text-[#0000FF] transition duration-200 w-full px-6 py-3">
                    Is there a free trial available?
                </summary>
                <p class="mt-2 text-lg">Yes, WAI offers a 14-day free trial so you can explore all the features before committing. You can start your trial by signing up on our website.</p>
            </details>

            <!-- Seventh FAQ -->
            <details class="text-left border-b-2 border-gray-300 pb-4">
                <summary class="font-semibold text-xl cursor-pointer hover:text-[#0000FF] transition duration-200 w-full px-6 py-3">
                    Can I cancel my subscription anytime?
                </summary>
                <p class="mt-2 text-lg">Yes, you can cancel your subscription at any time by going to your account settings. There are no long-term commitments, and you can cancel without any penalties.</p>
            </details>
        </div>
    </div>
</section>

</main>


   <!-- Footer -->
<footer class="bg-gray-800 text-white py-10 px-4" data-aos="fade-in-up" id="contact">
    <div class="max-w-7xl mx-auto">
        <!-- Top Section: Contact and Social Media Links -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-10 ml-10">
            <!-- Contact Info -->
            <div class="ml-4"> 
                <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                <ul>
                    <li><a href="mailto:contact@wai.com" class="hover:text-[#0000FF]">Email: ijotomat@wai.com</a></li>
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
            <p class="text-sm mb-2">© 2024 WAI by IjoTomat - All Rights Reserved</p>
            <p class="text-sm"> <a href="mailto:ijotomat@wai.com" class="underline hover:text-[#0000FF]">ijotomat@wai.com</a></p>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,  // Durasi animasi dalam milidetik
    easing: 'ease-in-out',  // Jenis easing
    once: true  // Animasi hanya terjadi sekali
  });

    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        toggleButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    });

    let isScrolling;

// Fungsi untuk menampilkan scrollbar
function showScrollbar() {
    document.body.classList.add('show-scrollbar');

    // Hapus scrollbar setelah beberapa waktu tanpa aktivitas gulir
    clearTimeout(isScrolling);
    isScrolling = setTimeout(() => {
        document.body.classList.remove('show-scrollbar');
    }, 1000); // 1000ms = 1 detik
}

// Event listener untuk mendeteksi gulir
window.addEventListener('scroll', showScrollbar);

</script>


</body>
</html>
