<nav class="bg-[#8A1E41] text-white px-6 py-4 flex justify-between items-center">
    <div class="text-2xl font-serif">
        <span class="text-4xl">S</span>KY <span class="text-sm">Shoes</span>
    </div>
    <div class="text-lg font-semibold"></div>
    <ul class="flex gap-6 text-sm">
        <li><a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a></li>
        <li><a href="{{ route('profile') }}" class="hover:underline">Profile</a></li>
        <li><a href="{{ route('logout') }}" class="hover:underline">Logout</a></li>
    </ul>
</nav>
