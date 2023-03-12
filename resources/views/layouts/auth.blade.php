<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenBook</title>
    <meta name="description" content="explore various books that have been published in the world only in openbook" />
    <meta name="author" content="Galih Trisna" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{asset('index/assets/favicon.svg')}}" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="{{ asset('auth/script/tailwind-config.js')}}"></script>

    <style type="text/tailwindcss">
        .flex::before,
        .flex::after {
            display: none !important;
        }
    </style>
</head>

<body class="font-poppins">
    <!-- Desktop Only -->
    <div class="mx-auto max-w-screen min-h-screen bg-black text-white md:px-10 px-3">
        <div class="fixed top-[-50px] hidden lg:block">
            <img src="{{ asset('auth/images/signup-image.webp')}}"
                class="hidden laptopLg:block laptopLg:max-w-[450px] laptopXl:max-w-[640px]" alt="">
        </div>
        <div class="py-24 flex laptopLg:ml-[680px] laptopXl:ml-[870px]">
            @yield('content') 
            {{-- <div>
                <img src="{{ asset('auth/images/moonton-white.svg')}}" alt="">
                <div class="my-[70px]">
                    <div class="font-semibold text-[26px] mb-3">
                        Welcome Back
                    </div>
                    <p class="text-base text-[#767676] leading-7">
                        Explore our new movies and get <br>
                        the better insight for your life
                    </p>
                </div>
                <form class="w-[370px]">
                    <div class="flex flex-col gap-6">
                        <div>
                            <label class="text-base block mb-2">Email Address</label>
                            <input type="email" name="email"
                                class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-alerange focus:outline-none"
                                placeholder="Email Address" />
                        </div>
                        <div>
                            <label class="text-base block mb-2">Password</label>
                            <input type="password" name="password"
                                class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-alerange focus:outline-none"
                                placeholder="Password" />
                        </div>
                    </div>
                    <div class="grid space-y-[14px] mt-[30px]">
                        <button type="submit" class="rounded-2xl bg-alerange py-[13px] text-center">
                            <span class="text-base font-semibold">
                                Start Watching
                            </span>
                        </button>
                        <a href="#" class="rounded-2xl border border-white py-[13px] text-center">
                            <span class="text-base text-white">
                                Create New Account
                            </span>
                        </a>
                    </div>
                </form>
            </div> --}}
        </div>
    </div>
</body>

</html>