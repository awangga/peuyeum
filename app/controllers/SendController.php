<?php

class SendController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "Send - ";
		$this->view->selectmenu	= "send";
		if($this->request->isPost()){
			$response = $this->smsweb->sendSMS(
				$this->request->getPost('rcpt'),
				$this->request->getPost('msg')
				);
			return $this->dispatcher->forward(array(
				'action' => 'sent',
				'params' => array($this->view->title,$this->view->selectmenu,$response)
			));
		}
		
    }

	public function sentAction($title,$selectmenu,$response)
	{
		$this->view->title = $title;
		$this->view->selectmenu = $selectmenu;
		$this->view->response = $response;
	}
	
	public function personalAction()
	{
		$this->view->title = "Sending Personal - ";
		$this->view->selectmenu = "mpersonal";
		if($this->request->isPost()){
			$response = $this->smsweb->sendSMS(
				$this->request->getPost('rcpt'),
				$this->request->getPost('msg')
				);
			return $this->dispatcher->forward(array(
				'action' => 'sent',
				'params' => array($this->view->title,$this->view->selectmenu,$response)
			));
		}
	}
	
	public function groupAction()
	{
		$this->view->title = "Sending Group - ";
		$this->view->selectmenu = "mgroup";
		if($this->request->isPost()){
			$response = $this->smsweb->sendSMS(
				$this->request->getPost('rcpt'),
				$this->request->getPost('msg')
				);
			return $this->dispatcher->forward(array(
				'action' => 'sent',
				'params' => array($this->view->title,$this->view->selectmenu,$response)
			));
		}
	}

}

