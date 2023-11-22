@props(['product'])
<x-layout>
    <section class="py-20 overflow-hidden bg-white font-poppins dark:bg-gray-800">
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 ">
                  <!-- Product Images -->
                    <div class="sticky top-0 z-50 overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10" style="height:450px;">
                            <img src="{{$product->logo ? asset('storage/' . $product->logo) : asset('images/4800016642029.jpg')}}"
                                alt="" class="object-contain w-full h-full ">
                        </div>
                    </div>
                </div>
                <!-- Details -->
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20">
                        <div class="pb-6 mb-8 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-lg font-medium text-pink-400">Bestseller</span>
                            <h2 class="max-w-xl mt-2 mb-6 text-xl font-bold dark:text-gray-300 md:text-4xl">
                              {{$product->productbrand}} ({{$product->description}})
                            </h2>
                            <p class="inline-block text-2xl font-semibold text-gray-700 dark:text-gray-400 ">
                                <span>₱{{$product->price}}</span>
                            </p>
                        </div>
                        <!-- Variations -->
                        <div class="mb-8">
                            <h2 class="mb-2 text-xl text-pink-400 font-bold ">
                                Also available in</h2>
                                <div class="flex-wrap hidden md:flex ">
                                  <div class="w-1/2 py-2 sm:w-1/4">
                                      <a href="#"
                                          class="block border dark:border-gray-700 dark:hover:border-gray-600 hover:border-red-300 ">
                                          <img src="{{$product->logo ? asset('storage/' . $product->logo) : asset('images/4800016642029.jpg')}}"
                                              alt="" class="object-cover w-full lg:h-32">
                                      </a>
                                  </div>
                                  <div class="w-1/2 py-2 sm:w-1/4">
                                      <a href="#"
                                          class="block border dark:border-gray-700 dark:hover:border-gray-600 hover:border-red-300">
                                          <img src="{{$product->logo ? asset('storage/' . $product->logo) : asset('images/4800016642029.jpg')}}"
                                              alt="" class="object-cover w-full lg:h-32">
                                      </a>
                                  </div>
                                  <div class="w-1/2 py-2 sm:w-1/4">
                                      <a href="#"
                                          class="block border dark:border-gray-700 dark:hover:border-gray-600 hover:border-red-300">
                                          <img src="{{$product->logo ? asset('storage/' . $product->logo) : asset('images/4800016642029.jpg')}}"
                                              alt="" class="object-cover w-full lg:h-32">
                                      </a>
                                  </div>
                                  <div class="w-1/2 py-2 sm:w-1/4">
                                      <a href="#"
                                          class="block border dark:border-gray-700 dark:hover:border-gray-600 hover:border-red-300">
                                          <img src="{{$product->logo ? asset('storage/' . $product->logo) : asset('images/4800016642029.jpg')}}"
                                              alt="" class="object-cover w-full lg:h-32">
                                      </a>
                                  </div>
                              </div>
                        </div>
                        <div class="flex flex-wrap items-center ">
                            <div class="mb-4 mr-4 lg:mb-0">
                                <div class="w-28">
                                    <div class="relative flex flex-row w-full h-10 bg-transparent rounded-lg">
  
                                        <input type="number"
                                            class="flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-100 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black"
                                            placeholder="1">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 mr-4 lg:mb-0">
                                <button
                                    class="w-full h-10 p-2 mr-4 bg-pink-400 text-gray-50 hover:bg-pink-600">
                                    Buy Now</button>
                            </div>
                            <div class="mb-4 mr-4 lg:mb-0">
                                <button
                                    class="flex items-center justify-center w-full h-10 p-2 text-gray-50 bg-pink-400 border-gray-300 lg:w-11 hover:bg-pink-600 hover:border-pink-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
  
      <!-- Suggested Products -->
  
      <div class="container mx-auto">
        <h1 class="m-5 font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-3xl dark:text-white">Suggested Products</h1>
      </div>
      <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
  <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/5">
    <article class="overflow-hidden rounded-lg shadow-lg">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="/images/4800016642029.jpg">
        </a>
        <div class="px-5 pb-5">
          <a href="#">
            <h5
              class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"
            >
              Chippy (Red)
            </h5>
          </a>
          </div>
        <div class="flex items-center justify-between p-5">
          <span class="text-3xl font-bold text-gray-900 dark:text-white"
            >₱10.00</span
          >
          <a
            href="#"
            class="text-white bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center "
            >Add to cart</a
          >
        </div>
  
    </article>
  </div>
  <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/5">
    <article class="overflow-hidden rounded-lg shadow-lg">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="/images/4800016642029.jpg">
        </a>
        <div class="px-5 pb-5">
          <a href="#">
            <h5
              class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"
            >
              Chippy (Red)
            </h5>
          </a>
          </div>
        <div class="flex items-center justify-between p-5">
          <span class="text-3xl font-bold text-gray-900 dark:text-white"
            >₱10.00</span
          >
          <a
            href="#"
            class="text-white bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >Add to cart</a
          >
        </div>
  
    </article>
  </div>
  <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/5">
    <article class="overflow-hidden rounded-lg shadow-lg">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="/images/4800016642029.jpg">
        </a>
        <div class="px-5 pb-5">
          <a href="#">
            <h5
              class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"
            >
              Chippy (Red)
            </h5>
          </a>
          </div>
        <div class="flex items-center justify-between p-5">
          <span class="text-3xl font-bold text-gray-900 dark:text-white"
            >₱10.00</span
          >
          <a
            href="#"
            class="text-white bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >Add to cart</a
          >
        </div>
  
    </article>
  </div>
  <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/5">
    <article class="overflow-hidden rounded-lg shadow-lg">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="/images/4800016642029.jpg">
        </a>
        <div class="px-5 pb-5">
          <a href="#">
            <h5
              class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"
            >
              Chippy (Red)
            </h5>
          </a>
          </div>
        <div class="flex items-center justify-between p-5">
          <span class="text-3xl font-bold text-gray-900 dark:text-white"
            >₱10.00</span
          >
          <a
            href="#"
            class="text-white bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >Add to cart</a
          >
        </div>
  
    </article>
  </div>
  <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/5">
    <article class="overflow-hidden rounded-lg shadow-lg">
        <a href="#">
            <img alt="Placeholder" class="block h-auto w-full" src="/images/4800016642029.jpg">
        </a>
        <div class="px-5 pb-5">
          <a href="#">
            <h5
              class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"
            >
              Chippy (Red)
            </h5>
          </a>
          </div>
        <div class="flex items-center justify-between p-5">
          <span class="text-3xl font-bold text-gray-900 dark:text-white"
            >₱10.00</span
          >
          <a
            href="#"
            class="text-white bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >Add to cart</a
          >
        </div>
  
    </article>
  </div>
</div>
</div>
</x-layout>