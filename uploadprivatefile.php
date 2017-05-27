<?php
    $toRollNum = $_POST["toRollNum"];
    $fromRollNum = $_POST["fromRollNum"];
    
    if($fromRollNum == '')
        $fromRollNum = 0000000;
    if($toRollNum == '')
        $toRollNum = $fromRollNum;
    
    $directory = "uploads/";
    
    $file_location = $directory . basename($_FILES["fileLocationInput"]["name"]);
    $fileExtension = pathinfo($file_location, PATHINFO_EXTENSION);

        if($fileExtension == 'mp3')
            $directory = "uploads/audio/";

        else if($fileExtension == 'c' || $fileExtension == 'java' || $fileExtension == 'py' || $fileExtension == 'html' ||           $fileExtension == 'css'  || $fileExtension == 'js' || $fileExtension == 'php')
            $directory = "uploads/code/";

        else if($fileExtension == 'jpg' || $fileExtension == 'JPG' || $fileExtension == 'png')
            $directory = "uploads/img/";

        else if($fileExtension == 'pdf')
            $directory = "uploads/pdf/";

        else if($fileExtension == 'ppt' || $fileExtension == 'pptx')
            $directory = "uploads/ppt/";

        else if($fileExtension == 'mp4' || $fileExtension == 'MP4' || $fileExtension == 'mkv' || $fileExtension == 'srt')
            $directory = "uploads/video/";

        else
            $directory = "uploads/others/";

        $new_name = $directory . $fromRollNum . "-" . $toRollNum . "-" . time(). "." . $fileExtension;

        if (move_uploaded_file($_FILES["fileLocationInput"]["tmp_name"], $new_name)) {
            //echo "The file " . $new_name . " has been uploaded!";
            echo "<a href='chat.php'>Uploaded Successful!</a>";


        } else {
            echo $fileExtension;
            echo "Sorry, there was an error while uploading your file!";
            echo "<a href='chat.php'>Home</a>";
        }
?>