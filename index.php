<?php
    $url = esc_attr(get_option('redirect-url', ''));
    $indexPage = get_template_directory() . '/template-parts/indexpage.php'; 

    if ( checked( "redirect", get_option( 'wpr-option-checkbox' ), false) ) { 
        header("Location:$url", true, 301);
        exit; 
    };
    if ( checked( "indexpage", get_option( 'wpr-option-checkbox' ), false) ) { 
        include ($indexPage);
    };
?>