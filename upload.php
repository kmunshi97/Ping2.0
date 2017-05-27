<?php

    //TODO: get roll num data here!
    $userRollNum = 2015121;

    $uploadSuccessful = true;
    
    $directory = "img/profilepictures/";
    
    $file_location = $directory . basename($_FILES["imageLocationInput"]["name"]);
    
    $fileExtension = pathinfo($file_location, PATHINFO_EXTENSION);
    
        if (move_uploaded_file($_FILES["imageLocationInput"]["tmp_name"], $directory.$userRollNum.".".$fileExtension)) {
        //    echo "The file " . basename( $_FILES["imageLocationInput"]["name"]). " has been uploaded!";
        
            //header("Location: chat.php");
            header("Location: profile.php");

        } else {
            echo "Sorry, there was an error while uploading your file!";
        }
?>