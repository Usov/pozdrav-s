<?php

class Catalog extends CActiveRecord {

    public $catalogid;
    public $contentid;

    public function daoSave(){
        $vars = get_object_vars($this);
        Yii::app()->db->createCommand()->insert($this->tableName(), $vars);
    }

    public function tableName(){
        return 'site_catalog';
    }

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

}