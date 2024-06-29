<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RIZABAL & ASOCIADOS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .mega-menu {
            opacity: 0;
            visibility: hidden;
            z-index: -900;
            left: 0;
            position: absolute;
            text-align: left;
            width: 100%;
            transition: all 0.15s linear 0s;
        }



        /* #hoverable Class Styles */
        .hoverable {
            position: static;
        }

        .hoverable>a:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .hoverable:hover .mega-menu {
            opacity: 1;
            visibility: visible;
            z-index: 900;
        }


        /* #toggle Class Styles */

        .toggleable>label:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .toggle-input {
            display: none;
        }

        .toggle-input:not(checked)~.mega-menu {
            opacity: 0;
            visibility: hidden;
            z-index: -900;
        }

        .toggle-input:checked~.mega-menu {
            opacity: 1;
            visibility: visible;
            z-index: 900;
        }

        .toggle-input:checked+label {
            color: white;
            background: rgb(3, 102, 114);
            /*@apply bg-teal-700 */
        }

        .toggle-input:checked~label:after {
            content: "\25B2";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="relative bg-white border-b-2 border-gray-300 text-gray-900">
        <div class="container mx-auto flex justify-between">
            <div class="relative block p-4 lg:p-6 text-xl text-neutral-400 font-bold">
                <a href="#" class="hover:text-blue-800">RIZABAL & ASOCIADOS</a>
            </div>
            <ul class="flex">

                <!--Regular Link-->
                <li class="hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Infrestuctura</a>
                </li>

                <!--Toggleable Link-->
                <li class="toggleable hover:bg-blue-800 hover:text-white">
                    <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
                    <label for="toggle-one" class="block cursor-pointer py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Puentes</label>
                    <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <h3 class="font-bold text-xl text-white text-bold mb-2">Bespin</h3>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Lando Calrissian</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Nien Nunb</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Mon Mothma</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Wedge Antilles</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Admiral Gial Ackbar</a>
                                </li>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <h3 class="font-bold text-xl text-white text-bold mb-2">Ahch-To</h3>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Obi-Wan Kenobi</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Yoda</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Emperor Palpatine</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Han Solo</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Anakin Skywalker/Darth Vader</a>
                                </li>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                <h3 class="font-bold text-xl text-white text-bold">Coruscant</h3>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Luke Skywalker</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Princess Leia</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Chewbacca</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">R2-D2</a>
                                </li>
                                <li>
                                    <a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">C-3PO</a>
                                </li>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                <h3 class="font-bold text-xl text-white text-bold mb-2">Endor</h3>
                                <li class="pt-3">
                                    <img src="https://placehold.it/205x172">
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- end Toggleable Link-->


                <!--Hoverable Link-->
                <li class="hoverable hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white">Muro de contencion</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            <div class="w-full text-white mb-8 text-center">
                                <h2 class="font-bold text-2xl">Listen, why don’t you wait out by the speeder.</h2>
                                <p>our droids. They’ll have to wait outside. We don’t want them here.</p>
                            </div>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Tatooine</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Cantonica</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Yavin 4</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Alderaan</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>
                <!--end Hoverable Link-->
                <!-- Software educativo -->
                <li class="hoverable hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white">Software Educativo</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            <div class="w-full text-white mb-8 text-center">
                                <h2 class="font-bold text-2xl">Listen, why don’t you wait out by the speeder.</h2>
                                <p>our droids. They’ll have to wait outside. We don’t want them here.</p>
                            </div>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Tatooine</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Cantonica</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Yavin 4</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Alderaan</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- Servicios -->
                <li class="hoverable hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white">Servicios</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            <div class="w-full text-white mb-8 text-center">
                                <h2 class="font-bold text-2xl">Listen, why don’t you wait out by the speeder.</h2>
                                <p>our droids. They’ll have to wait outside. We don’t want them here.</p>
                            </div>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Tatooine</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Cantonica</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Yavin 4</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Alderaan</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>
                <!--  Contactenos-->
                <li class="hoverable hover:bg-blue-800 hover:text-white">
                    <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white">Contactenos</a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
                        <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                            <div class="w-full text-white mb-8 text-center">
                                <h2 class="font-bold text-2xl">Listen, why don’t you wait out by the speeder.</h2>
                                <p>our droids. They’ll have to wait outside. We don’t want them here.</p>
                            </div>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Tatooine</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Cantonica</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Yavin 4</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                                    </svg>
                                    <h3 class="font-bold text-xl text-white text-bold mb-2">Alderaan</h3>
                                </div>
                                <p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
                                <div class="flex items-center py-3">
                                    <svg class="h-6 pr-3 fill-current text-teal-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" />
                                    </svg>
                                    <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <!-- Section Nuestro Software -->
            <div class="mt-16 text-center text-sky-400">
                <label class="text-white" for="">Nuestro Software</label>
                <br>
                <label class="text-sky-400" for="">Explore nuesto conjunto completo de herramientas de diseño y análisis estructural</label>
            </div>

            <!-- Section Enfoque del proyecto -->
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNdnBQ_qSYXFa8e3Lbb0Qu5AQp-UuZ3aI4Vg&s" alt="" width="500px" height="500px">
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">Analisis Estructural</h2>
                        </div>
                    </a>
                    <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTCvf5b2M8cNr0jD8xmwQ4qZI0zEsuLM7ZcwSe-0lrIbGFpMgKo" alt="" width="500px" height="500px">
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">Diseño Estructural</h2>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Section Oficios planos y memora de calculos -->
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFZErT_Br2rP1-iNYqAeUvyNNSZDOVORpZ-w&s" alt="" width="500px" height="500px">
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">Planos</h2>
                        </div>
                    </a>
                    <a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFZErT_Br2rP1-iNYqAeUvyNNSZDOVORpZ-w&s" alt="" width="500px" height="500px">
                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">Memoria de calculos</h2>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Section nuestros aliados -->
            <div class="mt-16  bg-gray-100 text-center">
                <label class="text-white" for="">Nuestro Aliados</label>
                <br>
                <label class="text-sky-400" for="">Proyecto reales en todo el mundo que utilizaron el software de ingeneria</label>
            </div>

            <!-- section contactenos -->
            <div class="mt-16">

            </div>

        </div>
    </div>
</body>

</html>