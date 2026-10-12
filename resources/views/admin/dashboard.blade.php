<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard - Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <!-- Header Tabel & Tombol Tambah -->
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-2xl font-bold">Products</h3>
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md shadow">
                            New product
                        </button>
                    </div>

                    <!-- Tabel Produk -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b dark:border-gray-700 bg-gray-50 dark:bg-gray-700 text-gray-600 dark:text-gray-300">
                                    <th class="px-6 py-4 font-semibold text-sm">Category ID</th>
                                    <th class="px-6 py-4 font-semibold text-sm">Name</th>
                                    <th class="px-6 py-4 font-semibold text-sm">Price</th>
                                    <th class="px-6 py-4 font-semibold text-sm">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                    <td class="px-6 py-4 text-sm">{{ $product->category_id }}</td>
                                    <td class="px-6 py-4 text-sm font-medium">{{ $product->name }}</td>
                                    <td class="px-6 py-4 text-sm">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $product->stock }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination (Tombol Next/Prev) -->
                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>