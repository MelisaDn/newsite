<?php
$title = 'Edit Record';
require_once 'includes/header.php';
require_once 'db/conn.php';

$result = $crud->getSpecialties();

if (!isset($_GET['id'])) {
  include 'includes/errormessage.php';
  header("location: viewrecords.php");
} else {
  $id = $_GET['id'];
  $attendee = $crud->getAttendeesDetails($id);
?>

  <h1 class="text-center">Edit Record</h1>
  <br>
  <br>
  <form method="post" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee['site_id'] ?>">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname" placeholder="First Name">
      <label for="firstname" class="form-label">First Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname" placeholder="Last Name">
      <label for="lastname" class="form-label">Last Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob" placeholder="Date Of Birth">
      <label for="dob" class="form-label">Date Of Birth</label>
    </div>
    <div class="mb-3">
      <label for="specialty" class="form-label"></label>
      <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
        <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $r['specialty_id'] ?>" <?php if (
          $r['specialty_id'] == $attendee['specialty_id'] ) echo 'selected' ?>>
          <?php echo $r['name']; ?>
          </option>
        <?php } ?>

      </select>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="email" name="email" placeholder="Email address">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone" placeholder="Contact Number">
      <label for="phone">Contact Number</label>
    </div>
    <div class="d-grid gap-2">
      <button type="submit" name="submit" class="btn btn-dark btn-block">Save Changes</button>
      <a href="viewrecords.php" class="btn btn-outline-dark btn-block">Back to list</a>
    </div>
  </form>

<?php } ?>
<br>
<br>
<br>

<?php require_once 'includes/footer.php' ?>