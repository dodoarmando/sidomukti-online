<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-gray-900 text-white">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <a href="#" class="text-2xl font-bold">Blog</a>
                <button class="block md:hidden text-white focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z">
                        </path>
                    </svg>
                </button>
                <div class="hidden md:block">
                    <ul class="flex">
                        <li class="mr-6"><a href="#" class="hover:text-gray-400">Home</a></li>
                        <li class="mr-6"><a href="#" class="hover:text-gray-400">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-1/2">
                    <h1 class="text-4xl font-bold mb-4">Welcome to our blog!</h1>
                    <p class="text-xl mb-8">Stay up-to-date with the latest news and trends.</p>
                    <a href="#"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Read Our
                        Blog</a>
                </div>
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/640x480.png" alt=""
                        class="w-full h-64 object-cover rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold my-8">Latest News</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/640x480.png" alt="" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2"><a href="#">Blog Post Title 1</a></h2>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Read more</a>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/640x480.png" alt="" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2"><a href="#">Blog Post Title 2</a></h2>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Read more</a>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/640x480.png" alt="" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2"><a href="#">Blog Post Title 3</a></h2>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Read more</a>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
