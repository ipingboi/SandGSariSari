
<x-layout>
    {{-- Hero Section --}}

    <div id="default-carousel" class="relative w-full " data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-3/4 overflow-hidden rounded-lg ">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/promo1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/promo1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/promo1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 4 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/promo1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 5 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <img src="images/promo1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
    </div>

   

    

    <!-- Dropdown -->

    <div class="container mx-auto">
      <h4
        class="m-5 font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-3xl "
      >
        Product Category
      </h4>
    </div>
    <div class="flex container mx-auto p-5 mt-5">
      <div
        id="dropdown-categories"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 "
      ></div>
      <select
        id="categories"
        class="border border-pink-600 text-gray-900 text-sm rounded-lg border-pink-600 border-s-2 focus:ring-red-600 focus:border-pink-600 block w-full p-2.5"
      >
        <option selected>Choose a category</option>
        <option>Canned Goods</option>
        <option>Snacks</option>
        <option>Cigarettes</option>
        <option>Beverages</option>
        <option>Personal Care</option>
        <option>Dairy</option>
        <option>Other</option>
      </select>
    </div>

    <!-- Bestsellers -->
    <div class="container mx-auto">
      <h1
        class="m-5 font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-3xl dark:text-white"
      >
        Bestsellers
      </h1>
    </div>
    <div class="container my-12 mx-auto px-4 md:px-12">
      <div class="flex flex-wrap -mx-1 lg:-mx-4">
       
          
          @unless(count($products)==0)
          @foreach ($products as $product)
          <x-product-card :product="$product"/>
          @endforeach
           
          @else
              <p>No products found</p>
          @endunless
          
          
      </div>
    </div>
   

    <!-- New Arrival -->
    <div class="container mx-auto">
      <h1
        class="m-5 font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-3xl dark:text-white"
      >
        New Items
      </h1>
    </div>
    <div class="container my-12 mx-auto px-4 md:px-12">
      <div class="flex flex-wrap -mx-1 lg:-mx-4">
        @unless(count($products)==0)
        @foreach ($products as $product)
        <x-product-card :product="$product"/>
        @endforeach
         
        @else
            <p>No products found</p>
        @endunless
        
      </div>
    </div>

  </x-layout>
