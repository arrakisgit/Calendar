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
*/
$out = array();


$ts_start= mktime(0, 0, 14, 1, 25,2018);
$ts_end=mktime(0, 30, 15, 1, 25,2018);

	$out[] = array(
			'id' => 1,
			'title' => 'RDV prefecture avec mon pti coeur',
			'url' => 'site web',
			'class' => 'event-important',
			'start' => $ts_start.'000',
			'end' => $ts_end.'000'
	);

echo json_encode(array('success' => 1, 'result' => $out));

?>