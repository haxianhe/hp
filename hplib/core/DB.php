<?php
/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/23
 * @Time: 9:32 AM
 */

namespace core;

use PDO;

class DB
{
    private static $servername = "";
    private static $username = "";
    private static $password = "";
    private static $dbname = "";

    private static $conn = null;

    public static function getConnect()
    {
        try {
            self::$conn = new PDO("mysql:host=".self::$servername.";dbname=".self::$dbname, self::$username, self::$password);
        }
        catch(\PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public static function insert($sql)
    {
        return self::$conn->exec($sql);
    }

    public static function batchInsert($sqlArray)
    {
        try{
            self::$conn->beginTransaction();
            foreach ($sqlArray as $sql){
                self::$conn->exec($sql);
            }
            self::$conn->commit();
            return count($sqlArray);
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public static function findRows($sql)
    {
        $result = self::$conn->query($sql);
        $rows = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $rows[] = $row;
        }
        return $rows;
    }
}