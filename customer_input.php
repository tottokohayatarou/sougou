<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<table>
	<form method="post" action="customer_output.php">
	<tr>
	<td>お名前：</td>
	<th><input type="text" name="name"></th>
	</tr>
	<tr>
	<td>住所：</td>
	<th><input type="text" name="address"></th>
	</tr>
	<tr>
	<td>ユーザー名：</td>
	<th><input type="text" name="login"></th>
	</tr>
	<tr>
	<td>パスワード：</td>
	<th><input type="text" name="password"></th>
	</tr>
	<tr>
	<th><input type="submit" value="登録"></th>
	</tr>
	</table>
	<th></th>

	</form>
	

	</body>

</html>