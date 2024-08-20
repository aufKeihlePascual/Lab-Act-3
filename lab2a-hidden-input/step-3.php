<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];
$sex = $_POST['sex'];
$address = $_POST['address'];

require "layout/header.php";
?>
<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>
          Registration (Step 3/3)
        </h1>
      </div>
      <div class="p-section--shallow">


        <form action="thank-you.php" method="POST">
          <input type="hidden" name="fullname" value="<?php echo $fullname; ?>" />
          <input type="hidden" name="email" value="<?php echo $email; ?>" />
          <input type="hidden" name="password" value="<?php echo $password; ?>" />
          <input type="hidden" name="birthdate" value="<?php echo $birthdate; ?>" />
          <input type="hidden" name="sex" value="<?php echo $sex; ?>" />
          <input type="hidden" name="address" value="<?php echo $address; ?>" />

          <fieldset>
            <label>Contact Number</label>
            <input type="text" name="contact_number" placeholder="+639123456789" />

            <label>Program</label>
            <select name="program">
              <option disabled="disabled" selected="">Select an option</option>
              <option value="cs">Computer Science</option>
              <option value="it">Information Technology</option>
              <option value="is">Information Systems</option>
              <option value="se">Software Engineering</option>
              <option value="ds">Data Science</option>
            </select>

            <label class="p-checkbox--inline">
            <input type="checkbox" name="agree">
            </label>
            I agree to the terms and conditions...
            
            <br />
            <br />

            <button type="submit" class="p-button--positive">Finish</button>
          </fieldset>

        </form>


      </div>

    </div>

    <div class="col">
      <div class="p-image-container--3-2 is-cover">
        <img class="p-image-container__image" src="https://www.auf.edu.ph/home/images/ittc.jpg" alt="">
      </div>
    </div>

  </div>
</section>

<?php require "layout/footer.php"; ?>