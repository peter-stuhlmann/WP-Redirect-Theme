<?php
    $url = esc_attr(get_option('redirect-url', ''));
    $indexPage = get_template_directory() . '/template-parts/indexpage.php'; 

    if ($url !== '') {
        header("Location:$url", true, 301);
        exit;
    } else {
        include ($indexPage);
    };
?> 