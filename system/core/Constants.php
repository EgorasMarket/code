<?php
$isLive = false;
if ($isLive) {
    define('API_SERVER', 'https://api.egoras.com');
} else {
    define('API_SERVER', 'http://egoras-api.com');
}

define('STATIC_VERSION', "0.0.2");
