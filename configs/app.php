<?php


return [
    'global_middlewares'=>[

    ],
    'providers'=>[
        App\Providers\AppServiceProvider::class,
        App\Providers\ShortcodeServiceProvider::class,
    ],
    'version'=>'v1',
    'name'=>'wplite-plugin',
    'url'=>getenv('APP_URL'),
    'api'=> [
        'namespace'=>'wplite/v1',
    ],
];