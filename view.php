<?php
$title = 'view records';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

//Get Attendee by id
if (!isset($_GET['id'])) {
  include 'includes/errormessage.php';
} else {
  $id = $_GET['id'];
  $resul = $crud->getAttendeesDetails($id);
?>

  <div class="card card text-bg-dark mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?php echo empty($resul['avatar_path']) ?
        "uploads/Avatar.jpg" : $resul['avatar_path']; ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo $resul['firstname'] . ' ' . $resul['lastname']; ?></h5>
          <h6 class="card-subtitle mb-2 text-white-50"><?php echo $resul['name']; ?></h6>
          <p class="card-text">Date Of Birth: <?php echo $resul['dateofbirth']; ?></p>
          <p class="card-text">Email Address: <?php echo $resul['emailaddress']; ?></p>
          <p class="card-text">Contact Number: <?php echo $resul['contactnumber']; ?></p>
        </div>
      </div>
    </div>
  </div>
  <a href="viewrecords.php" class="btn btn-dark">Back to list</a>
  <a href="edit.php?id=<?php echo $resul['site_id'] ?>" class="btn btn-secondary">Edit</a>
  <a onclick="return confirm('Are you sure you want to delete this record?')" 
  href="delete.php?id=<?php echo $resul['site_id'] ?>" class="btn btn-outline-dark">Delete</a>

<?php } ?>


<br>
<br>
<br>

<?php require_once 'includes/footer.php' ?>