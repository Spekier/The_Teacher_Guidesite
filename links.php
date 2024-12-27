<?php
session_start();    
include 'header.php';
?>
        <h1>Links</h1>
        
<?php
        if ($_SESSION['LoggedIn']){
            echo "Hi " . $_COOKIE['username'];
        }
        else {
            die("You need to login first.");
        }     
        
                $sql = "select * from links";
            
       // Database connection parameters
    $servername = "localhost";
    $dbname = "sora"; 
    $dbusername = "root"; 
    $dbpassword = ""; 

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);
    while ($row= $result->fetch_assoc()){
        echo "<li class='newgroup'><a href='". $row['linkurl']."'>".$row['linktitle']." </a>".$row['linkdescription']."</li>";
    }
?>
        
<?php
include 'footer.php';
?>