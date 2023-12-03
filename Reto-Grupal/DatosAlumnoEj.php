<?php require("views/header_prof.php"); ?>

    <div class="foto">
        <div class="imagen">
            <img src="static/img/Centro2.png" alt="">
        </div>

    <div class="container">
        <h2>Datos del Alumno</h2>
        <form action="procesar_formulario.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="Juan Manuel" required>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="Blanco Barea" required>
            </div>

            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" value="*******" required>
            </div>

            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" id="dni" name="dni" value="72391241J"required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha Nacimiento:</label>
                <input type="date" id="fecha" name="fecha" value="1996-11-22" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="Correo@gmail.com" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" value="645231154" required>
            </div>

            <div class="form-group">
                <label for="empresa">Empresa:</label>
                <input type="text" id="empresa" name="empresa" value="NTT Data" required>
            </div>

            <div class="form-group">
                <label for="profesor">Profesor Asignado:</label>
                <input type="text" id="profesor" name="profesor" value="Francisco" required>
            </div>

            <div class="form-group">
                <label for="horas">Numero Horas:</label>
                <input type="number" id="horas" name="horas" value="325" required>
            </div>

            <div class="form-group">
                <label for="observaciones">Observaciones:</label>
                <textarea id="observaciones" name="observaciones" rows="4"></textarea>
            </div>

            <div class="center-button">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </div>
    </div>







<?php require("views/footer.php"); ?>