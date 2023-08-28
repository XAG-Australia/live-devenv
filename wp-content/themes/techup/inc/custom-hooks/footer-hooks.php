<?php
/**
 * Managed the custom functions and hooks for footer section of the theme.
 *
 * @subpackage techup
 * @since 1.0 
 */


if( ! function_exists( 'techup_footer_start' ) ):
	function techup_footer_start(){
		$footer_sticky = get_theme_mod( 'techup_footer_sticky_opt', true ); ?>
		
		    <footer class="footer footer-one" id="foot-wdgt" style="padding: 0px !important; height: calc(50vh - 180px) !important; ">

<?php }
endif; 
if( ! function_exists( 'techup_footer_sidebar' ) ):
	function techup_footer_sidebar(){ ?>
	<link rel="stylesheet" href="https://htmlstream.com/preview/unify-v2.6/assets/vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="https://htmlstream.com/preview/unify-v2.6/assets/css/unify-core.css">
	<link rel="stylesheet" href="https://htmlstream.com/preview/unify-v2.6/assets/css/unify-components.css">
	<link rel="stylesheet" href="https://htmlstream.com/preview/unify-v2.6/assets/css/unify-globals.css">

	    <div class="foot-top" style="height: calc(50vh - 180px); width: 100vw; overflow: hidden; z-index: 9; padding: 0px !important;">
                
            <div class="container-left" style="float: left; width: 33.33vw; height: 90%; position: relative; z-index: 9999; padding: 20px;">
			
			<!-- Footer Content -->
			<div class="col-lg-4 g-mb-50 g-mb-0--lg">
        <h2 class="h6 g-color-white text-uppercase g-font-weight-700 g-mb-20">Contact Us</h2>
        <div class="g-mb-25" >
          <p style="font-size: 16px; color:#666666;">Let's get started, contact XAG Australia.</p>
        </div>

        <address class="g-mb-20">
          <ul class="list-unstyled">
            <li class="d-flex align-items-baseline g-mb-12" >
              <i class="fa fa-map-marker g-mr-10" style="font-size: 12px !important; color: #666666 !important;"></i>
              <span style="font-size: 12px !important; color: #666666 !important;">Unit 5, 11 Jullian Close, Banksmeadow, NSW 2019</span>
            </li>
            <li class="d-flex align-items-baseline g-mb-12">
              <i class="fa fa-phone g-mr-10" style="font-size: 12px !important; color: #666666 !important;"></i>
              <span style="font-size: 12px !important; color: #666666 !important;">Phone: +61 (2) 9168 7918</span>
            </li>
            <li class="d-flex align-items-baseline g-mb-12">
              <i class="fa fa-envelope g-mr-10" style="font-size: 12px !important; color: #666666 !important;"></i>
              <span>Email:
                <a class="g-color-white-opacity-0_8" href="mailto: info@xagaustralia.com.au" style="font-size: 12px !important; color: #666666 !important;">info@xagaustralia.com.au</a>
              </span>
            </li>
          </ul>
        </address>

        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-primary--hover g-color-white-opacity-0_8 rounded" href="#!">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-5">
            <a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-primary--hover g-color-white-opacity-0_8 rounded" href="#!">
              <i class="fa fa-pinterest"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-5">
            <a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-primary--hover g-color-white-opacity-0_8 rounded" href="#!">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-5">
            <a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-primary--hover g-color-white-opacity-0_8 rounded" href="#!">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- End Footer Content -->

            </div>
            <div class="container-right" style="float: left; width: 33.33vw; height: 90%; position: relative; z-index: 9999; padding: 20px;">
			<h2>Useful Links</h2>
            </div>
			<div class="container-subscribe" style="float: left; width: 33.33vw; height: 90%; position: relative; z-index: 9999; padding: 20px;">
			<h2>Subscribe</h2>
            </div>
        	<div class="col-sm-12" style="width: 100%; text-align: right; height: 10%; font-size: 12px; line-height: 28px; bottom: 0px; float: left; text-transform: uppercase; font-family: 'Roboto Condensed', sans-serif; letter-spacing: 2px; font-weight: 400; text-shadow: none !important; padding-left: 20px; padding-right: 20px;">
                <?php echo '©' ?> <?php bloginfo( 'name' ); ?> <?php echo '2023' ?>
            </div>
	<?php }
endif;

/*----------------------------------------------------------------------------------------------------------------------*/

if( ! function_exists( 'techup_footer_end' ) ):
	function techup_footer_end(){ ?>
				
		</footer> 
		</div>
<?php }
endif; 
add_action( 'techup_footer', 'techup_footer_start', 5  );
add_action( 'techup_footer', 'techup_footer_sidebar', 10  );
add_action( 'techup_footer', 'techup_footer_end', 20 );