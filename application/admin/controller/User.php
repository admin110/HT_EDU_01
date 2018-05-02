<?php

namespace app\admin\controller;

use app\admin\common\Base;
use think\Request;

class User extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        return $this -> view -> fetch('user_list');
    }

    public function add()
    {
        //
        return $this -> view -> fetch('user_add');
    }

    public function del()
    {
        //
        return $this -> view -> fetch('user_del');
    }

    public function level()
    {
        //
        return $this -> view -> fetch('user_level');
    }

    public function password()
    {
        //
        return $this -> view -> fetch('user_password');
    }

    public function points()
    {
        //
        return $this -> view -> fetch('user_points');
    }

    public function view()
    {
        //
        return $this -> view -> fetch('user_view');
    }


    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
        return $this -> view -> fetch('user_edit');
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
