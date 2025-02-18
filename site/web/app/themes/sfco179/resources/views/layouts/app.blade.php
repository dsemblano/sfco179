<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(do_action('get_header'))
  @php(wp_head())
  <link rel="author" type="text/plain" href="{{ asset('humans.txt') }}" />
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

    <main id="main" class="main">
      @if (! is_front_page() && ! is_page('reservas') )
      <div class="container prose mx-auto prose-a:no-underline prose-h1:mb-10 prose-h2:mb-4 prose-h3:mb-0 prose-blockquote:border-tijolopink prose-blockquote:text-tijolopink prose-figure:mb-4">
        @yield('content')
      </div>
      @else
      @yield('content')
      @endif
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