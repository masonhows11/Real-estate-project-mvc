<?php

namespace System\Database\Traits;
trait HasRelation
{

    // relation between two  model/table or models/tables
    // one to one & reverse
    // one to many & reverse
    // mann to many & reverse


    //// one to one
    protected function hasOne($model, $foreignKey, $localKey)
    {

        if ($this->{$this->primaryKey}) {

            $modelObject = new $model();
            return $modelObject->getHasOneRelation($this->table, $foreignKey, $localKey, $this->$localKey);
        }
        return null;
    }


    public function getHasOneRelation($table, $foreignKey, $otherKey, $otherKeyValue)
    {
        // sql = 'select phones.* from users join  phones on users.id = phones.user_id';
        // a left table like users
        // b right table like phone
        // user hasOne phone

        $this->setSql("SELECT `b`.* FROM `{$table}` AS `a` JOIN " . $this->getTableName() . " AS `b` ON `a`.`{$otherKey}` = `b`.`{$foreignKey}` ");
        $this->setWhere('AND', "`a`.`{$otherKey}` = ? ");
        $this->table = 'b';
        $this->addValue($otherKey, $otherKeyValue);
        $statement = $this->executeQuery();
        $data = $statement->fetch();
        if ($data) {
            return $this->arrayToAttributes($data);
        }
        return null;

    }


    //// one to many
    protected function hasMany($model, $foreignKey, $otherKey)
    {

        if ($this->{$this->primaryKey}) {

            $modelObject = new $model();
            return $modelObject->getHasManyRelation($this->table, $foreignKey, $otherKey, $this->$otherKey);
        }
        return null;
    }


    public function getHasManyRelation($table, $foreignKey, $otherKey, $otherKeyValue): static
    {
        // sql = 'select posts.* from categories join posts on categories.id = posts.user_id';
        // a left table like categories
        // b right table like posts
        // category hasMany posts

        $this->setSql("SELECT `b`.* FROM `{$table}` AS `a` JOIN ".$this->getTableName()." AS `b` ON `a`.`{$otherKey}` = `b`.`{$foreignKey}` ");
        $this->setWhere('AND', "`a`.`$otherKey` = ? ");
        $this->table = 'b';
        $this->addValue($otherKey, $otherKeyValue);
        return $this;
        //        $statement = $this->executeQuery();
        //        $data = $statement->fetchAll();
        //        if($data){
        //            return $this->arrayToAttributes($data);
        //        }
        //        return null;

    }

    //// one to many reverse / belongsTo
    protected function belongsTo($model, $foreignKey, $localKey)
    {

        if ($this->{$this->primaryKey}) {

            $modelObject = new $model();
            return $modelObject->getBelongsToRelation($this->table, $foreignKey, $localKey, $this->$foreignKey);
        }
        return null;
    }


    public function getBelongsToRelation($table, $foreignKey, $otherKey, $foreignKeyValue)
    {
        $this->setSql("SELECT `b`.* FROM `{$table}` AS `a` JOIN " . $this->getTableName() . " AS `b` ON `a`.`{$foreignKey}` = `b`.`{$otherKey}` ");
        $this->setWhere('AND', "`a`.`{$foreignKey}` = ? ");
        $this->table = 'b';
        $this->addValue($foreignKey, $foreignKeyValue);
        $statement = $this->executeQuery();
        $data = $statement->fetch();
        if ($data) {
            return $this->arrayToAttributes($data);
        }
        return null;
    }

    //// many to many
    /// categories category_product products
    /// left id , name : right id , title
    /// pivot table id , cat_id , product_id
    protected function belongsToMany($model,$commonTable,$localKey,$middleForeignKey,$middleRelation,$foreignKey)
    {

        if ($this->{$this->primaryKey}) {

            $modelObject = new $model();
            return $modelObject->getBelongsToManyRelation($this->table,$commonTable,$localKey, $this->$localKey,
                                                                 $middleForeignKey,$middleRelation,$foreignKey);
        }
        return null;
    }


    public function getBelongsToManyRelation($table,$commonTable,$localKey, $localKeyValue,$middleForeignKey,$middleRelation,$foreignKey)
    {
        // sql = nested join
        // sql =
        $this->setSql("SELECT `c`.* FROM ( SELECT `b`.* FROM `{$table}` AS `a` JOIN `{$commonTable}` AS `b` on
        `a`.`{$localKey}` = `b`.`{$middleForeignKey}`WHERE `a`.`{$localKey}` =? ) AS `relation` JOIN
        ".$this->getTableName()."AS `c` ON `relation`.`{$middleRelation}` = `c`.`$foreignKey`");

        $this->addValue("{$table}_{$localKey}",$localKeyValue);
        $this->table = 'c';
        return $this;
        //        $statement = $this->executeQuery();
        //        $data = $statement->fetch();
        //        if ($data) {
        //            return $this->arrayToAttributes($data);
        //        }
        //        return null;
    }


}
