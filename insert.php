<?php
    $servername='localhost';
    $username='h77588vx_form';
    $password='Hel';
    $dbname = "h77588vx_form";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
        }
?>

<?php
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $sql = "INSERT INTO users (name,email,mobile)
     VALUES ('$name','$email','$mobile')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>