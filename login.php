<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['user_email'] = $result['email'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header('Location: index.php');
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="basic.css" rel="stylesheet" title="Default Style">
</head>
<body>
	<form method="post" action="" name="signin-form">
	    <div class="form-element">
	        <label>Username</label>
	        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
	    </div>
	    <div class="form-element">
	        <label>Password</label>
	        <input type="password" name="password" required />
	    </div>
	    <button type="submit" name="login" value="login">Log In</button>
	</form>

</body>
</html>


