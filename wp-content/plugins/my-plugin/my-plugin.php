<?php
/*
Plugin Name: My Plugin
Description: A custom plugin to demonstrate adding an admin menu.
Version: 1.0
Author: Your Name
*/

// Prevent direct access
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

// Function to display the admin page content

function my_plugin_admin_page() {
    ?>
   <div class='wrap'>
    <h1>My Plugin Settings</h1>
    <form id='form' method='post' action='options.php'>
        <?php
        // Output nonce, action, and settings fields
        settings_fields('my_plugin_settings');
        do_settings_sections('my_plugin');

        // Output submit button
        submit_button('Save Settings');
        ?>
    </form>

    <?php
    // The URL you want to embed
    $url = 'https://www.w3schools.com/';

    // Get the oEmbed HTML for the URL
    $oembed_html = wp_oembed_get($url);

    // Check if the oEmbed HTML is available
    if ($oembed_html) {
        // Output the embedded content
        echo $oembed_html;
    } else {
        // If embedding fails, you can handle it accordingly
        echo 'Embedding failed for URL: ' . $url;
    }
    ?>
</div>

    <?php
}

// Function to register the settings

function my_plugin_settings_init() {
    register_setting( 'my_plugin_settings', 'my_plugin_option' );
    add_settings_section( 'my_plugin_section', 'Main Settings', 'my_plugin_section_callback', 'my_plugin' );
    add_settings_field( 'my_plugin_first_field', 'Form', 'my_plugin_first_field_callback', 'my_plugin', 'my_plugin_section' );
    add_settings_field( 'my_plugin_second_field', 'Count', 'my_plugin_second_field_callback', 'my_plugin', 'my_plugin_section' );
}

function my_plugin_section_callback() {
    echo 'This is plugin that is  created defined template <br>';
    echo 'Enter your settings below:';
}

function my_plugin_first_field_callback() {
    $setting = get_option( 'my_plugin_option' );
    echo "<label for='form1'>New Post</label> <input id='form1' type='radio' name='form_type' value='Form1'/>
    <label for='form2'>New Page</label> <input id='form2' type='radio' name='form_type' value='Form2'/><br>";
}

function my_plugin_second_field_callback() {
    $setting = get_option( 'my_plugin_option' );
    echo "<input type='text' name='count' value='" . esc_attr( $setting ) . "'>";
}

// Function to add the menu item

function my_plugin_add_admin_menu() {
    add_menu_page( 'My Plugin', 'My Plugin', 'manage_options', 'my_plugin', 'my_plugin_admin_page', 'dashicons-welcome-add-page' );
}

// Hook the functions to appropriate actions
add_action( 'admin_menu', 'my_plugin_add_admin_menu' );
add_action( 'admin_init', 'my_plugin_settings_init' );
