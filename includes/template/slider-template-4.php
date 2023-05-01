<div class="webtestimonial testimonial template-5 ">
    <ul class="owl-carousel p-0">
    <?php 
        while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();

        $client_name = get_the_title();
        $client_details = get_the_content();
        $position  = get_post_meta(get_the_ID(), 'position', true);
        $ratings = get_post_meta(get_the_ID(), 'company_rating_target', true);
        $imgurl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
            if ( empty( $imgurl ) ) $imgurl = get_avatar_url( -1 );
    ?>
     <li class="item webtestimonial-list">


        <?php if ( 'yes' === $settings['show_image'] ): ?>
           <div class="img">
             <img src="<?php echo $imgurl; ?>" alt="">
           </div>
        <?php endif; ?>
        <?php if ( 'yes' === $settings['show_title'] ): ?>
            <div class="name title"><span><?php echo $client_name; ?></span></div>
        <?php endif; ?>
        <?php if ( 'yes' === $settings['show_Position'] ): ?>
            <div class="position"><p><?php echo $position; ?></p></div>
        <?php endif; ?> 
       
       


        <div class="content">
            <?php if ( 'yes' === $settings['show_excerpt'] ): ?>
                <?php if ( 'yes' === $settings['show_quote'] ): ?>
                    <p class="quote-icon">
                        <i class="fa fa-quote-left"></i>
                    </p>
                <?php endif; ?>
                <p class="excerpt" contenteditable="false">"<?php echo $client_details;?>"</p>
            <?php endif; ?>
            <?php if ( 'yes' === $settings['show_ratings'] ): ?>
                <div style="display:inline-block;" class="webtestimonial_star_wrapper">
                    <?php           
                        $max_stars = 5;
                        $remaining_stars = 5;
                        //output dark stars for the filled in ones
                        for($i = 0; $i < $ratings; $i ++){
                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                            
                            // add an nbsp to each star except the last
                            if( $i < $max_stars - 1 ){
                                echo '&nbsp;';
                            }
                            
                            $remaining_stars--; //one less star available
                        }
                        //fill out the remaining empty stars
                        for($i = 0; $i < $remaining_stars; $i++){
                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                            
                            // add an nbsp to each star except the last
                            if( $i < $remaining_stars - 1 ){
                                echo '&nbsp;';
                            }
                        }
                    ?>
                </div>
            <?php endif; ?>
            </div>
        </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
</div>



<script type="text/javascript">

    var left_arrow = '<?php \Elementor\Icons_Manager::render_icon( $settings['webtestimonial_previcon'], [ 'aria-hidden' => 'true' ] ); ?>';
    var right_arrow = '<?php \Elementor\Icons_Manager::render_icon( $settings['webtestimonial_nexticon'], [ 'aria-hidden' => 'true' ] ); ?>';
     
    var item = '<?php echo $settings['webtestimonial_slider_items'] ?>';

    var tab_item = '<?php echo $settings['webtestimonial_tablet_item'] ?>';

    var mob_item = '<?php echo $settings['webtestimonial_mobile_items'] ?>';

    var autoplay_speed = '<?php echo $settings['webtestimonial_autoplay_speed'] ?>';

    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        center:<?php if ( 'yes' === $settings['webtestimonial_centermode']):
                    echo "true";
                    else:
                        echo "false";
                    endif;
             ?>,
        autoplay:<?php if ( 'yes' === $settings['webtestimonial_autoplay']):
                    echo "true";
                    else:
                        echo "false";
                    endif;
             ?>,
        autoplayTimeout:autoplay_speed,
        
        autoplayHoverPause:<?php if ( 'yes' === $settings['webtestimonial_on_hover']):
                    echo "true";
                    else:
                        echo "false";
                    endif;
             ?>,
        nav: <?php if ( 'yes' === $settings['webtestimonial_arrows']):
                    echo "true";
                    else:
                        echo "false";
                    endif;
             ?>,
        navText: [left_arrow,right_arrow],
        dots:<?php if ( 'yes' === $settings['webtestimonial_dots']):
                    echo "true";
                    else:
                        echo "false";
                    endif;
             ?>,
        responsive:{
            0:{
                items:mob_item
            },
            767:{
                items:tab_item
            },
            991:{
                items:item
            }
        }
    })
</script>