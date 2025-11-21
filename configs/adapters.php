<?php

return [
    'cache'=>[
        'default'=>'transient',
        'contexts'=>[
            'transient' => [
                'context'=> WPLite\Cache\Drivers\Transient::class
            ]
        ]
    ]
];
