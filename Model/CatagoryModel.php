<?php
namespace Model;

use Core\Model;
use Entity\Department;
class DepartmentModel extends Model{


    protected $table = "catagories";
    function __construct(){
        parent::__construct();
    }
    public function getAllDepartments(){
        return $this->select('*')->setEntity('Entity\Department')->find();
    }
}

?>