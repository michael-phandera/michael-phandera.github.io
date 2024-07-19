<?php
include_once("./lib/db.php");
include_once("./lib/mailerHelper.php");
include_once("./lib/response.php");

if (isset($_POST) && $_POST['email'] != "" && $_POST['message'] != "" && $_POST["name"] != "") {
    $from = $_POST["email"];
    $message = $_POST["message"];
    $subject = $_POST["subject"];

    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $name = $_POST["name"];

    $email = new Email();
    $result = $email->send($from, "michaelphandera@gmail.com", "<p>Dear HelpDesk,<br/> I am " . $name . ", My email is " . $from . ".<br/>" . $message . ".<br/> Regards Resume</p>", $subject);
    if ($result == 1) {
        encodeMessage("Successful", true);
    } else {
        encodeMessage($result, false);
    }
} else {
    encodeMessage("Fill required fields", false);
}
