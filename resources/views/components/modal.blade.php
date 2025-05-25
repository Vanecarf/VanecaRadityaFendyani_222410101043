<div id="modal-{{ $index }}" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg p-6 w-80 relatives">
        <h2 class="text-x1 font-bold text-rose-600 mb-2">{{$item['nama_barang']}}</h2>
        <img src="{{ $item['images_detail'] }}" alt="$item['nama_barang']" class="w-32 h-32 mx-auto object-contain mb-4">
        <p><strong>Kategori:</strong>{{$item['kategori']}}</p>
        <p><strong>Jumlah:</strong>{{$item['jumlah']}}</p>
        <p><strong>Harga:</strong>{{$item['harga']}}</p>

        <div class="flex justify-between">
            <button onclick="closeModal({{ $index }})" 
            class="mt-6 bg-gray-300 hover:bg-gray-400 text-white-800 px-4 py-2 rounded"> Kembali
            </button>
              <button onclick="closeModal({{ $index }})" 
            class="mt-6 bg-gray-300 hover:bg-red-400 text-white-800 px-4 py-2 rounded"> Edit
            </button>
        </div>
    </div>
</div>