<?php
    $upload_directory = getcwd() . '/uploads/';
    $relative_path = '/uploads/';

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
    exit;
?>