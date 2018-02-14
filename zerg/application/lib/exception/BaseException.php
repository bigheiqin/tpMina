<?php

namespace app\lib\exception;

use think\Exception;
class BaseException extends Exception
{
    // http请求状态码 400, 200
    public $code = 400;
    
    // 错误具体信息
    public $msg = '错误信息';

    // 自定义错误码
    public $errorCode = 10000;
}
