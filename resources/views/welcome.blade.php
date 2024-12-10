<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        My Website
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
</head>

<body class="font-roboto">
    <!-- Header -->
    <header class="bg-blue-800 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img src="{{asset('images/logo.jpeg')}}" class="h-10 w-10 mr-3" height="50" width="50" />
                <h1 class="text-2xl font-bold">
                    My Website
                </h1>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a class="hover:text-gray-300" href="#">
                    Home
                </a>
                <a class="hover:text-gray-300" href="#">
                    About
                </a>
                <a class="hover:text-gray-300" href="#">
                    Services
                </a>
                <a class="hover:text-gray-300" href="#">
                    News
                </a>
                <a class="hover:text-gray-300" href="#">
                    Contact
                </a>
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        style="margin-right: 20px;"
                        class="hover:text-gray-300">
                        Dashboard
                    </a>

                    @else
                    <a href="{{ route('login') }}" style="margin-right: 20px;" class="hover:text-gray-300">
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="hover:text-gray-300" href="#">
                        Register
                    </a>
                    @endif
                    @endauth
                </nav>
                @endif
            </nav>
            <div class="md:hidden">
                <button class="text-white focus:outline-none" id="menu-btn">
                    <i class="fas fa-bars">
                    </i>
                </button>
            </div>
        </div>
    </header>
    <!-- Mobile Menu -->
    <div class="hidden bg-blue-800 text-white" id="mobile-menu">
        <nav class="flex flex-col space-y-4 py-4 px-6">
            <a class="hover:text-gray-300" href="#">
                Home
            </a>
            <a class="hover:text-gray-300" href="#">
                About
            </a>
            <a class="hover:text-gray-300" href="#">
                Services
            </a>
            <a class="hover:text-gray-300" href="#">
                News
            </a>
            <a class="hover:text-gray-300" href="#">
                Contact
            </a>
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    style="margin-right: 20px;"
                    class="hover:text-gray-300">
                    Dashboard
                </a>

                @else
                <a href="{{ route('login') }}" style="margin-right: 20px;" class="hover:text-gray-300">
                    Log in
                </a>

                @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="hover:text-gray-300" href="#">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </nav>
    </div>
    <!-- Hero Section -->
    <section class="relative">
        <img src="{{asset('images/logo.png')}}" class="w-full h-96 object-cover" height="600" width="1920" />
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white">
                <h2 class="text-4xl font-bold mb-4">
                    Welcome to My Website
                </h2>
                <p class="text-lg mb-6">
                    Connecting the digital community
                </p>
                <a class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="#">
                    Learn More
                </a>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">
                About Us
            </h2>
            <div class="flex flex-col md:flex-row items-center">
                <img src="{{asset('images/logo.png')}}" class="w-full md:w-1/2 h-auto mb-6 md:mb-0 md:mr-6" height="100" width="200" />
                <div class="md:w-1/2">
                    <p class="text-lg mb-4">
                        My Website is a platform dedicated to connecting the digital community. Our mission is to provide a space where individuals and organizations can collaborate, share knowledge, and innovate together.
                    </p>
                    <p class="text-lg">
                        We believe in the power of digital transformation and strive to support our community in navigating the ever-evolving digital landscape.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">
                Our Services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="Icon representing consulting services" class="h-16 w-16 mb-4 mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/hKyq7Fkiap4jOJtkf3Eah1MInfopnsOZNthmLw9nvAiCHU5TA.jpg" width="100" />
                    <h3 class="text-xl font-bold mb-2 text-center">
                        Consulting
                    </h3>
                    <p class="text-center">
                        Expert advice to help you navigate the digital landscape.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="Icon representing training services" class="h-16 w-16 mb-4 mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/3q6vUC0Yt34eNqk4DBWmdwg8hD0ggPszAewYXbvdCIWDHU5TA.jpg" width="100" />
                    <h3 class="text-xl font-bold mb-2 text-center">
                        Training
                    </h3>
                    <p class="text-center">
                        Comprehensive training programs to upskill your team.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="Icon representing support services" class="h-16 w-16 mb-4 mx-auto" height="100" src="https://storage.googleapis.com/a1aa/image/w5cGu1VLFUL8C98NvHgTg2p9DbwVwzZpmUr32zrelf6FHU5TA.jpg" width="100" />
                    <h3 class="text-xl font-bold mb-2 text-center">
                        Support
                    </h3>
                    <p class="text-center">
                        Ongoing support to ensure your success in the digital world.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">
                Latest News
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="Image representing the latest news article" class="w-full h-40 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/hZGKFN2vjbqpP14oPVp2FDgvMbbTxR6e23ZvqhSD1VMfGU5TA.jpg" width="400" />
                    <h3 class="text-xl font-bold mb-2">
                        News Title 1
                    </h3>
                    <p class="text-gray-700">
                        Brief description of the news article. This is a summary of the content.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="Image representing the latest news article" class="w-full h-40 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/hZGKFN2vjbqpP14oPVp2FDgvMbbTxR6e23ZvqhSD1VMfGU5TA.jpg" width="400" />
                    <h3 class="text-xl font-bold mb-2">
                        News Title 2
                    </h3>
                    <p class="text-gray-700">
                        Brief description of the news article. This is a summary of the content.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img alt="Image representing the latest news article" class="w-full h-40 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/hZGKFN2vjbqpP14oPVp2FDgvMbbTxR6e23ZvqhSD1VMfGU5TA.jpg" width="400" />
                    <h3 class="text-xl font-bold mb-2">
                        News Title 3
                    </h3>
                    <p class="text-gray-700">
                        Brief description of the news article. This is a summary of the content.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8">
                Contact Us
            </h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0 md:mr-6">
                    <img alt="Image representing contact us section" class="w-full h-auto" height="300" src="https://storage.googleapis.com/a1aa/image/f9nzcCeo6ysGP02QJRx2wl2H9FpTNdY0Or1Zjm0Xg23EHU5TA.jpg" width="400" />
                </div>
                <div class="md:w-1/2">
                    <form>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="name">
                                Name
                            </label>
                            <input class="w-full px-3 py-2 border rounded-lg" id="name" placeholder="Your Name" type="text" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="w-full px-3 py-2 border rounded-lg" id="email" placeholder="Your Email" type="email" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="message">
                                Message
                            </label>
                            <textarea class="w-full px-3 py-2 border rounded-lg" id="message" placeholder="Your Message" rows="4"></textarea>
                        </div>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-center md:text-left mb-4 md:mb-0">
                    © 2024 My Website. All rights reserved.
                </p>
                <div class="flex space-x-4">
                    <a class="hover:text-gray-300" href="#">
                        <i class="fab fa-facebook-f">
                        </i>
                    </a>
                    <a class="hover:text-gray-300" href="#">
                        <i class="fab fa-twitter">
                        </i>
                    </a>
                    <a class="hover:text-gray-300" href="#">
                        <i class="fab fa-linkedin-in">
                        </i>
                    </a>
                    <a class="hover:text-gray-300" href="#">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>