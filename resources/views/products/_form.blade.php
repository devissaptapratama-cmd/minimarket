@php
    $inputClass = 'mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500';
    $isActive = $errors->any() ? old('is_active') : ($product->is_active ?? true);
@endphp

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Nama Product</label>
    <input type="text" name="name" class="{{ $inputClass }}"
           value="{{ old('name', $product->name ?? '') }}">
    @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Kategori</label>
    <input type="text" name="category" class="{{ $inputClass }}"
           value="{{ old('category', $product->category ?? '') }}">
    @error('category') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
    <textarea name="description" rows="4" class="{{ $inputClass }}">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Harga</label>
        <input type="number" step="0.01" name="price" class="{{ $inputClass }}"
               value="{{ old('price', $product->price ?? '') }}">
        @error('price') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700">Stock</label>
        <input type="number" name="stock" class="{{ $inputClass }}"
               value="{{ old('stock', $product->stock ?? 0) }}">
        @error('stock') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
    </div>
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Image</label>
    <input type="text" name="image" class="{{ $inputClass }}"
           placeholder="nama-file.jpg"
           value="{{ old('image', $product->image ?? '') }}">
    @error('image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
</div>

<div class="mb-4 flex items-center gap-2">
    <input type="checkbox" name="is_active" value="1" id="is_active"
           class="rounded border-gray-300 text-indigo-600"
           {{ $isActive ? 'checked' : '' }}>
    <label for="is_active" class="text-sm text-gray-700">Product Aktif</label>
</div>
