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
            color:white;
            opacity: 1;
        }
    </style>
    <title>Login Page</title>
</head>
<body>
    <!--Navigation Bar-->
    <div class="bar">
        <ul>
            <li><a href="/RMS/html-php/home.php">Home</a></li>
            <li><a href="/RMS/html-php/login.php">Log In</a></li>
            <li><a href="/RMS/html-php/singup.php">Sign Up</a></li>

        </ul>
    </div>

    <div class="background">
        <div class="form">
            <form action="login.php" method="POST">
                <h1>Login</h1>

                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" required placeholder="Username" name="username" value="">
                </div>

                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" required placeholder="Password" name="password" value="">
                </div>

                <a href=# style="color: #52b050;font-size:18px;">Forget Password?</a>

                <input class="button" type="submit" name="submit" value="Sign In">

                <p style="color:white;font-size:18px;">
                    Don't have an account?
                    <a href="/RMS/html-php/singup.php" style="color: #52b050;">Sign Up</a>
                </p>
            </form>
        </div>
    </div>

    <?php
        $uname = $_POST["username"];
        $pass = $_POST["password"];

        $con = new mysqli("localhost","root","","rms");
        if($con->connect_error){
            die("Failed to connect : ".$con->connect_error);
        }
        else {
                if(isset($_POST["submit"])){
                    $sql= "select * from admin where username = '$uname'";
                    $res = mysqli_query($con,$sql) or die(mysqli_error($con));
                    $count = mysqli_num_rows($res);
           
                    if($count==1)
                        {
                            $row = mysqli_fetch_assoc($res);
                            $password = $row['password'];
                                if($password == $pass )
                                    {
                                        ?>
                                        <script>
                                            alert("Logged in Successfully");
                                        </script>
                                        <?php
                                        header("Location: /RMS/html-php/admin.php");
                                    }
                                else{
                                        ?>
                                            <script>
                                                alert("Wrong Password");
                                            </script>
                                        <?php
                                    }
                        }
                    else
                        {
                            ?>
                                <script>
                                alert("Incorrect Username");
                                </script>
                            <?php
                        }
                }  
        }
    ?>
</body>
</html>