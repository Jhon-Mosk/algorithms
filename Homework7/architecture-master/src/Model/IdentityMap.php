<?php
//ветка для пулреквеста дз здесь
class IdentityMap
{

    private static $_instance;

    private $objects = [];

    static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new IdentityMap;
        }
        return self::$_instance;
    }

    static function getRecord($className, $id)
    {
        $inst = self::getInstance();
        $key = "$className.$id";
        if (isset($inst->objects[$key])) {
            return $inst->objects[$key];
        }
        return null;
    }

    static function addRecord($obj, $id)
    {
        $inst = self::getInstance();
        $inst->objects[$inst->getKey($obj, $id)] = $obj;
    }

    function getKey($obj, $id)
    {
        return get_class($obj) . '.' . $id;
    }
}
