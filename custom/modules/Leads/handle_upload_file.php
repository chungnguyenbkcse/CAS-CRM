<?php
require_once('include/upload_file.php');
global $sugar_config;
$siteUrl = $sugar_config['url_web'];
$lead_id = $_POST['lead_id'];
// handle uploaded file
if (isset($_FILES['files']) && !empty($_FILES['files'])) {
    $no_files = count($_FILES["files"]['name']);
    for ($i = 0; $i < $no_files; $i++) {
        if ($_FILES["files"]["error"][$i] > 0) {
            echo "Error: " . $_FILES["files"]["error"][$i] . "<br>";
        } else {
            if (file_exists('upload1/' . $_FILES["files"]["name"][$i])) {
                $link_url_file = $siteUrl . '/upload1/' . $_FILES["files"]["name"][$i];
                echo 'File already exists : upload1/' . $_FILES["files"]["name"][$i];
            } else {
                move_uploaded_file($_FILES["files"]["tmp_name"][$i], 'upload1/' . $_FILES["files"]["name"][$i]);
                $link_url_file = $siteUrl . '/upload1/' . $_FILES["files"]["name"][$i];
                echo 'File successfully uploaded : upload1/' . $_FILES["files"]["name"][$i] . ' and lead_id: '. $lead_id;
            }
        }
    }
}
else {
    echo 'Please choose at least one file';
}