<?php

// Add scripts and stylesheets
function onthemarktutoring_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/materialize.css', array(), '3.3.6' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/styles.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');
  
  register_setting('section', 'twitter');
  register_setting('section', 'github');
}
add_action( 'admin_init', 'custom_settings_page_setup' );




//Input fields
function setting_github() { ?>
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }
