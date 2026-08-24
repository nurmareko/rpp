<?php
    // DEBUG
    print_r($_REQUEST);
    // DEBUG

    if (isset($_POST['cancel'])) {
        header('location: ./index.php');
        exit();
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
    <p>you know it</p>
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
