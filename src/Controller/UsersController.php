<?php

namespace App\Controller;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;



/**
* 
*/
class UsersController extends AppController
{
    public function index(){

        $users = TableRegistry::get("users");
        $query = $users->find();
        $this->set(array("data"=>$query));
        $this->render();
    }

	public function add()
    {
        
        $this->render("/Users/add");
       
    }
    public function edit($id){
    	$this->set(array("id",$id));
    	$this->render("/Users/add");
    }
    public function delete($id){

    }

}

?>