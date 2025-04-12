<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderlust - Travel Planner</title>
    <link rel="stylesheet" href="style.css">
    

</head>

<body>
    <script src="script.js"></script>
    <section class="container">
        
        <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="homepage.php">Wanderlust</a>
                </div>
                <ul class="nav-links">
                    <li><a href="homepage.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" id="planner-btn">Planner</a>
                        <ul class="dropdown-menu" id="planner-menu">
                            <li><a href="trip.html">Trip Overview</a></li>
                            <li><a href="expense.html">Expense Tracker</a></li>
                            <li><a href="todo.html">To-do List</a></li>
                        </ul>
                    </li>
                    <li><a href="map.html">Map</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="logout.php">Logout</a><li>                 
                </ul>
            </nav>
        </header>
        <div class="hero-container">
            <div style="text-align:center; padding:15%;">
                <p  style="font-size:50px; font-weight:bold;">
                 Hello  <?php 
                 if(isset($_SESSION['email'])){
                  $email=$_SESSION['email'];
                  $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                  while($row=mysqli_fetch_array($query)){
                      echo $row['firstName'].' '.$row['lastName'];
                  }
                 }
                 ?>
                 :)
                </p>
                
            <div class="hero-content">
                <h1>Where Do You Want to go Next?</h1>
                <p>Plan your next trip in minutes</p>
            </div>

          
            <div class="features">
                <div class="feature-card" id="trip-overview">
                    <a href="trip.html">
                        <h2>Trip Overview</h2>
                        <p>A quick snapshot of your trip: when you traveled, where you went, how long it lasted, all in
                            one place.</p>
                    </a>
                </div>

                <div class="feature-card" id="expense-tracker">
                    <a href="expense.html">
                        <h2>Expense Tracker</h2>
                        <p>Keep track of your trip spending: log expenses, and stay within budget effortlessly.</p>
                    </a>
                </div>

                <div class="feature-card" id="to-do-list">
                    <a href="todo.html">
                        <h2>To-do List</h2>
                        <p>Plan and organize your trip with a checklist: add tasks and stay on top of everything.</p>
                    </a>
                </div>



            </div>

    </section>


</body>

</html>