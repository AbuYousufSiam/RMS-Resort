<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    <link rel="stylesheet" href="/RMS/css/styleform.css">
    <style>
        ::placeholder{
            color:whitesmoke;
            font-weight: bold;
            opacity: 1;
        }
        .background{
            background-image: url(/RMS/img/home2.jpg);
            height:665px;
        }
    </style>
    <title>Sign Up Page</title>
</head>
<body>
    <!--Navigation Bar-->
    <div class="bar">
        <ul>
            <li><a href="/RMS/html-php/home.php">Home</a></li>
            <li><a href="/RMS/html-php/info.php">Info</a></li>
            <li><a href="/RMS/html-php/login.php">Log In</a></li>
            <li><a href="/RMS/html-php/review.php">Reviews</a></li>
            <li><a href="/RMS/html-php/booking.php">Book Now</a></li>
        </ul>
    </div>

    <div class="background">
        <div class="form">
            <form action="singup.php" method="POST">

                <h1 style="color:whitesmoke;">Sign Up</h1>

                <div class="textbox">
                    <input type="text" required placeholder="Name" name="name" value="">
                </div>

                <div class="textbox">
                    <input type="text" required placeholder="Username" name="username" value="">
                </div>

                <div class="textbox">
                    <input type="text" required placeholder="Address" name="address" value="">
                </div>

                <div class="textbox">
                    <input type="email" required placeholder="Email" name="email" value="">
                </div>

                <div class="textbox">
                    <input type="text" required placeholder="Contact No" name="contact" value="">
                </div>

                <div class="textbox">
                    <input type="text" required placeholder="Employee pass" name="employeepass" value="">
                </div>

                <div class="textbox">
                    <input type="password" required placeholder="Password" name="pass" value="">
                </div>

                <div class="textbox">
                    <input type="password" required placeholder="Confirm Password" name="conpass" value="">
                </div>

                <input class="button" type="submit" name="button" value="Sign Up" style="color: whitesmoke;">
            </form>
        </div>
    </div>

    <?php
        $username = "root";
        $password = "";
        $server = "localhost";
        $database = "rms";
    
        $con = mysqli_connect($server,$username,$password,$database);
        if($con)
        {
            if(isset($_POST["button"])){
                $name = $_POST["name"];
                $uname = $_POST["username"];
                $address = $_POST["address"];
                $mail = $_POST["email"];
                $contact = $_POST["contact"];
                $epass = $_POST["employeepass"];
                $pass = $_POST["pass"];
                $pass2 = $_POST["conpass"];
                if($pass==$pass2){
                    $sql= "SELECT * FROM `employee-pass` WHERE `Index` = 1";
                    $res = mysqli_query($con,$sql) /*or die(mysqli_error($con))*/;
                    $row = mysqli_fetch_assoc($res);
                    $empass = $row['e-pass'];
                    if($empass == $epass){
                        $insertquery = " INSERT INTO `admin`(`name`, `username`, `address`, `email`, `phone`, `password`)
                         VALUES ('$name','$uname','$address','$mail','$contact','$pass')";

                        $res1 = mysqli_query($con,$insertquery);

                        if($res1){
                        ?>
                        <script>
                            alert("data inserted properly");
                        </script>
                        <?php
                        header("Location:/RMS/html-php/admin.php");
                        }
                        else{
                                ?>
                                <script>
                                alert("data not inserted");
                                </script>
                                <?php
                                header("Location:/RMS/html-php/signup.php");
                            }
                        
                    }
                    else{
                        ?>
                    <script>
                        alert("Your employee pass is incorrect");
                    </script>
                    <?php
                    }
                }
                else{
                    ?>
                    <script>
                        alert("Passwords don't match");
                    </script>
                    <?php
                }
            }
            
        }
        else{
            die("No connection.." . mysqli_connect_error());
        }
    ?>
</body>
</html>