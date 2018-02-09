<?php
namespace app\api\controller\v1;

use think\Validate;
class Banner
{
    public function getBanner($id){

        /**
         * 获取指定的banner信息
         * @url /banner/:id
         * @http GET
         * @id banner的id号
         */

        // 验证数据
        $data = [
            'name'  => 'vendor',
            'email' => 'vendor@qq.com'
        ];

        $validate = new Validate([
            'name'   => 'require|max:10',
            'email' => 'email'
        ]);

        $result = $validate->check($data);

        // echo $id;

    }
}
?>