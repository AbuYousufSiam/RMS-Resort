<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="/RMS/css/style_admin.css">
    <title>Room Details</title>

    <!-- styles for the table and header with background-->
    <style > /* type= "text/css" */
        table{
            border-collapse: collapse;
            width: 100%;
            color: #5E5D59;
            font-family: sans-serif;
            font-size: 20px;
            text-align: center;
        }
        th{
            background-color: black;
            color: whitesmoke;
        }
        
       /* To make zebra stripes */
       tr:nth-child(even){
        background-color: #5E5D59;
        color: white;
       }
       tr:nth-child(odd){
        background-color: white;
        color: #5E5D59;
       }
       a{
            color: whitesmoke;
            text-decoration: none;
        }

    </style> 
</head>
<body>

    <nav>
    <div class="logo"><a href="/RMS/html-php/home.php">Tusti Resort</a></div>
        <ul>
            <li><a href="/RMS/html-php/admin.php">Admin Page</a></li>
            <li><a href="#">Manage Admins</a>
                <ul>
                    <li><a href="/RMS/html-php/admin-list.php">Admins List</a></li>
                    <li><a href="#">Update Admin List</a></li>
                </ul>
            </li>
            <li><a href="#">Accomodations</a>
                <ul>
                    <li><a href="/RMS/html-php/admin_room.php">Rooms</a></li>
                    <li><a href="/RMS/html-php/admin-villa.php">Villas</a></li>
                    <li><a href="/RMS/html-php/admin-meeting.php">Meeting Rooms & Halls</a></li>
                </ul>
            </li>
            <li><a href="#">Reservations</a>
                <ul>
                    <li><a href="#">Reserved Rooms</a></li>
                    <li><a href="#">Available Rooms</a></li>
                    <li><a href="#">Reserved Villas</a></li>
                    <li><a href="#">Available Villas</a></li>
                    <li><a href="#">Reserved Meeting Rooms & Halls</a></li>
                    <li><a href="#">Available Meeting Rooms & Halls</a></li>
                </ul>
            </li>
            <li><a href="/RMS/html-php/home.php">Log Out</a></li>
        </ul>
    </nav>
    


<!--https://youtu.be/1NC8G_zWDJY-->
<div>
    <h1>Admin Lists</h1>
</div>


<div class="list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $username = "root";
        $password = "";
        $server = "localhost";
        $database = "rms";
    
        $con = mysqli_connect($server,$username,$password,$database);

        $selectquery = " select * from admin";
        $query = mysqli_query($con,$selectquery);
        $num = mysqli_num_rows($query);
        while($res = mysqli_fetch_array($query)){
        ?>
           <tr>
           <td><?php echo $res['id'];?></td>
            <td><?php echo $res['name'];?></td>
            <td><?php echo $res['address'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['phone'];?></td>
           </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    </div>

</body>
</html>