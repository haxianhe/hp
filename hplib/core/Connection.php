<?php
/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/23
 * @Time: 9:32 AM
 */

namespace HpLib\Core;

use HpLib\Protocol\DB;
use PDO;

class Connection
{
    protected static $db;
    protected static $dbName;

    public static function getDB()
    {
        try {
            if (!self::$db) {
                $dbObj = new DB(static::$dbName);
                self::$db = $dbObj->getConnection();
            }

            return self::$db;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function exec($sql)
    {
        return self::getDB()->exec($sql);
    }

    public static function batchExec($sqlArray)
    {
        try {
            self::getDB()->beginTransaction();
            foreach ($sqlArray as $sql) {
                self::getDB()->exec($sql);
            }
            self::getDB()->commit();

            return count($sqlArray);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function findRows($sql)
    {
        $result = self::getDB()->query($sql);
        $rows = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
        }
        return $rows;
    }
}