<?php
$akun = [["username"=>"yudhan", "password"=>"jeffri"]];
if (isset($_POST["username"])) {
	$cekemail = FALSE;
	foreach ($akun as $account) {
	    if ($account["username"] == $_POST["username"]) {
	        if ($account['password'] == $_POST['password']) {
	            echo 'Login berhasil!<br><br>';
	        } else {
	            echo 'Password salah<br><br>';
	        }
	        $cekemail = TRUE;
	        break;
	    }
	}
	if ($cekemail === FALSE) {
	    echo 'Username salah<br><br>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
	<label>Login</label>
	<form method="POST" action="">
		<p>Nama : <input type="text" name="username"></p>
		<p>Password : <input type="password" name="password"></p>
		<p><input type="submit" value="Login" name="submit"></p>
	</form>
</body>
</html>
