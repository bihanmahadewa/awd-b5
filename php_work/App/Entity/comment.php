<?php
namespace Entity;


class comment{
    private $id;
    private $blog_id;
    private $full_name;
    private $email;
    private $subject;
    private $comment;
    private $updated_at;



    public function getName(){
        return $this->full_name;
    }

    public function getSubject(){
        return $this->subject;
    }

    public function getComment(){
        return $this->comment;
    }

    public function getUpdatedAt(){
        return $this->updated_at;
    }

   
}