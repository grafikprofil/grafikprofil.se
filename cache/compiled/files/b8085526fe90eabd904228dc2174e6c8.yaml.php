<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/plugins/cookiespolicy/blueprints.yaml',
    'modified' => 1495572998,
    'data' => [
        'name' => 'CookiesPolicy',
        'version' => '1.0.10',
        'description' => 'Displays a banner or a dialog on page, to comply with the European Community Cookies Law',
        'icon' => 'gavel',
        'author' => [
            'name' => 'Giansimon Diblas',
            'email' => 'info@diblas.net',
            'url' => 'http://diblas.net'
        ],
        'homepage' => 'https://github.com/giansi/grav-plugin-cookies-policy',
        'demo' => 'https://github.com/giansi/grav-plugin-cookies-policy',
        'keywords' => 'plugin, cookie, policy, european, law',
        'bugs' => 'https://github.com/giansi/grav-plugin-cookies-policy/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'type' => [
                    'type' => 'select',
                    'label' => 'Type',
                    'size' => 'small',
                    'default' => 'bar',
                    'options' => [
                        'bar' => 'bar',
                        'dialog' => 'dialog'
                    ],
                    'help' => 'Choose the displayed banner type'
                ],
                'url' => [
                    'type' => 'text',
                    'label' => 'Privacy route',
                    'size' => 'medium',
                    'placeholder' => 'http://example.com/privacy-url',
                    'help' => 'Add here the route that points the full privacy page'
                ]
            ]
        ]
    ]
];
