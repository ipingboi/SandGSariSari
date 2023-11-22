
@props(['product'])

{{-- Edit Modal --}}
<div id="edit-modal-{{ $product->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow p-4">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                  Edit Product
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="edit-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <form method="POST" enctype="multipart/form-data" action="{{ route('products.update', ['product' => $product->id]) }}" class="p-4 md:p-5">
            @csrf
            @method('PUT')
              <div class="grid gap-4 mb-4 grid-cols-2">
                  <div class="col-span-2">
                      <label for="productbrand" class="block mb-2 text-sm font-medium text-gray-900 ">Product Brand</label>
                      <input type="text" name="productbrand" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-600 focus:border-pink-600 block w-full p-2.5" placeholder="Type product name" required="" value="{{$product->productbrand}}">        
                  </div>
                  <div class="col-span-2 sm:col-span-1">
                      <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                      <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-600 focus:border-pink-600 block w-full p-2.5" placeholder="Php" required="" value="{{$product->price}}">
                      
                  </div>
                  <div class="col-span-2 sm:col-span-1">
                      <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                      <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-600 focus:border-pink-600 block w-full p-2.5" required="">
                          <option selected="" value="{{$product->category}}">{{$product->category}}</option>
                          <option value="Canned Goods">Canned Goods</option>
                          <option value="Detergents">Detergents</option>
                          <option value="Noodles">Noodles</option>
                          <option value="Snacks">Snacks</option>
                      </select>
                      
                  </div>
                  <div class="col-span-2 sm:col-span-1">
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-pink-600 focus:border-pink-600 block w-full p-2.5" placeholder="" required="" value="{{$product->quantity}}">
                    
                </div>
                  <div class="col-span-2">
                      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                      <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-pink-600 focus:border-pink-600" placeholder="Write product description here" required="">{{$product->description}}</textarea>
                                          
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

                    <img
                      class="w-48 mr-6 mb-6"
                      src="{{$product->logo ? asset('storage/' . $product->logo) : asset('images/4800016642029.jpg')}}"
                      alt=""
                    />
                  </div>
              <button type="submit" class="text-white inline-flex items-center bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-pink-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                  <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                  Update product
              </button>
          </form>
      </div>
  </div>
</div> 

<tr>
    
    <td class="py-3 px-6">{{$product->productbrand}}</td>
    <td class="py-3 px-6">{{$product->description}}</td>
    <td class="py-3 px-6">{{$product->category}}</td>
    <td class="py-3 px-6">₱{{$product->price}}</td>
    <td class="py-3 px-6">{{$product->quantity}}</td>
    <td class="py-3 px-6">{{$product->created_at}}</td>
    <td class="py-3 px-6">{{$product->updated_at}}</td>

    <td class="p-4">
      <div class="flex items-center">
        <button data-modal-target="edit-modal-{{ $product->id }}" data-modal-toggle="edit-modal-{{ $product->id }}" class="block text-white bg-pink-400 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
        <i class="fa-solid fa-pencil"></i>
        </button>
      </div>
    </td>
</tr>




