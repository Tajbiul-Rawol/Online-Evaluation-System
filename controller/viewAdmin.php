<?php
require_once '../model/model.php';
function viewAllAdmin()
{
    return fetchAllAdmin();
}

function viewAdmin($oid)
{
    $admins = fetchAllAdmin();
    foreach ($admins as $key => $data) {
        if ($data["oid"] == $oid) {
            $admin = array(
                "name" => $data["name"],
                "email" => $data["email"],
                "oid" => $data["oid"],
                "password" => $data["password"],
                "usertype" => $data["usertype"],
                "gender" => $data["gender"],
                "dob" => $data["dob"]
            );
            return $admin;
        }
    }
}
