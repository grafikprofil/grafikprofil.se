<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/config/site.yaml',
    'modified' => 1495962991,
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
            'description' => 'Byta bilder eller uppdatera text. Lägga till funktioner eller bygga nytt. Vi bygger, designar eller guidar dig åt rätt håll. En webbplats behöver inte vara svårare än än så.'
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
            'description' => 'Byta bilder eller uppdatera text. Lägga till funktioner eller bygga nytt. Vi bygger, designar eller guidar dig åt rätt håll. En webbplats behöver inte vara svårare än än så.',
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
