<?php
include_once 'DAO.php';

class Listener
{
	private $action;
	
	public function __construct()
	{
		$this->action=$_POST['action'];
		echo "__construct";
	}
	
	public function ListenAction()
	{
		switch ($this->action)
		{
			case 'insertEvent':
				$this->InsertionEvent();
				break;
			
		}
	}
	
	public function InsertionEvent()
	{
		$title=$_POST['title'];
		$event_type=$_POST['eventype'];
		$selday=$_POST['selectedday'];
		$selmonth=$_POST['selectedmonth'];
		$selyear=$_POST['selectedyear'];
		$starthour=$_POST['starthour'];
		$startminute=$_POST['startminute'];
		$endhour=$_POST['endhour'];
		$endminute=$_POST['endminute'];
		$eventype=$_POST['eventtype'];
		
		$timestampstart=mktime(0,$startminute,$starthour,$selmonth,$selday,$selyear);
		$timestampend=mktime(0,$endminute,$endhour,$selmonth,$selday,$selyear);
		
		$oDAO = new DAO();
		$oDAO->Insert_Event($title,$timestampstart,$timestampend,$eventype);
		echo "test";
	}
}

$listen=new Listener();
$listen->ListenAction();

?>