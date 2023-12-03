<?php require("views/header_prof.php"); ?>

<section id="profesor">
    <div class="color">
        <h1>Lista de alumnos</h1>
   

        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Curso</th>
                <th>Correo</th>
                <th>Empresa<th>
                <th></th>

            </tr>

            <tr>
                <td><a href="#">Juan Ramon</a></td>
                <td><a href="#">Rodrigez Segura</a></td>
                <td>2ºDAW</td>
                <td>correo@gmail.com</td>
                <td><a href="#">NTT DATA</a><td>
                <td><button type="button"><img src="static/img/papelera.png" alt="" width="20"></button></td>
                
            </tr>
            <tr>
                <td><a href="#">Ignacio</a></td>
                <td><a href="#">Perez Valles</a></td>
                <td>2ºDAW</td>
                <td>correo@gmail.com</td>
                <td><a href="DatosEmpresaEj.php">Accenture</a><td>
                <td><button type="button"><img src="static/img/papelera.png" alt="" width="20"></td>
            </tr>
            <tr>
                <td><a href="DatosAlumnoEj.php">Juan Manuel</a></td>
                <td><a href="DatosAlumnoEj.php">Blanco Barea</a></td>
                <td>2ºDAW</td>
                <td>correo@gmail.com</td>
                <td>NTT DATA<td>
                <td><button type="button"><img src="static/img/papelera.png" alt="" width="20"></td>
            </tr>
            </table>

            <button type="button" id="anadirAlumno">Añadir alumno</button>
    </div>
</section>
<?php require("views/footer.php"); ?>