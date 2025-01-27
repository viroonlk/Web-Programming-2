<?php
require_once("./connect.php");

if (isset($_POST["username"]) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['last_name'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    register($conn, $username, $password, $first_name, $last_name);
}

if (isset($_POST['logout'])) {
    logout();
}
$user = isLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>

<body>
    <?php if (!$user) { ?>
        <form action="" method="post">
            <fieldset>
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="text" name="password" required>
                </div>
                <div>
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" required>
                </div>
                <div>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" required>
                </div>
                <div>
                    <button type="submit">Register</button>
                </div>
            </fieldset>
        </form>
    <?php } else { ?>
        <?php echo "You are logged in as $user[username]" ?>
        <form action="" method="post">
            <fieldset>
                <div>
                    <input type="submit" name="logout" value="Logout">
                </div>
            </fieldset>
        </form>
    <?php } ?>
</body>

</html>
