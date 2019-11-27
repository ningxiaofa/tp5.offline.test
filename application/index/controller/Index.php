<?php
namespace app\index\controller;

use think\Db;

class Index
{
    public function index()
    {
        $data = Db::name('data')->find();
        return json_encode(['code' => 1, 'data' => $data]);
    }
}
