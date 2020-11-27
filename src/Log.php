<?php
namespace pekand\Log;

class Log
{
    private static $storegePath = "storage/log/";

    private static $allowedSeverity = ['INFO', 'ERROR', 'WARNING', 'DEBUG'];
    
    public static function setStoragePath($storegePath) {
        self::$storegePath = $storegePath;
    }

    public static function setAllowedSeverity($allowedSeverity) {
        self::$allowedSeverity = $allowedSeverity;
    }
    
    public static function write($message, $severity = 'INFO') {
        if (!in_array($severity, self::$allowedSeverity)) {
             return;
        }
        
        file_put_contents(
            self::$storegePath."server-".date("Y-m-d").".log", 
            date("Y-m-d H:i:s")." ".$severity." ".$message."\n", 
            FILE_APPEND | LOCK_EX
        );
    }
}
