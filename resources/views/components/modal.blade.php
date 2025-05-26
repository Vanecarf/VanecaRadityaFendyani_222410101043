<div id="modal-{{ $modalId }}"
     class="hidden fixed inset-0 bg-[rgba(0,0,0,0.5)] flex items-center justify-center z-50"
     onclick="outsideClick(event, '{{ $modalId }}')">

    <div class="modal-content bg-white rounded-lg p-6 w-100 relative">
        <h2 class="text-xl font-bold text-rose-600 mb-2">{{ $item['nama_barang'] }}</h2>
        <img src="{{ $item['images_detail'] }}" alt="{{ $item['nama_barang'] }}"
            class="w-fit max-h-64 mx-auto object-contain mb-4">
        <p><strong>Kategori:</strong> {{ $item['kategori'] }}</p>
        <p><strong>Jumlah:</strong> {{ $item['jumlah'] }}</p>
        <p><strong>Harga:</strong> {{ $item['harga'] }}</p>

        <div class="flex justify-between">
            <button onclick="closeModal('{{ $modalId }}')"
                class="mt-6 bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Kembali</button>

            <button onclick="closeModal('{{ $modalId }}')"
                class="mt-6 bg-red-400 hover:bg-red-500 text-white px-4 py-2 rounded">Edit</button>
        </div>
    </div>
</div>