<?php
class DAO
{
	public $db;
	
	public function __construct()
	{
		$this->db=null;
	}
	
	public function Connexion()
	{
		$this->db=new PDO('mysql:host=localhost;dbname=Calendar_db;charset=utf8', 'Client', 'customer');
		
	}
	
	public function Insert_Event($title,$start_date,$start_hour,$start_minute,$end_date,$end_hour,$end_minute,$event_class)
	{
		if ($this->db==null)
		{
			Connexion();
		}
		
		$req=$this->db->prepare("INSERT INTO T_Events (ID,TITLE,URL,CLASS,START_DATE,START_HOURS,START_MINUTES,END_DATE,END_HOURS,END_MINUTES) VALUES (NULL,'".$title."','url_event','".$event_class."',#".$start_date."#,".$start_hour.",".$start_minute.",#".$end_date."#,".$end_hour.",".$end_minute.")");
		$req->execute();
	}
}
?>