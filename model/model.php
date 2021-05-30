<?php
require_once "db_connect.php";

//Login


function teacherLogin($id, $password)
{
}

function adminLogin($id, $password)
{
}

//Student

function checkStudent($oid)
{
    $conn = mysqli_conn();
    $selectQuery = "SELECT * FROM `student` WHERE oid = '" . $oid . "' ";
    $result = mysqli_query($conn, $selectQuery);
    $count = mysqli_num_rows($result);
    return $count;
}

function addStudent($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into student (oid, name, email, password, gender , dob , usertype)
                    VALUES (:oid, :name, :email, :password, :gender , :dob , :usertype)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':oid' => $data['oid'],
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
            ':usertype' => $data['usertype'],
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function editStudent($oid, $data)
{
    $conn = db_conn();
    $selectQuery = "update student set name = '" . $data['name'] . "',  email = '" . $data['email'] . "', password = '" . $data['password'] . "', gender = '" . $data['gender'] . "', dob = '" . $data['dob'] . "'   where oid = '" . $oid . "'";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteStudent($oid)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `student` WHERE `oid` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$oid]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function fetchAllStudent()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `student` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}




function addTeacher($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into teacher (oid, name, email, password, gender , dob , usertype)
                    VALUES (:oid, :name, :email, :password, :gender , :dob , :usertype)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':oid' => $data['oid'],
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
            ':usertype' => $data['usertype'],
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function editTeacher($oid, $data)
{
    $conn = db_conn();
    $selectQuery = "update teacher set name = '" . $data['name'] . "',  email = '" . $data['email'] . "', password = '" . $data['password'] . "', gender = '" . $data['gender'] . "', dob = '" . $data['dob'] . "'   where oid = '" . $oid . "'";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteTeacher($oid)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `teacher` WHERE `oid` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$oid]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function fetchAllTeacher()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `teacher` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


// custom fetch all teacher
function fetch_All_Teacher()
{
    $conn = mysqli_conn();
    $selectQuery = "SELECT * FROM `teacher` ";
    $result = mysqli_query($conn, $selectQuery);
    return $result;
}


function fetchAllTeacherBy($text)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `teacher` WHERE oid LIKE '%".$text."%' OR name LIKE '%".$text."%' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


//custom fetch teacher with template

function fetchTeacher($text){
    $conn = mysqli_conn();
    $selectQuery = "SELECT * FROM `teacher` WHERE oid LIKE '%".$text."%' OR name LIKE '%".$text."%' OR email LIKE '%".$text."%' ";
    $result = mysqli_query($conn, $selectQuery);
    return $result;
 }

//Teacher

function checkTeacher($oid)
{
    $conn = mysqli_conn();
    $selectQuery = "SELECT * FROM `teacher` WHERE oid = '" . $oid . "' ";
    $result = mysqli_query($conn, $selectQuery);
    $count = mysqli_num_rows($result);
    return $count;
}

//Admin

function checkAdmin($oid)
{
    $conn = mysqli_conn();
    $selectQuery = "SELECT * FROM `admin` WHERE oid = '" . $oid . "' ";
    $result = mysqli_query($conn, $selectQuery);
    $count = mysqli_num_rows($result);
    return $count;

}

function addAdmin($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into admin (oid, name, email, password, gender , dob , usertype)
                    VALUES (:oid, :name, :email, :password, :gender , :dob , :usertype)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':oid' => $data['oid'],
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
            ':usertype' => $data['usertype'],
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function editAdmin($oid, $data)
{
    $conn = db_conn();
    $selectQuery = "update admin set name = '" . $data['name'] . "',  email = '" . $data['email'] . "', password = '" . $data['password'] . "', gender = '" . $data['gender'] . "', dob = '" . $data['dob'] . "'   where oid = '" . $oid . "'";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteAdmin($oid)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `admin` WHERE `oid` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$oid]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function fetchAllAdmin()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `admin` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function add_Quiz($courseID, $time, $type, $name)
{
    $conn = db_conn();
    $selectQuery = "INSERT into `quiz` (quizName, type, time, courseId )
                    VALUES (:quizName, :type, :time, :courseId)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':quizName' => $name,
            ':time' => $time,
            ':type' => $type,
            ':courseId' => $courseID,
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}


//fetch quiz by text
function fetchQuiz($text){
    $conn = mysqli_conn();
    $selectQuery = "SELECT * FROM `quiz` WHERE quizName LIKE '%".$text."%' OR type LIKE '%".$text."%' OR time LIKE '%".$text."%' ";
    $result = mysqli_query($conn, $selectQuery);
    return $result;
 }



 //custom fetch_quiz function

 function fetch_All_Quiz(){
    $conn = mysqli_conn();
    $selectQuery = "SELECT * FROM `quiz` ";
    $result = mysqli_query($conn, $selectQuery);
    return $result;
 }


function fetchAllQuiz()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `quiz` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function fetchAll_Quiz($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `quiz` WHERE id = '" . $id . "' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


//pdo all question fetch
function fetchAll_Questions($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `questions` WHERE quizid = '" . $id . "' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}






function fetchAll_Options($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `options` WHERE questionid = '" . $id . "' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function setMsg($msg){

    setcookie('msg', $msg, time() + 20);
}

function getMsg(){

  if (isset($_COOKIE['msg'])) {
          
      echo '<p class="alert alert-success">'.$_COOKIE['msg'].'<button data-dismiss="alert" class="close"> &times; </button></p>';
  }
   
}