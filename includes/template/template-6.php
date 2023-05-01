<section class="home-testimonial">
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
                                <?php if ( 'yes' === $settings['show_excerpt'] ): ?>
                                    <div class="tour-text color-grey-3 excerpt">“<?php echo $client_details;?>”</div>
                                <?php endif; ?>

                                <?php if ( 'yes' === $settings['show_image'] ): ?>
                                    <div class="pt-2 pb-2"><img class="tm-people" src="<?php echo $imgurl; ?>" alt=""></div>
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

                                    <?php if ( 'yes' === $settings['show_title'] ): ?>
                                    <div class="link-name title"><?php echo $client_name; ?></div>
                                <?php endif; ?>
                                <?php if ( 'yes' === $settings['show_Position'] ): ?>
                                <div class="link-position position"><?php echo $position; ?></div>
                                <?php endif; ?> 
                            </div>
                        </div>
                    </li>


                    <?php endwhile; wp_reset_query(); ?>
                </ul>
        </section>
</section>
 



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



<style type="text/css"> 
 .fa{
    font-family: 'FontAwesome';
 }
.home-testimonial {
    padding: 40px 0;
}
.webtestimonial_star_wrapper i {
    color: #FF9C00;
    font-size: 20px;
}
.home-testimonial ul{
    margin: 0;
}
.home-testimonial button.owl-next {
    right: 0;
}
.home-testimonial button.owl-next,
.home-testimonial button.owl-prev{
    position: absolute;
    top: 45%;
}
.home-testimonial .owl-dots {
    position: absolute;
    bottom: 0;
}
.home-testimonial button.owl-next i,
.home-testimonial button.owl-prev i{
    line-height: 2 !important;
}
.home-testimonial button.owl-prev {
    left: 0;
}
.home-testimonial .tour-desc{
    background: #fff;
}
.home-testimonial h3 {
    color: var(--orange);
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase
}

.home-testimonial .list-item{
    list-style: none;
}
.home-testimonial h2 {
    color: white;
    font-size: 28px;
    font-weight: 700
} 
.testimonial-pos {
    position: relative;
    top: 24px
}

.testimonial-inner .tour-desc {
    border-radius: 5px;
    padding: 30px;
}

.color-grey-3 {
    font-family: "Montserrat", Sans-serif;
    font-size: 16px;
    color: #6c83a2
}

.testimonial-inner img.tm-people {
    width: 60px;
    height: 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    -o-object-fit: cover;
    object-fit: cover;
    max-width: none;
    display: inline-block;
}

.link-name {
    font-family: "Montserrat", Sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #000000;
}

.link-position {
    font-family: "Montserrat", Sans-serif;
    font-size: 12px;
    color: #6c83a2
}
</style>