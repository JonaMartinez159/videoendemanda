<div class="p-4 flex items-center">
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="bg-white inline-flex items-center p-2 me-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
     </button>
    <input type="text" class="bg-primary-900 border border-gray-600 text-white text-xs w-[400px] h-fit pl-10 py-2 rounded placeholder:text-white focus:outline-none focus:ring-1 focus:ring-white bg-[url('https://www.svgrepo.com/show/488200/search.svg')] bg-no-repeat bg-left bg-[length:1rem_1rem] bg-[position:0.5rem_center]" placeholder="Buscar..." />
    <div class="w-full flex align-items-end justify-end">
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
            <img class="w-8 h-8 rounded-full mx-2" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Rounded avatar">
        </button>
    </div>
</div>

<!-- dropdown -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="{{route('dashboard')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inicio</a>
      </li>
      <li>
        <a href="{{route('favoritos')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mis Favoritos</a>
      </li>
      <li>
        <a href="{{route('profile.show')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ajustes</a>
      </li>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
        </form>
      </li>
    </ul>
</div>