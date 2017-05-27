<?php
    
    include "connect.php";

    // The user credentials
	$user_rollnum = $_POST['rollnum'];
	$user_password = $_POST['password'];

    // The query to validate the user
    $query ="SELECT password 
             FROM users 
             WHERE rollnum = $user_rollnum";

    $result = mysqli_query($conn, $query);
	
    $row = mysqli_fetch_array($result);
	
    $password = $row[0];

    if($password == $user_password){
		$query = "SELECT fname, lname, branch, email 
                  FROM users
                  WHERE rollnum = $user_rollnum";
		
        $result = mysqli_query($conn, $query);
		
        $row = mysqli_fetch_array($result);
            $user_firstName = $row[0];
            $user_lastName = $row[1];
            $user_branch = $row[2];            
            $user_email = $row[3];            
        
            if(!file_exists("uploads/audio")){
                mkdir("uploads/audio");
                echo "Created successfully!";
            }

            if(!file_exists("uploads/code")){
                mkdir("uploads/code");
                echo "Created successfully!";
            }

            if(!file_exists("uploads/img")){
                mkdir("uploads/img");
                echo "Created successfully!";
            }

            if(!file_exists("uploads/others")){
                mkdir("uploads/others");
                echo "Created successfully!";
            }

            if(!file_exists("uploads/pdf")){
                mkdir("uploads/pdf");
                echo "Created successfully!";
            }

            if(!file_exists("uploads/ppt")){
                mkdir("uploads/ppt");
                echo "Created successfully!";
            }

            if(!file_exists("uploads/video")){
                mkdir("uploads/video");
                echo "Created successfully!";
            }
        
        header("Location: chat.php");

	}
	
    else{
		header('Location: login.php');
    }
?>