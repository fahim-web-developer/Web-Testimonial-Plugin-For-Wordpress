<div class="webtestimonial testimonial template-2 ">
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

        <div class="card webtestimonial-list <?php echo $width;?>">
            <div class="layer"></div>
            <div class="content">
                <p>
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                </p>
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
                        <p class=" excerpt" contenteditable="false">"
                            <?php echo $client_details;?>"
                        </p>
                    <?php endif; ?>


                    <?php if ( 'yes' === $settings['show_image'] ): ?>
                    <div class="image">
                        <?php echo '<img src="'.$imgurl.'" alt="">'; ?>
                    </div>
                    <?php endif; ?>

                    <div class="details">
                        <?php if ( 'yes' === $settings['show_title'] ): ?>
                            <h3 class="title"><?php echo $client_name; ?></h3>
                        <?php endif; ?>
                        <?php if ( 'yes' === $settings['show_Position'] ): ?>
                            <small class="font-cond case-u lts-sm fs-80 fg-text-l position" contenteditable="false"><?php echo $position; ?></small>
                        <?php endif; ?> 
                    </div>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>