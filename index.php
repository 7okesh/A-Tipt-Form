<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>

<body>
<img class="bg" src="iit.jpg" alt="iit Mumbai">
    <div class="contener">
<h1> Welcome to IIT Mumbai US trip Form</h1>


<form action="index.php" method="post">

    <input type="text" name="name" id="name" placeholder="Enter Your name">
    <input type="text" name="gender" id="gender" placeholder="Ener Your gender">
    <input type="text" name="age" id="age" placeholder="Ener Your age">
    <input type="email" name="email" id="email" placeholder="Ener Your email">
    <input type="phone" name="phone" id="phone" placeholder="Ener Your Phone number">
<textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter other information..."></textarea>
<button class="btn">Submit</button>
<P class="submitemsg">Thank you for submitting your form. we are happy to see you joining us for the us trip.
</P>
<!--
    <button class="btn">Reset</button>


    INSERT INTO `trip` (`sno`, `name`, `gender`, `age`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'lokesh', 'male', '20', 'this@this,com', '669797946468', 'ghjfcghvcb', current_timestamp());



-->
</form>

    </div>
    <script src="index.js"></script>
</body>

</html>