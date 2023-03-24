<?php 
require_once 'db/conn.php';

//Get values from post
if(isset($_POST['submit'])){
    //extract values from the post array
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];
    

    //call crud function
    $result = $crud->editAttendees($id, $fname, $lname, $dob, $email, $contact, $specialty);
    //redirect to index.php
    if($result){
        header("location: viewrecords.php");
    }else{
        include 'includes/errormessage.php';
    }

}else{
    include 'includes/errormessage.php';
}
?>