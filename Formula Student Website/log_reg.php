<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '', 
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class = 'error-message'> $error </p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name = "viewpoint" content = "width = device - width, initial - scale = 1.0">
    <title> Login & Register Form </title>
    <link rel = "stylesheet" href = "style.css">
</head>

<body class = "body-log-reg">

    <div class = "container-log-reg">
        <div class = "form-box <?= isActiveForm('login', $activeForm); ?>" id = "login-form">
            <form action = "login_register.php" method = "post">
                <h2> Login </h2>
                <?= showError($errors['login']); ?>
                <input type = "email" name = "email" placeholder = "Email" required>
                <input type = "password" name = "password" placeholder = "Password" required>
                <button type = "submit" name = "login"> Login </button>
                <p> Don't have an account? <a href = "#" onclick = "showForm('register-form')"> Register </a></p>
                <p> Or </p> 
                <p> Click <a href = "home.php"> here </a> to return back to home page </p>
            </form>
        </div>

        <div class = "form-box <?= isActiveForm('register', $activeForm); ?>" id = "register-form">
            <form action = "login_register.php" method = "post">
                <h2> Register </h2>
                <?= showError($errors['register']); ?>
                <input type = "text" name = "name" placeholder = "Name" required>
                <input type = "email" name = "email" placeholder = "Email" required>
                <input type = "password" name = "password" placeholder = "Password" required>
                <select name = "role">
                    <option value = ""> --Select Role-- </option>
                    <option value = "user"> User </option>
                    <option value = "admin"> Admin </option>
                </select> 
                <button type = "submit" name = "register"> Register </button>
                <p> Already have an account? <a href = "#" onclick = "showForm('login-form')"> Login </a></p>
                <p> Or </p>
                <p> Click <a href = "home.php"> here </a> to return back to home page </p>
            </form>
        </div>
    </div>
    
    <script src = "script.js"></script>
</body>

</html>
