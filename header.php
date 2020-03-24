<!DOCTYPE html>
<html lang="es">
    <head>

        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?> >

<div class="container">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <?php wp_nav_menu( array(
        'theme_location' => 'top-menu',
        'container'=>'div',
        'container_class'=>'navbar-nav'
        )) ?>
  </div>
</nav>
    
</header>