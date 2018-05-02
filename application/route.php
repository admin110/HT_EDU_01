<?php

/* *
 * url重写
 * 主页部分+++++++++++++++++++++++++++
 * about------------------关于我们
 * undergraduate----------专升本
 * postgraduate-----------宏图考研
 * overseas---------------海外留学
 * news-------------------新闻动态
 * contact----------------联系我们
 *
 * 后台模块+++++++++++++++++++++++++++
 *
 *
 * */
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    'about/[:name]' => 'index/index/about',
    'undergraduate/[:name]' => 'index/index/undergraduate',
    'postgraduate/[:name]' => 'index/index/postgraduate',
    'overseas/[:name]' => 'index/index/overseas',
    'news/[:name]' => 'index/index/news',
    'contact/[:name]' => 'index/index/contact',
];
