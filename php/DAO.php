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
		$this->db=new PDO('mysql:host=localhost;dbname=Calendar_db;charset=utf8', 'root', 'root');
		
	}
	
	public function Insert_Event($title,$timestampstart,$timestampend,$event_class)
	{
		if ($this->db==null)
		{
			$this->Connexion();
		}
		
		$req=$this->db->prepare("INSERT INTO T_Events (ID,TITLE,URL,CLASS,START_DATE,END_DATE) VALUES (NULL,'".$title."','url_event','".$event_class."',".$timestampstart.",".$timestampend.")");
		$req->execute();
	}
}
?>