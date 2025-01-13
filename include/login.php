<?php
include 'connect.php';

$user = $_POST['floatingInput'];
$pass = $_POST['floatingPassword'];

$sql = "select * from user where Name = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $user = $row['Name'];
    echo "<script>
            alert('Success');
            window.location.href='../page/aboutus.php';
          </script>";
    exit();
} else {
    echo "<script>
            alert('Wrong user or password, try again');
            window.location.href='../index.php';
          </script>";
}

?>