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
        body{
            background-color: rgb(137,138,116);
        }
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
                    <li><a href="/RMS/html-php/available_rooms.php">Available Rooms</a></li>
                    <li><a href="#">Reserved Villas</a></li>
                    <li><a href="/RMS/html-php/available_villas.php">Available Villas</a></li>
                    <li><a href="#">Reserved Meeting Rooms & Halls</a></li>
                    <li><a href="/RMS/html-php/available_meeting_rooms.php">Available Meeting Rooms & Halls</a></li>
                </ul>
            </li>
            <li><a href="/RMS/html-php/home.php">Log Out</a></li>
        </ul>
    </nav>
    


<!--https://youtu.be/1NC8G_zWDJY-->



<div class="list">
   <div>
      <h1>Villa Details</h1>
   </div>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Total Villas</th>
                <th>Available </th>
                <th>Reserved </th>
                <th>Capacity</th>
                <th>Rate</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $username = "root";
        $password = "";
        $server = "localhost";
        $database = "rms";
    
        $con = mysqli_connect($server,$username,$password,$database);

        $selectquery = " select * from villas";
        $query = mysqli_query($con,$selectquery);
        $num = mysqli_num_rows($query);
        while($res = mysqli_fetch_array($query)){
        ?>
           <tr>
            <td><?php echo $res['Type'];?></td>
            <td><?php echo $res['Total Villas'];?></td>
            <td><?php echo $res['Available'];?></td>
            <td><?php echo $res['Reserved'];?></td>
            <td><?php echo $res['Capacity'];?></td>
            <td><?php echo $res['Rate'];?></td>
           </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    </div>

</body>
</html>