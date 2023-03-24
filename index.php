<?php
$title = 'index';
require_once 'includes/header.php';
require_once 'db/conn.php';

$result = $crud->getSpecialties();

?>

<!-- 
  - First Name
  - Last Name
  - Date of Birth (Use Date Picker)
  - Specialty (Database Admin, Software Developer, Web Administrator, other)
  - Email Address
  - Contact Number 
-->


<h1 class="text-center">Registratin for IT Conference</h1>
<br>
<br>
<form method="post" action="success.php">
<input type="hidden" value="<?php echo $attendee['site_id'] ?>" >
  <div class="form-floating mb-3">
    <input required type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
    <label for="firstname" class="form-label">First Name</label>
  </div>
  <div class="form-floating mb-3">
    <input required type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
    <label for="lastname" class="form-label">Last Name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="dob" name="dob" placeholder="Date Of Birth">
    <label for="dob" class="form-label">Date Of Birth</label>
  </div>
  <div class="mb-3">
    <label for="specialty" class="form-label"></label>
    <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
      <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <option value="<?php  echo $r['specialty_id'] ?>"><?php  echo $r['name']; ?></option>
      <?php } ?>

    </select>
  </div>
  <div class="form-floating mb-3">
    <input required type="email" class="form-control" id="email" name="email" placeholder="Email address">
    <label for="email">Email address</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact Number">
    <label for="phone">Contact Number</label>
  </div>
  <div class="d-grid gap-2">
    <button type="submit" name="submit" class="btn btn-dark btn-block">Submit</button>
  </div>
</form>

<br>
<br>
<br>

<?php require_once 'includes/footer.php' ?>