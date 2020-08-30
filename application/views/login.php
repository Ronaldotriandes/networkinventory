<!DOCTYPE html>
<html >
<!--
	MAHASISWA KERJA PRAKTEK 
	TELKOM UNIVERSITY 
	TEKNIK INFORMATIKA
	--------------------
	RONALDO TRIANDES (ronaldotriandes@gmail.com)
	MULIA HANIF (muliahanif10@gmail.com)

-->
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
<style type="text/css">
	* {
box-sizing: border-box;
}

*:focus {
	outline: none;
}
body {
font-family: Arial;
background-color: #023E66;
padding:10px;
}
.login {
margin: 20px auto;
width: 500px;
}
.login-screen {
background-color: #08D945;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #00000;
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #D7DD3A;
  color: #00000;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #134AB1;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
	margin-top: 12px;
}
</style>

  
</head>

<body>
  <body>
  	<center><img src="application/logodiskominfojabar.png" width="200" height="200" /></center>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>LOGIN</h1>
			</div>
			

			<div class="login-form">
				<div class="control-group">
				<form method="post" action="<?=site_url('login/ceklogin');?>">
					<input type="text" class="login-field" name="ussername" placeholder="username">
					<label class="login-field-icon fui-user" for="login-name"></label>
					</div>
					<div class="control-group">
					<input type="password" class="login-field" name="password" placeholder="password">
					<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>
					<input type="submit" class="btn btn-primary btn-large btn-block" value="LOGIN">
				</form>
			</div>
		</div>
	</div>
</body>
  
  
</body>
</html>
