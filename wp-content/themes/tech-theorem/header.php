<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tech_Theorem
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tech-theorem' ); ?></a>

	<nav class="navbar navbar-expand-lg ">
            <div class="container">
              <?php if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
}?>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Insights</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Capabilities
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Customer Experience</a></li>
                      <li><a class="dropdown-item" href="#">Product and UI UX Design</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-danger" href="#">Contact Us</a>
                  </li>
                </ul>
                
              </div>
            </div>
        </nav>
