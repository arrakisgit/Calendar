<?php
/*$db=new PDO('mysql:host=localhost;dbname=Calendar_db;charset=utf8', 'root', 'root');
$sql   = sprintf('SELECT * FROM T_Events')
    $db->quote(date('Y-m-d', $start)), $db->quote(date('Y-m-d', $end)));

$out = array();
foreach($db->query('SELECT * FROM T_Events') as $row) {
    $out[] = array(
        'id' => $row->id,
        'title' => $row->name,
        'url' => Helper::url($row->id),
        'start' => strtotime($row->datetime) . '000',
        'end' => strtotime($row->datetime_end) .'000'
    );
}
*/
$out = array();
$db=new PDO('mysql:host=localhost;dbname=Calendar_db;charset=utf8', 'root', 'root');
$sql="SELECT * FROM `T_Events`";
foreach($db->query($sql) as $row)
{
	$out[] = array(
			'id' => $row->ID,
			'title' => $row->TITLE,
			'url' => Helper::url($row->URL),
			'class' => $row->CLASS,
			'start' => strtotime($row->START_DATE).'000',
			'end' => strtotime($row->END_DATE).'000'
	);
}


/*$ts_start= mktime(0, 0, 14, 1, 22,2018);
$ts_end=mktime(0, 30, 15, 1, 22,2018);

	$out[] = array(
			'id' => 1,
			'title' => 'Mon Anniversaire',
			'url' => 'site web',
			'class' => 'event-important',
			'start' => $ts_start.'000',
			'end' => $ts_end.'000'
	);*/
echo var_dump($out);
//echo json_encode(array('success' => 1, 'result' => $out));

?>