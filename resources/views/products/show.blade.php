<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detail Product</h2>
            <a href="{{ route('products.index') }}"
               class="px-4 py-2 bg-gray-200 rounded-md text-sm">Kembali</a>
        </div>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <table class="w-full text-sm">
                <tr class="border-b"><th class="py-2 w-48 text-left">Nama</th><td>{{ $product->name }}</td></tr>
                <tr class="border-b"><th class="py-2 text-left">Kategori</th><td>{{ $product->category ?? '-' }}</td></tr>
                <tr class="border-b"><th class="py-2 text-left">Deskripsi</th><td>{{ $product->description ?? '-' }}</td></tr>
                <tr class="border-b"><th class="py-2 text-left">Harga</th>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td></tr>
                <tr class="border-b"><th class="py-2 text-left">Stock</th><td>{{ $product->stock }}</td></tr>
                <tr class="border-b"><th class="py-2 text-left">Status</th>
                    <td>{{ $product->is_active ? 'Aktif' : 'Tidak Aktif' }}</td></tr>
                <tr><th class="py-2 text-left">Dibuat</th>
                    <td>{{ $product->created_at->format('d-m-Y H:i') }}</td></tr>
            </table>
        </div>
    </div>
</x-app-layout>
