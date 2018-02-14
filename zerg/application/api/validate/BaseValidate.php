<?php

namespace app\api\validate;

use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        // 1.获取http 传入的参数
        // 2.对这些参数进行检验
        $request = Request::instance(); // 拿到所有的http传来的参数
        $params = $request->param();

        // extends Validate 所有在 Validate里面，$this指向Validate本身
        $result = $this->check($params);
        // var_dump($params);
        if (!$result) {
            // var_dump($validate->getError());
            // 原理同上，只是因为是Validate中，所有提供了erroe属性获取报错信息
            $error = $this->error;
            // tp5内置的异常抛出
            throw new Exception($error);
        } else {
            return true;
        }
    }
}
