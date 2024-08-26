<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>

<body style="background-color: pink;">
<div class="u-fixed-width">
  <div class="p-logo-section">
    <div class="p-logo-section__items">
      <div class="p-logo-section__item">
        <img class="p-logo-section__logo" src="https://www.auf.edu.ph/home/images/logo2.png" alt="Angeles University Foundation">
      </div>
    </div>
  </div>
</div>


<form method="post" action="uploaded.php" enctype="multipart/form-data">
    <div class="p-card">
      <h3>Text File</h3>
      <p class="p-card__content">
          <input type="file" name="text_file[]" accept=".txt" multiple />
      </p>
    </div>
    <div class="p-card">
      <h3>PDF File</h3>
      <p class="p-card__content">
          <input type="file" name="pdf_file[]" accept=".pdf" multiple />
      </p>
    </div>
    <div class="p-card">
      <h3>Audio File</h3>
      <p class="p-card__content">
          <input type="file" name="audio_file[]" accept=".mp3" multiple />
      </p>
    </div>
    <div class="p-card">
      <h3>Image File</h3>
      <p class="p-card__content">
          <input type="file" name="image_file[]" accept="image/*" multiple />
      </p>
    </div>
    <div class="p-card">
      <h3>Video File</h3>
      <p class="p-card__content">
          <input type="file" name="video_file[]" accept=".mp4" multiple />
      </p>
    </div>

    <div>
        <button type="submit">Upload</button>
    </div>

  </form>
</div>

</body>
</html>

