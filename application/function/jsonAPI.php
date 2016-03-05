<?php
require_once('../class/class.db.php');
$database = new DB();

$functionName    =   $_GET["functionName"];


function getCourseList(){
    global $database;
    $course = $database->query("SELECT * FROM `course`");
    return json_encode($course);
}

function getNewsUpdateList(){
    global $database;
    $news = $database->query("SELECT * FROM `latest_update`");
    return json_encode($news);
}


function getLessonList(){
    global $database;
    $lesson = $database->query("SELECT * FROM `lesson`");
    return json_encode($lesson);
}


function getStudentList(){
    global $database;
    $student = $database->query("SELECT * FROM `login` WHERE `Level` = '1' ");
    return json_encode($student);
}


function getAdminList(){
    global $database;
    $admin = $database->query("SELECT * FROM `login` WHERE `Level` = '0'");
    return json_encode($admin);
}





switch ($functionName) {
    case "getCourseList":
        echo getCourseList();
        break;
    case "getNewsUpdateList":
        echo getNewsUpdateList();
        break;
    case "getLessonList":
        echo getLessonList();
        break;
    case "getStudentList":
        echo getStudentList();
        break;
    case "getAdminList":
        echo getAdminList();
        break;

}


