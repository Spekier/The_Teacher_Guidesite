
    <?php
        include 'header.php';
    ?>
        <h1>Login</h1>
        <form action="login_response.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="user1"><br><br>
            <label for="password">Password:</label>  
            <input type="password" id="password" name="pass1"><br><br>
            <input type="submit" value="Login">    
        </form>
<?php
include 'footer.php';
?>

