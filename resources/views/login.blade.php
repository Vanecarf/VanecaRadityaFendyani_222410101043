@extends('layout.guest')

@section('title','login')

@section('content')
  <div class="bg-[url('/skztour.jpg')] bg-cover bg-position-[center_38%] h-screen overflow-hidden">
    <div class="bg-[#CD403B] p-8 rounded-lg shadow-lg text-[#FFEEE2] w-full max-w-md mx-auto mt-42">
    
    <form id="loginForm" action="/login" method="POST" class="space-y-4">
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
    </div>

  </div>
  
  <script>
        document.getElementById('loginForm').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
    });
  </script>

@endsection
