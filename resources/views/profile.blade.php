@extends('layout.app')

@section('title','Profile')

@section('content')
    <div class="flex items-center gap-10">
    
        <!-- Foto Profil -->
        <div class="text-center">
        <img src="{{ $user['photo'] }}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-full border-4 border-red-500 mx-auto">
        <p class="text-red-600 mt-2 font-semibold">{{ $user['fullname'] }}</p>
        </div>

        <!-- Form Profil -->
        <div class="bg-[#872341] text-white p-6 rounded-lg w-80 shadow-lg">
        <form class="space-y-4">
            <div>
            <label for="username" class="block text-sm">Username</label>
            <input type="text" id="username" value="{{ $user['username'] }}" readonly
                    class="w-full px-4 py-2 mt-1 rounded bg-gray-100 text-[#872341] font-semibold">
            </div>
            <div>
                <label for="password" class="block text-sm">Password</label>
            <input type="password" id="password" value="{{ $user['password'] }}" readonly
                    class="w-full px-4 py-2 mt-1 rounded bg-gray-100 text-[#872341] font-semibold">
            </div>
            <button type="button"
                    class="block w-full text-[#872341] bg-gray-100 px-4 py-2 rounded hover:bg-white transition">
            Edit
            </button>
        </form>
        </div>

    </div>
@endsection