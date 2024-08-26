<?php
    $upload_directory = getcwd() . '/uploads/';
    $relative_path = '/uploads/';

    if (isset($_FILES['video_file'])) {
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