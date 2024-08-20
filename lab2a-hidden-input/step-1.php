<?php
require "layout/header.php";

?>
<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
      <h1>
      Registration (Step 1/3)
      </h1>
      </div>
      <div class="p-section--shallow">



        <form action="step-2.php" method="POST">

        <fieldset>
          <label>Complete Name</label>
          <input type="text" name="fullname" placeholder="John Doe">

          <label>Email address</label>
          <input type="email" name="email" placeholder="example@canonical.com" autocomplete="email">

          <label>Password</label>
          <input type="password" name="password" placeholder="******" autocomplete="current-password">

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