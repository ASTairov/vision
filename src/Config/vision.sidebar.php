<?php

return [
    'doctrine' => [
        'name' => 'DevOps',
        'permission' => 'fitting.doctrineview',
        'route_segment' => 'fitting',
        'icon' => 'fa-rocket',
        'entries'       => [
            'fitting' => [
                'name' => 'Fittings',
                'icon' => 'fa-rocket',
                'route_segment' => 'fitting',
                'route' => 'fitting.view',
                'permission' => 'fitting.view'
            ],
        ]
    ]
];
