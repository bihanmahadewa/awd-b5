<?php
namespace Entity;


class Blog{
    private $id;
    private $image;
    private $text;

 
    public function getImage(){
        header("Content-type: image/jpeg");
        return $this->image;
    }

    public function getText(){
        return $this->text;
    }

 

   
}