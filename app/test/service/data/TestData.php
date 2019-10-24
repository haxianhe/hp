<?php

/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/22
 * @Time: 10:37 AM
 */

namespace test\service\data;

use core\MySql;

class TestData
{
    public function getTime()
    {
        MySql::getConnect();
//        return MySql::insert("INSERT INTO hp_user(name, password) VALUE('hello', '123')");
//        $sqlArray = [
//            "INSERT INTO hp_user(name, password) VALUE('hello', '123')",
//            "INSERT INTO hp_user(name, password) VALUE('hello', '123')"
//        ];
//        return MySql::batchInsert($sqlArray);
        $sql = "SELECT * FROM hp_user";
        $rows =  MySql::findRows($sql);
        return $rows;
    }
}