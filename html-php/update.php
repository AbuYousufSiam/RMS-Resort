<?php
$username = "root";
$password = "";
$server = "localhost";
$database = "rms";

$con = mysqli_connect($server,$username,$password,$database);
error_reporting(0);
$idq = $_GET['idno'];
$nameq = $_GET['nm'];
$usernameq = $_GET['usr'];
$adressq = $_GET['adr'];
$emailq = $_GET['em'];
$cnq = $_GET['cn'];

    ?>


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
    <title>Update user information</title>
</head>
<body>

    <div class="background">
        <div class="form">
            <form action="update.php" method="POST">

                <h1 style="color:whitesmoke;">User ID: <?php echo $idq ?> </h1>

                <div class="textbox">
                    <input type="text" required placeholder="Name" name="name" value="<?php echo $nameq ?>">
                </div>

                <div class="textbox">
                    <input type="text" required placeholder="Username" name="username" value="<?php echo $usernameq ?>">
                </div>

                <div class="textbox">
                    <input type="text" required placeholder="Address" name="address" value="<?php echo $adressq ?>">
                </div>

                <div class="textbox">
                    <input type="email" required placeholder="Email" name="email" value="<?php echo $emailq ?>">
                </div>

                <div class="textbox">
                    <input type="text" required placeholder="Contact No" name="contact" value="<?php echo $cnq ?>">
                </div>

                <input class="button" type="submit" name="button" value="Update" style="color: whitesmoke;">
            </form>
        </div>
    </div>

    <?php
    echo $name = $_GET['nm'];
    echo $uname = $_GET['usr'];
        if($_GET['button']){
            
                if(isset($_POST["button"]))
                {
                    $idd = $idq;
                    $name = $_POST["name"];
                    $uname = $_POST["username"];
                    $address = $_POST["address"];
                    $mail = $_POST["email"];
                    $contact = $_POST["contact"];
        
                $queryupdate= "update admin set name = '$name', username= '$uname', address= '$address', email= '$mail', phone= '$contact'
                where id= '$id'";
                $dataa= mysqli_query($con, $queryupdate);

                if($dataa){
                    echo "<script> alert('Record Updated') </script>";
                    ?> <META HTTP-EQUIV = "REFRESH" CONTENT = "1; URL=http://localhost/RMS/html-php/admin-list.php"> <?php
                }else{
                    echo "<script> alert('Failed to update') </script>";
                    ?> <META HTTP-EQUIV = "REFRESH" CONTENT = "1; URL=http://localhost/RMS/html-php/admin-list.php"> <?php
                }
            }
            
        }
        
        
    ?>
</body>
</html>