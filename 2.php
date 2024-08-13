if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["Your name"] ?? ''; 
    $phone_number = $_POST["phone_number"] ?? '';  
    $prayer_request = $_POST["prayer_request"] ?? ''; 
    $to = "omokethomas644@gmail.com";
    $subject = "Prayer Request from $name";
    $header = "From: $name";  

    if (!empty($name) && !empty($phone_number) && !empty($prayer_request)) {  
        mail($to,  $subject, $prayer_request, $header);
        echo"Prayer Request received successfully";
    } else {
        echo "Email sending failed";
    }
}
