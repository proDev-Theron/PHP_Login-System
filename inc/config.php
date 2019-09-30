<?php
    //If there is no constant defined '__CONFIG__', do not proceed loading the page.
    if(!defined('__CONFIG__')){
        exit('<link rel="stylesheet" href="../styles.css"><h1 class="text-center">Access Denied</h1>');
        
    }
    include_once "classes/db.php";
    $con = DB::getConnection();
?>