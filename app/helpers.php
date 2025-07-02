<?php

if (!function_exists('_')) {
    function _($key, $replace = [], $locale = null) {
        return __($key, $replace, $locale);
    }
}