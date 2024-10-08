<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    <link rel="stylesheet" href="/RMS/css/styleform.css">

    <style>
        .background{
            background-image: url(/RMS/img/home2.jpg);
            height:665px;
        }
    </style>

    <title>Admin Page</title>
</head>
<body>
    <h1>Admin Page</h1>
    <!--Navigation Bar-->
    <div class="hierarchical_bar">
        <div class= "background">
        <ul>
           
            <li><a href="/RMS/html-php/info.php">Accommodation</a>
            <div class= sub-menu>
                    <ul>
                         <li> <a href= "#"> Rooms </li>
                         <li> <a href= "#"> Villas</li>
                         <li> <a href= "#"> Meeting Rooms/ Halls </li>
                    </ul>
                <div>  
            </li>
            <li><a href="/RMS/html-php/login.php">Reservations</a>
            <div class= sub-menu>
                    <ul>
                         <li> <a href= "#"> Confirmation</li>
                         <li> <a href= "#"> Cancellation</li>
                         <li> <a href= "#"> Guest Reserve Rooms</li>
                    </ul>
                <div> 

                </li>
            <li><a href="/RMS/html-php/review.php">Reports</a>
            <div class= sub-menu>
                    <ul>
                         <li> <a href= "#"> Filtered list of Guests Booked/ Checked In/ Out </li>
                         <li> <a href= "#"> Non Filtered lists</li>
                        
                    </ul>
                <div> 

                </li>
            <li><a href="/RMS/html-php/booking.php">Manage Users</a>
            <div class= sub-menu>
                    <ul>
                         <li> <a href= "#"> Adding </li>
                         <li> <a href= "#"> Updating</li>
                         <li> <a href= "#"> Listing </li>
                    </ul>
                <div> </li>
            <li><a href="/RMS/html-php/booking.php">Manage Reviews</a>
            <li><a href="/RMS/html-php/home.php"> Log Out </a> </li></ul>
        </div>
    </div>

<!-- before body tag ends, paste this jquery cdn-->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   
</body>
</html>

<!-- http://localhost/RMS/html-php/admin.php -->
