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
				'params' => array($response)
			));
		}
		
    }

	public function sentAction($response)
	{
		$this->view->title = "Sent - ";
		$this->view->selectmenu = "send";
		$this->view->response = $response;
	}

}

