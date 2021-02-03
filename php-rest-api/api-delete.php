<?php
header('Content-Type: application/json');// format of data is 
header('Access-Control-Allow-Origin: *');// anyone can access api
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['sid'];

include "helper/config.php";
include "helper/functions.php";

delete_student($conn,$student_id);



?>
