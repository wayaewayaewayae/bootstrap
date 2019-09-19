<?php
session_start();
if (isset ($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];
//periksa login
if ($user == "Santia" && $pass = "123") {
//menciptakan session
$_SESSION['login'] = $user;
//menuju ke halaman pemeriksaan session
echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='formulir.php'>di sini
(formulir.php)</a>
untuk menuju ke halaman pemeriksaan session";
}
} else {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //periksa login
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //periksa login
?>
<html>
<head>
<title>Login Formulir...</title>
</head>
<body>
        <form action="" method="post">
            <h2>Login Here...</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
        <input type="submit" name="Login" value="Log In">
        </form>
    </body>
    </html>
    <?php } ?>