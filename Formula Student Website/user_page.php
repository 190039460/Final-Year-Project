<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: log_reg.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device - width, initial - scale = 1.0">
    <title> User Page </title>
    <link rel = "stylesheet" href = "style.css">
</head>

<body class = "body-log-reg" style = "background: #fff;">
    
    <div class = "box">
        <h1> Welcome, <span> <?= $_SESSION['name']; ?> </span> </h1>
        <p> This is an <span> user </span> page </p>
        <button onclick = "window.location.href = 'logout.php'" > Logout </button>
        <br>
        <button onclick = "window.location.href = 'home.php'" > Formula Student Website </button>
    </div>

</body>

</html>