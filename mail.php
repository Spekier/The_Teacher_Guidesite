  
 <?php
        include 'header.php';
    ?>
    <h1>Contact Us</h1>
    <form method="post" action="mail_response.php">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
         <label for="reason">Reason for Contact:</label><br>
    <select id="reason" name="reason">
        <option value="inquiry">General Inquiry</option>
        <option value="support">Support</option>
        <option value="feedback">Feedback</option>
        <option value="other">Other</option>
    </select><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
<?php
include 'footer.php';
?>
