<?php
    $upload_directory = getcwd() . '/uploads/';
    $relative_path = '/uploads/';

    if (isset($_FILES['image_file'])) {
        $uploaded_image_file = $upload_directory . basename($_FILES['image_file']['name']);
        $temporary_image_file = $_FILES['image_file']['tmp_name'];
        $image_path = $relative_path . basename($_FILES['image_file']['name']);

        $file_mime_type = mime_content_type($temporary_image_file);
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        if (in_array($file_mime_type, $allowed_types)) {
            if (move_uploaded_file($temporary_image_file, $uploaded_image_file)) {
                echo "<img src='{$image_path}' alt='Uploaded Image' style='max-width: 100%; height: auto;'>";
                echo "<br><br>You uploaded the file from: " . $image_path . "<br>";
            } else {
                echo 'Failed to upload image file';
            }
        } else {
            echo 'Invalid file type. Please upload a JPEG, PNG, or GIF image.';
        }
        echo '<pre>';
        var_dump($_FILES);
        echo '</pre>';
    }
    exit;
?>
