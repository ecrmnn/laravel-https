<?php

return [
    /*
     * LaravelHTTPS forces the URL scheme in Laravel to use
     * the HTTPS prefix for all links generated using url() and route().
     * That means that all your links can be converted to use HTTPS just by installing LaravelHTTPS.
     */
    'force' => env('HTTPS', false),
];
