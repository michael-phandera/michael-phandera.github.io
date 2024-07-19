<?php
    include_once("../config/config.php");
    if(isset($_POST)&&$_POST['company']!=""&&$_POST['company']!=""){
        $company   = $_POST["company"];
		$position  = $_POST["position"];
        $period    = $_POST["period"];
		$duties     = $_POST["duties"];
        $duties1    = $_POST["duties1"];
        $duties2    = $_POST["duties2"];
        $duties3    = $_POST["duties3"];
        $duties4    = $_POST["duties4"];
        $duties5    = $_POST["duties5"];
        $duties6    = $_POST["duties6"];
        $duties7    = $_POST["duties7"];
        $duties8    = $_POST["duties8"];
        $duties9    = $_POST["duties9"];



        $db->insert("experience",
        [
            "company"  => $company,
            "position" => $position,
            "period"   => $period,
            "role1"   => $duties,
            "role2"   => $duties1,
            "role3"   => $duties2,
            "role4"   => $duties3,
            "role5"   => $duties4,
            "role6"   => $duties5,
            "role7"   => $duties6,
            "role8"   => $duties7,
            "role9"   => $duties8,
            "role10"   => $duties9

        ]);

        if($db->error()[0]=="00000"){
            echo json_encode(["error"=>true,"msg"=>"The Notice successfully Posted"]);
        }else{
            echo json_encode(["error"=>false,"msg"=>"failed to post the anouncement"]);
        }
    }else{
       echo json_encode(["error"=>false,"msg"=>"Fill required fields"]);
    }

?>