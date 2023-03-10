<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Resmi Desa Sidomukti</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ navOpen: false, scrolledFromTop: false }" x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    :class="{
        'overflow-hidden': navOpen,
        'overflow-scroll': !navOpen
    }">
    <header
        class="
            fixed
            w-full
            bg-primary
            flex
            justify-between
            items-center
            px-4
            md:px-12
            transition-all
            duration-200
            h-24
        "
        :class="{ 'h-24': !scrolledFromTop, 'h-14': scrolledFromTop }">
        <a href="#">
            <img src="./assets/images/logo.svg" alt="ChitChat Logo"
                class="h-12 transform origin-left transition duration-200"
                :class="{ 'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop }" />
        </a>
        <nav>
            <button class="md:hidden" @click="navOpen = !navOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <ul class="
                  fixed
                  left-0
                  right-0
                  min-h-screen
                  px-4
                  pt-8
                  space-y-4
                  text-white
                  bg-primary
                  transform
                  transition
                  duration-300
                  translate-x-full
                  md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0
               "
                :class="{ 'translate-x-full': !navOpen }" :class="{ 'translate-x-0': navOpen }">
                <li class="">
                    <a href="#" @click="navOpen = false"
                        class="font-black
                        tracking-wide
                        uppercase
                        ">
                        Profil Desa
                    </a>
                </li>
                <li class="">
                    <a href="#" @click="navOpen = false"
                        class="font-black
                        tracking-wide
                        uppercase
                        ">
                        Pemerintahan
                    </a>
                </li>
                <li class="">
                    <a href="#" @click="navOpen = false"
                        class="font-black
                        tracking-wide
                        uppercase
                        ">
                        Informasi
                    </a>
                </li>
                <li class="">
                    <a href="#" @click="navOpen = false"
                        class="font-black
                        tracking-wide
                        uppercase
                        ">
                        Transparasi
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="pt-32 pb-16 px-8 md:px-12 bg-blue-500">
        <div class="max-w-7xl mx-auto md:flex md:items-center md:justify-between">
            <div class="md:flex-1 md:mr-6">
                <h1 class="font-bold text-4xl md:text-5xl text-white leading-tight">
                    The Quickest way to Chat with your Loved Ones
                </h1>
                <p class="mt-4 text-lg text-white">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis aspernatur magni vitae
                    veritatis.
                </p>
            </div>
            <div class="md:flex-1">
                <img src="https://res.cloudinary.com/thirus/image/upload/v1632162912/logos/chat_ys7mog.svg"
                    alt="Chat with loved ones" />
            </div>
        </div>
    </section>
    <section id="features" class="min-h-screen"></section>
    <section id="about" class="min-h-screen bg-gray-100"></section>
    <section id="contact" class="min-h-screen"></section>
</body>

</html>
