<?php

/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/22
 * @Time: 10:26 AM
 */
namespace Test\Service\Page;

use Test\Service\Data\TestData;

class TestPage
{
    public function execute($arrInput)
    {
        $objData = new TestData();
        $time = $objData->getTime();

        return $time;

//        return [
//            'test_id' => '201910221032',
//            'test_name' => '测试',
//            'test_time' => $time
//        ];
    }
}