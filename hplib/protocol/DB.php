<?php
/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/25
 * @Time: 7:22 PM
 */

namespace HpLib\Protocol;

use HpLib\Core\Conf;
use PDO;

class DB
{
    protected $conf;
    protected $dbName;

    function __construct($tableName)
    {
        $this->dbName = $tableName;
        $this->initDBConf();
    }

    protected function initDBConf()
    {
        $this->conf = Conf::getConf('/db/'.$this->dbName.'.json');
    }

    public function getConnection()
    {
        return new PDO("mysql:host=".$this->conf['server']['ip'].";dbname=".$this->conf['dbname'], $this->conf['username'], $this->conf['password']);
    }
}