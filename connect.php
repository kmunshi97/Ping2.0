<?php	

    // Database credentials 
    $servername = "localhost";
    $server_username = "root";
    $server_password = "";
    $dbname = "ping";
    
    // Creating a connection with the DB 'ping'
    $conn = new mysqli($servername, $server_username, $server_password, $dbname);

    // Checking the connection status
    if ($conn->connect_error) {
        die("Couldn't connect with the Database!");
    }
?>

<script>
    console.log(<?php 
        echo "Error while connecting with the database: " . $conn->connect_error; ?>);
</script>