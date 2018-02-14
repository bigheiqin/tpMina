<?php
namespace app\lib\exception;

use app\lib\exception\BaseException;
use think\Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandle extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    // 同时还要返回客户端当前请求的URL路径

    public function render(Exception $ex)
    {
        /**
         * 两种异常的错误处理
         */
        if ($ex instanceof BaseException) {
            // 如果是自定义的异常
            $this->code = $ex->code;
            $this->msg = $ex->msg;
            $this->errorCode = $ex->errorCode;
        } else {
            $this->code = 500;
            $this->msg = "服务器内部错误";
            $this->errorCode = 999;
        }
        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'result_url' => $request->url(),
        ];
        return json($result, $this->code);
    }

}
