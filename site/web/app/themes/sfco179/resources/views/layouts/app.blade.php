<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(do_action('get_header'))
  @php(wp_head())
  <?php echo \Roots\view('partials/favicons')->render(); ?>
  <?php echo \Roots\view('partials/gtaghead')->render(); ?>
</head>

<body <?php body_class(! is_front_page() ? "bg-white" : "bg-black" ); ?>>
  @php(wp_body_open())
  <?php echo \Roots\view('partials/gtagbody')->render(); ?>
  <div id="app">
    <a class="sr-only focus:not-sr-only" href="#main">
      {{ __('Skip to content') }}
    </a>

    @include('sections.header')

    <?php $current_page = basename(get_permalink()); ?>

    <main id="main" class="main{{ ! is_front_page() ? " $current_page container" : '' }}">
      @yield('content')
    </main>

    @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
    @endif

    @include('sections.footer')
  </div>

  @php(do_action('get_footer'))
  @php(wp_footer())
</body>

</html>