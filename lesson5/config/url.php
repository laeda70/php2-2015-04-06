<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($uri =='/'){
        $ctrl = 'news';
        $action = 'All';
    }
    else {
        $uri = trim($uri, '/');
        $uri_elements = explode('/', $uri);
        $ctrl = $uri_elements[0];


        if (!empty($uri_elements[1])) {
            $action = $uri_elements[1];

        }

        else {
            $action = 'All';
        }
    }