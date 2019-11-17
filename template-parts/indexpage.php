<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo( 'name' ); ?></title>
  </head>
  <body>
    <header>
      <h1><?php echo esc_attr(get_option('indexpage-heading', '')); ?></h1>
    </header>
    <main>
      <?php echo esc_attr(get_option('indexpage-content', '')); ?>
    </main>
    <footer>
      <p><?php echo esc_attr(get_option('indexpage-footer', '')); ?></p>
    </footer>
  </body> 
</html>