<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/config/plugins/email.yaml',
    'modified' => 1495698970,
    'data' => [
        'enabled' => true,
        'from' => 'site@grafikprofil.se',
        'from_name' => 'grafikprofil.se',
        'to' => 'per@grafikprofil.se',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp01.binero.se',
                'port' => 587,
                'encryption' => 'ssl',
                'user' => 'per@grafikprofil.se',
                'password' => 'Xazsqw2121'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
