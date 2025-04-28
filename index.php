<?php
session_start();  // Corrected session_start() syntax
include_once 'inc/Database.php';
require 'model/Category.php';
require 'model/News.php';
include_once 'view/news.php';  // Fixed typo: changed '.phn' to '.php'
include_once 'controller/Controller.php';  // Fixed typo: changed 'include once' to 'include_once'
include_once 'route/routing.php';  // Fixed typo: changed '.phn' to '.php'

// Assuming response is a variable, echoing it
echo $response;  // Changed 'response' to '$response'
?>
