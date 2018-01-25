<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link href="mystyle1.css" type="text/css" rel="stylesheet">
    <title>用户登录界面</title>
</head>
<body  class="body-1">
        <form action="sign-message 2.php" method="post" autocomplete="on" class="elegant-aero" align="center">
			<h1>sign in</h1>
            <p><span style="letter-spacing: 1.3em">电子邮</span>箱：<label><input name="email" type="email" required/></label></p>
            <p><span style="letter-spacing: 1.3em">登录密</span>码：<label><input type="password" pattern="[A-Za-z0-9]{6,30}" name="password" oninvalid="validatelt(this,'密码长度至少为六位，且不能有中文')" required/></label></p>
			<p><span>没有账号？</span><a href="sign up.html">去注册?</a></p>
            <input type="submit" value="登录"/>
        </form>
</body>
</html>