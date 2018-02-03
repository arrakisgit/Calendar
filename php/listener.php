<?php
include_once 'DAO.php';

class Listener
{
	private $action;
	
	public function __construct()
	{
		$this->action=$_POST['action'];
		//echo "__construct";
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
		$selday=''.$_POST['selectedday'];
		$selmonth=''.$_POST['selectedmonth'];
		$selyear=''.$_POST['selectedyear'];//+2000;
		$starthour=''.$_POST['starthour'];//+0;
		$startminute=''.$_POST['startminute'];//+0;
		$endhour=''.$_POST['endhour'];//+0;
		$endminute=''.$_POST['endminute'];//+0;
		$eventype=$_POST['eventtype'];
		echo "(0,".((int)$startminute).",".((int)$starthour).",".(((int)$selmonth)+1).",".((int)$selday).",".(((int)$selyear)+1900).")";
		$timestampstart=mktime(0,$startminute,$starthour,$selmonth,$selday,$selyear);
		$timestampend=mktime(0,$endminute,$endhour,$selmonth,$selday,$selyear);
		
		/*$oDAO = new DAO();
		$oDAO->Insert_Event($title,$timestampstart,$timestampend,$eventype);*/
		//echo "test_".$selday;
	}
}

$listen=new Listener();
$listen->ListenAction();

?>