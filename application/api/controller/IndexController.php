<?php
/**
 * Created by PhpStorm.
 * User: code301
 * Date: 2020/6/25
 * Time: 20:21
 */

namespace App\Api\Controller;

/**
 * Class TestController
 * @Controller(prefix="/index")
 */
class IndexController
{
    /**
     * @RequestMapping(route="index")
     */
    public function index()
    {
        echo "控制器index方法";
    }
}