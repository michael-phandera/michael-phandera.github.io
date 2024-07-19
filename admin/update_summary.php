<?php
    include_once("../config/config.php");
    if(isset($_POST)&&$_POST['summary']!=""&&$_POST['summary']!=""){
        $cos          = $_POST["summary"];         
        $db->update("summary",
        [
            "content" => $cos 
        ],
        ['id'=>1]);

        if($db->error()[0]=="00000"){
            echo json_encode(["error"=>true,"msg"=>" successfully updated"]);
        }else{
            echo json_encode(["error"=>false,"msg"=>"failed to post the anouncement"]);
        }
    }else{
       echo json_encode(["error"=>false,"msg"=>"Fill required fields"]);
    }
           
?>
