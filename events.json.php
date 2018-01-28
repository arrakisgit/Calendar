<?php
/*$db    = new PDO('mysql:host=localhost;dbname=Calendar_db;charset=utf8', 'Client', 'customer');
$start = $_REQUEST['from'] / 1000;
$end   = $_REQUEST['to'] / 1000;
$sql   = sprintf('SELECT * FROM events WHERE `datetime` BETWEEN %s and %s',
    $db->quote(date('Y-m-d', $start)), $db->quote(date('Y-m-d', $end)));

$out = array();
foreach($db->query($sql) as $row) {
    $out[] = array(
        'id' => $row->id,
        'title' => $row->name,
        'url' => Helper::url($row->id),
        'start' => strtotime($row->datetime) . '000',
        'end' => strtotime($row->datetime_end) .'000'
    );
}

echo json_encode(array('success' => 1, 'result' => $out));
exit;


$d = DateTime::createFromFormat('d-m-Y', '22-09-2008');
//echo $d->getTimestamp();


<?php*/
$out = array();
$d_Start = DateTime::createFromFormat('d-m-Y', '01-01-2018');
$d_Event = DateTime::createFromFormat('d-m-Y', '27-01-2018');
$d_Ecart=$d_Event-$d_Start;
$d_Ecart_Start=$d_Ecart*(24*60*60)+(14*3600);
$d_Ecart_End=$d_Ecart*(24*60*60)+(15*3600);

//for($i=1; $i<=15; $i++){ 
	//echo "tour : ".$i."<br/>";//from day 01 to day 15
	//$d = mktime(0, 0, 14, date("m"), date("d")+$i,   date("Y"));
	//echo $d->getTimestamp()."<br/>";
	//$data = $d->getTimestamp();
	$out[] = array(
			'id' => 1,
			'title' => 'Event name ',
			'url' => 'site web',
			'class' => 'event-important',
			'start' => $d_Ecart_Start."000",
			'end' => $d_Ecart_End."000"
	);//.'000'
	//);
//}

echo json_encode(array('success' => 1, 'result' => $out));
//exit;
?>