<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <link rel="stylesheet" type="text/css" href="../public/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a mi Página Web</h1>
    </header>
    <div class="login-container">
	<h2>Login</h2>
	<form action="login.php" method="post">
		<label for="username">User:</label>
		<input type="text" id="username" name="username" required>
		<br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<br><br>
		<button type="submit">Login</button>
		<br><br>
	</form>
	</div>
	<a href="new_user.php">
		<button>Crear Usuario</button>
	</a>
</body>
</html>
