<?php 

//registering the shortcode to show testimonials
function TestimonialForm($a){
	?>
		<form class="form-horizontal" name="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="ispost" value="1" />
            <div class="input_box colw-100 float-left">
                <?php if ($a != '' && array_key_exists("label",$a)): ?>
	                <?php if ($a['label'] != 0): ?>
	                    <label class="control-label">Name</label>
	                <?php endif;?>
                <?php else:?>
                	<label class="control-label">Name</label>
                <?php endif;?>
                <input type="text" class="form-control webtestimonial-input-box" name="title" placeholder="Type your name" required />
            </div>
            <div class="input_box colw-100 float-left">
                <?php if ($a != '' && array_key_exists("label",$a)): ?>
	                <?php if ($a['label'] != 0): ?>
                    	<label class="control-label">Position</label>
                    <?php endif;?>
                <?php else:?>
                	<label class="control-label">Position</label>
                <?php endif;?>
                <input type="text" class="form-control webtestimonial-input-box" name="position_input" placeholder="Position"></textarea>
            </div>
            <div class="input_box colw-100 float-left">
                <?php if ($a != '' && array_key_exists("label",$a)): ?>
	                <?php if ($a['label'] != 0): ?>
                    	<label class="control-label">Rating</label><br>
                    <?php endif;?>
                <?php else:?>
            		<label class="control-label">Rating</label>
                <?php endif;?>
                <select id="webtestimonial_rating__list" name="webtestimonial_rating__list" class="form-control webtestimonial-input-box">            
                    <option value="5">5 Star</option>
                    <option value="4">4 Star</option>
                    <option value="3">3 Star</option>
                    <option value="2">2 Star</option>
                    <option value="1">1 Star</option>
                </select>
            </div>
            <div class="input_box colw-100 float-left">
                <?php if ($a != '' && array_key_exists("label",$a)): ?>
	                <?php if ($a['label'] != 0): ?>
                    	<label class="control-label">Review</label>
                    <?php endif;?>
            	<?php else:?>
            		<label class="control-label">Review</label>
                <?php endif;?>
                <textarea class="form-control webtestimonial-input-box" rows="8" name="content" required></textarea>
            </div>
            <div class="input_box colw-100 float-left image-box">
                <?php if ($a != '' && array_key_exists("label",$a)): ?>
	                <?php if ($a['label'] != 0): ?>
                    	<label class="control-label">Upload Image</label>
                	<?php endif;?>
            	<?php else:?>
            		<label class="control-label">Upload Image</label>
                <?php endif;?>
                <input type="file" name="image" class="form-control webtestimonial-input-box" />
            </div>
            <div class="colw-100 submit-btn">
                <input type="submit" class="btn btn-primary w-100" value="Submit" name="submitpost" />
            </div>
        </form>
	<?php

	require_once( plugin_dir_path( __FILE__ ) . '../block/form-function.php');
}
add_shortcode("webtestimonial_form","TestimonialForm");

add_filter('widget_text', 'do_shortcode');