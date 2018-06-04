<!DOCTYPE html>
<html>
	<head>
		<title>Kenyang.com</title>
		<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption{
				display: block;}
			body {
				color: #666666;
				background-color: #C1C57B;
				background-position: center;
				background-image: url("images/background.jpg");
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 160px;
				background-image: url(images/background.jpg);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #aeaca8;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			
			figure {
				float: left;
				width: 600px;
				height: 220px;
				border: 1px solid #eeeeee;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2 {
				font-size:20px;}
			h3 {
				font-size:18px;
				text-align:center;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<section class="courses">
				<article>
					<figure>
						<form action="proses_login.php" method="post">	
						<center><h2> Login Admin Kenyang.com</h2></center>
						<br><br>
						<center>Masukkan <b>Username </b> dan <b> Password</b> anda</center>
						<center>
						<table>
							<tr width="50px">
								<td>Username</td>
								<td>
								<input type="text" name="user">
								</td>					
							</tr>	
							
							<tr>
								<td>Password</td>
								<td><input type="password" name="pass"></td>					
							</tr>
							<td colspan=4 align="center"><input type = "submit" name ="Login" value="login"></td>
						</table>
						</center>
					</form>
					</figure>
					</article>    
			</section>
			<aside>
				<section class="contact-details">
					<h2>Kontak</h2>
					<p>Mujahid<br />
						1517051165 <br>
					<p>Nurhaida<br />
						1517051129 <br>
					<p>Mega Deviana<br />
						1517051134 <br>
					<p>Dian Riskiyana S<br />
						1517051139
				</section>
			</aside>
			<footer>
				&copy; Mujahid, Nurhaida, Mega Deviana, Dian Riskiyana S
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
