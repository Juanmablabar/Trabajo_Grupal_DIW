<?php require("views/header.php"); ?>

<section class="studentProfile">
    <div class="actividades">
        <div>
            <h2>Lista de actividades</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Actividades</th>
                    <th>Observaciones</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>20/11/2023</td>
                    <td>Explicación teórica de Apache Maven</td>
                    <td>N/A</td>
                    <td><button class="button"><img src="static/img/small-pen.png" alt=""></button></td>
                    <td><button class="button"><img src="static/img/small-trash.png" alt=""></button></td>
                </tr>
                <tr>
                    <td>21/11/2023</td>
                    <td>Taller Práctico de Apache Maven</td>
                    <td>N/A</td>
                    <td><button class="button"><img src="static/img/small-pen.png" alt=""></button></td>
                    <td><button class="button"><img src="static/img/small-trash.png" alt=""></button></td>
                </tr>
                <tr>
                    <td>22/11/2023</td>
                    <td>Teoría y ejercicios de SLF4J y Logback</td>
                    <td>N/A</td>
                    <td><button class="button"><img src="static/img/small-pen.png" alt=""></button></td>
                    <td><button class="button"><img src="static/img/small-trash.png" alt=""></button></td>
                </tr>
                <tr>
                    <td>23/11/2023</td>
                    <td>Introducción a Spring Core y Spring Boot</td>
                    <td>N/A</td>
                    <td><button class="button"><img src="static/img/small-pen.png" alt=""></button></td>
                    <td><button class="button"><img src="static/img/small-trash.png" alt=""></button></td>
                </tr>
            </tbody>
        </table>
        <div id="anadir">
            <input type="button" value="Añadir">
        </div>
        <dialog id="editActivityForm">
            <form>
                <label for="nombre">Fecha:</label>
                <input type="text">
                <label for="descripcion">Actividad:</label>
                <input type="text">
                <label for="precio">Observaciones:</label>
                <input type="text">
                <input type="button" id="saveActivityChanges" value="Guardar Cambios">
            </form>
        </dialog>
    </div>
    <div class="horas">
        <div>
            <h3>Registro de horas en alternancia Dual:</h3>
            <ul>
                <li>
                    Horas realizadas: 0h.
                </li>
                <li>
                    Horas restantes: 350h.
                </li>
            </ul>
        </div>
        <div>
            <h3>Registro de horas en FCT:</h3>
            <ul>
                <li>Horas realizadas: 0h.</li>
                <li>Horas restantes: 350h.</li>
            </ul>
        </div>
    </div>
    <div class="empresa">
        <h4>Empresa: <a href="DatosEmpresaAlumno.php">Accenture</a></h4>
        <h4>Tutor: Francisco</h4>
    </div>
</section>

<?php require("views/footer.php"); ?>