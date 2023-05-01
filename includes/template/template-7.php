<div class="container">
            <ul class="hash-list cols-3 cols-1-xs pad-30-all align-center text-sm">
                <?php 
                    while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();

                    $client_name = get_the_title();
                    $client_details = get_the_content();
                    $position  = get_post_meta(get_the_ID(), 'position', true);
                    $ratings = get_post_meta(get_the_ID(), 'company_rating_target', true);
                    $imgurl = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                        if ( empty( $imgurl ) ) $imgurl = get_avatar_url( -1 );
                ?>
                    <li class="wrapper" style="
                    <?php if ($settings['webtestimonial_layout_style'] == 1) {
                       echo "width:100%";
                    }elseif($settings['webtestimonial_layout_style'] == 2){
                        echo "width:50%";
                    }elseif($settings['webtestimonial_layout_style'] == 3){
                        echo "width:33.33%";
                    }elseif($settings['webtestimonial_layout_style'] == 4){
                        echo "width:25%";
                    }else{
                        echo "width:20%";
                    } ?>">
                        <?php if ( 'yes' === $settings['show_image'] ): ?>
                            <img src="<?php echo $imgurl; ?>" class="wpx-100 img-round mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                        <?php endif; ?>
                        <?php if ( 'yes' === $settings['show_excerpt'] ): ?>
                            <p class="fs-110 font-cond-l excerpt" contenteditable="false">"
                                <?php echo $client_details;?>"
                            </p>
                        <?php endif; ?>
                        <?php if ( 'yes' === $settings['show_title'] ): ?>
                            <h5 class="font-cond mgb-5 fg-text-d fs-130 title" contenteditable="false">
                                <?php echo $client_name; ?>
                            </h5>
                        <?php endif; ?>
                        <?php if ( 'yes' === $settings['show_Position'] ): ?>
                            <small class="font-cond case-u lts-sm fs-80 fg-text-l position" contenteditable="false"><?php echo $position; ?></small>
                        <?php endif; ?> 
                    </li>
                <?php endwhile;  ?>
            </ul>
        </div>