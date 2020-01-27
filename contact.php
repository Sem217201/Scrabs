<!DOCTYPE html>
<?php
//Step1
function OpenCon()
 {$db = mysqli_connect('localhost','root','','bakerij')
 or die('Error connecting to MySQL server.');
   $user = "root";
$password = "";
$db = "bakerij";
$host = "localhost";
$port = 3308;
$conn = new mysqli($host, $user, $password,$db) or die("Connect failed: %s\n". $conn -> error);


 return $conn;
 }

 function CloseCon($conn)
 {
 $conn -> close();
 }


$con = mysqli_connect("localhost","root","","bakerij");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
if ($result = mysqli_query($con, "SELECT * FROM Persons")) {
  echo "Returned rows are: " . mysqli_num_rows($result);
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);


 $db = mysqli_connect('localhost','root','','bakerij')
 or die('Error connecting to MySQL server.');
?>

<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css";>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bakkerij</title>
</head>
<body>
        <div id="header">
            <h1>Het Oerbroodje</h1>
        </div>

            <ul id="nav">
          <li><a class="nav-box" href="index.html">Home</a></li>
          <li><a class="nav-box" href="broodjevdd.html">Broodje van de dag</a></li>
          <li><a class="nav-box" href="belegdebroodjes.html">Belegde broodjes</a></li>
          <li><a class="nav-box" href="gebak.html">Gebak</a></li>
          <li><a class="nav-box" href="overons.html">Over ons</a></li>
          <li><a class="nav-box" id="active" href="contact.php">Contact</a></li>
            </ul>
        <div class="main">
<br>
            <div class="main">
                <h1 class="Page-titel">Contact</h1>
                <div id="tekst">
                  <p class="Alinea-text">
                    <ul>
                          <li><?php echo "Telefoon nmr: +31 06 0879 634800" ?> </li>
                          <li><?php echo "Mail: coorperatie_sareon@outlook.com" ?> </li>
                          <li><?php echo "Adress: Plagiaat 21 9725 SR Bergschedriel" ?></li>
                    </ul>
                <img id="imgRoom" src="IMG/Map" alt="Map">
                </div>
<br>
        <div id="footer">
                      Copyright &copy;
        </div>
    </div>
  </div>
</body>
<script src="script.js"></script>
</html>
