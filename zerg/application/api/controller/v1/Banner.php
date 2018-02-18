<?php
namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\Validate\IDMustBePostiveINT;
use app\lib\exception\BannerMissException;

class Banner
{
    public function getBanner($id)
    {

        /**
         * 获取指定的banner信息
         * @url   /banner/:id
         * @http  GET
         * @id    banner的id号
         */

        // 自定义验证规则，校验如果返回false，则此处被拦截，之后的代码都不被执行
        (new IDMustBePostiveINT())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        if(!$banner){
            throw new BannerMissException();
            // throw new Exception ('内部错误');
        }
        return json($banner);

    }
}
