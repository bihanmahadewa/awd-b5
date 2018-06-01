<?php
namespace Entity;


class Post{
    public $id;
    public $content;
    public $summery;
    public $created_at;
    public $updated_at;
    public $title;

   
    public function getName(){
        return $this->content;
    }


}