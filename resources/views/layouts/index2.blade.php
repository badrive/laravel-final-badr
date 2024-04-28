<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/index.js'])
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
</head>

<body class="bg-black text-[#e8e8e8]">

    <header
        class=' flex shadow-md py-4 px-4 sm:px-10 bg-black bg-opacity-50 font-sans min-h-[70px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center justify-between gap-4 w-full'>
            <a href="javascript:void(0)"><img class="w-16" src="{{ asset('assets/img/sushilogo.png') }}" alt="logo"
                    class='w-36' />
                <p class="text-white"><span class="font-bold">SUDO</span>shi</p>
            </a>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                                class='w-36' />
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'>
                        <a href="{{ route('home.index') }}"
                            class='hover:text-[#951f1f] text-[#951f1f] font-bold block text-base'>Home</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href="{{ route('menu.index') }}"
                            class='hover:text-[#951f1f] text-[#e8e8e8] font-bold block text-base'>Menu</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href="{{ route('reservation.index') }}"
                            class='hover:text-[#951f1f] text-[#e8e8e8] font-bold block text-base'>Reservation</a>
                    </li>
                    {{-- <li class='max-lg:border-b max-lg:py-3 px-3'><a href="{{ route('about.index') }}"
                            class='hover:text-[#951f1f] text-[#e8e8e8] font-bold block text-base'>About</a>
                    </li> --}}
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href="{{ route('contact.index') }}"
                            class='hover:text-[#951f1f] text-[#e8e8e8] font-bold block text-base'>Contact</a>
                    </li>
                </ul>
            </div>

            


            

                <div class='flex items-center max-lg:ml-auto space-x-5'>

                    @guest

                        <a href="{{ route('login') }}" >Login</a>
                        <a class="bg-[#951f1f] rounded-lg p-2" href="{{ route('register') }}" >register</a>
                

                    @endguest

                    @auth

                    

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                            class="cursor-pointer hover:fill-[#951f1f] fill-[#e8e8e8] inline">
                            <circle cx="10" cy="7" r="6" data-original="#000000" />
                            <path
                                d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                data-original="#000000" />
                        </svg>
                        </x-responsive-nav-link>
                    </form>
                        

                        <span class="relative">
                            
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                    class="cursor-pointer hover:fill-[#951f1f] fill-[#e8e8e8] inline" viewBox="0 0 512 512">
                                    <path
                                        d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
                                        data-original="#000000"></path>
                                </svg>
                            {{-- <span
                                class="absolute left-auto -ml-1 top-0 rounded-full bg-red-500 px-1 py-0 text-xs text-white">0</span> --}}
                        </span>

                    @endauth


                    <button id="toggleOpen" class='lg:hidden !ml-7'>
                        <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            


        </div>
    </header>

    @yield('content')

    <footer class="bg-black py-8 px-10 font-[sans-serif] border-t-2 border-red-500">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="lg:flex lg:items-center">
                <a href="javascript:void(0)">
                    <img class="w-28" src="{{ asset('assets/img/sushilogo.png') }}" alt="logo" class="w-48" />
                </a>
            </div>
            <div class="lg:flex lg:items-center">
                <ul class="flex space-x-6">
                    <li>
                        <a href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-300 hover:fill-white w-7 h-7"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7v-7h-2v-3h2V8.5A3.5 3.5 0 0 1 15.5 5H18v3h-2a1 1 0 0 0-1 1v2h3v3h-3v7h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-300 hover:fill-white w-7 h-7"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M21 5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm-2.5 8.2v5.3h-2.79v-4.93a1.4 1.4 0 0 0-1.4-1.4c-.77 0-1.39.63-1.39 1.4v4.93h-2.79v-8.37h2.79v1.11c.48-.78 1.47-1.3 2.32-1.3 1.8 0 3.26 1.46 3.26 3.26zM6.88 8.56a1.686 1.686 0 0 0 0-3.37 1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68zm1.39 1.57v8.37H5.5v-8.37h2.77z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                class="fill-gray-300 hover:fill-white w-7 h-7" viewBox="0 0 24 24">
                                <path
                                    d="M22.92 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.83 4.5 17.72 4 16.46 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98-3.56-.18-6.73-1.89-8.84-4.48-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.9 20.29 6.16 21 8.58 21c7.88 0 12.21-6.54 12.21-12.21 0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-6 text-white">Contact Us</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Email</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Phone</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Address</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-6 text-white">Information</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">About Us</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Terms &amp;
                            Conditions</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class='text-gray-300 text-sm mt-8'>© 2024<a href='https://readymadeui.com/' target='_blank'
                class="hover:underline mx-1">SUDOsushi</a>All Rights Reserved.
        </p>
    </footer>

</body>

</html>
