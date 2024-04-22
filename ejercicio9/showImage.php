<?php

// Carpeta donde se encuentran las imágenes
$upload_folder = '../static/img';

if ($handle = opendir($upload_folder)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<article style='text-align: center; padding: 20px 0' ><img src='$upload_folder/$entry' width='300' height='300'> <p>". $entry ."</p></article><br>";
        }
    }
    closedir($handle);
}
?>