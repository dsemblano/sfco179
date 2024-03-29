<header class="banner bg-black w-full">
  {{-- <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a> --}}

  <nav class="nav-primary container px-0 lg:px-24">
    {{-- menu mobile --}}

    @if (! is_front_page())    

    <div class="flex justify-between md:hidden">
      @if ( !is_front_page() )
      <a class="brand pl-6 pt-2" href="{{ home_url('/') }}">
        <img id="logobrand" width="50" height="40" src="@asset('images/sfco179_logo_branca.png')" alt="SFCO 179 página inicial"/>
      </a>
      @endif
      <div id="mobile-menu" class="flex flex-wrap justify-end ml-8 order-2 md:hidden"> 
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
    </div>
    
@else


<div id="mobile-menu" class="flex flex-wrap justify-end ml-8 md:hidden">
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
@endif

    {{-- menu desktop --}}
    <div class="hidden md:flex justify-between items-center w-full relative" id="mobile-menu-3">
      @if ( !is_front_page() )
      <a title="Ir para a home" class="brand hidden md:block pt-2" href="{{ home_url('/') }}">
        <img class="hover:scale-110 transition duration-300 ease-in-out" width="50" height="40" src="@asset('images/sfco179_logo_branca.png')" alt="SFCO 179 página inicial"/>
      </a>
      @endif
      <div class="menuwrap bg-greynos md:bg-transparent w-full">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'menu-principal-container md:order-2 px-6 relative', 'menu_class' => 'flex flex-col py-2 text-white
        tracking-widest w-full justify-evenly
        md:flex-row md:mt-0 nav text-lg relative']) !!}
      </div>
      
    </div>
  </nav>

</header>