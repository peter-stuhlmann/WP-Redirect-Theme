<?php

function wpr_theme_settings() {
	add_submenu_page(
		'options-general.php',                 // parent slug
		'WP Redirect (Headless CMS) Settings', // page title
		'Theme settings',                      // menu title
		'manage_options',                      // capability
		'wp-redirect-theme-settings',          // menu slug
		'wpr_theme_settings_html'              // callback function to be called when rendering the page
	);
	add_action('admin_init', 'wpr_settings_init');
}
add_action('admin_menu', 'wpr_theme_settings');


function wpr_settings_init() {
	add_settings_section(
		'wpr-settings-section',                // id
		'',                                    // title
		'',                                    // callback function
		'wp-redirect-theme-settings'           // page
	);

    register_setting(
		'wp-redirect-theme-settings',          // option group
        'redirect-url',                        // option name
        ''                                     // args
    );
    
	add_settings_field(
		'redirect-url',                        // id
		'Redirect URL',                        // title
		'wpr_url_inputfield',                  // callback function
		'wp-redirect-theme-settings',          // page
        'wpr-settings-section',                // section
        ''                                     // args
	);
}


function wpr_url_inputfield() {
	$url = esc_attr(get_option('redirect-url', '')); ?>
    <input class="wpr-input" type="url" name="redirect-url" value="<?php echo $url; ?>">
    <?php
}


function wpr_theme_settings_html() {
    ?>
    <div>
        <h1>WP Redirect (Headless CMS) Settings</h1>
        <p>Please enter the URL to which the visitor should be redirected.</p>
        <form method="POST" action="options.php">
            <?php settings_fields('wp-redirect-theme-settings');?>
            <?php do_settings_sections('wp-redirect-theme-settings')?>
            <?php submit_button(
                null,                               // text
                'primary',                          // type
                'submit',                           // name
                true,                               // wrap
                null                                // other attributes
            )?>
        </form>
    </div>
<?php
}