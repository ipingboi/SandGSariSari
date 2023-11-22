
@props(['product'])
<tr>
    <td class="p-4">
      <div class="flex items-center">
        <input
          type="checkbox"
          class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
        />
      </div>
    </td>
    <td class="py-3 px-6">{{$product->productbrand}}</td>
    <td class="py-3 px-6">{{$product->description}}</td>
    <td class="py-3 px-6">{{$product->category}}</td>
    <td class="py-3 px-6">₱{{$product->price}}</td>
    <td class="py-3 px-6">{{$product->quantity}}</td>
    <td class="py-3 px-6">{{$product->created_at}}</td>
</tr>
