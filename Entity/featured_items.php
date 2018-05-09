<?php
namespace Entity;


class featured_items{
    private $img_id;
    private $title;
    private $gender;
    private $text;
    private $price;


    public function getTitle(){
        return $this->title;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getText(){
        return $this->text;
    }

    public function getPrice(){
        return $this->price;
    }
}

?>