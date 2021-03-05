<?php

########################################################################
# Extension Manager/Repository config file for ext: "patchlayout"
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Patches for the Backend Layout',
    'description' => 'Collection of patches for the Backend Layout',
    'category' => 'be',
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author_company' => '',
    'version' => '0.1.3',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.99.99',
            'typo3' => '8.6.0-10.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

