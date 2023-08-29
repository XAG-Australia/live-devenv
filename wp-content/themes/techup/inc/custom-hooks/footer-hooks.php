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
		
		    <footer class="footer footer-one" id="foot-wdgt" style="padding: 0px !important; height: 440px !important; ">

<?php }
endif; 
if( ! function_exists( 'techup_footer_sidebar' ) ):
	function techup_footer_sidebar(){ ?>
  <link href="https://xag-au.com/css/unify-globals.css" rel="stylesheet">
  <link href="https://xag-au.com/css/unify-core.css" rel="stylesheet">
	    <div class="foot-top" style="height: 400px; width: 1280px; overflow: hidden; z-index: 9; padding: 0px !important; margin-left: auto; margin-right: auto;">
                
            <div class="container-left" style="float: left; width: 33.33%; height: 400px; position: relative; z-index: 9999; padding: 50px; padding-top: 100px;">
			
			<!-- Footer Content -->
        <h2 class="h6 g-color-white text-uppercase g-font-weight-700 g-mb-20">Contact Us</h2>
        <div class="g-mb-25" >
          <p style="font-size: 16px; color:#666666;">Let's get started, contact XAG Australia.</p>
        </div>

        <address class="g-mb-20">
          <ul class="list-unstyled">
            <li class="d-flex align-items-baseline g-mb-12" >
              <i class="fa fa-map-marker g-mr-10" style="font-size: 12px !important; color: #666666 !important;"></i>
              <span style="font-size: 12px !important; color: #666666 !important;">Address: Unit 5, 11 Jullian Close, Banksmeadow, NSW 2019</span>
            </li>
            <li class="d-flex align-items-baseline g-mb-12">
              <i class="fa fa-phone g-mr-10" style="font-size: 12px !important; color: #666666 !important;"></i>
              <span style="font-size: 12px !important; color: #666666 !important;">Phone: +61 (2) 9168 7918</span>
            </li>
            <li class="d-flex align-items-baseline g-mb-12">
              <i class="fa fa-envelope g-mr-10" style="font-size: 12px !important; color: #666666 !important;"></i>
              <span style="font-size: 12px !important; color: #666666 !important;">Email: <a class="g-color-white-opacity-0_8" href="mailto: info@xagaustralia.com.au" style="font-size: 12px !important; color: #666666 !important;">info@xagaustralia.com.au</a>
              </span>
            </li>
          </ul>
        </address>

        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-primary--hover g-color-white-opacity-0_8 rounded" href="#!" style="width: 3.92857rem; height: 3.92857rem;font-size: 1.57143rem;">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-5">
            <a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-primary--hover g-color-white-opacity-0_8 rounded" href="#!" >
              <i class="fa fa-pinterest"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-5">
            <a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-primary--hover g-color-white-opacity-0_8 rounded" href="#!" >
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-5">
            <a class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-bg-primary--hover g-color-white-opacity-0_8 rounded" href="#!" >
              <i class="fa fa-instagram"></i>
            </a>
          </li>
	</ul>
      <!-- End Footer Content -->

            </div>
            <div class="container-right" style="float: left; width: 33.33%; height: 400px; position: relative; z-index: 9999; padding: 50px; padding-top: 100px !important;">
			<!-- Footer Content -->
			<div style="width: 100% !important;">
        <h2 class="h6 g-color-white text-uppercase g-font-weight-700 g-mb-20">Useful Links</h2>
        <div class="row">
          <div class="col-sm-6" style="max-width: 100% !important; padding: 0px;">
            <ul class="list-unstyled g-mb-30 g-mb-0--md">
              <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">About Us</a>
              </li>
              <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Featured Products</a>
              </li>
              <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Our Services</a>
              </li>
              <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Training</a>
              </li>
			  <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Resources</a>
              </li>
			  <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Privacy Policy</a>
              </li>
            </ul>
          </div>

          <div style="width: 45% !important; padding: 0px;">
            <ul class="list-unstyled mb-0">
              <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">In The Media</a>
              </li>
              <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Events</a>
              </li>
              <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Blog</a>
              </li>
              <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Support</a>
              </li>
			  <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Terms & Conditions</a>
              </li>
			  <li class="d-flex g-mb-12">
                <i class="fa fa-circle g-color-primary g-font-size-5 g-mt-10 g-mr-8" style="color: #c01920 !important;"></i>
                <a class="g-color-white-opacity-0_6 g-color-primary--hover" href="#!" style="color: #666666 !important; font-family: 'Roboto', sans-serif !important;">Service Policy </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Footer Content -->
            </div>
			<div class="container-subscribe" style="float: left; width: 33.33%; height: 400px; position: relative; z-index: 9999; padding: 50px; padding-top: 100px;">
			<!-- Footer Content -->
        <h2 class="h6 g-color-white text-uppercase g-font-weight-700 g-mb-20">Subscribe</h2>
        <div class="g-mb-25">
          <p  style="color: #666666 !important;">Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
        </div>

        <form>
          <div class="row">
            <div class="col-md-8 col-lg-12">
              <div class="form-group g-mb-20">
                <input class="form-control g-color-white g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_1 g-rounded-50 g-px-20 g-py-12" type="email" placeholder="Your Email">
              </div>
            </div>

            <div class="col-md-4 col-lg-12">
              <button class="btn u-btn-primary btn-block g-font-size-12 text-uppercase g-font-weight-600 g-rounded-50 g-py-15 g-px-35" type="submit" role="button"  style="color: #666666 !important; background-color: #ffffff !important;">View our best offers</button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Footer Content -->
            </div>
        	<div class="col-sm-12" style="width: 100%; text-align: right; height: 40px; bottom: 0px; font-size: 12px; float: left; text-transform: uppercase; font-family: 'Roboto Condensed', sans-serif; letter-spacing: 2px; font-weight: 400; text-shadow: none !important; padding-left: 50px; padding-right: 50px;">
			
			<?php echo '©' ?> <?php bloginfo( 'name' ); ?> <?php echo '2023' ?> <?php echo '<img src="/media/know-your-drone-safety-advocate-colour.jpg" style="max-height: 40px !important; float: right; margin-left: 50px; margin-top: -25px;">' ?>
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