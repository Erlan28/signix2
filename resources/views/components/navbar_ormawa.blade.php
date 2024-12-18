<nav class="bg-white shadow-sm p-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center">
      <img src="{{ asset('images/logo_signix.png') }}" alt="SIGNIX Logo" class="w-[100px] mr-4" />
    </div>
  
    <!-- Menu Links -->
    <div class="flex space-x-6">
      <a href="{{ route('ormawa.dashboard') }}" class="text-black font-medium hover:text-blue-500 {{ request()->routeIs('ormawa.dashboard') ? 'border-b-2 border-blue-500' : '' }}">
        {{ request()->routeIs('ormawa.dashboard') ? 'Home' : 'Home' }}
      </a>
      <a href="{{ route('ormawa.pengajuan') }}" class="text-black font-medium hover:text-blue-500 {{ request()->routeIs('ormawa.pengajuan') ? 'border-b-2 border-blue-500' : '' }}">
        {{ request()->routeIs('ormawa.pengajuan') ? 'Pengajuan' : 'Pengajuan' }}
      </a>
      <a href="{{ route('ormawa.riwayat') }}" class="text-black font-medium hover:text-blue-500 {{ request()->routeIs('ormawa.riwayat') ? 'border-b-2 border-blue-500' : '' }}">
        {{ request()->routeIs('ormawa.riwayat') ? 'Riwayat' : 'Riwayat' }}
      </a>
    </div>
  
    <!-- Notification and Profile Icon -->
    <div class="flex space-x-4 items-center">
      
      <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="text-black">
          <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <!-- Icon Profile SVG -->
            <path d="M12 12c2.485 0 4.5-2.015 4.5-4.5S14.485 3 12 3 7.5 5.015 7.5 7.5 9.515 12 12 12zm0 2c-3.315 0-10 1.68-10 5v2h20v-2c0-3.32-6.685-5-10-5z"/>
          </svg>
        </button>
        <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
          <a href="{{ route('ormawa.profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>

          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </nav>