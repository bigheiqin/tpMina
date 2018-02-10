<?php
namespace app\api\controller\v1;

use think\Validate;

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
            'name' => 'vendorasdasdasd',
            'email' => 'vendorqq.com',
        ];

        $validate = new Validate([
            'name' => 'require|max:10',
            'email' => 'email',
        ]);
        
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
