<?php
    // DEBUG
    print_r($_REQUEST);
    // DEBUG

    if (isset($_POST['cancel'])) {
        exit(header('location: ./index.php'));
    }

    $salt = 'XyZzy12*_';
    $stored_hash = 'a8609e8d62c043243c4e201cbb342862'; // Pw is meow123
    $correct_username = '';
    $correct_password = '';
    $is_error = false;
    $error_mesage = '';

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === '' || $password === '') {
            $is_error = true;
            $error_mesage = "User name and password are required";
        } else if (hash('md5', $salt.$password) !== $stored_hash) {
            $is_error = true;
            $error_mesage = "Incorrect password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
    <?= "<p style='color: red;'>$error_mesage</p>" ?>
    <form method="post">
        <label for="username">
            username <input type="text" name="username">
        </label>
        <br>
        <label for="password">
            password <input type="password" name="password">
        </label>
        <br>
        <input type="submit" value="try me">
        <input type="submit" name="cancel" value="forget it">
    </form>
</body>
</html>
