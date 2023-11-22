
 <x-layout>
    <div class="container mx-auto flex flex-wrap w-full pt-10 pb-20">
        <div class="w-80 bg-white rounded p-3">
          <div class="flex items-center space-x-4 p-2 mb-5">
            <img
              class="h-12 rounded-full"
              src="./images/Juan-Karlos-Labajo-2.webp"
              alt="James Bhatta"
            />
            <div>
              <h4
                class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide"
              >
                Sheen Irving Suba
              </h4>
              <span class="text-sm tracking-wide flex items-center space-x-1">
                <svg
                  class="h-4 text-red-300"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                  /></svg
                ><span class="text-gray-600">Verified</span>
              </span>
            </div>
          </div>
          <ul class="space-y-2 text-sm">
            <li>
              <a
                href="/admin"
                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline"
              >
                <span class="text-gray-600">
                  <svg
                    class="h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    />
                  </svg>
                </span>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <button
                type="button"
                class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                aria-controls="dropdown-example"
                data-collapse-toggle="dropdown-example"
              >
                <svg
                  class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
                <span
                  class="flex-1 ml-3 text-left whitespace-nowrap"
                  sidebar-toggle-item
                  >Product Management</span
                >
                <svg
                  sidebar-toggle-item
                  class="w-6 h-6"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
              <ul
                id="dropdown-example"
                class="hidden py-2 space-y-2"
              >
                <li>
                  <a
                    href="#"
                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11"
                    >Add Products</a
                  >
                </li>
                <li>
                  <a
                    href="/manageproduct"
                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11"
                    >Manage Products</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a
                href="#"
                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline"
              >
                <span class="text-gray-600">
                  <svg
                    class="h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
                    />
                  </svg>
                </span>
                <span>Orders</span>
              </a>
            </li>
            <li>
              <a
                href=""
                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline"
              >
                <span class="text-gray-600">
                  <svg
                    class="h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                    />
                  </svg>
                </span>
                <span>Customers</span>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline"
              >
                <span class="text-gray-600">
                  <svg
                    class="h-5"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                    />
                  </svg>
                </span>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>
  
        <div class="w-9/12">
          <section class="flex justify-between max-w-sm sm:max-w-3xl">
            <h2 class="text-4xl font-extrabold dark:text-white">Product Management</h2>
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
              Add Product
            </button>
            
            <!-- Main modal -->
            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New Product
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form method="POST" enctype="multipart/form-data" action="/products" class="p-4 md:p-5">
                          @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="productbrand" class="block mb-2 text-sm font-medium text-gray-900 ">Product Brand</label>
                                    <input type="text" name="productbrand" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-600 focus:border-pink-600 block w-full p-2.5" placeholder="Type product name" required="">
                                    @error('productbrand')
                                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-600 focus:border-pink-600 block w-full p-2.5" placeholder="Php" required="">
                                    @error('price')
                                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-600 focus:border-pink-600 block w-full p-2.5" required="">
                                        <option selected="" value=""></option>
                                        <option value="Canned Goods">Canned Goods</option>
                                        <option value="Detergents">Detergents</option>
                                        <option value="Noodles">Noodles</option>
                                        <option value="Snacks">Snacks</option>
                                    </select>
                                    @error('category')
                                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                  <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Quantity</label>
                                  <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-600 focus:border-pink-600 block w-full p-2.5" placeholder="" required="">
                                  @error('quantity')
                                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                              </div>
                                <div class="col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-600 focus:border-pink-600" placeholder="Write product description here" required=""></textarea>
                                    @error('description')
                                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror                    
                                </div>
                              </div>
                                <div class="mb-6">
                                  <label
                                    for="logo"
                                    class="inline-block text-lg mb-2"
                                  >
                                    Product Image
                                  </label>
                                  <input
                                    type="file"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="logo"
                                  />
                                </div>
                            <button type="submit" class="text-white inline-flex items-center bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-pink-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Add new product
                            </button>
                        </form>
                    </div>
                </div>
            </div> 
          </section>
          <div class="flex">
          <div class="w-3/12 mb-3">
              <p class="my-4 text-lg text-gray-500">
                  Total products
                </p><br>
              <h2 class="text-4xl font-extrabold dark:text-white">12</h2>
          </div>
          <div class="w-3/12 mb-3">
              <p class="my-4 text-lg text-gray-500">
                  Out of stock
                </p><br>
                <h2 class="text-4xl font-extrabold dark:text-white">12</h2>
          </div>
          <div class="w-3/12 mb-3">
              <p class="my-4 text-lg text-gray-500">
                 Total Items
                </p><br>
                <h2 class="text-4xl font-extrabold dark:text-white">12</h2>
          </div>
          <div class="w-3/12 mb-3">
              <p class="my-4 text-lg text-gray-500">
                  Categories
                </p><br>
                <h2 class="text-4xl font-extrabold dark:text-white">12</h2>
          </div>
          </div>
         
  
          <!-- Table Data -->
  
          <div
            class="overflow-x-auto relative shadow-md sm:rounded-lg"
           
          >
            
            <table
              class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
            >
              <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
              >
                <tr>
                  <th
                    scope="col"
                    class="p-4"
                  >
                    <div class="flex items-center">
                      <input
                        id="checkbox-all-search"
                        type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      />
                      <label
                        for="checkbox-all-search"
                        class="sr-only"
                        >checkbox</label
                      >
                    </div>
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Product name
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Variant
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Category
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Price
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Inventory
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Date Added
                  </th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($products as $product)
                  <x-product-table :product="$product"/>
                @endforeach
           
              
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </x-layout>