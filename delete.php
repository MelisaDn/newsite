<?php

require_once 'includes/auth_check.php';
require_once 'db/conn.php';


if (!$_GET['id']) {
    include 'includes/errormessage.php';
    header("location: viewrecords.php");
} else {
    //Get id values
    $id = $_GET['id'];

    //Call delete function
    $result = $crud->deleteAttendees($id);

    if($result){
        header("location: viewrecords.php");
    }else{
        include 'includes/errormessage.php';
    }

}
