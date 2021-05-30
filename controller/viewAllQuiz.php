<?php
require_once '../model/model.php';

 
//get contents from xhr in a json format
// $data = file_get_contents( "php://input" );
// //decode the json format to array
// $data = json_decode( $data );


// echo $data[2];

if (isset($_POST['submit'])) {
    echo "works";
}





if (isset($_GET['data'])) {
    $allquiz = viewAllQuiz();

    while ($row = mysqli_fetch_array($allquiz)) {
        echo "<tr>";
        echo "<td>" . $row['courseId'] . "</td>";
        echo "<td>" . $row['quizName'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td><a class='btn btn-primary' href='giveQuiz.php?id=". $row['id'] ."'>Start</a></td>";
        echo "</tr>";
    }

}

// get quiz by search
if (isset($_GET['q'])) {
    
    $text = $_GET['q'];

    $result = fetchQuiz($text);

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['courseId'] . "</td>";
        echo "<td>" . $row['quizName'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td><a class='btn btn-primary' href='giveQuiz.php?id=". $row['id'] ."'>Start</a></td>";
        echo "</tr>";
    }

}

//shows all quiz
function viewAllQuiz()
{
    return fetch_All_Quiz();
}

//returns all quiz in rows
function view_All_Quiz()
{
    return fetch_Quiz();
}




function viewAll_Quiz($id)
{
    return fetchAll_Quiz($id);
}



function fetchAllQuestions($id)
{
    return fetchAll_Questions($id);
}



function fetchAllOptions($id)
{
    return fetchAll_Options($id);
}







