<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Cell</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="icon" href="images/SDA1.jpg" type="images/fire.jpg">
    <link rel="stylesheet" href="pray.css">
</head>
<body>

    <h1>OTR PRAYER CELL</h1>
    <div class="container">
        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        
        require 'vendor/autoload.php'; 
        
        if(isset($_POST["send"])){
            $mail = new PHPMailer(true);
        
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'omokethomas644@gmail.com';
            $mail->Password = 'teng elgi iexd yrgd'; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587;
            $mail->setFrom('omokethomas644@gmail.com');
            $mail->addAddress('omokethomas644@gmail.com'); 
            $mail->isHTML(true);
            $mail->Subject = 'Prayer Request from ' . $_POST["name"]; 
            $mail->Body = 'Name: ' . $_POST["name"] . '<br>Phone Number: ' . $_POST["phone_number"] . '<br>Prayer Request: ' . $_POST["prayer_request"]; 
        
            if(!$mail->send()){
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo "<div class='alert alert-success'>Details Received Successfully</div>";
            }
        }
        ?>
       
        <form action="pray.php" method="post">
            <div class="pray_group">
                <input type="text" name="name" placeholder="my name">
            </div>
            <div class="pray_group">
                <input type="text" name="phone_number" placeholder="phone number">
            </div>
            <div class="pray_cell">
                <input type="text" name="prayer_request" placeholder="Type your prayer Request">

            </div>
            <div class="prayer_button">
                <input type="submit" class="prayer_button" value="submit Request" name="send">
            </div>

        </form>
    </div>

    
</body>
</html>