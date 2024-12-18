<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <!-- Tambahkan Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white">

    <!-- Header -->
    <header class="py-4 bg-white dark:bg-gray-800 shadow-md">
        <nav class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Website</h1>
            <ul class="flex space-x-4">
                <li><a href="#beranda" class="hover:text-blue-500">Beranda</a></li>
                <li><a href="#tentang" class="hover:text-blue-500">Tentang Kami</a></li>
                <li><a href="#program" class="hover:text-blue-500">Program</a></li>
                <li><a href="#fasilitas" class="hover:text-blue-500">Fasilitas</a></li>
                <li><a href="#kontak" class="hover:text-blue-500">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Project Section -->
        <section id="project" class="py-16">
            <h2 class="text-3xl font-bold text-center mb-8">Project</h2>
            <div class="flex flex-col items-center">
                <!-- Carousel -->
                <div class="carousel relative w-full max-w-4xl">
                    <!-- Slide 1 -->
                    <div id="slide1" class="carousel-item relative w-full">
                        <img src="{{ asset('img/project1.png') }}" class="w-full object-cover rounded-lg" />
                        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 justify-between">
                            <a href="#slide4" class="btn btn-circle bg-gray-800/70 hover:bg-gray-800">❮</a>
                            <a href="#slide2" class="btn btn-circle bg-gray-800/70 hover:bg-gray-800">❯</a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div id="slide2" class="carousel-item relative w-full">
                        <img src="{{ asset('img/project2.jpg') }}" class="w-full object-cover rounded-lg" />
                        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 justify-between">
                            <a href="#slide1" class="btn btn-circle bg-gray-800/70 hover:bg-gray-800">❮</a>
                            <a href="#slide3" class="btn btn-circle bg-gray-800/70 hover:bg-gray-800">❯</a>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div id="slide3" class="carousel-item relative w-full">
                        <img src="{{ asset('img/project3.jpg') }}" class="w-full object-cover rounded-lg" />
                        <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 justify-between">
                            <a href="#slide2" class="btn btn-circle bg-gray-800/70 hover:bg-gray-800">❮</a>
                            <a href="#slide4" class="btn btn-circle bg-gray-800/70 hover:bg-gray-800">❯</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Manage Tables Section -->
        <section class="container mx-auto my-10">
            <h2 class="text-2xl font-bold mb-4">Manage Tables</h2>
            <div class="space-y-4">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Manage Categories</a>
                <a href="{{ route('destinations.index') }}" class="btn btn-primary">Manage Destinations</a>
                <a href="{{ route('owners.index') }}" class="btn btn-primary">Manage Owners</a>
                <a href="{{ route('personalbrands.index') }}" class="btn btn-primary">Manage Personal Brands</a>
            </div>
        </section>
    </main>

</body>

</html>
