
<?php 
session_start();

// Verifica si el formulario de inicio de sesión fue enviado
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Verifica las credenciales
    if ($username==="profesor@cesurformacion.com" && $password==="1234") {
        // Si las credenciales son válidas, crea una sesión
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;

        // Redirige a la página principal de profesores
        header('Location: lista_alumnos.php');
        exit();
    } else if ($username==="alumno@cesurformacion.com" && $password==="5678"){
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;

        //Redirige a la página principal de alumnos
        header('Location: actividades.php');
        exit();
    } else{

        // Error en caso de que las credenciales no sean correctas
        $error_message = 'Credenciales incorrectas. Intenta nuevamente.';
    }
}

require("views/header_login.php"); ?>

<section class="signup">
        <form action="" method="post">
            <fieldset>
                <legend>Inicia sesión</legend>
                <?php if (isset($error_message)) : ?>
                    <p class="error"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <p>Nombre de usuario: <input type="text" name="user" required></p>
                <p>Contraseña: <input type="password" name="pass" required></p>
                <p id="signup"><input type="submit" value="Iniciar sesión" name="login"></p>
            </fieldset>
        </form>
</section>


<?php require("views/footer.php"); ?>