<?php
 $insert=false;
if (isset($_POST['Name'])) {
   
    $_SERVER = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($_SERVER, $username, $password);

    if (!$con) {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }

    // Explicitly select the database
    mysqli_select_db($con, "trip");

    $Name = $_POST['Name'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $age = $_POST['age'] ?? '';
    $email = $_POST['email'] ?? '';
    $Phone_no = !empty($_POST['Phone_no']) ? $_POST['Phone_no'] : null; // Use null if not provided
    // $desc = $_POST['other_info'] ?? '';

    $sql = "INSERT INTO `us_trip` (`Name`, `age`, `gender`, `email`, `Phone_no`, `date`) VALUES ('$Name', '$age', '$gender', '$email', '$Phone_no',  current_timestamp());";
    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
        $insert =true;
    } else {
        echo "ERROR: $sql <br> $con->error";

    }
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="campoustour.jpg" alt="DSATM">
    <div class="container">
        <h1>Welcome to DSATM US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
       <?php
        if($insert == true){
        echo "<p class='submitMsg'>thank you for submitting the from. we are happy to see you joining the US Trip </p>";
       }
        ?>
         
      
        <form action="index.php" method="post">
            <input type="text" name="Name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="tel" name="Phone_no" id="phone" placeholder="Enter your phone">
            <!-- <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea> -->
            <button class="btn">Submit</button>
        </form>        
    </div>
    <script src="index.js"></script>
    
</body>
</html>