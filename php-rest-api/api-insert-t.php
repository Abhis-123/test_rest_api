<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$name = $data['tname'];
$subjects=data['subjects'];
$date=date_format(data['joindate'],"ddmmyy");

$path="https://localhost/dashboard/php-rest-api/images/";


if (!is_null($data['profileimage'])) {
	$image = base64_decode($data['profileimage']);
		$image_name = md5(uniqid(rand(),true));
		$filename = $image_name . '.' . 'PNG';
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

$sql = "INSERT INTO teachers(name,subjects,joiningdate,image) VALUES ('{$name}', '{$subjects}', '{$date}','{$path}')";
if(mysqli_query($conn, $sql)){
	$id=mysqli_insert_id($con);
	echo json_encode(array('message' => 'Teacher Record Inserted. with id='.$id, 'status' => true));

}else{
	$msg=mysqli_error($conn);
 echo json_encode(array('message' => 'Teacher Record Not Inserted...'.$msg.$sql, 'status' => false));

}
?>
