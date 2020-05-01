<?php

return [
    'vision' => [
        'name' => 'DevOps',
        'permission' => 'vision.view',
        'route_segment' => 'vision',
        'icon' => 'fa-rocket',
        'entries'       => [
            'vision' => [
                'name' => 'Vision',
                'icon' => 'fa-rocket',
                'route_segment' => 'vision',
                'route' => 'vision.view',
                'permission' => 'vision.view'
            ],
        ]
    ]
];
