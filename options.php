<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_framework_theme'),
		'two' => __('Two', 'options_framework_theme'),
		'three' => __('Three', 'options_framework_theme'),
		'four' => __('Four', 'options_framework_theme'),
		'five' => __('Five', 'options_framework_theme')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_framework_theme'),
		'two' => __('Pancake', 'options_framework_theme'),
		'three' => __('Omelette', 'options_framework_theme'),
		'four' => __('Crepe', 'options_framework_theme'),
		'five' => __('Waffle', 'options_framework_theme')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
  
  //Slideshow Tab
	$options[] = array(
		'name' => __('Slideshow', 'options_framework_theme'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Slide Title #1', 'options_framework_theme'),
		'desc' => __('A text input field.', 'options_framework_theme'),
		'id' => 'slide_title_1',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slide Caption #1', 'options_framework_theme'),
		'desc' => __('Caption for the slide.', 'options_framework_theme'),
		'id' => 'slide_caption_1',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Slide Image #1', 'options_framework_theme'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_framework_theme'),
		'id' => 'slide_image_1',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Slide Title #2', 'options_framework_theme'),
		'desc' => __('A text input field.', 'options_framework_theme'),
		'id' => 'slide_title_2',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slide Caption #2', 'options_framework_theme'),
		'desc' => __('Caption for the slide.', 'options_framework_theme'),
		'id' => 'slide_caption_2',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Slide Image #2', 'options_framework_theme'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_framework_theme'),
		'id' => 'slide_image_2',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Slide Title #3', 'options_framework_theme'),
		'desc' => __('A text input field.', 'options_framework_theme'),
		'id' => 'slide_title_3',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slide Caption #3', 'options_framework_theme'),
		'desc' => __('Caption for the slide.', 'options_framework_theme'),
		'id' => 'slide_caption_3',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Slide Image #3', 'options_framework_theme'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_framework_theme'),
		'id' => 'slide_image_3',
		'type' => 'upload');

  
  //Services Tab
	$options[] = array(
		'name' => __('Services', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Service Title #1', 'options_framework_theme'),
		'desc' => __('Title to display above text excerpt.', 'options_framework_theme'),
		'id' => 'service_title_1',
		'std' => 'Default Value',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Service Text Excerpt #1', 'options_framework_theme'),
		'desc' => __('Service description.', 'options_framework_theme'),
		'id' => 'service_text_1',
		'std' => 'Default Text',
		'type' => 'textarea');
		
  $options[] = array(
		'name' => __('Service Title #2', 'options_framework_theme'),
		'desc' => __('Title to display above text excerpt.', 'options_framework_theme'),
		'id' => 'service_title_2',
		'std' => 'Default Value',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Service Text Excerpt #2', 'options_framework_theme'),
		'desc' => __('Service description.', 'options_framework_theme'),
		'id' => 'service_text_2',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Service Title #3', 'options_framework_theme'),
		'desc' => __('Title to display above text excerpt.', 'options_framework_theme'),
		'id' => 'service_title_3',
		'std' => 'Default Value',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Service Text Excerpt #3', 'options_framework_theme'),
		'desc' => __('Service description.', 'options_framework_theme'),
		'id' => 'service_text_3',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Service Title #4', 'options_framework_theme'),
		'desc' => __('Title to display above text excerpt.', 'options_framework_theme'),
		'id' => 'service_title_4',
		'std' => 'Default Value',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Service Text Excerpt #4', 'options_framework_theme'),
		'desc' => __('Service description.', 'options_framework_theme'),
		'id' => 'service_text_4',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Service Title #5', 'options_framework_theme'),
		'desc' => __('Title to display above text excerpt.', 'options_framework_theme'),
		'id' => 'service_title_5',
		'std' => 'Default Value',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Service Text Excerpt #5', 'options_framework_theme'),
		'desc' => __('Service description.', 'options_framework_theme'),
		'id' => 'service_text_5',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Service Title #6', 'options_framework_theme'),
		'desc' => __('Title to display above text excerpt.', 'options_framework_theme'),
		'id' => 'service_title_6',
		'std' => 'Default Value',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Service Text Excerpt #6', 'options_framework_theme'),
		'desc' => __('Service description.', 'options_framework_theme'),
		'id' => 'service_text_6',
		'std' => 'Default Text',
		'type' => 'textarea');

  //Services Tab
	$options[] = array(
		'name' => __('Footer', 'options_framework_theme'),
		'type' => 'heading');

  $options[] = array(
		'name' => __('About Us', 'options_framework_theme'),
		'desc' => __('About us section in the footer.', 'options_framework_theme'),
		'id' => 'about_us_text',
		'std' => 'Default Text',
		'type' => 'textarea');

	return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	$('#example_showhidden').click(function() {
  		$('#section-example_text_hidden').fadeToggle(400);
	});

	if ($('#example_showhidden:checked').val() !== undefined) {
		$('#section-example_text_hidden').show();
	}

});
</script>

<?php
}