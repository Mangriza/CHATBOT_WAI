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
    <header class="flex justify-between items-center p-4 bg-gray-800 text-white">
        <!-- Logo & Name -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-10 w-15">
            <span class="font-semibold text-2xl">With AI</span>
        </div>
        <!-- Navigation (Login/Register) -->
        <div class="space-x-4">
            <a href="{{ route('login') }}" class="text-white hover:text-gray-400">Log In</a>
            <a href="{{ route('register') }}" class="text-white hover:text-gray-400">Register</a>
        </div>
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    </header>

    <!-- Main Section -->
    <main class="py-16 px-6 bg-gray-100">
    <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-10">
        <!-- Logo di kiri dengan flex-shrink-0 agar tidak mengecil -->
        <div class="flex items-center space-x-4 flex-shrink-0">
        <img src="{{ asset('img/logo.png') }}" alt="Main Logo" class="w-50 h-65 object-contain" data-aos="fade-up">

        </div>
        <!-- Teks "With AI" dan Deskripsi dalam dua bagian terpisah -->
        <div>
            <h1 class="text-8xl font-bold text-black" data-aos="fade-left">With AI</h1>
            <p class="text-lg text-gray-700 mt-4" data-aos="fade-right">Nikmati pengalaman unik dengan WAI, aplikasi yang menyajikan chatbot bergaya anime, siap memberikan bantuan dan solusi efisien dalam setiap langkah Anda</p>
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
            <img src="{{ asset('img/logo.png') }}" alt="Chatting with Bot" class="w-full h-auto rounded-lg shadow-lg">
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

<section class="bg-gray-800 text-white py-16 px-6" data-aos="fade-up">
    <div class="max-w-full mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Meet Our AI Personalities</h2>

        <!-- Container untuk gambar dengan scrollbar -->
        <div class="flex overflow-x-auto px-4" id="scroll-container">
            <!-- Card 1 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="path/to/sifa_image.jpg" alt="Sifa AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Sifa AI - The Empath</h3>
                <p>Sifa AI is an understanding companion...</p>
            </div>

            <!-- Card 2 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="path/to/darwin_image.jpg" alt="Darwin AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Darwin AI - The Thinker</h3>
                <p>Darwin AI is analytical and logical...</p>
            </div>

            <!-- Card 3 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="path/to/a0pa_image.jpg" alt="A0pa AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">A0pa AI - The Humorist</h3>
                <p>A0pa AI brings humor and lightheartedness...</p>
            </div>

            <!-- Card 4 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="path/to/zara_image.jpg" alt="Zara AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Zara AI - The Mentor</h3>
                <p>Zara AI is a patient and wise guide...</p>
            </div>

            <!-- Card 5 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="path/to/sifa_image.jpg" alt="Sifa AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Sifa AI - The Empath</h3>
                <p>Sifa AI is an understanding companion...</p>
            </div>

            <!-- Card 6 -->
            <div class="flex-shrink-0 w-96 bg-gray-700 p-6 rounded-lg shadow-lg hover:scale-105 transition-transform">
                <img src="path/to/darwin_image.jpg" alt="Darwin AI" class="w-full h-80 object-cover mb-4 rounded">
                <h3 class="text-xl font-semibold mb-4">Darwin AI - The Thinker</h3>
                <p>Darwin AI is analytical and logical...</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-700 text-white py-10 px-4" data-aos="fade-up">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8">Our Partners</h2>

        <!-- Logo Partner Section -->
        <div class="flex justify-center items-center gap-10 flex-wrap">
            <div>
                <img src="{{ asset('img/logo.png') }}" alt="Partner 1" class="h-16 object-contain">
            </div>
            <div>
                <img src="{{ asset('img/logo.png') }}" alt="Partner 2" class="h-16 object-contain">
            </div>
            <div>
                <img src="{{ asset('img/logo.png') }}" alt="Partner 3" class="h-16 object-contain">
            </div>
            <div>
                <img src="{{ asset('img/logo.png') }}" alt="Partner 4" class="h-16 object-contain">
            </div>
        </div>
    </div>
</footer>



<!-- Video Demonstrasi -->
<section class="bg-white py-10">
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
<section class="bg-gray-100 py-10" data-aos="fade-up">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-black mb-6">Fitur Utama Chatbot Kami</h2>
        <p class="text-lg text-gray-700 mb-12">Nikmati pengalaman interaktif dengan chatbot bergaya anime yang siap membantu Anda kapan saja.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Chatbot Interaktif</h3>
                <p class="text-gray-600">Nikmati percakapan yang menyenangkan dan interaktif dengan chatbot kami yang responsif dan pintar.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Personalisasi</h3>
                <p class="text-gray-600">Sesuaikan gaya chatbot sesuai keinginan Anda, dari gaya anime hingga pilihan karakter lainnya.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Tanya Jawab Cepat</h3>
                <p class="text-gray-600">Dapatkan solusi cepat dan tepat untuk pertanyaan Anda dengan fitur tanya jawab otomatis.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni Pengguna -->
<section class="bg-gray-200 py-10" data-aos="fade-up">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-black mb-6">Testimoni Pengguna</h2>
        <div class="flex justify-center gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs">
                <p class="text-gray-600 italic">“Chatbot ini sangat membantu saya dalam mencari solusi cepat!”</p>
                <p class="text-gray-800 font-semibold mt-4">- Andre, Pengguna Setia</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs">
                <p class="text-gray-600 italic">“Saya suka karakter anime-nya yang sangat interaktif!”</p>
                <p class="text-gray-800 font-semibold mt-4">- Lisa, Pengguna Baru</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 px-6 bg-gray-100">
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
<footer class="bg-gray-800 text-white py-10 px-4" data-aos="fade-in-up">
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


<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,  // Durasi animasi dalam milidetik
    easing: 'ease-in-out',  // Jenis easing
    once: true  // Animasi hanya terjadi sekali
  });
</script>


</body>
</html>
