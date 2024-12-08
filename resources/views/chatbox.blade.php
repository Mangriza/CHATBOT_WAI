<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbox - {{ $model }}</title>
    <link rel="icon" href="{{ asset('img/LOGO_DOANG.png') }}" type="image/png">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .main-content {
            display: flex;
            flex: 1;
        }
        .left-section {
            width: 40%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3f4f6; /* Light gray */
        }
        .right-section {
            width: 60%;
            padding: 1.5rem;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800">

    <!-- Header -->
<header class="relative flex flex-wrap items-center justify-between p-4 bg-white text-gray-700">
    <!-- Logo & Name -->
    <div class="flex items-center space-x-3">
        <img src="{{ asset('img/WAI.png') }}" alt="Logo" class="h-10 w-auto">
        {{-- <h1 class="text-xl text-black-700">>>> Chatbox with {{ ucfirst($model) }}</h1> --}}
    </div>

    <!-- Log In / Register (hidden on small screens) -->
    <div class="hidden md:flex space-x-4">
        <a href="{{ route('profile.edit') }}" class="text-gray-700 hover:text-purple-500">Profile</a>
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
        <a href="{{ route('profile.edit') }}" class="block text-gray-700 hover:text-purple-500">Profile</a>
    <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-gray-700 hover:text-purple-500">Log Out</button>
            </form>
    </div>
</header>

    <!-- Main Content -->
    <div class="main-content">
        <div class="left-section">
            <img src="{{ asset('img/assets/vtb04.png') }}" alt="Logo" class="h-40 w-auto">
        </div>
            <div class="right-section">
                <div class="bg-white p-6 shadow-md rounded-lg h-full">
                    
                    <h2 class="text-2xl font-bold mb-4">Chat with {{ ucfirst($model) }}</h2>
                    <div class="flex justify-end mb-4">

                    </div>
                    <div id="chatbox" class="bg-gray-100 p-4 h-96 overflow-y-scroll rounded-lg mb-4">
                        @if (empty($messages))
                            <p class="text-center text-gray-500">No messages yet.</p>
                        @else
                            @foreach ($messages as $message)
                                <div class="p-2 {{ $message['sender'] == 'user' ? 'text-right bg-blue-200' : 'text-left bg-gray-300' }} rounded mb-2">
                                    {{ $message['text'] }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <form action="{{ route('chatbox.store', $model) }}" method="POST" class="flex mb-4">
                        @csrf
                        <input type="text" name="message" class="flex-grow p-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type your message...">
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-r-lg ml-2 hover:bg-blue-600">Send</button>
                    </form>
                    <form action="{{ route('chatbox.end', $model) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-lg">
                                End Session
                            </button>
                        </form>

                </div>
            </div>
            </div>
            </div>

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
