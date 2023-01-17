<header class="banner bg-black w-full">
  {{-- <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a> --}}

  <nav class="nav-primary container lg:px-24">
    {{-- menu mobile --}}
    <div id="mobile-menu" class="flex flex-wrap justify-between ml-8 md:hidden">
      {{-- <button id="button-search" type="button" data-collapse-toggle="mobile-menu-3" aria-controls="mobile-menu-3"
        aria-expanded="false"
        class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            clip-rule="evenodd"></path>
        </svg>
      </button> --}}

      @if (! is_front_page())
      <a class="brand md:hidden order-1" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.png')" width="61" height="43" alt="Tijolo Comidas e Vinhos"
          class="w-16 py-2" />
      </a>
      @endif

      <button id="button-sandwich" aria-label="Botão menu sanduíche" data-collapse-toggle="mobile-menu-3" type="button"
        class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden order-2" aria-controls="mobile-menu-3"
        aria-expanded="false">
        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"></path>
        </svg>
        <svg class="hidden w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>

    {{-- menu desktop --}}
    <div class="hidden md:flex justify-between items-center w-full " id="mobile-menu-3">

      @if (! is_front_page())
      <a class="brand hidden md:block md:order-1" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.png')" width="61" height="43" alt="Tijolo Comidas e Vinhos"
          class="w-16 py-2" />
      </a>
      @endif

      <div class="relative mt-3 md:hidden md:order-3">
        @include('partials/inputsearch')
      </div>
      
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'menu-principal-container md:order-2', 'menu_class' => 'flex flex-col py-2 text-white
      tracking-widest w-full justify-evenly
      md:flex-row md:mt-0 nav text-lg relative']) !!}
    </div>
  </nav>

</header>