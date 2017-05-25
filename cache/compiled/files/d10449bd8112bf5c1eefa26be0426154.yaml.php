<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/perolsson/Documents/Webbplatser/Grafik & Profil/grafikprofil.se/public/user/config/plugins/email.yaml',
    'modified' => 1495654150,
    'data' => [
        'enabled' => true,
        'from' => 'site@grafikprofil.se',
        'from_name' => 'grafikprofil.se',
        'to' => 'per@grafikprofil.se',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.grafikprofil.se',
                'port' => 587,
                'encryption' => 'none',
                'user' => 'per@grafikprofil.se',
                'password' => 'Xazsqw2121'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
