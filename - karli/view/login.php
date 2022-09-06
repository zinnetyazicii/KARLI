<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo $url; ?>/css/login.css">
		
    <title>Login Form</title>

</head>

<body>
<div class="main-container">
<div class="container">
<div>
<form method="post" action="<?php echo $url.'/login'; ?>">

<img src="favicon.png" width="50" height="50"  />
<center><h1>KARLİ</h1></center>

<div class="input">
<input type="text" name="uname"  required="required" />
<label for="username">Kullanıcı Adı</label>
</div>

<div class="input">
<input type="password" name="pass"  required="required" />
<label for="username">Şifre</label>
</div>

<button type="submit" class="login-btn">Giriş</button>

</form>
</div>
</div>
</div>
</body>
</html>
