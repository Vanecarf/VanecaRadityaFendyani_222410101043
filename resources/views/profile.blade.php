@extends('layout.app')

@section('title','Profile')

@section('content')
    <div class="flex items-center flex justify-center gap-10 mt-20">
    
        <!-- Foto Profil -->
        <div class="text-center">
        <img src="{{asset('me.jpg')}}" alt="Foto Profil" class="w-40 h-40 object-cover rounded-full border-4 border-[#CD403B] mx-auto"> 
        <p class="text-red-600 mt-2 font-semibold">{{ $username }}</p>
        </div>

        <!-- Form Profil -->
        <div class="bg-[#CD403B] text-white p-6 rounded-lg w-80 shadow-lg">
        <form class="space-y-4">
            <div>
            <label for="username" class="block text-sm">Username</label>
            <input type="text" id="username" value="{{ $username }}" readonly
                    class="w-full px-4 py-2 mt-1 rounded bg-[#FFEEE2] text-black font-semibold">
            </div>
        </form>
        </div>

    </div>
@endsection