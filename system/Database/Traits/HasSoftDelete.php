<?php

namespace System\Database\Traits;

trait HasSoftDelete
{



    protected function deleteModel($id = null)
    {
        $object = $this; // refer to current model -> user / category / product

        if ($id)
        {
            $this->resetQuery();
            $object = $this->findMethod($id);

        }
        if($object)
        {
            $object->resetQuery();
            $object->setSql("UPDATE ".$object->getTableName()." SET ".$this->getAttributeName($this->deleteAt)." = NOW()");
            $object->setWhere("AND", $this->getAttributeName($object->primaryKey)." = ? ");
            $object->addValue($object->primaryKey,$object->{$object->primaryKey});
            return $object->executeQuery();
        }
        return null;

    }

    protected function allMethod(): array
    {
        // for soft delete we determine if deleted_at is not null
        // it means that record is not physically deleted
        $this->setSql("SELECT ".$this->getTableName().".* FROM ".$this->getTableName());
        $this->setWhere("AND",$this->getAttributeName($this->deleteAt)." IS NULL ");
        $statement = $this->executeQuery();
        $data = $statement->fetchAll();
        if ($data) {
            $this->arrayToObjects($data);
            return $this->collection;
        }
        return [];
    }

    protected function findMethod($id)
    {
        $this->resetQuery();
        //  $this->setSql("SELECT * FROM " . $this->getTableName());
        $this->setSql("SELECT ".$this->getTableName().".* FROM ".$this->getTableName());

        $this->setWhere("AND",$this->getAttributeName($this->primaryKey)." = ? ");
        $this->addValue($this->primaryKey, $id);

        $this->setWhere("AND",$this->getAttributeName($this->deleteAt)." IS NULL ");

        $statement = $this->executeQuery();
        $data = $statement->fetch();
        $this->setAllowedMethods(['update', 'delete', 'find']);
        if ($data) {
            return $this->arrayToAttributes($data);
        }
        return null;
    }

    protected function getMethod($array = [])
    {
        // $array = []; determine specifics column
        if ($this->sql == '')
        {
            if (empty($array)) {
                $fields = $this->getTableName() . '.*';
            } else {
                foreach ($array as $key => $value) {
                    $array[$key] = $this->getAttributeName($value);
                    // users.email
                }
                $fields = implode(' , ',$array);
                // select email,first_name,age from users
            }
            $this->setSql("SELECT $fields FROM".$this->getTableName());
        }
        $this->setWhere("AND",$this->getAttributeName($this->deleteAt)." IS NULL ");


        $statement = $this->executeQuery();
        $data = $statement->fetchAll();
        if ($data) {
            $this->arrayToObjects($data);
            return $this->collection;
        }
        return [];
    }

    protected function paginateMethod(int $perPage = null): array
    {
        $this->setWhere("AND",$this->getAttributeName($this->deleteAt)." IS NULL ");
        //
        $totalRows = $this->getCount();
        //
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $totalPages = ceil($totalRows / $perPage);
        $currentPage = min($currentPage,$totalPages);
        $currentPage = max($currentPage,1);
        $currentRow = ($currentPage - 1) * $perPage;
        $this->limitMethod($currentRow,$perPage);

        if($this->sql == '')
        {
            $this->setSql("SELECT ".$this->getTableName().".* FROM ".$this->getTableName());
        }

        $statement = $this->executeQuery();
        $data = $statement->fetchAll();
        if ($data) {
            $this->arrayToObjects($data);
            return $this->collection;
        }
        return [];
    }

}