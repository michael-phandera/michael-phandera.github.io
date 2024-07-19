<?php
if (session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
require_once('lib/Medoo.php');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "resume";

use Medoo\Medoo;

$db = new Medoo(array(
    // required
    'database_type' => 'mysql',
    'database_name' => $dbname,
    'server' => $servername ,
    'username' => $username ,
    'password' => $password,
    'port'=>3307
));


//  if (!session_id()) @session_start();
// include_once("FlashMessages.php");
// if (!isset($msg)) $msg = new \Plasticbrain\FlashMessages\FlashMessages();
