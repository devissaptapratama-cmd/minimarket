<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Products</h2>
            <a href="{{ route('products.create') }}"
               class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm">+ Tambah Product</a>
        </div>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-sm sm:rounded-lg p-6 overflow-x-auto">
            <table class="min-w-full text-sm text-left border">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2 border w-14">No</th>
                        <th class="p-2 border">Product</th>
                        <th class="p-2 border">Kategori</th>
                        <th class="p-2 border">Harga</th>
                        <th class="p-2 border">Stock</th>
                        <th class="p-2 border">Status</th>
                        <th class="p-2 border w-52">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr class="hover:bg-gray-50">
                            <td class="p-2 border">{{ $products->firstItem() + $loop->index }}</td>
                            <td class="p-2 border">
                                <strong>{{ $product->name }}</strong>
                                @if($product->description)
                                    <br><small class="text-gray-500">{{ Str::limit($product->description, 50) }}</small>
                                @endif
                            </td>
                            <td class="p-2 border">{{ $product->category ?? '-' }}</td>
                            <td class="p-2 border">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="p-2 border">{{ $product->stock }}</td>
                            <td class="p-2 border">
                                @if($product->is_active)
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-xs">Aktif</span>
                                @else
                                    <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded text-xs">Tidak Aktif</span>
                                @endif
                            </td>
                            <td class="p-2 border">
                                <div class="flex gap-1">
                                    <a href="{{ route('products.show', $product) }}"
                                       class="px-2 py-1 bg-sky-500 text-white rounded text-xs">Detail</a>
                                    <a href="{{ route('products.edit', $product) }}"
                                       class="px-2 py-1 bg-yellow-500 text-white rounded text-xs">Edit</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus product ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-2 py-1 bg-red-600 text-white rounded text-xs">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-4 text-center">Belum ada data product.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-4">{{ $products->links() }}</div>
        </div>
    </div>
</x-app-layout>
