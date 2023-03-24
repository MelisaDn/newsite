<?php
$title = 'success';
require_once 'includes/header.php';
require_once 'db/conn.php';

$result = $crud->getSpecialties();

if(isset($_POST['submit'])){
  //extract values from the post array
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $contact = $_POST['phone'];
  $specialty = $_POST['specialty'];

  //call function to insert and track if success or not
  $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $specialty );

  if($isSuccess){
    include 'includes/successmessage.php';
  }else{
    include 'includes/errormessage.php';
  }
}
?>


<br>
<br>
<br>

<div class="card card text-bg-dark mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./img/customer.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] .' '. $_POST['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-white-50"><?php echo $_POST['specialty']; ?></h6>
        <p class="card-text">Date Of Birth: <?php echo $_POST['dob']; ?></p>
        <p class="card-text">Email Address: <?php echo $_POST['email']; ?></p>
        <p class="card-text">Contact Number: <?php echo $_POST['phone']; ?></p>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>

<?php require_once 'includes/footer.php' ?>