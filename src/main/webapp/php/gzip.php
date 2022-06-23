<?php
if (!isset($_SERVER['HTTP_ACCEPT_ENCODING'])) {
    ob_start();
}
elseif (!strpos(' ' . $_SERVER['HTTP_ACCEPT_ENCODING'], 'x-gzip')) {
    if (!strpos(' ' . $_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
        ob_start();
    }
    elseif(!ob_start("ob_gzhandler")) {
        ob_start();
    }
}
elseif(!ob_start("ob_gzhandler")) {
    ob_start();
}

