<?php

namespace app\index\controller;

use app\index\common\Base;

/**
* +----------------------------------------------------------------------
* | 网站入口控制器
* | 导航七个链接对应七个方法，其余全部放在others里面
* +----------------------------------------------------------------------
*/

class Index extends Base
{
	public function index()
	{
		return $this -> view -> fetch('index');
	}

	//关于我们
    public function about()
    {
        return $this -> view ->fetch('about');
    }

    //专升本
    public function undergraduate()
    {
        return $this -> view ->fetch('undergraduate');
    }

    //考研
    public function postgraduate()
    {
        return $this -> view ->fetch('undergraduate');
    }

    //海外留学
    public function overseas()
    {
        return $this -> view ->fetch('overseas');
    }

    //新闻动态
    public function news()
    {
        return $this -> view ->fetch('news');
    }

    //联系我们
    public function contact()
    {
        return $this -> view ->fetch('contact');
    }

}
