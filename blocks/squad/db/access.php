<?php

$capabilities = [
    'block/squad:myaddinstance' => [
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => [
            'user' => CAP_ALLOW
        ],
    'clonepermissionsfrom' => 'moodle/my:manageblocks'
    ],

    'block/squad:addinstance' => [
        'riskbitmask' => RISK_SPAM | RISK_XSS,

        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => [
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ],
    'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ],
];