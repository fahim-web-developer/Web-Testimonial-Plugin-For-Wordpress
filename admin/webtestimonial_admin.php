<?php 

if ( ! defined('ABSPATH')) exit;  // if direct access 

/*----------------------------------------------------------------------
	create_post_type
----------------------------------------------------------------------*/
function webtestimonial_create_post_type() {
	register_post_type(
		'webtestimonial',//new post type
		array(
			'labels' => array(
				'name' => __( 'Web-Testimonials' ),
				'singular_name' => __( 'Web-Testimonial' )
			),
			'public' => true,
			'supports' => array('title','editor','thumbnail','custom_fields'),
			'hierarchical' => false
		)
	);	
}
add_action( 'init', 'webtestimonial_create_post_type' );


/*----------------------------------------------------------------------
	Add Meta Box 
----------------------------------------------------------------------*/

function webtestimonial_add_custom_metabox() {
	add_meta_box( 'custom-metabox', __( 'Position and Rating' ), 'webtestimonial_add_new_metabox', 'webtestimonial', 'normal', 'high' );
}
add_action( 'admin_init', 'webtestimonial_add_custom_metabox' );



/*----------------------------------------------------------------------
	Content Of Testimonials Options Meta Box 
----------------------------------------------------------------------*/

function webtestimonial_add_new_metabox( $post ) { ?>
	
	<!-- Position -->
						
	<p><label for="position_input"><strong><?php _e('Position:', 'webtestimonial');?></strong></label></p>
	
	<input type="text" name="position_input" id="position_input" class="regular-text code" value="<?php echo get_post_meta($post->ID, 'position', true); ?>" />
	 

	<!-- Rating -->
	
	<p><label for="webtestimonial_rating__list"><strong><?php _e('Rating:', 'webtestimonial');?></strong></label></p>
		
	<select id="webtestimonial_rating__list" name="webtestimonial_rating__list">			
		<option value="5" <?php if(get_post_meta($post->ID, 'company_rating_target', true)=='5') { echo 'selected'; } ?> ><?php _e('5 Star', 'webtestimonial');?></option>
		<option value="4" <?php if(get_post_meta($post->ID, 'company_rating_target', true)=='4') { echo 'selected'; } ?> ><?php _e('4 Star', 'webtestimonial');?></option>
		<option value="3" <?php if(get_post_meta($post->ID, 'company_rating_target', true)=='3') { echo 'selected'; } ?> ><?php _e('3 Star', 'webtestimonial');?></option>
		<option value="2" <?php if(get_post_meta($post->ID, 'company_rating_target', true)=='2') { echo 'selected'; } ?> ><?php _e('2 Star', 'webtestimonial');?></option>
		<option value="1" <?php if(get_post_meta($post->ID, 'company_rating_target', true)=='1') { echo 'selected'; } ?> ><?php _e('1 Star', 'webtestimonial');?></option>
    </select> 
						
	<?php
}



/*===============================================
	Save testimonial Options Meta Box Function
=================================================*/

function webtestimonial__save_meta_box($post_id){

	/*----------------------------------------------------------------------
		Position
	----------------------------------------------------------------------*/
	if(isset($_POST['position_input'])) {
		update_post_meta($post_id, 'position', $_POST['position_input']);
	}

	/*----------------------------------------------------------------------
		Rating
	----------------------------------------------------------------------*/
	if(isset($_POST['webtestimonial_rating__list'])) {
		update_post_meta($post_id, 'company_rating_target', $_POST['webtestimonial_rating__list']);
	}
}
add_action('save_post', 'webtestimonial__save_meta_box');