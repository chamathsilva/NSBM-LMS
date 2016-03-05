<?php
require_once('../class/class.db.php');
$database = new DB();

if(isset($_POST) && count($_POST)){

    $action = $_POST['action'];

    if ($action == "deleteCourse"){
        $id = $_POST['id'];

        $result = $database->query("DELETE FROM `course` WHERE `courseID` = '$id'");

        if($result)
            echo json_encode(array("success" => "1","id" => $id));
        else
            echo json_encode(array("success" => "0","id" => $id));

    }

    elseif ($action == "updateCourse"){

        $id = $_POST['id'];
        $academicYear = htmlspecialchars($_POST['academicYear']);
        $courseName = htmlspecialchars($_POST['courseName']);

        $result = $database->query("UPDATE `course` SET `title` = '$courseName', `year` = '$academicYear' WHERE `courseID` = '$id'");


        if($result)
            echo json_encode(array("success" => "1","id" => $courseName));
        else
            echo json_encode(array("success" => "0","id" => $courseName));

    }


    elseif ($action == "deleteLesson"){

        $id = $_POST['id'];

        $result = $database->query("DELETE FROM `lesson` WHERE `Id` = '$id'");

        if($result)
            echo json_encode(array("success" => "1","id" => $id));
        else
            echo json_encode(array("success" => "0","id" => $id));

    }


    elseif ($action == "updateLesson"){

        $id = $_POST['id'];
        $lessonTitle = htmlspecialchars($_POST['lessonTitle']);
        $description = htmlspecialchars($_POST['description']);

        $result = $database->query("UPDATE `lesson` SET `lessonTitle` = '$lessonTitle', `description` = '$description' WHERE `Id` = '$id'");


        if($result)
            echo json_encode(array("success" => "1","id" => $lessonTitle));
        else
            echo json_encode(array("success" => "0","id" => $lessonTitle));

    }



    elseif ($action == "deleteNews"){

        $id = $_POST['id'];

        $result = $database->query("DELETE FROM `latest_update` WHERE `updateID` = '$id'");

        if($result)
            echo json_encode(array("success" => "1","id" => $id));
        else
            echo json_encode(array("success" => "0","id" => $id));

    }


    ////

    elseif ($action == "deleteAdmin"){

        $id = $_POST['id'];

        $result = $database->query( "DELETE FROM `login` WHERE `Email` = '$id'");



        if($result)
            echo json_encode(array("success" => "1","id" => $id));
        else
            echo json_encode(array("success" => "0","id" => $id));

    }

    elseif ($action == "deleteStudent"){

        $id = $_POST['id'];

        $result = $database->query( "DELETE FROM `login` WHERE `Email` = '$id'");

        if($result)
            echo json_encode(array("success" => "1","id" => $id));
        else
            echo json_encode(array("success" => "0","id" => $id));

    }

}
