<?php
include_once 'php/DAO.php';
$oDAO = new DAO();
$out=$oDAO->get_Event_Stored();
echo json_encode(array('success' => 1, 'result' => $out));

?>