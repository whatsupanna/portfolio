<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="shortcut icon" href="http://www.whatsupanna.com/favicon.ico?v=2" />
  <link rel="Shortcut Icon" href="/favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,700italic' rel='stylesheet' type='text/css'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php if (is_front_page()) {?>
  <div class="container demo-3">
    <div class="content">
              <div id="large-header" class="large-header">
                  <canvas id="demo-canvas"></canvas>
                  <h1 class="main-title">What's up Anna?</span></h1>
              </div>
    </div>

    <div class="headArrow">
      <a class="arrowLink" data-scroll href="#bazinga"><i class="fa fa-arrow-down animated bounce"></i></a>
    </div>
  <?php } ?>
<header>
  <div class="containerBox headImage clearfix">

    <div class="headerBox clearfix animate">
      <div class="logoBox">
        <h3>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h3>
      </div>
      <!-- end of logobox -->
      
        <div class="arrow">
          <svg class="arrowIcon" width="25px" height="10px" viewBox="0 0 110 52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
              
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
      <!-- end of arrow box -->
   </div> <!-- end of headBox-->
  </div> <!-- /.containerbox -->
</header><!--/.header-->


  



