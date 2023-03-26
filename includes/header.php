<?php
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session 
// capability to be used on every page across the website.
include_once 'includes/session.php' ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>new site - <?php echo $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">IT Conference</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" 
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr_auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="viewrecords.php">View Attendees</a>
          </div>
        </div>
        <div class="navbar-nav ml_auto">
          <?php 
          if(!isset($_SESSION['userid'])){
          ?>
          <a href="login.php"><button class="btn btn-outline-light" type="submit">Login</button></a>
          <?php }else{ ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! 
            </span> <span class="sr-only"></span></a>
            <a href="logout.php"><button class="btn btn-outline-light" type="submit">Logout</button></a>
          <?php } ?>
        </div>
      </div>
    </nav>
    <div class="container">

    <br>
    <br>
    <br>