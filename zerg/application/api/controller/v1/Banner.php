<?php
namespace app\api\controller\v1;

use think\Validate;
// 使用了独立验证器类
use app\api\validate\TestValidate;

class Banner
{
    public function getBanner($id)
    {

        /**
         * 获取指定的banner信息
         * @url /banner/:id
         * @http GET
         * @id banner的id号
         */

        // 验证数据
        $data = [
            'name' => 'vendor1111111qq',
            'email' => 'vendorqq.com',
        ];

        // $validate = new Validate([
        //     'name' => 'require|max:10',
        //     'email' => 'email',
        // ]);
        $validate = new TestValidate(); // 封装的独立验证器
        /**
         * 批量验证
         * $validate->batch()   返回对应多个不匹配验证结果
         */
        $result = $validate->batch()->check($data);
        if (!$result) {
            var_dump($validate->getError());
        }

    }
}
