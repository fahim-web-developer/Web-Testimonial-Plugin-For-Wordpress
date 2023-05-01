<?php 

//registering the shortcode to show testimonials
function SliderOne($a){
	
	$args = array("post_type" => "webtestimonial");
	$testimonials_query = new WP_Query( $args );

	?>
	<section class="webtestimonial home-testimonial slider-template-1">
	    <div class="container-fluid">
	        <section class="home-testimonial-bottom">
	            <div class="testimonial-inner">
	                <ul class="row d-flex justify-content-center owl-carousel p-0">
	                    <?php
	                    	while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
			
								$client_name = get_the_title();
								$client_details = get_the_content();
								$position  = get_post_meta(get_the_ID(), 'position', true);
								$ratings = get_post_meta(get_the_ID(), 'company_rating_target', true);
								$imgurl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
								if ( empty( $imgurl ) ) $imgurl = get_avatar_url( -1 );
	                    ?>

	                    <li class="col-md-12 list-item">
	                        <div class="tour-item ">
	                            <div class="tour-desc webtestimonial-list">
	                                <div class="testimonial_content">
	                                <?php if ($a != '' && array_key_exists("excerpt",$a)): ?>
	                                	<?php if ($a['excerpt'] != 0): ?>
	                                    	<div class="tour-text color-grey-3 excerpt">“<?php echo $client_details;?>”</div>
	                                    <?php endif;?>
	                                <?php else:?>
	                                	<div class="tour-text color-grey-3 excerpt">“<?php echo $client_details;?>”</div>
	                                <?php endif; ?>

	                                <?php if ($a != '' && array_key_exists("rating",$a)): ?>
	                                	<?php if ($a['rating'] != 0): ?>
	                                		<div style="display:inline-block;" class="webtestimonial_star_wrapper">
		                                        <?php           
			                                        $max_stars = 5;
			                                        $remaining_stars = 5;

			                                        for($i = 0; $i < $ratings; $i ++){
			                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
			                                            if( $i < $max_stars - 1 ){ echo '&nbsp;'; }
			                                            $remaining_stars--;
			                                        }
			                                        for($i = 0; $i < $remaining_stars; $i++){
			                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
			                                            if( $i < $remaining_stars - 1 ){
			                                                echo '&nbsp;';
			                                            }
			                                        }
			                                    ?>
			                                </div>
	                                	<?php endif;?>
	                                <?php else:?>
	                                    <div style="display:inline-block;" class="webtestimonial_star_wrapper">
	                                        <?php           
		                                        $max_stars = 5;
		                                        $remaining_stars = 5;

		                                        for($i = 0; $i < $ratings; $i ++){
		                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
		                                            if( $i < $max_stars - 1 ){ echo '&nbsp;'; }
		                                            $remaining_stars--;
		                                        }
		                                        for($i = 0; $i < $remaining_stars; $i++){
		                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
		                                            if( $i < $remaining_stars - 1 ){
		                                                echo '&nbsp;';
		                                            }
		                                        }
		                                    ?>
		                                </div>
	                                <?php endif; ?>

	                                <?php if ($a != '' && array_key_exists("image",$a)): ?>
	                                	<?php if ($a['image'] != 0): ?>
	                                    	<div class="pt-2 pb-2 testimonial-img"><img class="tm-people" src="<?php echo $imgurl; ?>" alt=""></div>
	                                    <?php endif;?>
	                                <?php else:?>
	                                	<div class="pt-2 pb-2 testimonial-img"><img class="tm-people" src="<?php echo $imgurl; ?>" alt=""></div>
	                                <?php endif; ?>

	                                <?php if ($a != '' && array_key_exists("title",$a)): ?>
	                                	<?php if ($a['title'] != 0): ?>
	                                    	<div class="link-name title"><?php echo $client_name; ?></div>
	                                    <?php endif;?>
	                                <?php else:?>
	                                	<div class="link-name title"><?php echo $client_name; ?></div>
	                                <?php endif; ?>

	                                <?php if ($a != '' && array_key_exists("position",$a)): ?>
	                                	<?php if ($a['position'] != 0): ?>
	                                    	<div class="link-position position"><?php echo $position; ?></div>
	                                    <?php endif;?>
	                                <?php else:?>
	                                	<div class="link-position position"><?php echo $position; ?></div>
	                                <?php endif; ?>
	                            </div>
	                        </div>
	                    </li>
	                    <?php endwhile;  wp_reset_query();?>
	            	</ul>
	            </div>
	        </section>
	    </div>
	</section>
	 



	<script type="text/javascript">
	    jQuery('.owl-carousel').owlCarousel({
	        loop:true,
	        margin:10,
	        center:<?php if ($a != '' && array_key_exists("center",$a)):
	                    	if ($a['center'] != 0):
	                     		echo "true";
	                     	else:
	                     		echo "false";
	                     	endif;	
	                    else:
	                    	echo "true";
	                    endif;
	             ?>,
	        autoplay:<?php if ($a != '' && array_key_exists("autoplay",$a)):
	                    	if ($a['autoplay'] != 0):
	                     		echo "true";
	                     	else:
	                     		echo "false";
	                     	endif;	
	                    else:
	                    	echo "true";
	                    endif;
	             ?>,
	        <!-- autoplayTimeout:autoplay_speed, -->
	        
	        autoplayHoverPause:<?php if ($a != '' && array_key_exists("autoplayHoverPause",$a)):
	                    	if ($a['autoplayHoverPause'] != 0):
	                     		echo "true";
	                     	else:
	                     		echo "false";
	                     	endif;	
	                    else:
	                    	echo "true";
	                    endif;
	             ?>,
	        nav: <?php if ($a != '' && array_key_exists("nav",$a)):
	                    	if ($a['nav'] != 0):
	                     		echo "true";
	                     	else:
	                     		echo "false";
	                     	endif;	
	                    else:
	                    	echo "true";
	                    endif;
	             ?>,
	        <!-- navText: [left_arrow,right_arrow], -->
	        dots:<?php if ($a != '' && array_key_exists("dots",$a)):
	                    	if ($a['dots'] != 0):
	                     		echo "true";
	                     	else:
	                     		echo "false";
	                     	endif;	
	                    else:
	                    	echo "true";
	                    endif;
	             ?>,
	        responsive:{
	            0:{
	                items:<?php if ($a != '' && array_key_exists("desktop",$a)):
	                    	echo $a['desktop'];	
	                    else:
	                    	echo 3;
	                    endif; ?>
	            },
	            767:{
	                items:<?php if ($a != '' && array_key_exists("tablet",$a)):
	                    	echo $a['tablet'];	
	                    else:
	                    	echo 1;
	                    endif; ?>
	            },
	            991:{
	                items:<?php if ($a != '' && array_key_exists("mobile",$a)):
	                    	echo $a['mobile'];	
	                    else:
	                    	echo 2;
	                    endif; ?>
	            }
	        }
	    })
	</script>
	<?php
}
add_shortcode("webtestimonial_grid","SliderOne");

?>