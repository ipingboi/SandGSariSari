<meta charset="UTF-8" />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <link
      rel="icon"
      href="images/favicon.ico"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>S&G Sari-Sari Store</title>
  </head>
  <body>
    
    <nav class="text-white border-gray-200 bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('images/logo.png')}}" class="h-8" alt="S&G Logo"  />
            
        </a>
        <div class="flex md:order-1">
        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-pink-400  hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 me-1">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            <span class="sr-only">Search</span>
        </button>
        <div class="relative hidden md:block">
          <form class="w-96 mt-3">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-pink-600 focus:border-pink-600 " placeholder="Search..." required>
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
            </div>
        </form>
        </div>
        <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-pink-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-search" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        </div>
      
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-pink-400 border border-gray-300 rounded-lg bg-gray-50 focus:ring-pink-400 focus:border-pink-600 " placeholder="Search...">
            </div>
            
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 bg-gray-900 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-dark-700">
            <li>
                <a href="/" class="block py-2 px-3 text-pink-400 hover:text-pink-600 rounded md:bg-transparent md:text-pink-400 md:p-0 " aria-current="page"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li>
                <a href="/aboutus" class="block py-2 px-3 text-pink-400 rounded hover:text-pink-600 md:hover:bg-transparent md:hover:text-pink-600 md:p-0 "><i class="fa-solid fa-address-card"></i> About us</a>
            </li>
            
            <li>
                <a href="/register" class="block py-2 px-3 text-pink-400 rounded hover:text-pink-600 md:hover:bg-transparent md:hover:text-pink-600 md:p-0 0"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="block py-2 px-3 text-pink-400 rounded hover:text-pink-600 md:hover:bg-transparent md:hover:text-pink-600 md:p-0 0"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-pink-400 rounded hover:text-pink-600 md:hover:bg-transparent md:hover:text-pink-600 md:p-0 0"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
            </li>
        </ul>
      </div>
      </div>
    </nav>

      <main>
        {{$slot}}
      </main>

      <!-- Footer -->

      <footer class="bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
          <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
              <a
                href="/"
                class="flex items-center"
              >
                <img
                  src="{{asset('images/Asset-2@300x-pink-outer-glow.png')}}"
                  alt="S&R Logo"
                  width="300"
                />
              </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                <h2
                  class="mb-6 text-sm font-semibold text-pink-400 uppercase"
                >
                  Contact Us
                </h2>
                <ul class="text-pink-400 font-medium">
                  <li class="mb-4">
                    <a
                      href=""
                      class="hover:underline"
                      >Phone Number</a
                    >
                  </li>
                  <li>
                    <a
                      href=""
                      class="hover:underline"
                      >Email Address</a
                    >
                  </li>
                </ul>
              </div>
              <div>
                <h2
                  class="mb-6 text-sm font-semibold text-pink-400 uppercase "
                >
                  About Us
                </h2>
                <ul class="text-pink-400 font-medium">
                  <li class="mb-4">
                    <a
                      href="https://github.com/themesberg/flowbite"
                      class="hover:underline"
                      >FAQs</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://discord.gg/4eeurUVvTy"
                      class="hover:underline"
                      >Social Media</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <hr
            class="my-6 border-red-300 sm:mx-auto dark:border-gray-700 lg:my-8"
          />
          <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-pink-400 sm:text-center "
              >© 2023
              <a
                href="/"
                class="hover:underline"
                >S&G Sari Sari Store</a
              >. All Rights Reserved.
            </span>
          </div>
        </div>
      </footer>
      <x-flash-message />
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
  </html>