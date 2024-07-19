<?php

require_once 'Medoo.php';

// Using Medoo namespace
use Medoo\Medoo;

// Initialize
$db = new Medoo([
    'type' => 'mysql',
    'database' => 'resume',
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'port' => 3307,

]);
