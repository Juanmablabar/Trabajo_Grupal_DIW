<?php require("views/header.php"); ?>


<div class="foto">
        <div class="imagen">
            <img src="static/img/Centro2.png" alt="">
        </div>

        <div class="container">
        <h2>Datos Profesor</h2>
        <form action="procesar_formulario.php" method="post">
        
            
            <div class="form-group">
                <p> Nombre : Francisco </p>
            </div>

            <div class="form-group">
                <p> Apellidos : Romero Guillén</p>
            </div>

            <div class="form-group">
                <p> Contraseña de Acceso : ********** </p>
            </div>

            <div class="form-group">
                <p> Correo : CorreoProfesor@correo.com </p>
            </div>
        </form>
    </div>
</div>

<?php require("views/footer.php"); ?>