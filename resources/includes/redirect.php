<?php
include 'resources/includes/currentURL.php';
if(!isset($_SESSION['UserID'])) {
    if($_SERVER['REQUEST_URI'] != 'login.php'){
    $_SESSION['lastPage'] =  $_SERVER['REQUEST_URI'];
    }
    header('Location: login.php');
}
?>