<?php
require_once '../model/model.php';
function viewAllStudent()
{
    return fetchAllStudent();
}

function viewStudent($oid)
{
    $students = fetchAllStudent();
    foreach ($students as $key => $data) {
        if ($data["oid"] == $oid) {
            $student = array(
                "name" => $data["name"],
                "email" => $data["email"],
                "oid" => $data["oid"],
                "password" => $data["password"],
                "usertype" => $data["usertype"],
                "gender" => $data["gender"],
                "dob" => $data["dob"]
            );
            return $student;
        }
    }
}
