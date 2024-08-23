<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['pdffile']) && $_FILES['pdffile']['error'] === UPLOAD_ERR_OK) {
            $upload_directory = getcwd() . '/uploads/';
            $relative_path = 'uploads/';
            $files = $_FILES['pdffile'];
            $uploaded_files = [];
    
            if (!is_dir($upload_directory)) {
                mkdir($upload_directory, 0777, true);
            }
    
            if (is_array($files['name'])) {
                foreach ($files['name'] as $key => $name) {
                    $file_tmp_name = $files['tmp_name'][$key];
                    $file_path = $upload_directory . basename($name);
    
                    if (move_uploaded_file($file_tmp_name, $file_path)) {
                        $uploaded_files[] = $relative_path . basename($name);
                    } else {
                        echo 'Failed to upload file: ' . htmlspecialchars($name) . '<br>';
                    }
                }
            } else {
                $file_tmp_name = $files['tmp_name'];
                $file_path = $upload_directory . basename($files['name']);
                
                if (move_uploaded_file($file_tmp_name, $file_path)) {
                    $uploaded_files[] = $relative_path . basename($files['name']);
                } else {
                    echo 'Failed to upload file: ' . htmlspecialchars($files['name']) . '<br>';
                }
            }
    
            if (!empty($uploaded_files)) {
                echo '<h1>Uploaded PDF Files</h1>';
                foreach ($uploaded_files as $file) {
                    if (file_exists(getcwd() . '/' . $file)) {
                        echo '<embed src="' . htmlspecialchars($file) . '" type="application/pdf" width="600" height="800"><br>';
                    } else {
                        echo 'File not found: ' . htmlspecialchars($file) . '<br>';
                    }
                }
            } else {
                echo 'No files were uploaded.';
            }
        } else {
            echo 'No files found in the request or an upload error occurred.';
        }
    
    } else {
        echo 'Invalid request method.';
    }
?>