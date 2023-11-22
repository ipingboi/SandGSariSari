@props(['product'])
<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
  <div class="overflow-hidden rounded-lg shadow-lg">
    <a href="/products/{{$product->id}}">
      <img
        alt="Placeholder"
        class="block h-auto w-full"
        src="{{$product->logo ? asset('storage/' . $product->logo) : asset('images/4800016642029.jpg')}}"
      />
    </a>
    <div class="px-5 pb-5">
      <a href="/products/{{$product->id}}">
        <h5
          class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"
        >
        {{$product->productbrand}} ({{$product->description}})
        </h5>
      </a>
    </div>
    <div class="flex items-center justify-between p-5">
      <span class="text-3xl font-bold text-gray-900 dark:text-white"
        >₱{{$product->price}}</span
      >
      <a
        href="#"
        class="text-white bg-pink-500 hover:bg-pink-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
        >Add to cart</a
      >
    </div>
  </div>
</div>

