<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Login</title>
</head>

<body>
<?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destruir la sesión.
session_destroy();
?>
	<form action="validar.php" method="post">
		<h2> IV Concurso de Matemáticas IB</h2>
		<input type="text" placeholder="&#128272; Usuario ó Email" name="mail">
		<input type="password" placeholder="&#128272; Contraseña" name="pass">
		<input  type="submit" value="Ingresar">
	</form>
	
</body>
</html>
