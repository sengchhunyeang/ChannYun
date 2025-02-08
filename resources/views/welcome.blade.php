<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannYun Internetional School </title>
    <link rel="icon" href="/images/channyunLogo.svg" type="image/x-icon">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>

    </style>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Navbar.html -->
<nav class="p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-2xl font-bold flex items-center">
            <img src="/images/channyunLogo.svg" alt="channyun" class="rounded-full" height="12px" width="60px">
            <h1 class="p-2 text-yellow-400">
                ChannYun <br>International School
            </h1>
        </div>

        <div class="hidden md:flex space-x-6">
            <!-- Add navbar links here if needed -->
        </div>

        <button onclick="window.location.href='login.html'"
                class="bg-yellow-400 text-white px-4 py-2 rounded-md hover:bg-blue-800 transition duration-300">
            Login
        </button>
    </div>
</nav>

<!-- Example content to test the navbar -->
<div class="mt-4">
    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 lg:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="/images/slider/img_5.png"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/slider/img.png"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/slider/img_1.png"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/slider/img_2.png"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/slider/img_3.png"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>
    <!--        Text-->
    <div class="text-center mt-4 p-3">
        <h1 class="text-4xl">The Best Software Expert Training Center in Cambodia</h1>
        <p class="p-3 text-xl">We provide the best opportunities for IT major students to become global SW experts with
            the highest quality training programs. All courses are free</p>
        <p class="text-xl"> of charge. Furthermore, we provide a bridge for graduated
            students to the global SW job market. Please join our center for a bright future!</p>
    </div>
    <!--    Developer Writing -->
    <div class="text-4xl text-blue-900 text-center font-bold mt-10">Who are developer ?</div>
    <div class="border border-b-4 border-blue-900"></div>
    <div class="grid grid-cols-3 gap-6 p-6">
        <!-- Card 1 -->
        <div class="rounded-lg bg-white shadow-sm text-black w-full">
            <div class="p-6">
                <div class="flex">
                    <img class="w-32 h-32 rounded-full border-4 border-cyan-400"
                         src="https://scontent.fpnh9-1.fna.fbcdn.net/v/t39.30808-6/447898675_1202338534263010_5186044557537057084_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeExpQBVjKvVNIF4uR9R6PHqDYNDiRSCHbENg0OJFIIdsYFKXjSG13GCBOc8kifReGUf5O9GC8wPAMlNq334T5V4&_nc_ohc=34ahBwwKlYAQ7kNvgHijYsa&_nc_oc=AdgQwKwcU9iOkLLz0hrWK0HXCL-xMR_Y2SVBszoy6O02G-U-WQVk0MDRFS4NkX-4kEk&_nc_zt=23&_nc_ht=scontent.fpnh9-1.fna&_nc_gid=AG9ZfJHm0Yuf4nKSckkNN5g&oh=00_AYCqkbg3NYEUD7lXqk9Jcbo3NyytMwSpyx_16OrjZApVSQ&oe=67ACEFFB"
                         alt="user"/>
                    <div class="p-3">
                        <h3 class="text-2xl font-bold">Mr. SENG Chhunyeang</h3>
                        <p class="text-gray-700 text-lg mt-2">From 12st Generation at KSHRD</p>
                        <p class="text-gray-700 text-lg mt-2">Web and Android Developer</p>
                    </div>
                </div>
                <div class="relative">
                    <p id="bioText1" class="text-gray-600 text-xl mt-4 line-clamp-4">
                        My name is Seng Chhunyeang, and I am a passionate software developer with expertise in both
                        Android development and Web development. I specialize in building mobile applications using
                        Kotlin and Jetpack Compose for Android, while also working with ReactJS and Next.js to create
                        responsive, user-friendly websites. Additionally, I have experience in Back-End development with
                        Spring Boot and designing intuitive user interfaces using Figma.
                    </p>
                    <button id="seeMoreBtn1" class="text-blue-900 mt-2">
                        See more
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="rounded-lg bg-white shadow-sm text-black w-full">
            <div class="p-6">
                <div class="flex">
                    <img class="w-32 h-32 rounded-full border-4 border-cyan-400" src="/images/developer/image.jpg"
                         alt="user"/>
                    <div class="p-3">
                        <h3 class="text-2xl font-bold">Mr. CHEA Panha </h3>
                        <p class="text-gray-700 text-lg mt-2">From 12st Generation at KSHRD</p>
                        <p class="text-gray-700 text-lg mt-2">Front-end Developer</p>
                    </div>
                </div>
                <div class="relative">
                    <p id="bioText2" class="text-gray-600 text-xl mt-4 line-clamp-4">
                        My name is Chea Panha, and I am a passionate software developer with expertise in both Android
                        development and Web development. I specialize in building mobile applications using Kotlin and
                        Jetpack Compose for Android, while also working with Angular and Next.js to create responsive,
                        user-friendly websites. Additionally, I have experience in Back-End development with Spring Boot
                        and designing intuitive UX/UI using Figma.
                        I am currently pursuing the position of Front-End Developer at CMED Construction Co., Ltd.
                    </p>
                    <button id="seeMoreBtn2" class="text-blue-900 mt-2">
                        See more
                    </button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="rounded-lg bg-white shadow-sm text-black w-full">
            <div class="p-6">
                <div class="flex">
                    <img class="w-32 h-32 rounded-full border-4 border-cyan-400"
                         src="https://scontent.fpnh9-2.fna.fbcdn.net/v/t39.30808-6/474083409_1140520857469577_5092193276796095228_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHJVNvQjqfDN8XOToZVr0OcFPzmzgQ2BQkU_ObOBDYFCXVtt6SdffqxOMQnj99IVqJWiyeNoIHJkvjSPgfX2gkW&_nc_ohc=Cke9d3eFKpsQ7kNvgHSLfFA&_nc_oc=AdjzFdojW9w9Vak_zlrygkOQ9xmPrEdv06HnG3c4XeSfEDlG3jNvTkktcR6Zce4eVLg&_nc_zt=23&_nc_ht=scontent.fpnh9-2.fna&_nc_gid=A9ZVKxAAnkbwyZX0c48UVnt&oh=00_AYDeiGqR-8Yv7-3N6GV6VbP8_aF6PHniMqAky7TzoXN7BQ&oe=67AD18FA"
                         alt="user"/>
                    <div class="p-3">
                        <h3 class="text-2xl font-bold">Ms. LAY Sovan Danem </h3>
                        <p class="text-gray-700 text-lg mt-2">From 12st Generation at KSHRD</p>
                        <p class="text-gray-700 text-lg mt-2">Front-end Developer</p>
                    </div>
                </div>
                <div class="relative">
                    <p id="bioText3" class="text-gray-600 text-xl mt-4 line-clamp-4">
                        My name is Sovan Danem Lay, and I am a passionate software developer with expertise in both
                        Android development and Web development. I specialize in building mobile applications using
                        Kotlin and Jetpack Compose for Android, while also working with Angular and Next.js to create
                        responsive, user-friendly websites. Additionally, I have experience in Back-End development with
                        Spring Boot and designing intuitive UX/UI using Figma. I am currently pursuing
                        the position of Front-End Developer at CMED Construction Co., Ltd.
                    </p>
                    <button id="seeMoreBtn3" class="text-blue-900 mt-2">
                        See more
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <footer class="bg-gray-100 py-10">
            <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Logo and Description -->
                <div class="space-y-4 ">
                    <div class="flex">
                        <img src="/images/channyunLogo.svg" alt="Korea Software HRD Center Logo"
                             class="h-16 rounded-full">
                        <h2 class="text-lg font-semibold text-yellow-400 p-2">ChannYun <br> International School</h2>
                    </div>
                    <p class="text-gray-600">
                        ChannYun International School is an academy training center for training software professionals
                        in cooperation
                        with Korea International Cooperation Agency (KOICA) and Webcash in April 2013 in Phnom Penh,
                        Cambodia.
                    </p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-blue-500 hover:text-blue-700">
                            <img src="/images/footer/img.png" alt="Korea Software HRD Center Logo" class="h-16">
                        </a>
                        <a href="#" class="text-blue-500 hover:text-blue-700">
                            <img src="/images/footer/img_1.png" alt="Korea Software HRD Center Logo" class="h-16">
                        </a>
                        <a href="#" class="text-blue-500 hover:text-blue-700">
                            <img src="/images/footer/img_2.png" alt="Korea Software HRD Center Logo" class="h-16">
                        </a>
                        <a href="#" class="text-blue-500 hover:text-blue-700">
                            <img src="/images/footer/img_3.png" alt="Korea Software HRD Center Logo" class="h-16">
                        </a>
                    </div>
                </div>

                <!-- Spacer for layout balancing -->
                <div class="hidden md:block"></div>

                <!-- Contact Us Section -->
                <div class=" space-y-2">
                    <h2 class="text-lg font-semibold text-gray-700">Contact Us</h2>
                    <p class="text-gray-600">#12, St 323, Sangkat Boeung Kak II, Khan Toul Kork, Phnom Penh,
                        Cambodia.</p>
                    <p class="text-gray-600">
                        <a href="mailto:info.kshrd@gmail.com"
                           class="text-blue-500 hover:underline">info.kshrd@gmail.com</a>
                    </p>
                    <p class="text-gray-600">
                        <a href="mailto:phirum.iti@gmail.com"
                           class="text-blue-500 hover:underline">phirum.iti@gmail.com</a>
                    </p>
                    <p class="text-gray-600">012 998 919 / 086 244 123</p>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="text-center mt-8">
                <p class="text-gray-600 uppercase">&copy; ChannYun International School, 2025</p>
            </div>
        </footer>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script>
    const seeMoreBtn1 = document.getElementById('seeMoreBtn1');
    const bioText1 = document.getElementById('bioText1');

    const seeMoreBtn2 = document.getElementById('seeMoreBtn2');
    const bioText2 = document.getElementById('bioText2');

    const seeMoreBtn3 = document.getElementById('seeMoreBtn3');
    const bioText3 = document.getElementById('bioText3');

    function toggleText(bioText, seeMoreBtn) {
        if (bioText.classList.contains('line-clamp-4')) {
            bioText.classList.remove('line-clamp-4');
            seeMoreBtn.textContent = 'See less';
        } else {
            bioText.classList.add('line-clamp-4');
            seeMoreBtn.textContent = 'See more';
        }
    }

    seeMoreBtn1.addEventListener('click', () => toggleText(bioText1, seeMoreBtn1));
    seeMoreBtn2.addEventListener('click', () => toggleText(bioText2, seeMoreBtn2));
    seeMoreBtn3.addEventListener('click', () => toggleText(bioText3, seeMoreBtn3));

</script>
</body>
</html>
