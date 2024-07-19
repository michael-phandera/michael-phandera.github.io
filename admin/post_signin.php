<?php
    session_start();
    include_once("../config/config.php");
    //echo json_encode($_FILES['pic']);
    if(isset($_POST)&&$_POST['password']!=""&&$_POST['username']!=""){
        $username=$_POST["username"];
        $password =$_POST["password"];
        $user=$db->select("users",
       "*",
       ["AND"=>['username'=>$username,"password"=>$password ]]);

       if(count($user)==1){
            if($user[0]['username']== true){
                echo json_encode(["error"=>true,"msg"=>"successfully logged in","user"=>"Michael Phandera"]); 
                $_SESSION['username']=$user[0]['username'];
            } 
            else{
                echo json_encode(["error"=>false,"msg"=>"Invalid user, if it fails multiple times contact "]); 
            }
       }else{
            echo json_encode(["error"=>false,"msg"=>"Invalid credentials, if it fails multiple times contact"]); 
       }

    }else{
       echo json_encode(["error"=>false,"msg"=>"Fill required fields"]);
    }
           
?>