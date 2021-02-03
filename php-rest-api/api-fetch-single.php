<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"), true);

$student_id =$data['sid'];

include "helper/config.php";
include "helper/functions.php"

get_studentinfo($conn,$student_id);

?>
