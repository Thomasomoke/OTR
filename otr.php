<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTR MEMBER REGISTRATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="icon" href="images/SDA1.jpg" type="images/fire.jpg">
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <h1>OTR MEMBER REGISTRATION</h1>
    <div class="container">
        <?php
        // Initialize variables
        // $fullname = '';
        // $email = '';
        // $year = '';
        // $yeargroup = '';
        // $residential = '';
        // $phone_number = '';
        // $home_county = '';
        // $home_church = '';
        // $favorite_bible_verse = '';

        if (isset($_POST["submit"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $year = (int)$_POST["year"]; // Cast to integer
            $yeargroup = $_POST["yeargroup"]; // This is a string
            $residential = $_POST["residential"];
            $phone_number = $_POST["phone_number"]; // Cast to integer
            $home_county = $_POST["home_county"];
            $home_church = $_POST["home_church"];
            $favorite_bible_verse = $_POST["favorite_bible_verse"];

            $errors = array();

            // Check if all fields are empty
            if (empty($fullname) OR empty($email) OR empty($year) OR empty($yeargroup) OR empty($residential) OR empty($phone_number) OR empty($home_county) OR empty($home_church) OR empty($favorite_bible_verse)) {
                array_push($errors, "All fields are required");

                // !empty($email) &&
                // !empty($phone_number) &&
            } 
            if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if ( strlen($phone_number) != 10) {
                array_push($errors, "Phone number is invalid");
            }
            require_once"otrdata.php";
            $sql = "SELECT * FROM `registered members` WHERE `Email Address` = '$email'";
            
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors,"Email already exists");
            }
            

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
                
            } else {

                $sql = "INSERT INTO `registered members` (`Full Name`, `Email Address`, `Year of Study`, `Year Group`, `Residential`, `Phone Number`, `Home County`, `Home Church`, `Favorite Bible Verse`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt,$sql);
                if ($preparestmt) {
                    mysqli_stmt_bind_param($stmt, "ssississs", $fullname, $email, $year, $yeargroup, $residential, $phone_number, $home_county, $home_church, $favorite_bible_verse);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<div class='alert alert-success'>Details Received Successfully</div>";
                    } else {
                        // Add error reporting
                        echo "<div class='alert alert-danger'>Error executing statement: " . mysqli_error($conn) . "</div>";
                    }
                } else {
                    die("Something went wrong: " . mysqli_error($conn)); // More informative error message
                }
            } // Close the if statement for error checking
        } // Close the if statement for form submission
        ?>
        <form action="otr.php" method="post">
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full Name"> 
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address"> 
            </div>
            <div class="form-group">
                <input type="text" name="year" placeholder="Year of Study"> 
            </div>
            <div class="form-group">
                <input type="text" name="yeargroup" placeholder="Year Group">
            </div>
            <div class="form-group">
                <input type="text" name="residential" placeholder="Residential e.g hostel C"> 
            </div>
            <div class="form-group">
                <input type="text" name="phone_number" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" name="home_county" placeholder="Home County">
            </div>
            <div class="form-group">
                <input type="text" name="home_church" placeholder="Home Church"> 
            </div>
            <div class="form-group">
                <input type="text" name="favorite_bible_verse" placeholder="Favorite Bible Verse"> 
            </div>
            <div class="form-group button">
                <input type="submit" class="form-group button" value="Register" name="submit">
            </div>
        </form>
    </div>
</body>
</html>