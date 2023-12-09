<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <?php echo \Roots\view('partials/favicons')->render(); ?>
    <?php echo \Roots\view('partials/gtaghead')->render(); ?>
  </head>


  <body <?php body_class(! is_front_page() ? "bg-white" : "bg-black"); ?>>
    <?php wp_body_open(); ?>
    <?php echo \Roots\view('partials/gtagbody')->render(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
