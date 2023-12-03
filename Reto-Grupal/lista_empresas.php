<?php require("views/header_prof.php"); ?>

<section id="empresa">
    <div class="color">
        <h1>Lista de empresas</h1>
   

        <table>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Responsable de empresa</th>
                <th>Observaciones o incidencias<th>
                

            </tr>

            <tr>
                <td><a href="#">NTTDATA</a></td>
                <td>999888777</td>
                <td>correo@gmail.com</td>
                <td>Juan Alejandro Tellez Rubio</td>
                <td>Destacan en practicas Java<td>
               
                
            </tr>
            <tr>
                <td><a href="DatosEmpresaEj.php">Accenture</a></td>
                <td>111222333</td>
                <td>correo@gmail.com</td>
                <td>Maria Rosa Fernandez</td>
                <td>De la mas grandes y duras<td>
                
            </tr>
            <tr>
                <td><a href="#">Yo pongo el hielo</a></td>
                <td>444555666</td>
                <td>correo@gmail.com</td>
                <td>Manuel Antonio Carreño</td>
                <td>Es mas de lo que parece<td>
                
            </tr>
            </table>

            <button type="button" id="anadirEmpresa">Añadir empresa</button>
    </div>
</section>
<?php require("views/footer.php"); ?>