<?php
// DEBUG
print_r($_REQUEST);
// DEBUG

if (!isset($_GET['name'])) {
    echo('name parameter missing');
    die();
}

if (isset($_POST['logout'])) {
    exit(header('location: index.php'));
}

$name = $_GET['name'];
$game_result = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>R . P . S</title>
</head>
<body>
    <p>play it</p>
    <p>welcome: <?= $name ?></p>
    <form method="post">
        <select name="human">
            <option value="0">-- select --</option>
            <option value="rock">rock</option>
            <option value="paper">paper</option>
            <option value="scissors">scissors</option>
        </select>
        <input type="submit" value="play">
        <input type="submit" name="logout" value="logout">
    </form>
    <div style="background-color: #f5f5f5">
        <p> <?= $game_result ?> </p>
    </div>
</body>
</html>
