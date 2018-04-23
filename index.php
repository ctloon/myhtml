<!DOCTYPE html>
<head>
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			text-align: center;
			background: url("https://zavrel.net/background.jpg");
			color: white;
			font-family: helvetica;
			background-position: center;
		}
		img {
			width: 200px;
			border-radius: 100px;
			-webkit-border-radius: 100px;
			-moz-border-radius: 100px;
		}
		p {
			font-size: 22px;
		}
		input {
			border: 0;
			padding: 10px;
			font-size: 18px;
		}
		input[type="submit"] {
			background: red;
			color: white;
		}
	</style>
	
</head>
<body>
	<img src="https://zavrel.net/me.jpg" alt="">
	<h1>Jan Zera</h1>
	<p>Hi, I am learning HTML </p>
	<form action="https://formspree.io/your@email.com"
		method="POST">
		<input type="email" placeholder="your email" name="_replyto>

		<input type="submit" value="Send">
	</form>
</body>