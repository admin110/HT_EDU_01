<?php

namespace app\admin\controller;

use app\admin\common\Base;

class Index extends Base
{
    public function index()
    {
        return $this -> view -> fetch('index');
    }
    public function login()
    {
        return $this -> view -> fetch('login');
    }
}
