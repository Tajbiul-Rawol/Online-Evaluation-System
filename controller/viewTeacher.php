<?php
require_once '../model/model.php';

if (isset($_GET['data'])) {

   $teachers = view_All_Teacher();

   while($row = mysqli_fetch_array($teachers)) {
    echo "<tr>";
    echo "<td>" . $row['oid'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td><a class='btn btn-primary' href='viewTeacher.php?oid=". $row['oid'] ."'>View</a></td>";
    echo "</tr>";
}

}



//shows all teachers 
function viewAllTeacher()
{
    return fetchAllTeacher();
}


function view_All_Teacher(){
    return fetch_All_Teacher();
}


// function viewTeacherBy($text)
// {
//     return fetchTeacher($text);
// }


function viewAllTeacherBy($text)
{
    return fetchAllTeacher($text);
}




//custom fetch teacher with template

    if (isset($_GET['q'])) {
        
        $text = $_GET['q'];

        $result = fetchTeacher($text);

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['oid'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td><a class='btn btn-primary' href='viewTeacher.php?oid=". $row['oid'] ."'>View</a></td>";
            echo "</tr>";
        }


    }


//returns a single teacher value according to oid
function viewTeacher($oid)
{
    $teachers = fetchAllTeacher();
    foreach ($teachers as $key => $data) {
        if ($data["oid"] == $oid) {
            $teacher = array(
                "name" => $data["name"],
                "email" => $data["email"],
                "oid" => $data["oid"],
                "password" => $data["password"],
                "usertype" => $data["usertype"],
                "gender" => $data["gender"],
                "dob" => $data["dob"]
            );
            return $teacher;
        }
    }
}
