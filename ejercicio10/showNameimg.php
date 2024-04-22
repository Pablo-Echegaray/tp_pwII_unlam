<?php

// Carpeta donde se encuentran las imágenes
$upload_folder = '../static/img';

if ($handle = opendir($upload_folder)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $image_path = $upload_folder . "/" . $entry;
            echo "<article style='text-align: center; padding: 20px 0' > <a href='$image_path' target='_blank'>$entry</a> </article><br>";
        }
    }
    closedir($handle);
}
?>