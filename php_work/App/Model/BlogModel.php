<?php
namespace Model;

use Core\Model;
use Entity\Blog;
class BlogModel extends Model{


    protected $table = "Blog";
    function __construct(){
        parent::__construct();
    }
   /* public function addComment($comment){


       
       $this->setInsertData($comment)->save();
    }*/

    public function getAllBlogs(){
        return $this->select('*')->setEntity('Entity\Blog')->find();
    }

}