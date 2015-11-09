<?php

class SendController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->title = "Send - ";
		$this->view->selectmenu	= "send";
		if($this->request->isPost()){
			
			$params = array(
			   "rcpt" => $this->request->getPost('rcpt'),
			   "msg" => $this->request->getPost('msg')
			);
			$response = $this->smsweb->post('http://batikku.ml/s.py',$params);
			$this->view->response = $response;
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

