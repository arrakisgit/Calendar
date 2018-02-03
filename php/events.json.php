<?php
include_once 'DAO.php';
$oDAO = new DAO();
$out=$oDAO->get_Event_Stored();
echo json_encode(array('success' => 1, 'result' => $out));

?>