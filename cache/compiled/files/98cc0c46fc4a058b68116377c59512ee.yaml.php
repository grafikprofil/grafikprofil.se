<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://iplocate/iplocate.yaml',
    'modified' => 1495569879,
    'data' => [
        'enabled' => true,
        'sequence' => [
            0 => 'geoplugin',
            1 => 'freegeoip',
            2 => 'ipinfo',
            3 => 'dbip'
        ],
        'keys' => [
            'dbip' => 'FAKEKEY'
        ],
        'test_ip' => NULL
    ]
];
