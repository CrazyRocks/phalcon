<?php

return array(
    '/admin/category' =>  array(
        'module' => 'EvaBlog',
        'controller' => 'Admin\Category',
    ),
    '/admin/category/:action(/(\d+))*' =>  array(
        'module' => 'EvaBlog',
        'controller' => 'Admin\Category',
        'action' => 1,
        'id' => 3,
    ),
    '/admin/post' =>  array(
        'module' => 'EvaBlog',
        'controller' => 'Admin\Post',
    ),
    '/admin/post/:action(/(\d+))*' =>  array(
        'module' => 'EvaBlog',
        'controller' => 'Admin\Post',
        'action' => 1,
        'id' => 3,
    ),
);

