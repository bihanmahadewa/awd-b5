<?php
namespace Model;

use Core\Model;
use Entity\comment;
class CommentModel extends Model{


    protected $table = "comments";
    function __construct(){
        parent::__construct();
    }
    public function addComment($comment){


       
       $this->setInsertData($comment)->save();
    }

    public function getAllComments(){
        return $this->select('*')->setEntity('Entity\comment')->find();
    }

}