<div class="webtestimonial testimonial template-3 ">
    <div class="testimonials">
        <?php 
            while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();

            $client_name = get_the_title();
            $client_details = get_the_content();
            $position  = get_post_meta(get_the_ID(), 'position', true);
            $ratings = get_post_meta(get_the_ID(), 'company_rating_target', true);
            $imgurl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                if ( empty( $imgurl ) ) $imgurl = get_avatar_url( -1 );
        ?>
        <div class="<?php echo $width;?> item webtestimonial-list">
            <div class="card-item mx-auto">
                <?php if ( 'yes' === $settings['show_image'] ): ?>
                    <div class="card-item-image">
                        <img src="<?php echo $imgurl; ?>" class="d-flex mx-auto">
                    </div>
                <?php endif; ?>
 
                <div class="card-item-text">
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
                    <?php if ( 'yes' === $settings['show_excerpt'] ): ?>
                        <p><?php echo $client_details;?></p>
                    <?php endif; ?>
                </div>
                <div class="footer">
                    <?php if ( 'yes' === $settings['show_title'] ): ?>
                        <span id="name">
                            <?php echo $client_name; ?>
                        <br></span>
                    <?php endif; ?>
                    <?php if ( 'yes' === $settings['show_Position'] ): ?>
                        <span id="position"><?php echo $position; ?></span>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
         <?php endwhile;  ?>
    </div>
</div>
