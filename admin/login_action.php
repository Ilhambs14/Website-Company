<?php
include '../koneksi.php';

session_start();  // Mulai sesi

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

    $_SESSION['username'] = $username;

    header("Location: contact.php");
    exit();
} else {
    echo "<script>
        alert('Username atau password salah. Silakan coba lagi!');
        window.location.href = 'index.php';
    </script>";
}
?>
