<?php
include 'DAO.php';

class Listener
{
	private $action;
	
	public function __construct()
	{
		$this->action=$_POST['action'];
	}
	
	public function ListenAction()
	{
		switch ($this->action)
		{
			case 'insertEvent':
				InsertionEvent();
				break;
			
		}
	}
	
	public function InsertionEvent()
	{
		$title=$_POST['rdvtitle'];
		$event_type=$_POST['eventype'];
		
	}
}

?>