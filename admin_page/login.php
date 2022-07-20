<?php
session_start();
include("../config/config.php");

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (empty($username) || empty($password)) {
        header("Location: index.php?error=Missing username or password");
        exit();

    } else {
     
        $query = "SELECT * FROM `users` WHERE `USERNAME`='$username'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result)===1) {
            $row = mysqli_fetch_assoc($result);
            // $row['USERNAME'] === $username && $row['PASSWORD'] === $password

            if (password_verify($password, $row['PASSWORD'])) {
                $_SESSION['USERNAME'] = $row['USERNAME'];
                $_SESSION['PASSWORD'] = $row['PASSWORD'];

                header("Location: dashboard.php");
            } else {
                header("Location: index.php?error=Incorrect information!");
                exit();
            }

        } else {
            header("Location: index.php?error=Incorrect information!");
            exit();
        }

    }

} else {
    header("Location: index.php");
    exit();
}
?>