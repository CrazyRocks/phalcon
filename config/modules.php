<?php
return array(
    'EvaCore',
    'EvaUser',
    'EvaOAuthClient',
    'EvaOAuthServer',
    'EvaBlog',
    'EvaFileSystem',
    'Frontend' => array(
        'className' => 'Eva\Frontend\Module',
        'path' => __DIR__ . '/../apps/Frontend/Module.php'
    ),
    'WscnGold' => array(
        'className' => 'WscnGold\Module',
        'path' => __DIR__ . '/../apps/WscnGold/Module.php'
    ),
);