<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];
$path="https://localhost/dashboard/php-rest-api/images/";
#$image=$data['profileimage'];

if (! is_null($data['profileimage'])) {
	$image = base64_decode($data['profileimage']);
		$image_name = md5(uniqid(rand(),true));
		$filename = $image_name . '.' . 'jpg';
		//rename file name with random number
		$path2 = "images/".$filename;
		$path=$path.$filename;
		//image uploading folder path
		file_put_contents($path2 . $filename, $image);
}else{
	$path=$path.'beard.png';
}
	

// image is bind and upload to respective folder
include "helper/config.php";

$sql = "INSERT INTO students(student_name, age, city,image) VALUES ('{$name}', {$age}, '{$city}','{$path}')";
if(mysqli_query($conn, $sql)){
	mysqli_insert_id($con);
	echo json_encode(array('message' => 'Student Record Inserted.', 'status' => true));

}else{
	$msg=mysqli_error($conn);
 echo json_encode(array('message' => 'Student Record Not Inserted...'.$msg, 'status' => false));

}
?>
