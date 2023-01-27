<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    </head>
    <body class="antialiased">
        <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <nav class="w-full">
                <div class="container mx-auto px-6 flex items-center justify-between">
                    <div class="flex items-center" aria-label="Home" role="img">
                        <img class="cursor-pointer w-8 sm:w-auto" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg1.svg" alt="logo"/>     
                        <p class="ml-2 lg:ml-4 text-base lg:text-2xl font-bold text-gray-800 dark:text-white">The EMS</p>
                    </div>
                    <div>
                        <button onclick="toggleMenu(true)" class=" dark:bg-white rounded sm:block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                            <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg4.svg" alt="show"/>
                           
                        </button>
                        <div id="menu" class="md:block lg:block hidden">
                            <button onclick="toggleMenu(false)" class=" dark:bg-white rounded block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 fixed focus:outline-none focus:ring-2 focus:ring-gray-500 bg-white md:bg-transparent z-30 top-0 mt-3">
                                <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg5.svg" alt="hide"/>
                               
                            </button>
                            @if (Route::has('login'))

                            <ul class="flex text-3xl md:text-base items-center py-8 md:flex flex-col md:flex-row justify-center fixed md:relative top-0 bottom-0 left-0 right-0 bg-white md:bg-transparent  z-20">
                            @auth

                             <a >  <li class="text-gray-600 text-lg hover:text-gray-800 dark:text-white cursor-pointer md:ml-10 pt-10 md:pt-0">
                                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                                </li></a> 
                                @else

                              <a > <li class="text-gray-600 text-lg hover:text-gray-800 dark:text-white cursor-pointer md:ml-10 pt-10 md:pt-0">
                                    <a href="{{ route('login') }}">Login</a>
                                </li></a> 
                                @if (Route::has('register'))

                               <a ></a> <li class="text-gray-600 text-lg hover:text-gray-800 dark:text-white cursor-pointer md:ml-10 pt-10 md:pt-0">
                                    <a  href="{{ route('register') }}">Register</a>
                                </li>
                                @endif

                                @endauth

                            </ul>
                            @endif

                        </div>
                    </div>
                </div>
            </nav>
            <div class="w-full px-6 mb-16">
                <div class="mt-8 relative rounded-lg bg-indigo-700 container mx-auto flex flex-col items-center pt-12 sm:pt-24 pb-24 sm:pb-26 md:pb-26 lg:pb-26 xl:pb-26">
                   <img class="mr-2 lg:mr-12 mt-2 lg:mt-12 absolute right-0 top-0"  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg2.svg" alt="bg"/>
                   <img class="ml-2 lg:ml-12 mb-2 lg:mb-12 absolute bottom-0 left-0" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg3.svg" alt="bg"/>
                    <div class="w-11/12 sm:w-2/3 mb-5 sm:mb-10">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-white font-bold leading-tight">Futa Enterpreneur Database Management System</h1>
                    </div>
                    <div class="flex justify-center items-center mb-10 sm:mb-20">
                       <a href="{{ url('/register') }}"> <button class="hover:text-white hover:bg-transparent lg:text-xl hover:border-white border bg-white transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 ring-offset-indigo-700	focus:ring-white rounded text-indigo-700 px-4 sm:px-8 py-1 sm:py-3 text-sm">Get Started</button></a>
                       <a href="{{ url('/login') }}">  <button class="hover:bg-white hover:text-indigo-600 lg:text-xl hover:border-indigo-600 ml-3 sm:ml-6 bg-transparent transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 ring-offset-indigo-700 focus:ring-white hover:bg-indigo-700-800 rounded border border-white text-white px-4 sm:px-8 py-1 sm:py-3 text-sm">Login</button></a>
                    </div>
                </div>
                <!-- <div class="container mx-auto flex justify-center md:-mt-56 -mt-20 sm:-mt-40">
                    <div class="relative sm:w-2/3 w-11/12">
                        <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/hero/h_2.png" alt="Sample Page" role="img"  />
                    </div>
                </div> -->
            </div>
        
   

            
        </div>
 </body>
</html>
