<?php

class Category extends CActiveRecord {

    public $id;
    public $parent_id;
    public $nameshort;
    public $namefull;
    public $catpath;
    public $ispublished;

    public function daoSave(){
        $vars = get_object_vars($this);
        Yii::app()->db->createCommand()->insert($this->tableName(), $vars);
    }

    public function tableName(){
        return 'site_category';
    }

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

}