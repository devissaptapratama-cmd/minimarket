<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Product</h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')
                @include('products._form')

                <div class="mt-6 flex gap-2">
                    <a href="{{ route('products.index') }}"
                       class="px-4 py-2 bg-gray-200 rounded-md text-sm">Kembali</a>
                    <button type="submit"
                            class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
