<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/plugins/seo/blueprints.yaml',
    'modified' => 1495986610,
    'data' => [
        'name' => 'SEO',
        'version' => '0.8.0',
        'description' => 'Awesome SEO is an user friendly plugin to manage your SEO across all pages.',
        'icon' => 'facebook',
        'author' => [
            'name' => 'Paul Massendari',
            'email' => 'paul@massendari.com'
        ],
        'homepage' => 'https://github.com/paulmassen/grav-plugin-seo',
        'keywords' => [
            0 => 'seo',
            1 => 'meta',
            2 => 'microdata',
            3 => 'schema',
            4 => 'plugin'
        ],
        'bugs' => 'https://github.com/paulmassen/grav-plugin-seo/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'seo' => [
                            'type' => 'tab',
                            'title' => 'SEO',
                            'fields' => [
                                'tabs1' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'title' => 'Settings',
                                    'fields' => [
                                        'googlefields' => [
                                            'type' => 'tab',
                                            'title' => 'Google',
                                            'fields' => [
                                                'header.googledesc' => [
                                                    'type' => 'textarea',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_DESC',
                                                    'id' => 'desc'
                                                ],
                                                'header.googletitle' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_TITLE',
                                                    'id' => 'text'
                                                ],
                                                'header.googlepreview' => [
                                                    'type' => 'google',
                                                    'label' => 'PLUGINS.SEO.GOOGLE_PREVIEWDESC'
                                                ]
                                            ]
                                        ],
                                        'twitterfields' => [
                                            'type' => 'tab',
                                            'title' => 'Twitter',
                                            'fields' => [
                                                'columns' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column1' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'twitter.twitterenable' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGIN_ADMIN.ENABLED',
                                                                    'highlight' => 1,
                                                                    'default' => 1,
                                                                    'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.twittercardoptions' => [
                                                                    'type' => 'select',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_CARD_SELECT',
                                                                    'options' => [
                                                                        'summary' => 'PLUGINS.SEO.TWITTER_CARD_SUMMARY',
                                                                        'summary_large_image' => 'PLUGINS.SEO.TWITTER_CARD_SUMLARGIMG'
                                                                    ]
                                                                ],
                                                                'header.titlecardtwitter' => [
                                                                    'type' => 'section',
                                                                    'title' => 'PLUGINS.SEO.TWITTER_CARD_SECTITLE',
                                                                    'underline' => true,
                                                                    'id' => 'twittimgselect'
                                                                ],
                                                                'header.twittertitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.TWITTER_TITLE',
                                                                    'id' => 'twittertitle'
                                                                ],
                                                                'header.twitterdescription' => [
                                                                    'type' => 'textarea',
                                                                    'text' => 'PLUGINS.SEO.TWITTER_DESCRIPTION',
                                                                    'id' => 'twitterdescription'
                                                                ]
                                                            ]
                                                        ],
                                                        'column2' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.twitterlabel' => [
                                                                    'type' => 'section',
                                                                    'text' => 'PLUGINS.SEO.TWITTER_PREVIEWDESC'
                                                                ],
                                                                'header.twitterpreview' => [
                                                                    'type' => 'twitter'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'facebookfields' => [
                                            'type' => 'tab',
                                            'title' => 'Facebook',
                                            'fields' => [
                                                'columns2' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column3' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.facebookenable' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_ENABLE',
                                                                    'default' => 1,
                                                                    'highlight' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.facebooktitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_TITLE',
                                                                    'id' => 'facebooktitle'
                                                                ],
                                                                'header.facebookdesc' => [
                                                                    'type' => 'textarea',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_DESC',
                                                                    'id' => 'facebookdesc'
                                                                ]
                                                            ]
                                                        ],
                                                        'column4' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.facebookpreview' => [
                                                                    'type' => 'facebook',
                                                                    'label' => 'PLUGINS.SEO.FACEBOOK_PREVIEWDESC'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
