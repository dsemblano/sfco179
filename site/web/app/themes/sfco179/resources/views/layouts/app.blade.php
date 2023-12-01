<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')
@php $current_page = basename(get_permalink()) @endphp
<main id="main" class="main{{ ! is_front_page() ? " $current_page container mx-auto md:mx-14 prose md:max-w-fit" : '' }}">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')
@include('partials/arrowcdtop')