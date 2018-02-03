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
		//echo "(0,".((int)$startminute).",".((int)$starthour).",".(((int)$selmonth)+1).",".((int)$selday).",".(((int)$selyear)+1900).")";
		
		
		 $st_min=((int)$startminute);
		 $st_hr=((int)$starthour);
		 $en_min=((int)$endminute);
		 $en_hr=((int)$endhour);
		 $intmonth=(((int)$selmonth)+1);
		 $intday=((int)$selday);
		 $intyear=(((int)$selyear)+1900);
		 $timestampstart=mktime(0,$st_min,$st_hr,$intmonth,$intday,$intyear);
		 $timestampend=mktime(0,$en_min,$en_hr,$intmonth,$intday,$intyear);
		//$oDAO = new DAO();
		//$oDAO->Insert_Event($title,$timestampstart,$timestampend,$eventype);
		echo "test_";//$timestampstart;
	}
}

$listen=new Listener();
$listen->ListenAction();

?>