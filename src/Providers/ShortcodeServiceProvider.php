<?php

namespace App\Providers;

use App\Shortcodes\Hello;
use WPLite\Provider;


class ShortcodeServiceProvider extends Provider 
{
    public function register() {
        Hello::register();
    }
}