<?php
namespace app\index\controller;

use think\Controller;

/**
* +----------------------------------------------------------------------
* | Author: lx
* +----------------------------------------------------------------------
* | 网站入口控制器
* | 导航七个链接对应view的七个文件夹，其余全部放在others里面
* +----------------------------------------------------------------------
*/

class Index extends Controller
{
	public function index()
	{
		return view();
	}
}
