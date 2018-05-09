<?php
namespace Model;

use Core\Model;
use Entity\featured_items;
class featured_itemsModel extends Model{


    protected $table = "featured_items";
    function __construct(){
        parent::__construct();
    }
    public function getAllItems(){
        return $this->select('*')->setEntity('Entity\featured_items')->find();
    }
}

?>