<!DOCTYPE html>
<?php
    // Connection variables
    $host = "localhost";
    $user = "fallzur";
    $password = "password";
    $database = "tscakesdb";
    $table = "users";
    
    // Create connection
    $conn = mysqli_connect($host, $user, $password, $database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Get form data
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Create SQL query
        $sql = "SELECT * FROM " . $table . " WHERE username='" . $username . "' AND password='" . $password . "'";
        
        // Execute query
        $result = mysqli_query($conn, $sql);
        
        // Check if query returned a result
        if (mysqli_num_rows($result) > 0) {
            // Redirect to success page
            header("Location: success.php");
            exit();
        } else {
            // Show error message
            $error = "Invalid username or password";
        }
    }
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Log.css">
  <link rel="stylesheet" href="./Golobal.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="logjs.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gidugu:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Halant:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IM FELL English:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;600;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Charm:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fjalla One:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Infant:wght@700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cookie:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin Slab:wght@700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Habibi:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gupter:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant Garamond:wght@400&display=swap">

</head>

<body>
    
    <img class="cake-main" id="Rec1img" alt="" src="./Photo/bkcs.png" />
    <img class="Lpic" alt="" src="./photo/Bckg.png"/>

    <img src="./photo/" alt="">

    <div class="squre"></div>

    <img class="logo" alt="" src="./photo/logo.png"/>
    <div class="S-UP" style="font-size:1.5vw;">SIGN IN</div>
    <div class="S-IN" style="font-size:1.5vw;">SIGN UP</div>
    
    <form action="login.php" method="post">
    <input class="User-In" type="text"  placeholder="User Name ....."style="font-size:1.1vw;"/>
     <input id="mypasswrod"class="Passwrd-In" type="password" placeholder="Password ..." style="font-size: 1.1vw;">
     <input class="chkbox" type="checkbox" onclick="myFunction()">
     <div class="chcktxt" style="font-size:0.8vw;">View Password</div>
    </form>

     <button id="login-btn">Login</button>

</div>
    
    
    
</body>