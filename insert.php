
<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $rate = $_POST['rate'];
        $chat_code = $_POST['chat_code'];
        $about = $_POST['about'];

        $sql = "INSERT INTO sampleDB VALUES ('$name',
        '$rate','$chat_code','$about','$email')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>