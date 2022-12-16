<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solutions|Octoverse</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <main class="w-full grid">
        {{-- slide 1 --}}
        <section class="w-full h-screen relative">
            <div class="">
                <img src="{{ asset('images/1/background.png') }}" alt="Wallpaper image" class="">
            </div>
            <img src="{{ asset('images/1/meteor1.png') }}" alt="meteor image"
                class="absolute top-16 left-20 w-16 h-auto">
            <img src="{{ asset('images/1/meteor2.png') }}" alt="meteor image"
                class="absolute top-24 right-64 w-16 h-auto">
            <img src="{{ asset('images/1/star.png') }}" alt="Star image"
                class="absolute bottom-24 left-20 w-8 h-auto animate-pulse">
            <img src="{{ asset('images/1/star2.png') }}" alt="Star image"
                class="absolute top-24 left-64 w-4 h-auto animate-pulse">
            <img src="{{ asset('images/1/star2.png') }}" alt="Star image"
                class="absolute top-24 right-96 w-4 h-auto animate-pulse">
            <img src="{{ asset('images/1/star2.png') }}" alt="Star image"
                class="absolute top-48 right-40 w-8 h-auto animate-pulse">
            <div class="absolute inset-0 ">
                <div class="grid grid-cols-2 place-content-center h-screen px-16">
                    <div class="">
                        <div>
                            <img src="{{ asset('images/1/octoverse-gateway-logo.png') }}" alt="Octoverse Gateway"
                                class=" w-56  h-auto mx-auto">
                        </div>
                        <div class="text-center mb-4">
                            <h3 class="text-[#ed2668] font-semibold text-lg">"Accept payments anytime, anywhere!"</h3>
                        </div>
                        <div class="px-6">
                            <p class="text-center text-white">
                                Access to variety of digital payment methods in a single platform. Simplify financial
                                transactions for your sustainable business growth. A fast and secure way to accept
                                payments into your pocket.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center space-y-6">
                        <img src="{{ asset('images/1/gateway.png') }}" alt="Gateway image" class="w-96 h-auto">
                        <a href="#"
                            class="font-semibold text-white bg-[#ed2668] hover:bg-[#a51042] text-lg rounded-xl px-6 py-2.5 shadow-lg">Contact
                            Us</a>
                    </div>
                </div>
            </div>
            <img src="{{ asset('images/1/star.png') }}" alt="Star image"
                class="absolute bottom-24 right-32 w-4 h-auto animate-pulse">
            <img src="{{ asset('images/1/star.png') }}" alt="Star image"
                class="absolute bottom-12 right-48 w-1 h-auto animate-pulse">
        </section>
        {{-- slide 2 --}}
        <section class="w-full h-screen relative">
            <div>
                <img src="{{ asset('images/2/wallpaper2.png') }}" alt="Wallpaper image" class="">
            </div>
            <div class="absolute inset-0">
                <div class="grid grid-cols-3 gap-6 px-16 place-content-center h-screen">
                    <div class="p-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/2/1.png') }}" alt="All In One Payment Logo"
                                class="block mx-auto w-20 h-auto mb-2">
                            <figcaption class="text-[#ed2668] font-semibold  text-center">
                                All-in-one Payment Solution
                            </figcaption>
                        </figure>
                        <p class="text-white text-center">
                            Accept 20+ local and
                            international digital payments.
                        </p>
                    </div>
                    <div class="p-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/2/2.png') }}" alt="Integration logo"
                                class="block mx-auto w-28 h-auto mb-2">
                            <figcaption class="text-[#ed2668] font-semibold text-center">
                                Flexible Integration
                            </figcaption>
                        </figure>
                        <p class="text-white text-center">
                            Easily setup your eCommerce website or application with API.
                        </p>
                    </div>
                    <div class="p-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/2/3.png') }}" alt="Secured payment logo"
                                class="block mx-auto w-24 h-auto mb-2">
                            <figcaption class="text-[#ed2668] font-semibold text-center">
                                Secured Payments
                            </figcaption>
                        </figure>
                        <p class="text-white text-center">
                            Ensure the sensitive financial information safe.
                        </p>
                    </div>
                    <div class="p-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/2/4.png') }}" alt="Dashboard logo"
                                class="block mx-auto w-20 h-auto mb-2">
                            <figcaption class="text-[#ed2668] font-semibold  text-center">
                                Dashboard
                            </figcaption>
                        </figure>
                        <p class="text-white text-center">
                            Analyze sales and revenue data efficiently in one place.
                        </p>
                    </div>
                    <div class="p-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/2/5.png') }}" alt="Transaction validation logo"
                                class="block mx-auto w-20 h-auto mb-4">
                            <figcaption class="text-[#ed2668] font-semibold text-center">
                                Transaction Validation
                            </figcaption>
                        </figure>
                        <p class="text-white text-center">
                            Monitor real-time transactions anytime, anywhere.
                        </p>
                    </div>
                    <div class="p-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/2/6.png') }}" alt="Settlement logo"
                                class="mx-auto block w-36 h-auto mb-4">
                            <figcaption class="text-[#ed2668] font-semibold text-center">
                                Settlement
                            </figcaption>
                        </figure>
                        <p class="text-white text-center">
                            Satisfy with tension-free settlement.
                        </p>
                    </div>
                </div>
            </div>

        </section>
        {{-- slide 3 --}}
        <div class="w-full h-screen bg-gray-50 relative">
            <img src="{{ asset('images/3/2.png') }}" alt="Meteor image" class="absolute top-8 right-48 w-16 h-auto">
            <img src="{{ asset('images/3/3.png') }}" alt="Meteor image"
                class="absolute bottom-8 right-48 w-16 h-auto">
            <div class="absolute inset-0 h-screen">
                <div class="flex items-center justify-center space-x-20 h-screen w-full">
                    <img src="{{ asset('images/3/octoverse-logo.png') }}" alt="Octoverse logo" class="w-64 h-auto">
                    <img src="{{ asset('images/3/1.png') }}" alt="Octoverse" class=" w-6/12 h-auto">
                </div>
            </div>
        </div>
        {{-- slide 4 --}}
        <section class="w-full h-screen relative">
            <div>
                <img src="{{ asset('images/2/wallpaper2.png') }}" alt="Wallpaper image" class="">
            </div>
            <div class="absolute inset-0">
                <div class="flex items-center justify-center space-x-4 px-16 h-screen">
                    <div class="">
                        <h2 class="uppercase text-4xl font-bold mb-2 text-white text-right">Octoverse Gateway</h2>
                        <p class=" text-right text-white">meets the financial needs of such businesses regarding
                            eCommerce:</p>
                    </div>
                    <div class=" w-10/12 grid grid-cols-2 gap-4 bg-white/20 px-6 py-6 place-content-center rounded-xl">
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-red-500 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="font-semibold text-white text-xl">Telecommunications</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-red-500 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-xl font-semibold text-white">Insurance</span>
                        </div>
                        <div class="flex items-center  space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-red-500 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-xl font-semibold text-white">Healthcare</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-red-500 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-xl font-semibold text-white">Microfinance</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-red-500 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-xl font-semibold text-white">Education</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-red-500 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-xl font-semibold text-white">Retails</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-red-500 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-xl font-semibold text-white">Food & Beverage</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-red-500 stroke-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <span class="text-xl font-semibold text-white">Hospitality</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- slide 5 --}}
        <section class="w-full h-screen relative bg-gray-50">
            <div class="absolute top-24 right-24">

            </div>
            <img src="{{ asset('images/5/1.png') }}" alt="Meteor image"
                class="absolute right-24 top-24 w-24 h-auto">
            <img src="{{ asset('images/5/2.png') }}" alt="Rocket image"
                class="absolute right-24 bottom-16 w-16 h-auto">
            <img src="{{ asset('images/5/star.png') }}" alt="Star image"
                class="absolute left-52 top-64 w-4 h-auto animate-pulse">
            <img src="{{ asset('images/5/star.png') }}" alt="Star image"
                class="absolute left-96 top-16 w-4 h-auto animate-pulse">
            <img src="{{ asset('images/5/star.png') }}" alt="Star image"
                class="absolute left-1/4 bottom-16 w-8 h-auto animate-pulse">
            <img src="{{ asset('images/5/star.png') }}" alt="Star image"
                class="absolute left-3/4 top-16 w-8 h-auto animate-pulse">
            <img src="{{ asset('images/5/star.png') }}" alt="Star image"
                class="absolute right-24 top-64 w-4 h-auto animate-pulse">
            <div class="h-screen flex items-center ">
                <img src="{{ asset('images/5/wallpaper.png') }}" alt="Wallpaper image">
            </div>
            <div class="absolute inset-0">
                <div class="grid grid-cols-2 px-16">
                    <div>
                        <img src="{{ asset('images/5/3.png') }}" alt="Octoverse logo">
                    </div>
                    <div class="flex flex-col items-center justify-center h-screen gap-4 px-16">
                        <div class="mb-4">
                            <img src="{{ asset('images/5/logo.png') }}" alt="Octoverse Logo"
                                class="w-48 h-auto mx-auto">
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl text-[#fbb016] text-center mb-2">
                                "Never run out of bill credits!"
                            </h3>
                            <p class="text-white text-center leading-7">
                                Top-up bill credits online 24/7 with Octoverse's fast and secure recharging solutions
                                anytime anywhere. Refill phone bill, data pack and eGift cards instantly through our
                                gateway accessible for all telecommunication operators.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- slide 6 --}}
        <section class="w-full h-screen relative">
            <div>
                <img src="{{ asset('images/6/wallpaper2.png') }}" alt="Wallpaper image">
            </div>
            <img src="{{ asset('images/6/2.png') }}" alt="Star logo"
                class="absolute bottom-24 right-40 w-10 animate-pulse">
            <div class="absolute inset-0">
                <div class="grid grid-cols-2 px-16 place-content-evenly h-screen">
                    <div class="grid gap-y-8">
                        <div class="flex items-center space-x-4 px-4 bg-black/30 rounded-xl shadow-md mr-10">
                            <div
                                class="bg-gradient-to-tr from-[#ed2668] via-[#fbb016] to-[#65308c] px-10 py-8 rounded-full shadow-lg">
                                <span class="text-2xl font-semibold">1</span>
                            </div>
                            <div class="px-4 py-2.5">
                                <h3 class="text-[#fbb016] text-2xl font-semibold mb-2">Top-up Solution</h3>
                                <p class="text-white/70">Single and multi-recharge by one click to save time and
                                    manpower</p>
                                <div class="flex items-center justify-end">
                                    <span class="text-2xl font-bold">
                                        <img src="{{ asset('images/6/next.png') }}" alt="next image"
                                            class="w-8 h-auto">
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="flex items-center space-x-4 px-4 bg-black/30 rounded-xl shadow-md ml-10">
                            <div
                                class="bg-gradient-to-tr from-[#ed2668] via-[#fbb016] to-[#65308c] px-10 py-8 rounded-full shadow-lg">
                                <span class="text-2xl font-semibold">2</span>
                            </div>
                            <div class="px-4 py-2.5">
                                <h3 class="text-[#fbb016] text-2xl font-semibold mb-2">Data Pack Solution</h3>
                                <p class="text-white/70">
                                    Single and multi-recharge by one click to save time and manpower
                                </p>
                                <div class="flex items-center justify-end">
                                    <span class="text-2xl font-bold text-white">
                                        <img src="{{ asset('images/6/next.png') }}" alt="next image"
                                            class="w-8 h-auto">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 px-4 bg-black/30 rounded-xl shadow-md mr-10">
                            <div
                                class="bg-gradient-to-tr from-[#ed2668] via-[#fbb016] to-[#65308c] px-10 py-8 rounded-full shadow-lg">
                                <span class="text-2xl font-semibold">3</span>
                            </div>
                            <div class="px-4 py-2.5">
                                <h3 class="text-[#fbb016] text-2xl font-semibold mb-2">eGift Card Solution</h3>
                                <p class="text-white/70">
                                    Various types of gift cards are available on our platform</p>
                                <div class="flex items-center justify-end">
                                    <span class="text-2xl font-bold">
                                        <img src="{{ asset('images/6/next.png') }}" alt="next image"
                                            class="w-8 h-auto">
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ asset('images/6/recharger.png') }}" alt="Recharger image"
                            class=" w-96 h-auto block mx-auto">
                        <div class="absolute top-64 right-32 w-48 px-4 py-2.5 rounded-xl bg-black/40">
                            <p class="text-white ">
                                We support both <span class="text-[#fbb016] font-semibold">API and web portal
                                </span>for <span class="font-semibold">B2B</span> partnership!
                            </p>

                        </div>
                    </div>
                </div>
            </div>


        </section>
        {{-- slide 7 --}}
        <section class="w-full h-screen">
            <div class="bg-gray-50 h-screen relative">
                <div class="absolute left-32 top-16">
                    <img src="{{ asset('images/7/2.png') }}" alt="Rocket to Octoverse Image" class=" w-20 h-auto ">
                </div>
                <div class="absolute left-64 top-64">
                    <img src="{{ asset('images/7/1.png') }}" alt="Rocket to Octoverse Image" class=" w-24 h-auto ">
                </div>
                <div class="absolute left-0 bottom-0">
                    <img src="{{ asset('images/7/rocket-to-octoverse.png') }}" alt="Rocket to Octoverse Image"
                        class=" w-48 h-auto ">
                </div>
                <div class="absolute inset-0 grid place-content-end mb-8">
                    <div class="grid grid-cols-2 gap-x-10">

                        <div class="self-end">
                            <div class="mb-12">
                                <img src="{{ asset('images/7/recharger-logo.png') }}" alt="Octoverse Recharger Logo"
                                    class="w-48 h-auto mx-auto">
                            </div>
                            <div class="relative ml-10">
                                <div class="absolute -top-6 -left-4">
                                    <img src="{{ asset('images/7/4.png') }}" alt="Entertainment logo"
                                        class="w-16 h-auto">
                                </div>
                                <div class="bg-slate-800/60 px-6 py-4 shadow-lg grid gap-y-4 rounded-xl ">
                                    <h3 class="text-xl text-center font-semibold text-[#fbb016]">Entertainment & VOIP
                                        Cards
                                    </h3>
                                    <div class="flex items-center justify-around">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/6.png') }}" alt="Apple logo"
                                                class="w-20 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/7.png') }}" alt="Spotify logo"
                                                class="w-12 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/8.png') }}" alt="Tango logo"
                                                class="w-20 h-auto">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/9.png') }}" alt="Wayyak logo"
                                                class="w-16 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/10.png') }}" alt="Skype logo"
                                                class="w-24 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/11.png') }}"
                                                alt="Live Yo logo" class="w-20 h-auto">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/12.png') }}" alt="Twitch logo"
                                                class="w-24 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/13.png') }}"
                                                alt="Netflix logo" class="w-24 h-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="relative mr-10">
                            <div class="absolute -right-6 -top-6">
                                <img src="{{ asset('images/7/5.png') }}" alt="Games" class="w-16 h-auto">
                            </div>
                            <div class="bg-slate-800/60 px-6 py-4 grid gap-y-4 rounded-xl shadow-lg">
                                <h3 class="text-xl font-semibold text-[#fbb016] text-center">Game & Gift Cards
                                </h3>
                                <div class="grid gap-y-4">
                                    <div class="flex items-center justify-around space-x-4">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/14.png') }}" alt="Amazon logo"
                                                class="w-16 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/15.png') }}" alt="eBay logo"
                                                class="w-16 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/16.png') }}"
                                                alt="Blade & Soul logo" class="w-24 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/17.png') }}" alt="Apex logo"
                                                class="w-12 h-auto">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around space-x-6">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/18.png') }}" alt="Steam logo"
                                                class="w-12 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/19.png') }}"
                                                alt="Mobile Legends logo" class="w-24 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/20.png') }}" alt="PUBG logo"
                                                class="w-16 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/21.png') }}" alt="EAPlay logo"
                                                class="w-16 h-auto">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around space-x-2">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/22.png') }}"
                                                alt="Playstation Now logo" class="w-36 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/23.png') }}"
                                                alt="Playstation Network logo" class="w-48 h-auto">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/24.png') }}"
                                                alt="Razer Gold logo" class="w-24 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/25.png') }}"
                                                alt="Karma Koin logo" class="w-20 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/26.png') }}"
                                                alt="Minecraft logo" class="w-24 h-auto">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/27.png') }}"
                                                alt="FreeFire logo" class="w-20 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/28.png') }}"
                                                alt="Fortnite logo" class="w-20 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/29.png') }}"
                                                alt="GameStop logo" class="w-24 h-auto">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/30.png') }}"
                                                alt="Nintendo eShop logo" class="w-20 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/31.png') }}" alt="Runescape"
                                                class="w-24 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/32.png') }}" alt="Roblox logo"
                                                class="w-24 h-auto">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around">
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/33.png') }}"
                                                alt="Wizard101 logo" class="w-20 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/34.png') }}" alt="XBox logo"
                                                class="w-12 h-auto">
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/7/entertainment/35.png') }}"
                                                alt="Pirates101 logo" class="w-20 h-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- slide 8 --}}
        <section class="w-full h-screen relative">
            <div>
                <img src="{{ asset('images/8/background.png') }}" alt="Wallpaper image" class="bg-cover">
            </div>
            <div class="absolute inset-0 px-12">
                <div class="grid grid-cols-2 place-content-center gap-x-6 h-screen">
                    <div class="grid px-16 pt-16 pb-0">
                        <div class="">
                            <img src="{{ asset('images/8/octoverse-messenger-black.png') }}"
                                alt="Octoverse Messenger Logo" class="w-64 h-auto mx-auto">
                        </div>
                        <div>
                            <div class="mb-4">
                                <p class="text-center font-semibold text-[#0db8bc] text-xl">
                                    "Instantly deliver your messages in a swift!"</p>
                            </div>
                            <div>
                                <p class="text-white text-md text-center">
                                    Communicate instantly to individuals or groups with fast and easy SMS messaging
                                    solution
                                    for your marketing campaigns and business needs. You're only one text away from your
                                    customers, deliver promotional SMS, OTP and bulk SMS directly to your prospects.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="flex items-center justify-center">
                        <div class="relative">
                            <div class="absolute right-28 top-56">
                                <img src="{{ asset('images/8/2.png') }}" alt="Envelope logo" class="w-28 h-auto">
                            </div>
                            <img src="{{ asset('images/8/messenger4.png') }}" alt="Messenger logo">
                            <a href="{{ url('https://uat.octoverse.com.mm/help-faq') }}"
                                class="absolute bg-[#0db8bc] hover:bg-[#067a7c] text-white font-semibold right-32 bottom-56 flex items-center justify-around space-x-2 px-2 py-1 rounded-lg shadow-lg">
                                <span>Contact Us</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- slide 9 --}}
        <section class="w-full h-screen relative">
            <div>
                <img src="{{ asset('images/9/wallpaper3.png') }}" alt="Wallpaper image">
            </div>
            <div class="absolute inset-0 px-12">
                <div class="grid grid-cols-3 gap-6 place-content-center h-screen">
                    <div class="grid px-6 py-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/9/1.png') }}" alt="all-in-one logo"
                                class="mx-auto w-28 h-auto">
                        </figure>
                        <p class="text-center font-semibold text-[#0db8bc] text-lg mb-4">All-in-one Solution</p>
                        <p class="text-center text-white">Able to send bulk messages to all operators instantly.</p>
                    </div>
                    <div class="grid px-6 py-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/9/2.png') }}" alt="all-in-one logo"
                                class="mx-auto w-28 h-auto">
                        </figure>
                        <p class="text-center font-semibold text-[#0db8bc] text-lg mb-4">SMS Brand Name</p>
                        <p class="text-center text-white">
                            Reach all target audiences simultaneously with your own brand name.</p>
                    </div>
                    <div class="grid px-6 py-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/9/3.png') }}" alt="all-in-one logo"
                                class="mx-auto w-28 h-auto">
                        </figure>
                        <p class="text-center font-semibold text-[#0db8bc] text-lg mb-4">Region-based Marketing</p>
                        <p class="text-center text-white">
                            Reach out to audience in targeted regions.
                        </p>
                    </div>
                    <div class="grid px-6 py-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/9/4.png') }}" alt="all-in-one logo"
                                class="mx-auto w-28 h-auto">
                        </figure>
                        <p class="text-center font-semibold text-[#0db8bc] text-lg mb-4">Flexible Integration</p>
                        <p class="text-center text-white">
                            Easily setup your website or application with API.
                        </p>
                    </div>
                    <div class="grid px-6 py-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/9/5.png') }}" alt="all-in-one logo"
                                class="mx-auto w-24 h-auto">
                        </figure>
                        <p class="text-center font-semibold text-[#0db8bc] text-lg mb-4">Transaction Validation</p>
                        <p class="text-center text-white">
                            Monitor the transactions anytime, anywhere.
                        </p>
                    </div>
                    <div class="grid px-6 py-4">
                        <figure class="mb-4">
                            <img src="{{ asset('images/9/6.png') }}" alt="all-in-one logo"
                                class="mx-auto w-32 h-auto">
                        </figure>
                        <p class="text-center font-semibold text-[#0db8bc] text-lg mb-4">No Expiration</p>
                        <p class="text-center text-white">
                            Carefree of SMS credits going expired.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- slide 10 --}}
        <section class="w-full relative bg-gray-50">
            <div class="absolute inset-0 px-12">
                <div class="relative h-screen">
                    <div class="absolute bottom-64 left-96">
                        <img src="{{ asset('images/10/1.png') }}" alt="Rocket logo" class="w-16 h-auto">
                    </div>
                    <div class="grid grid-cols-2 h-screen">
                        <div class="flex flex-col space-y-36 items-center justify-center">
                            <div class="mb-6 text-center">
                                <p class="text-3xl font-normal text-[#0db8bc]">
                                    "Reach and engage your audiences <br> in many ways of purposes!"
                                </p>
                            </div>
                            <img src="{{ asset('images/10/messenger-logo.png') }}" alt="Octoverse Messenger Logo"
                                class="w-60 h-auto mx-auto">
                        </div>
                        <div class="self-end px-12">

                            <div class="relative">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset('images/10/messenger.png') }}" alt="Messenger 2 logo"
                                        class="w-96 h-auto">
                                </div>
                                <img src="{{ asset('images/10/2.png') }}" alt="Planet logo"
                                    class="absolute right-0 bottom-0 w-16 h-auto">
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
</body>

</html>
