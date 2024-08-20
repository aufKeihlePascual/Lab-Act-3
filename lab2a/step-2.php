<?php

require "helpers/helper-functions.php";

session_start();

$fullname = $_POST['fullname'];
$email = $_POST['email'];
# Encrypt the password first before saving it to the Session Variables
$password = $_POST['password'];

$_SESSION['fullname'] = $fullname;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

dump_session();

?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>
<body>

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

</body>
</html>
