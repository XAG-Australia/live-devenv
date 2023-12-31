<?php 
$techup_enable_features_section = get_theme_mod( 'techup_enable_features_section', false );
if($techup_enable_features_section==true ) {
        $techup_features_no        = 3;
        $techup_features_pages      = array();
        for( $i = 1; $i <= $techup_features_no; $i++ ) {
             $techup_features_pages[] = get_theme_mod('techup_features_page '.$i); 
             $techup_features_icon[]= get_theme_mod('techup_features_icon '.$i,'fa fa-user');
        }
        $techup_features_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techup_features_pages ),
        'posts_per_page' => absint($techup_features_no),
        'orderby' => 'post__in'
        ); 
        $techup_features_query = new WP_Query( $techup_features_args );
?>
<div class="feature-sec buco" style="height: 35vh; padding-top: 10px !important; margin-bottom: 10px; padding: 0px; background: transparent; background-attachment: fixed; background-size: cover; background-position: center; margin-top: -80px; position: absolute; z-index: 99; ">
    <div class="container-fluid" style="width: 100%; max-width: 1280px; padding-left: 0px; padding-right: 0px; height: 325px;">
      <div class="row" style="width: 100%; margin-left: auto; margin-right: auto;">
		<?php
		$count = 0;
		while($techup_features_query->have_posts() && $count <= 4 ) :
		$techup_features_query->the_post();
		?> 
        <div class="col-lg-4 col-md-6 col-sm-12" style="width: 100%; padding-left: 0px !important; ">
          <div class="feature-box feature-box-one feature-box-1" style="width: 420px; background-color: #ffffff !important; max-width: 420px; height: 200px; border-radius: 0px; margin-left: auto; margin-right: auto; border: solid 4px #d0d0d050;">
            <div class="icon" style="background: url('/wp-content/uploads/2023/07/icon-1A.png') no-repeat #ffffff; background-size: 90px; background-position: center;  transition: all 0.3s ease-in-out; width: 100px; height: 100px; float: left;">
          </div>
            <div class="content" style="width: calc(100% - 100px); height: 100px; float: left;">
              <h5 class="title-box" style="color: #4c4c4c !important; font-size: 16px; line-height: 100px;">AERIAL SPRAYING</a></h5>
			      </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="width: 100%; padding-left: 0px !important;">
          <div class="feature-box feature-box-one feature-box-2" style="width: 420px; background-color: #ffffff !important; max-width: 420px; height: 200px; border-radius: 0px; margin-left: auto; margin-right: auto; border: solid 4px #d0d0d050;">
            <div class="icon" style="background: url('/wp-content/uploads/2023/07/icon-2A.png') no-repeat #ffffff; background-size: 90px; background-position: center;  transition: all 0.3s ease-in-out; width: 100px; height: 100px; float: left; ">
          </div>
            <div class="content" style="width: calc(100% - 100px); height: 100px; float: left;">
            <h5 class="title-box" style="color: #4c4c4c !important; font-size: 16px; line-height: 100px;">UNMANNED VEHICLES</a></h5>
			      </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12" style="width: 100%; padding-left: 0px !important;">
          <div class="feature-box feature-box-one feature-box-3" style="width: 420px; background-color: #ffffff !important; max-width: 420px; height: 200px; border-radius: 0px; margin-left: auto; margin-right: auto; border: solid 4px #d0d0d050;">
            <div class="icon" style="background: url('/wp-content/uploads/2023/07/icon-3A.png') no-repeat #ffffff; background-size: 90px; background-position: center; transition: all 0.3s ease-in-out; width: 100px; height: 100px; float: left;">
          </div>
            <div class="content" style="width: calc(100% - 100px); height: 100px; float: left;">
            <h5 class="title-box" style="color: #4c4c4c !important; font-size: 16px; line-height: 100px;">AERIAL SURVEYING</a></h5>
          
          </div>
        </div>
        <?php
			$count = $count + 1;
			endwhile;
			wp_reset_postdata();
		?> 
        
      </div>
    </div>
    </div>
    </div>
  <div class="feature-sec" style="height: calc(85vh - 180px); width: 1280px; border: 0px !important; margin-left: auto; margin-right: auto; z-index: 9; margin-top: 20vh;">
  <h2 class="section-title" style="font-size: 32px; text-align: left; color: #d0d0d0; font-weight: 300 !important; font-family: 'Open Sans', sans-serif !important; letter-spacing: 16px; width: 1280px; margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 50px; padding-bottom: 50px; border-bottom: solid 4px #d0d0d0;">FEATURED</h2>
      <div class="featured-1" style="height: 420px; width: 420px;  float: left; background-image: url('/wp-content/uploads/2023/07/product-1.png'); background-color: rgb(250 250 250 / 75%); background-blend-mode: lighten; background-size: cover; background-position: bottom; transition: all 0.5s ease-in-out;">
      <h2 class="section-title" style="opacity: 1; font-size: 38px; text-align: center; margin-top: 50px;">P100 PRO</h2>
      <div class="btn-wraper product" style="opacity: 0; padding-top: 50%; transition: all 0.4s ease-in-out;">
				<a class="readmore-btn product" href="#" style="transition: all 0.4s ease-in-out; ">LEARN MORE</a>
			</div>
    </div>
      <div class="featured-2" style="height: 420px; width: 420px; float: left; background-image: url('/wp-content/uploads/2023/07/product-2.png'); background-color: rgb(250 250 250 / 75%); background-blend-mode: lighten; background-size: cover; background-position: bottom; transition: all 0.5s ease-in-out;">
      <h2 class="section-title" style="opacity: 1; font-size: 38px; text-align: center; margin-top: 50px;">R150</h2>
      <div class="btn-wraper product" style="opacity: 0; padding-top: 50%; transition: all 0.4s ease-in-out;">
				<a class="readmore-btn product" href="#" style="transition: all 0.4s ease-in-out; ">LEARN MORE</a>
			</div>
    </div>
      <div class="featured-3" style="height: 420px; width: 420px; float: left; background-image: url('/wp-content/uploads/2023/07/product-3.png'); background-color: rgb(250 250 250 / 75%); background-blend-mode: lighten; background-size: cover; background-position: bottom; transition: all 0.5s ease-in-out;">
      <h2 class="section-title" style="opacity: 1; font-size: 38px; text-align: center; margin-top: 50px;">v40</h2>
      <div class="btn-wraper product" style="opacity: 0; padding-top: 50%; transition: all 0.4s ease-in-out;">
				<a class="readmore-btn product" href="#" style="transition: all 0.4s ease-in-out; ">LEARN MORE</a>
			</div>
    </div>
  </div>
<!-- End About Section -->

<?php } ?>