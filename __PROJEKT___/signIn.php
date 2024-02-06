<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="signIn.css">
                
		<title>Programiranje web aplikacija</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Projektni zadatak">
		<meta name="author" content="Tin Navrboc">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>	
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Naslovna</a></li>
				<li><a href="Kupovina.php">Mobiteli</a></li>
            	<li><a href="maskice.php">Maskice</a></li>
            	<li><a href="kabeli_napajanja_adapteri.php">Adapteri i kabeli</a></li>
            	<li><a href="Zastita_za_zaslon.php">Zaštita za zaslon</a></li>
            	<li><a href="registration.php">Registracija</a></li>
            	<li><a href="signIn.php">Prijava</a></li>
			</ul>
		</nav>
        
	</header>

	<br> </br>

    <form id="registrationForm" action="signedIn.php" method="post">
        <label for="username">Username:</label>
		<br>
        <input type="text" id="username" name="username" required>
		<br><br>
        <label for="password">Password:</label>
		<br>
        <input type="password" id="password" name="password" required>
		<br><br>
        <input type="hidden" name="redirect_url" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

        <input type="submit" value="Sign in">
    </form>
	<br><br><br><br><br><br><br><br><br>
    <footer>
        Copyright &copy; 2024 Tin Navrboc.
        <a href="https://github.com/TinNavrboc" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>
</body>
</html>