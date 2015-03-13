<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
 <link href='http://fonts.googleapis.com/css?family=Muli:300,400,400italic' rel='stylesheet' type='text/css'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container clearfix">
    <div class="headerBox clearfix">
      <div class="logoBox">
        <h3>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h3>
      </div>
      

      
        <div class="arrow">
          <svg width="10px" height="10px" viewBox="0 0 110 52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
              
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                
                  <path d="M9.5,10.5 L53.5,41.5" id="line1" stroke="#000000" stroke-width="3" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
            <g class= "line1">  
                  <path d="M54.5,10.5 L98.5,41.5" id="line2" stroke="#000000" stroke-width="3" stroke-linecap="square" sketch:type="MSShapeGroup" transform="translate(76.500000, 26.000000) scale(1, -1) translate(-76.500000, -26.000000) "></path>
              </g>    
              </g>
          </svg>
           
      <span class="menu">Menu</span>
      <nav class="nav clearfix">
        <?php wp_nav_menu( array(
          'container' => false,
          'container_id' => 'nav',
          'menu' => 'main'
        )); ?>
      </nav>
      </div> 
   </div>
    
  </div> <!-- /.container -->
</header><!--/.header-->

