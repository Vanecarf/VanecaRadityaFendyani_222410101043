@extends('layout.app')

@section('title', 'dashboard')

@section('content')
    <div class="container mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">Welcome, {{ $username }}</h1>

        <div class="flex items-center gap-4">
            <input type="text" placeholder="Cari Produk"
                class="px-5 py-3 rounded-full w-290 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-rose-300 transition duration-300" />
            <button class="bg-[#CD403B] text-white py-3 px-8 rounded-full hover:bg-rose-600 transition duration-300">Cari</button>
        </div>
        <br>

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
                    <a href="#" class="text-sm text-[#CD403B] hover:underline">See More &gt;&gt;&gt;</a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($items as $index => $item)
                        @php
                            $modalId = strtolower($label) . '-' . $index;
                        @endphp

                        <div onclick="showDetailModal('{{ $modalId }}')"
                            class="cursor-pointer border rounded-lg p-4 hover:shadow-lg transition bg-white">
                            <img src="{{ $item['images'] }}" class="w-full h-fit object-cover rounded-md mb-2"
                                alt="{{ $item['nama_barang'] }}">
                            <h3 class="text-sm font-semibold text-gray-800 truncate">{{ $item['nama_barang'] }}</h3>
                            <p class="text-red-600 font-bold">{{ $item['harga'] }}</p>
                        </div>

                        @include('components.modal', ['item' => $item, 'modalId' => $modalId])
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <script>
    function showDetailModal(id) {
        document.getElementById(`modal-${id}`).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(`modal-${id}`).classList.add('hidden');
    }

    function outsideClick(event, id) {
        const modal = document.getElementById(`modal-${id}`);
        const content = modal.querySelector('.modal-content');
        if (!content.contains(event.target)) {
            closeModal(id);
        }
    }
    </script>

@endsection