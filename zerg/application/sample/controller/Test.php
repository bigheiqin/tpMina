<?php

namespace app\sample\controller;

use think\Request;
class Test
{
    public function hello(){
        // 获取URL参数
        $id = Request::instance()->param('id');
        $name = Request::instance()->param('name');
        $age = Request::instance()->param('age');

        echo "id：".$id;
        echo "<br>";
        echo "name：".$name;
        echo "<br>";
        echo "age：".$age;
        
    }
    
}
