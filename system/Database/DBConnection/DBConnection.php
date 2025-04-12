<?php

namespace System\Database\DBConnection;

class DBConnection
{

    private static array|null|object $dbConnectionInstance = null;

    private function __construct()
    {

    }

    public static function getDbConnectionInstance() :object
    {
        // if this dbConnectionInstance variable
        // doesn't have instance from this class
        // create new obj from this class
        if(self::$dbConnectionInstance == null)
        {
            $newInstance = new DBConnection();
            self::$dbConnectionInstance = $newInstance->dbConnection();
        }

        return self::$dbConnectionInstance;
    }

    private function dbConnection(): false|\PDO
    {
        // config pdo options
        $options = array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC);
        try {

            return  new \PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSERNAME,DBPASSWORD,$options);

        }catch (\PDOException $exception){

            echo "error in database connection: ".$exception->getMessage();
            return false;
        }

    }


    // for get last id insert into database
    // but how , witch id & witch table
    public static function newInsertId()
    {
        return self::getDbConnectionInstance()->lastInsertId();
    }


}