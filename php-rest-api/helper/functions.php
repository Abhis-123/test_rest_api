<?php

function validate_input_text($textValue){
    
    if (!empty($textValue)){
        $trim_text =trim($textValue);
        // remove illegal character
        
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}
// profile image
function upload_profile($path, $file,$name){
    $targetDir = $path;
    $default = "beard.png";

    // get the filename
    $filename = $file;
    $targetFilePath = $targetDir.$name;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    If(!empty($filename)){
        // allow certain file format
        $allowType = array('jpg', 'png', 'jpeg', 'gif');
        if(in_array($fileType, $allowType)){
            // upload file to the server
            if(move_uploaded_file($file['tmp_name'], $targetFilePath)){
                return $targetFilePath;
            }
        }
    }

    // return default image
    return $path.$default;
}
function delete_student($conn,$student_id)
{
    $sql = "DELETE FROM students WHERE id = {$student_id}";
    $result=mysqli_query($conn, $sql);
    if(mysqli_query($conn, $sql)){
        
        echo json_encode(array('message' => 'Student Record Deleted.', 'status' => true));
    
    }else{
    
     echo json_encode(array('message' => 'Student Record not Deleted.', 'status' => false));
    
    } 
}
function delete_teacher($conn,$teacherid){
    $sql = "DELETE FROM teachers WHERE teacher_id = {$teacherid}";
    if(mysqli_query($conn, $sql)){
        
        echo json_encode(array('message' => 'Teacher Record Deleted.', 'status' => true));
    
    }else{
    
     echo json_encode(array('message' => 'Teacher Record not Deleted.', 'status' => false));
    
    } 
}

function get_studentinfo($conn,$sid){
    $sql = "SELECT * FROM students WHERE id = {$sid}";
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

            if(mysqli_num_rows($result) > 0 ){
                
                $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
                echo json_encode($output);

            }else{

            echo json_encode(array('message' => "No Record Found with sid=".$sid, 'status' => false));

}    
}
function get_teacherinfo($conn,$teacherid){
    $sql="SELECT* from teachers WHERE teacher_id={$teacherid}";
    $result=mysqli_query($conn,$sql) or die("SQL query Failed");
    if(mysqli_query($conn, $sql)){
        $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
        echo json_encode($output);

    
    }else{
    
     echo json_encode(array('message' => "No Record found with teacher id={$teacherid}", 'status' => false));
    
    } 
}


function addcourse($conn,$name,$description,$teacherid){
          $name= validate_input_text($name) ;
          $description=validate_input_text($description);
          $teacherid=is_integer($teacherid);
          $sql="INSERT INTO courses name,description,teacher_id VALUES('{$name}','{$description}',$teacherid)";   
          $result=mysqli_query($conn,$sql);
            if(mysqli_affected_rows($conn)>0){
                $courseid=mysqli_insert_id($conn);
                echo json_encode(array('message'=>"course registered with course id=". $courseid,'status'=>true));
            }else{
                echo json_encode(array('message'=>"error occured while registering course",'status'=>false));
            }



}
function get_courseinfo($conn,$courseid){
    $sql = "SELECT * FROM courses WHERE id = {$courseid}";
    $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

            if(mysqli_num_rows($result) > 0 ){
                
                $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
                echo json_encode($output);

            }else{

            echo json_encode(array('message' => "No Record Found with courseid={$courseid}", 'status' => false));
            }

}

?>