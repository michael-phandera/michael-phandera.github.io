<?php
    include_once("../config/config.php");
    if (isset($_POST)&&$_POST['pg']!=""&&$_POST['pg']!="") {
        $cos          = $_POST["pg"];
        $duration     = $_POST["duration"];
        $collegename  = $_POST["college"];
                 
        $db->insert(
            "education",
            [
            "qulification" => $cos ,
            "duration"     => $duration,
            "institution"  => $collegename
        ]
        );

        if ($db->errorInfo[0]=="00000") {
            echo json_encode(["error"=>true,"msg"=>"The Notice successfully Posted"]);
        } else {
            echo json_encode(["error"=>false,"msg"=>"failed to post the anouncement"]);
        }
    } else {
        echo json_encode(["error"=>false,"msg"=>"Fill required fields"]);
    }
