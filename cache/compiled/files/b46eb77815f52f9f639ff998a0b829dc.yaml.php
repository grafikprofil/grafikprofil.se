<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/config/site.yaml',
    'modified' => 1495574967,
    'data' => [
        'title' => 'Grafik & Profil',
        'default_lang' => 'sv',
        'author' => [
            'name' => 'Per Olsson',
            'email' => 'per@grafikprofil.se'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Vi hjälper både dig och din hemsida.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'header' => [
            'title' => '<span>VI HJÄLPER BÅDE</span> DIG OCH DIN HEMSIDA',
            'description' => 'Byta bilder eller uppdatera text. Lägga till funktioner eller bygga något nytt. Vi gör, guidar eller pekar dig åt rätt håll. Att ha en webb behöver inte vara mer komplicerat än så.',
            'buttons' => [
                0 => [
                    'text' => 'Hjälp mig!',
                    'link' => '#help_me',
                    'class' => 'help-me-btn'
                ]
            ]
        ],
        'footer' => [
            'links' => [
                0 => [
                    'text' => 'Hej kompis!',
                    'url' => 'http://hejkomp.is'
                ],
                1 => [
                    'text' => 'Vi <i class="fa fa-heart" aria-hidden="true"></i> kakor',
                    'url' => '#'
                ]
            ]
        ]
    ]
];
