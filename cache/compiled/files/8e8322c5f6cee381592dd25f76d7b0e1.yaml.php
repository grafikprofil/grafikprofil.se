<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/config/plugins/email.yaml',
    'modified' => 1495571866,
    'data' => [
        'enabled' => true,
        'from' => 'site@grafikprofil.se',
        'from_name' => 'grafikprofil.se',
        'to' => 'per@grafikprofil.se',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
