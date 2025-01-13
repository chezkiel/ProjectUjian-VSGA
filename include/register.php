<?php
include 'connect.php';

$user = $_POST['floatingInput'];
$pass = $_POST['floatingPassword'];
$email = $_POST['floatingemail'];

$sql = "select * from user where name = '$user'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $user = $row['user'];
    echo "<script>
            alert('Username already used');
            window.location.href='../index.php';
          </script>";
    exit();
} else {
    $sql_insert = "insert into user (Name, Email, Password, Role) values ('$name','$email', '$pass', 'user')";
    $result_regis = mysqli_query($conn, $sql_insert);
    echo "<script>
            alert('Sign in success');
            window.location.href='../page/event.php';
          </script>";
}

?>