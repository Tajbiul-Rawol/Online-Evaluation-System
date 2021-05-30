<?php
require_once '../model/model.php';

$nameErr='';
$coursIDErr='';
$sectionErr='';
$typeErr='';
$sectionErr='';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create'])) {
        
       $name = $_POST['name'];
       $courseID = $_POST['courseID'];
       $section = $_POST['section'];
       $type = $_POST['type'];
       $time = $_POST['time'];
       


       if (empty($name)|| empty($courseID) || empty($section) || empty($type) || empty($time)) {
        $mess = '<p class="alert alert-danger"> All fields required! <button data-dismiss="alert" class="close"> &times; </button></p>';
       }else {
             
        setMsg("Submission Successful!");
        addQuiz($courseID, $time, $type, $name);
             
       }
      
       
     
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



function addQuiz($courseID, $time, $type, $name)
{
    return add_Quiz($courseID, $time, $type, $name);
}

























