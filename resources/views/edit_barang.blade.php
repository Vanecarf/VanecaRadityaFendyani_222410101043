@extends('layout.app') 

@section('title','Edit')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Edit {{ ucfirst($kategori) }} Item</h1>

    <form action="{{ route('edit', ['kategori' => $kategori, 'index' => $index]) }}" method="POST">
        @csrf

        {{-- Nama Barang --}}
        <div class="mb-4">
            <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang"
                value="{{ old('nama_barang', $item['nama_barang']) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('nama_barang')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Kategori --}}
        <div class="mb-4">
            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
            <input type="text" name="kategori" id="kategori"
                value="{{ old('kategori', $item['kategori']) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('kategori')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Jumlah --}}
        <div class="mb-4">
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah"
                value="{{ old('jumlah', $item['jumlah']) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('jumlah')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Harga --}}
        <div class="mb-4">
            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="text" name="harga" id="harga"
                value="{{ old('harga', $item['harga']) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @error('harga')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Tombol --}}
        <div class="flex justify-between mt-6">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}"
               class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Batal</a>
            <button type="submit"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
