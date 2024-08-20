<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = sha1($_POST['password']);

require "layout/header.php";
?>

<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>
          Registration (Step 2/3)
        </h1>
      </div>
      <div class="p-section--shallow">


        <form action="step-3.php" method="POST">
          <input type="hidden" name="fullname" value="<?php echo $fullname; ?>" />
          <input type="hidden" name="email" value="<?php echo $email; ?>" />
          <input type="hidden" name="password" value="<?php echo $password; ?>" />

          <fieldset>
            <label>Birthdate</label>
            <input type="date" name="birthdate">

            <label>Sex</label>
            <br />
            <input type="radio" name="sex" value="male" checked="checked">Male
            <br />
            <input type="radio" name="sex" value="female">Female
            <br />

            <label>Complete Address</label>
            <textarea name="address" rows="3"></textarea>

            <button type="submit">Next</button>
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