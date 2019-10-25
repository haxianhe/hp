<?php

/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/22
 * @Time: 10:37 AM
 */

namespace Test\Service\Data;

use HpLib\Orm\HpUser;

class TestData
{
    public function getTime()
    {
//        return MySql::insert("INSERT INTO hp_user(name, password) VALUE('hello', '123')");
//        $sqlArray = [
//            "INSERT INTO hp_user(name, password) VALUE('hello', '123')",
//            "INSERT INTO hp_user(name, password) VALUE('hello', '123')"
//        ];
//        return MySql::batchInsert($sqlArray);
        $sql = "SELECT * FROM hp_user";
        $rows =  HpUser::findRows($sql);
        return $rows;
    }
}