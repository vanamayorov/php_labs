<?php
define("TEXT_FILE", "../data/task.txt");
define("FOLDER_PATH", "../uploads/");;

if (isset($_POST['task'])) {
    $content = trim($_POST['task']) . "\n";
    file_put_contents(TEXT_FILE, $content, FILE_APPEND | LOCK_EX);
}


if (isset($_FILES)) {
    $errors = [];
    foreach ($_FILES as $file) {
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];

        if ($file_size > 2097152) {
            $errors[] = "$file_name должен быть не больше 2мб";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, FOLDER_PATH . $file_name);
            echo "<p>$file_name was successfully downloaded</p>";
        } else {
            print $errors;
        }
    }
}