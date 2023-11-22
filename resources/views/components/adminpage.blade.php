<x-layout>
    <div class="container mx-auto flex flex-wrap w-full pb-20">
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
          <main class="p-6 sm:p-10 space-y-6">
              <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="mr-6">
                  <h1 class="text-4xl font-semibold mb-2">Overview</h1>
                </div>
              </div>
              <section class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                  <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </div>
                  <div>
                    <span class="block text-2xl font-bold">62</span>
                    <span class="block text-gray-500">Clients</span>
                  </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                  <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                  </div>
                  <div>
                    <span class="block text-2xl font-bold">10,000</span>
                    <span class="block text-gray-500">Sales</span>
                  </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                  <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                    </svg>
                  </div>
                  <div>
                    <span class="inline-block text-2xl font-bold">9</span>
                    <span class="inline-block text-xl text-gray-500 font-semibold">(14%)</span>
                    <span class="block text-gray-500">Daily Performace</span>
                  </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                  <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-full mr-6">
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                  </div>
                  <div>
                    <span class="block text-2xl font-bold">83%</span>
                    <span class="block text-gray-500">Orders Completed</span>
                  </div>
                </div>
              </section>
            </main>
            <table
              class="rounded shadow-xl w-full text-sm text-left text-gray-500 dark:text-gray-400"
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
                    To Deliver
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    To Recieve
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Completed
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Cancelled
                  </th>
                  <th
                    scope="col"
                    class="py-3 px-6"
                  >
                    Return Refund
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="p-4">
                    <div class="flex items-center">
                      <input
                        type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      />
                    </div>
                  </td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                </tr>
                <tr>
                  <td class="p-4">
                    <div class="flex items-center">
                      <input
                        type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      />
                    </div>
                  </td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                </tr>
                <tr>
                  <td class="p-4">
                    <div class="flex items-center">
                      <input
                        type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      />
                    </div>
                  </td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  </td>
                </tr>
                <tr>
                  <td class="p-4">
                    <div class="flex items-center">
                      <input
                        type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                      />
                    </div>
                  </td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                  <td class="py-3 px-6"></td>
                </tr>
              </tbody>
            </table>
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
              <div class="text-gray-500 rounded shadow-xl py-5 px-5 w-full lg:w-1/2" x-data="{chartData:chartData()}" x-init="chartData.fetch()">
                  <div class="flex flex-wrap items-end">
                      <div class="flex-1">
                          <h3 class="text-lg font-semibold leading-tight">Income</h3>
                      </div>
                      <div class="relative" @click.away="chartData.showDropdown=false">
                          <button class="text-xs hover:text-gray-300 h-6 focus:outline-none" @click="chartData.showDropdown=!chartData.showDropdown">
                              <span x-text="chartData.options[chartData.selectedOption].label"></span><i class="ml-1 mdi mdi-chevron-down"></i>
                          </button>
                          <div class="bg-gray-700 shadow-lg rounded text-sm absolute top-auto right-0 min-w-full w-32 z-30 mt-1 -mr-3" x-show="chartData.showDropdown" style="display: none;" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
                              <span class="absolute top-0 right-0 w-3 h-3 bg-gray-700 transform rotate-45 -mt-1 mr-3"></span>
                              <div class="bg-gray-700 rounded w-full relative z-10 py-1">
                                  <ul class="list-reset text-xs">
                                      <template x-for="(item,index) in chartData.options">
                                          <li class="px-4 py-2 hover:bg-gray-600 hover:text-white transition-colors duration-100 cursor-pointer" :class="{'text-white':index==chartData.selectedOption}" @click="chartData.selectOption(index);chartData.showDropdown=false">
                                              <span x-text="item.label"></span>
                                          </li>
                                      </template>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="flex flex-wrap items-end mb-5">
                      <h4 class="text-2xl lg:text-3xl text-white font-semibold leading-tight inline-block mr-2" x-text="'$'+(chartData.data?chartData.data[chartData.date].total.comma_formatter():0)">0</h4>
                      <span class="inline-block" :class="chartData.data&&chartData.data[chartData.date].upDown<0?'text-red-500':'text-green-500'"><span x-text="chartData.data&&chartData.data[chartData.date].upDown<0?'▼':'▲'">0</span> <span x-text="chartData.data?chartData.data[chartData.date].upDown:0">0</span>%</span>
                  </div>
                  <div>
                      <canvas id="chart" class="w-full"></canvas>
                  </div>
          </div>   
  
            <table class="table rounded shadow-xl py-5 px-5 lg:w-1/2 border-separate space-y-6 text-sm">
              <thead>
                <tr>
                  <th class="p-3">Item</th>
                  <th class="p-3 text-left">Category</th>
                  <th class="p-3 text-left">Price</th>
                  <th class="p-3 text-left">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="p-3">
                    <div class="flex align-items-center">
                      <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                      <div class="ml-3">
                        <div class="">Appple</div>
                        <div class="text-gray-500">mail@rgmail.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="p-3">
                    Technology
                  </td>
                  <td class="p-3 font-bold">
                    200.00$
                  </td>
                  <td class="p-3">
                    <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                  </td>
                </tr>
                <tr>
                  <td class="p-3">
                    <div class="flex align-items-center">
                      <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="unsplash image">
                      <div class="ml-3">
                        <div class="">Realme</div>
                        <div class="text-gray-500">mail@rgmail.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="p-3">
                    Technology
                  </td>
                  <td class="p-3 font-bold">
                    200.00$
                  </td>
                  <td class="p-3">
                    <span class="bg-red-400 text-gray-50 rounded-md px-2">no stock</span>
                  </td>
                </tr>
                <tr>
                  <td class="p-3">
                    <div class="flex align-items-center">
                      <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                      <div class="ml-3">
                        <div class="">Samsung</div>
                        <div class="text-gray-500">mail@rgmail.com</div>
                      </div>
                    </div>
                  </td>
                  <td class="p-3">
                    Technology
                  </td>
                  <td class="p-3 font-bold">
                    200.00$
                  </td>
                  <td class="p-3">
                    <span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
                  </td>
                </tr>
              </tbody>
            </table>
      </div>
      </div>
      </div>
      
</x-layout>