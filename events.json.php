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
$resultats=$db->query('SELECT * FROM `T_Events`;');
$resultats->setFetchMode(PDO::FETCH_OBJ);
while($resultat = $resultats->fetch())
{
	$out[] = array(
			'id' => $resultat->ID,
			'title' => $resultat->TITLE,
			'url' => Helper::url($resultat->URL),
			'class' => $resultat->CLASS,
			'start' => strtotime($resultat->START_DATE),
			'end' => strtotime($resultat->END_DATE)
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

echo json_encode(array('success' => 1, 'result' => $out));

?>