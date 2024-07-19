<?php
function UploadFile($file, $is_image, $des = "uploads/")
{
    $total = count($file['name']);
    $uploads=0;
   
    // Loop through each file
    for ($i=0 ; $i < $total ; $i++) {
        //Get the temp file path
        $tmpFilePath = $file['tmp_name'][$i];

        //Make sure we have a file path
        if ($tmpFilePath != "" && $file["size"][$i] <= 500000000) {
            $target_dir = $des;
            $target_file = $target_dir . basename($file["name"][$i]);

            if (!file_exists($target_file)) {
                $moved = move_uploaded_file($file["tmp_name"][$i], $target_file);
                if ($moved) {
                    //echo "<br>".$file['name']."mika".$file['error'];
                    $uploads++;
                }
            }
        }
    }
    return $uploads;
}
