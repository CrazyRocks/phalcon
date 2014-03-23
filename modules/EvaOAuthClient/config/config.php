<?php

return array(
    'routes' =>  array(
        '/auth/:action/(\w+)/(oauth1|oauth2)*' =>  array(
            'module' => 'EvaOAuthClient',
            'controller' => 'auth',
            'action' => 1,
            'service' => 2,
            'auth' => 3,
        ),

        '/auth/:action' =>  array(
            'module' => 'EvaOAuthClient',
            'controller' => 'auth',
            'action' => 1,
        ),
    ),

    'oauth' => array(
        'oauth1' => array(
            'twitter' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'douban' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'weibo' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => '',
            ),
            'flickr' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'dropbox' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'linkedin' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'yahoo' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'sohu' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'tianya' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
        ),
        'oauth2' => array(
            'facebook' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'weibo' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'baidu' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'douban' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'qihoo' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'taobao' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'tencent' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'qzone' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'renren' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'tqq' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'kaixin' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'pengyou' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'qplus' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'msn' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'google' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'github' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'foursquare' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'disqus' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
            'netease' => array(
                'enable' => 0,
                'consumer_key' => '',
                'consumer_secret' => ''
            ),
        )
    ),
);
