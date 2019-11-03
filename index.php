<?php
    $url = esc_attr(get_option('redirect-url', ''));
    header("Location:$url", true, 301);
    exit;
?>