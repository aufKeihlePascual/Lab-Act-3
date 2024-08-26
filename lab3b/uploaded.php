<?php
    $upload_directory = getcwd() . '/uploads/';
    $relative_path = '/uploads/';
    
    //For Image File Uploading
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
    // For audio file
    elseif (isset($_FILES['audio_file'])) {
        if (isset($_FILES['audio_file'])) {
            $uploaded_audio_file = $upload_directory . basename($_FILES['audio_file']['name']);
            $temporary_audio_file = $_FILES['audio_file']['tmp_name'];
    
            if (move_uploaded_file($temporary_audio_file, $uploaded_audio_file)) {
                echo "<audio controls>
                        <source src='{$relative_path}" . basename($_FILES['audio_file']['name']) . "' type='audio/mpeg'>
                    Your browser does not support the audio element.
                    </audio>";
            } else {
                echo 'Failed to upload audio file';
            }
    
            echo '<pre>';
            var_dump($_FILES);
            echo '</pre>';
        }
    }
    elseif (isset($_FILES['video_file'])) {
        $uploaded_video_file = $upload_directory . basename($_FILES['video_file']['name']);
        $temporary_video_file = $_FILES['video_file']['tmp_name'];
        $video_path = $relative_path . basename($_FILES['video_file']['name']);
        $file_mime_type = mime_content_type($temporary_video_file);
        $file_extension = pathinfo($uploaded_video_file, PATHINFO_EXTENSION);
        $allowed_type = 'video/mp4';
        if ($file_mime_type === $allowed_type && $file_extension === 'mp4') {
            if (move_uploaded_file($temporary_video_file, $uploaded_video_file)) {
                echo "<video controls style='max-width: 100%; height: auto;'>
                        <source src='{$video_path}' type='video/mp4'>
                    Your browser does not support the video tag.
                    </video>";
                echo "<br><br>You uploaded the file from: " . $video_path . "<br>";
            } else {
                echo 'Failed to upload video file';
            }
        } else {
            echo 'Invalid file type. Please upload an MP4 video.';
        }
        echo '<pre>';
        var_dump($_FILES);
        echo '</pre>';
    }
exit;
?>