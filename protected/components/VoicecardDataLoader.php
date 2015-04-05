<?php

class VoicecardDataLoader extends CComponent {

    private $card;
    private $category;
    private $holiday;
    private $catalog;

    private $person;

    private $region;

    private $params;

    public function voicecardDataLoad(){
        $xml = simplexml_load_string(file_get_contents(Yii::app()->params['voicecardJsonDataLoadUrl']));
        $json = json_encode($xml);
        $data = json_decode($json);

        $this->card = $data->cards->card;
        $this->category = $data->categories->category;
        $this->holiday = $data->holidays;
        $this->catalog = $data->catalogs->catalog;
        $this->params = $data->additional;
        $this->person = $data->person;
        $this->region = $data->regions;


    }

    public function voicecardDataSave(){

//        Category::model()->deleteAll();
//        foreach($this->category as $cat){
//            $category = new Category();
//            $category->id = $cat->catid;
//            $category->parent_id = $cat->parentid;
//            $category->nameshort = $cat->nameshort;
//            $category->namefull = $cat->namefull;
//            $category->catpath = $cat->catpath;
//            $category->ispublished = $category->ispublished;
//            $category->daoSave();
//        }

//        Card::model()->deleteAll();
//        foreach($this->card as $c){
//            $card =  new Card();
//            $card->id = $c->cardid;
//            $card->name = $c->title;
//            $card->mp3_path = $c->path;
//            $card->datepublished = $c->datepublished;
//            $card->text = is_string($c->text) ? $c->text : '';
//            $card->playtime = $c->playtime;
//            $card->numorders_24 = $c->numorders_24;
//            $card->numorders_30 = $c->numorders_30;
//            $card->numorders_7 = $c->numorders_7;
//            $card->daoSave();
//        }

        Catalog::model()->deleteAll();
        foreach($this->catalog as $c){
            $catalog =  new Catalog();
            $catalog->catalogid = $c->catalogid;
            $catalog->contentid = $c->contentid;
            $catalog->daoSave();
        }

    }

}