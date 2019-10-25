<?php
/**
 * @Desc:
 * @User: haxianhe
 * @Date: 2019/10/25
 * @Time: 6:18 PM
 */

namespace HpLib\Core;


class Conf
{
    public static function getConf($path)
    {
        $json = file_get_contents(CONF_PATH . $path);
        return json_decode($json, true);
    }
}