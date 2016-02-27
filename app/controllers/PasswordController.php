<?php


class PasswordController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "Password - ";
		$this->view->selectmenu	= "password";
		$groups = Users::aggregate(
		        array(
		            '$group' => array(
		                '_id' => '$group'
		            )
		        )    
		);
		$this->view->kel = $groups['result'];
		
    }
	
	public function groupAction($id=null)
	{
		$this->view->title = "Set User Password - ";
		$this->view->selectmenu	= "password";
		$this->view->users = Users::find(
			array(
				array(
					"group" => $id
				)
			)
		);
	}
	

}

