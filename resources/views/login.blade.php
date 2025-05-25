@extends('layout.guest')

@section('title','login')

@section('content')
    <div class="bg-[#CD403B] p-8 rounded-lg shadow-lg w-80 text-[#FFEEE2]">
    
    <form action="/login" method="POST" class="space-y-4 flex justify-center">
      @csrf

      <!-- Username -->
      <div>
        <label for="username" class="text-sm">Username</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}"
               class="w-full px-4 py-2 mt-1 rounded-md bg-[#FFEEE2] text-black focus:outline-none focus:ring-2 focus:ring-red-300">
        @error('username')
          <p class="text-sm text-black-200 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="text-sm">Password</label>
        <input type="password" name="password" id="password"
               class="w-full px-4 py-2 mt-1 rounded-md bg-[#FFEEE2] text-black focus:outline-none focus:ring-2 focus:ring-red-300">
        @error('password')
          <p class="text-sm text-yellow-200 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit -->
      <button type="submit"
              class="bg-[#FFEEE2] text-[#CD403B] px-4 py-2 rounded-md hover:bg-white transition duration-200 mx-auto block">
        Login
      </button>
    </form>

    <script>
        document.getElementById('loginForm').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
    });
  </script>

@endsection
