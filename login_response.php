<?php
    // Start the session
    session_start();
        include 'header.php';
?>

<?php
    
    // Database connection parameters
    $servername = "localhost";
    $dbname = "sora"; 
    $dbusername = "root"; 
    $dbpassword = ""; 

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
//echo $dbpassword;
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the posted username and password
    $username = $_POST['user1'];
    $password = $_POST['pass1'];

    // Prepare and execute the SQL statement
    $sql = "SELECT username FROM new_table WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Check if the query returned a matching row
    if ($result->num_rows > 0) {
        // Save username to a cookie
        setcookie("username", $username, time() + 3600, "/");

        // Set session variable LoggedIn to TRUE
        $_SESSION['LoggedIn'] = TRUE;
    // Display link to the content page
    echo '<a href="links.php">Access Content Page</a>';

    } else {
        // Set session variable LoggedIn to FALSE
        $_SESSION['LoggedIn'] = FALSE;
        echo 'Error logging in. Try again.';
    }

    // Close the connection
    $conn->close();
?>

<?php
    include 'footer.php';
?>