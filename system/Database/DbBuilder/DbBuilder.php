<?php

namespace System\Database\DbBuilder;

use JetBrains\PhpStorm\NoReturn;
use System\Database\DBConnection\DBConnection;


class DbBuilder
{


    #[NoReturn] public function __construct()
    {

        $this->createTables();
        die("migrations run successfully");

    }


    private function getMigrations(): array
    {

        $oldMigrationArray =  $this->getFromOldMigration();
        $migrationsDir = BASE_DIR.DIRECTORY_SEPARATOR.'database'.DIRECTORY_SEPARATOR.'migrations'.DIRECTORY_SEPARATOR;
        $allMigrationsArray = glob($migrationsDir.'*.php');
        // check old migrations from new migrations
        $newMigrationsArray = array_diff($allMigrationsArray,$oldMigrationArray);
        $this->putToOldMigration($allMigrationsArray);

        $sqlCodeArray  = [];
        foreach ($newMigrationsArray as $migration){

            $sqlCode = require $migration;
            $sqlCodeArray[] = $sqlCode[0];
            //array_push($sqlCodeArray,$sqlCode[0]);
        }
        return $sqlCodeArray;
    }

    private function getFromOldMigration(): array
    {
        $data = file_get_contents(__DIR__ . '/oldTables.db');
        return empty($data) ? [] : unserialize($data);
    }

    private function putToOldMigration($value): void
    {
        file_put_contents(__DIR__ . '/oldTables.db', serialize($value));
    }

    private function createTables(): bool
    {
        $migrations = $this->getMigrations();

        $pdoInstance = DBConnection::getDbConnectionInstance();

        try {
            foreach ($migrations as $migration) {

                $statement = $pdoInstance->prepare($migration);
                $statement->execute();
            }
            return true;
        } catch (\PDOException $exception) {
            echo "Migrate has failed" . $exception;
        }
        return false;


    }


}