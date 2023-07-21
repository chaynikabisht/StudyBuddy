<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="main.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Buddy</title>
  </head>
<body>

<div class="hero">
<?php 
include 'partials/_dbconnect.php';
$name = $_GET['name'];
$subject = $_GET['subject'];
$topic = $_GET['topic'];
$standard = $_GET['standard'];
// $lat = $_GET['lat'];
// $longi = $_GET['longi'];
$sql="SELECT * FROM findbuddy WHERE subject LIKE '%$subject%' OR topic LIKE '%$topic%' LIMIT 10";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
  // echo($row['name'] . ' ');
  $name = $row['name'];
  $subject = $row['subject'];
  $topic = $row['topic'];
  $standard = $row['standard'];
  $lat = $row['lat'];
  $longi = $row['longi'];
  echo "
  <div class='qn'>
  <h5 class='qn_label'> 
  $name
  </h5>
  <p class='question'>
    $subject , $topic , $standard 
  </p>
  <a class='button1'href='https://www.google.com/maps/search/?api=1&query=$lat%2C$longi&authuser=0' target='_blank'>NAVIGATE</a>
</div>
  ";
}
?>
</div>
</body>
</html>