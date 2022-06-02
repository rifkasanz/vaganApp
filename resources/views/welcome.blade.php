<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Recipe Shift</title>

    </head>
    <body class="antialiased h-screen">
        <nav class="bg-gray-800">
            <div class="max-w-8xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <!--
                    Icon when menu is closed.

                    Heroicon name: outline/menu

                    Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                    Icon when menu is open.

                    Heroicon name: outline/x

                    Menu open: "block", Menu closed: "hidden"
                   -->

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>
                <div class="flex flex-1 items-center justify-center ml-8 sm:items-stretch lg:ml-0">
                <div class="flex-shrink-0 flex items-center text-white font-semibold text-lg">
                    <img class="h-6 w-6 m-2" src="\images\cooking (1).png"/>
                    Recipe Shift
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Food Inspiration</a>

                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About Us</a>
                    </div>
                </div>
                <div class="flex-1 flex justify-end px-2">
                    <div class=" w-full lg:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <!-- Heroicon name: solid/search -->
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                        </div>
                        <input id="search" name="search" class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-900 sm:text-sm" placeholder="Search" type="search">
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Food Inspiration</a>

                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About Us</a>
            </div>
            </div>
        </nav>
      <!-- Hero section -->
      <section class="px-2 sm:px-6 flex h-screen">

             <!-- Recipe list-->
        <div class="w-full bg-white">
            <div class="max-w-2xl max-w-full py-10 px-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="relative group">
                <div class="aspect-[4/4] rounded-lg overflow-hidden bg-gray-100">
                    <img src="\images\likemeat-3sgNkN4wRWI-unsplash.jpg" class="object-center object-cover">
                </div>
                <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900 space-x-8">
                    <h3>
                    <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Veggie Chicken Burger
                    </a>
                    </h3>
                </div>
                <div class="mt-2 text-sm text-gray-500 flex flex-cols-3 justify-between items-center w-full">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center justify-center"><img class="h-8 w-8 mr-2"src="\images\spices.png"/>40 mins</div>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center justify-center"><img class="h-8 w-8 mr-2"src="\images\saucepan.png"/>5 mins</div>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center justify-center font-semibold"><img class="h-8 w-8 mr-2"src="\images\serve.png"/>45 mins</div>
                    </div>
                </div>
                </div>

                <!-- More products... -->

            </div>
        </div>

        <!-- categories -->
        <div class="flex items-start justify-center w-1/4">
            <ul role="list" class="sticky top-0 mt-3 grid grid-cols-1 gap-2 pt-5">
                <li class="col-span-1 flex flex-shrink-0 shadow-sm">
                    <div
                        class="flex-1 flex items-center justify-between  border border-gray-200 bg-white rounded-md overflow-hidden">
                        <div class="flex flex-col lg:flex-row px-2 lg:px-4 py-2 lg:space-x-2 text-sm items-center justify-center">
                            <div class="flex-shrink-0 flex items-center justify-center w-16 rounded-full">
                                <img src="\images\kathi-roll.png" />
                            </div>
                            <div class="flex flex-col items-left justify-center">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Breakfast</a>
                                <p class="text-gray-500 hidden lg:flex">16 Recipes</p>
                            </div>

                        </div>
                        <div class="hidden lg:flex lg:flex-shrink-0 lg:pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-0">
                                <span class="sr-only">Open options</span>

                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex flex-shrink-0 shadow-sm">
                    <div
                        class="flex-1 flex items-center justify-between border border-gray-200 bg-white rounded-md overflow-hidden">
                        <div class="flex flex-col lg:flex-row px-2 lg:px-4 py-2 lg:space-x-2 text-sm items-center">
                            <div class="flex-shrink-0 flex items-center justify-center w-16 rounded-full ">
                                <img src="\images\penne.png" />
                            </div>
                            <div class="flex flex-col items-left justify-center">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Mains</a>
                                <p class="text-gray-500 hidden lg:flex">14 Recipes</p>
                            </div>

                        </div>
                        <div class="flex-shrink-0 pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-0">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex flex-shrink-0 shadow-sm">
                    <div
                        class="flex-1 flex items-center justify-between border border-gray-200 bg-white rounded-md overflow-hidden">
                        <div class="flex flex-col lg:flex-row px-2 lg:px-4 py-2 lg:space-x-2 text-sm items-center">
                            <div class="flex-shrink-0 flex items-center justify-center w-16 rounded-full ">
                                <img src="\images\nuts.png" />
                            </div>
                            <div class="flex flex-col items-left justify-center">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Snacks</a>
                                <p class="hidden lg:flex text-gray-500">16 Recipes</p>
                            </div>

                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:flex-shrink-0 lg:pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-0">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex flex-shrink-0 shadow-sm">
                    <div
                        class="flex-1 flex items-center justify-between border border-gray-200 bg-white rounded-md overflow-hidden">
                        <div class="flex flex-col lg:flex-row px-2 lg:px-4 py-2 lg:space-x-2 text-sm items-center">
                            <div class="flex-shrink-0 flex items-center justify-center w-16 rounded-full ">
                                <img src="\images\coffee.png" />
                            </div>
                            <div class="flex flex-col items-left justify-center">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Dessert</a>
                                <p class="hidden lg:flex text-gray-500">18 Recipes</p>
                            </div>

                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:flex-shrink-0 lg:pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-0">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex flex-shrink-0 shadow-sm">
                    <div
                        class="flex-1 flex items-center justify-between border border-gray-200 bg-white rounded-md overflow-hidden">
                        <div class="flex flex-col lg:flex-row px-2 lg:px-4 py-2 lg:space-x-2 text-sm items-center">
                            <div class="flex-shrink-0 flex items-center justify-center w-16 rounded-full ">
                                <img src="\images\miso.png" />
                            </div>
                            <div class="flex flex-col items-left justify-center">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Soup</a>
                                <p class="hidden lg:flex text-gray-500">16 Recipes</p>
                            </div>

                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:flex-shrink-0 lg:pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-0">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex flex-shrink-0 shadow-sm">
                    <div
                        class="flex-1 flex items-center justify-between border border-gray-200 bg-white rounded-md overflow-hidden ">
                        <div class="flex flex-col lg:flex-row px-2 lg:px-4 py-2 lg:space-x-2 text-sm items-center">
                            <div class="flex-shrink-0 flex items-center justify-center w-16 rounded-full ">
                                <img src="\images\salad (1).png" />
                            </div>
                            <div class="flex flex-col items-left justify-center">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Salad</a>
                                <p class="hidden lg:flex text-gray-500">16 Recipes</p>
                            </div>

                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:flex-shrink-0 lg:pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-0">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex flex-shrink-0 shadow-sm">
                    <div
                        class="flex-1 flex items-center justify-between border border-gray-200 bg-white rounded-md overflow-hidden">
                        <div class="flex flex-col lg:flex-row px-2 lg:px-4 py-2 lg:space-x-2 text-sm items-center">
                            <div class="flex-shrink-0 flex items-center justify-center w-16 rounded-full ">
                                <img src="\images\tea.png" />
                            </div>
                            <div class="flex flex-col items-left justify-center">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Drinks</a>
                                <p class="hidden lg:flex text-gray-500">16 Recipes</p>
                            </div>

                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:flex-shrink-0 lg:pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-0">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>

                <li class="col-span-1 flex flex-shrink-0 shadow-sm">
                    <div
                        class="flex-1 flex items-center justify-between border border-gray-200 bg-white rounded-md overflow-hidden">
                        <div class="flex flex-col lg:flex-row px-2 lg:px-4 py-2 lg:space-x-2 text-sm items-center">
                            <div class="flex-shrink-0 flex items-center justify-center w-16 rounded-full ">
                                <img src="\images\trophy.png" />
                            </div>
                            <div class="flex flex-col w-full items-left justify-center">
                                <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Big Hits</a>
                                <p class="hidden lg:flex text-gray-500">16 Recipes</p>
                            </div>

                        </div>
                        <div class="hidden lg:flex lg:flex-1 lg:flex-shrink-0 lg:pr-2">
                            <button type="button"
                                class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-0">
                                <span class="sr-only">Open options</span>
                                <!-- Heroicon name: solid/dots-vertical -->
                                <svg fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
      </section>
      <!-- end of categories section -->

      <!-- end of hero section -->


      <!-- footer -->
      <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
          <div class="flex justify-center space-x-6 md:order-2">
            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
              </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Instagram</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
              </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
              <span class="sr-only">Twitter</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
              </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Pinterest</span>
                <svg fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                </svg>
              </a>

              <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Tiktok</span>
                <svg fill="currentColor" class="h-5 w-5 mt-0.5" viewBox="0 0 16 16">
                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                  </svg>
              </a>

              <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Youtube</span>
                <svg fill="currentColor" class="h-6 w-6" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                  </svg>
              </a>
          </div>
          <div class="mt-8 md:mt-0 md:order-1">
            <p class="text-center text-base text-gray-400">&copy; 2022 DreamByte Labs, Inc. All rights reserved.</p>
          </div>
        </div>
      </footer>
      <!-- End of footer -->

    </body>
</html>
