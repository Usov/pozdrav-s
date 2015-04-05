<?php

class Card extends CActiveRecord {

    public $id;
    public $mp3_path;
    public $text;
    public $playtime;
    public $numorders_24;
    public $numorders_7;
    public $numorders_30;
    public $datepublished;
    public $name;

    public function daoSave(){
        $vars = get_object_vars($this);
        Yii::app()->db->createCommand()->insert($this->tableName(), $vars);
    }

    public function tableName(){
        return 'site_card';
    }

    public static function model($className=__CLASS__){
        return parent::model($className);
    }

}