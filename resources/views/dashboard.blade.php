@extends('layout.app')

@section('title','dashboard')

@section('content')

<div class="container mx-auto p-5">
    <h1 class="text-2xl font-bold mb-4">Welcome, {{ $username }}</h1>

    @php
        $categories = [
            'Album' => $AlbumItems,
            'Merchandise' => $MerchItems,
            'Light Stick' => $LightStick,
        ];
    @endphp

    @foreach ($categories as $label => $items)
        <div class="mb-10">
            <div class="flex justify-between items-center mb-3">
                <h2 class="text-xl font-semibold">{{ $label }}</h2>
                <a href="#" class="text-sm text-red-500 hover:underline">See More &gt;&gt;&gt;</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($items as $index => $item)
                    <div 
                        onclick="openModal(@json($item), '{{ strtolower($item['kategori']) }}', '{{ $index }}')" 
                        class="cursor-pointer border rounded-lg p-4 hover:shadow-lg transition bg-white"
                    >
                        <img src="{{ $item['images'] }}" class="w-full h-fit object-cover rounded-md mb-2" alt="{{ $item['nama_barang'] }}">
                        <h3 class="text-sm font-semibold text-gray-800 truncate">{{ $item['nama_barang'] }}</h3>
                        <p class="text-red-600 font-bold">{{ $item['harga'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

<!-- Modal -->
<div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 items-center justify-center">
    <div class="bg-white p-6 rounded-lg max-w-md w-full relative">
        <button onclick="closeDetailModal()" class="absolute top-2 right-3 text-gray-500 hover:text-black text-xl font-bold">&times;</button>
        <img id="modalImage" src="" alt="" class="w-full h-48 object-cover rounded mb-4">
        <h2 id="modalName" class="text-xl font-bold mb-1"></h2>
        <p id="modalCategory" class="text-gray-600 mb-1"></p>
        <p id="modalStock" class="text-gray-600 mb-1"></p>
        <p id="modalPrice" class="text-red-600 font-bold mb-4"></p>
        <a id="editBtn" href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Edit Barang</a>
    </div>
</div>

<script>
    function showDetailModal(item, kategori, index) {
        document.getElementById('modalImage').src = item.images_detail;
        document.getElementById('modalName').textContent = item.nama_barang;
        document.getElementById('modalCategory').textContent = "Kategori: " + item.kategori;
        document.getElementById('modalStock').textContent = "Stok: " + item.jumlah;
        document.getElementById('modalPrice').textContent = item.harga;
        document.getElementById('editBtn').href = `/edit/${kategori}/${index}`;

        const modal = document.getElementById('detailModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeDetailModal() {
        const modal = document.getElementById('detailModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
</script>

@endsection

