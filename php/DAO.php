<?php
class DAO
{
	private $db;
	
	public function __construct()
	{
		$this->db=null;
		//echo "connexio__cons";
	}
	
	public function Connexion()
	{
		$this->db=new PDO('mysql:host=localhost;dbname=Calendar_db;charset=utf8', 'root', 'root');
		
	}
	
	public function Insert_Event($title,$timestampstart,$timestampend,$event_class)
	{
		if ($this->db==null)
		{
			//echo "connexio__cons2";
			$this->Connexion();
		}
		
		//echo $title;
		//echo "INSERT INTO T_Events (ID,TITLE,URL,CLASS,START_DATE,END_DATE) VALUES (NULL,'".$title."','url_event','".$event_class."',".$timestampstart.",".$timestampend.");";
		$req=$this->db->prepare("INSERT INTO T_Events (ID,TITLE,URL,CLASS,START_DATE,END_DATE) VALUES (NULL,'".$title."','url_event','".$event_class."',".$timestampstart.",".$timestampend.");");
		$req->execute();
	}
	
	public function get_Event_Stored()
	{
		$out = array();
		if ($this->db==null)
		{
			$this->Connexion();
		}
		
		$sql="SELECT * FROM T_Events";
		
		foreach($this->db->query($sql) as $row)
		{
			$out[] = array(
					'id' => $row['ID'],
					'title' => $row['TITLE'],
					'url' => $row['URL'],
					'class' => $row['CLASS'],
					'start' => $row['START_DATE'].'000',
					'end' => $row['END_DATE'].'000'
			);
		}
		return $out;
		
	}
}
?>