<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/login.css" />
<title>Авторизируйтесь!</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<div id="header">
<h1>Авторизируйтесь!</h1>
</div>


<div id="login-container">

<form action="admin.php" method="post">

	<fieldset>
	<label for="user">Логин</label><input type="text" id="username" name="login" class="ui-corner-all"  />
	<label for="password">Пароль</label><input type="password" id="password" name="password"   class="ui-corner-all"/>
    <input type="submit" value="Войти" name="enter" id="button" />
	</fieldset>


</form>


</div>
<div align="center" class="error"></div>

<div id="bottom" align="center">Все попытки несанкционированного доступа к панели управления логируются, для безопастности ваш IP будет записан.</div>
</body>
</html>