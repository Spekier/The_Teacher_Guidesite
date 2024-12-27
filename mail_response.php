    <?php
        include 'header.php';
    ?>
   
<?php
 $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "Insert into contact (contact_name, contact_email, contact_message) values ('$name','$email','$message')";
            
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
        
        require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->SMTPDebug=0; 
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'sorappix@gmail.com';
$mail->Password = 'rsxo srrm dwtb oxus';
$mail->setFrom('sorappix@gmail.com');
$mail->addAddress('sorappix@gmail.com');
$mail->Subject = 'New Contact Form Submission';
 $body = "Name: $name\nEmail: $email\nMessage:\n$message";
$mail->Body = $body;
//send the message, check for errors
if (!$mail->send()) {
echo "ERROR: " . $mail->ErrorInfo;
} else {
echo "Thank you for contacting us!";
}
?>
<?php
include 'footer.php';
?>
