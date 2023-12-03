<?php require("views/header_prof.php"); ?>

<div class="foto">
        <div class="imagen">
            <img src="static/img/Centro2.png" alt="">
        </div>

    <div class="container">
        <h2>Datos Empresa</h2>
        <form action="procesar_formulario.php" method="post">
            <div class="form-group">
                <label for="nombre_empresa">Nombre de la empresa:</label>
                <input type="text" id="nombre_empresa" name="nombre_empresa" required>
            </div>

            <div class="form-group">
                <label for="telefono_empresa">Teléfono:</label>
                <input type="tel" id="telefono_empresa" name="telefono_empresa" required>
            </div>

            <div class="form-group">
                <label for="email_empresa">Email:</label>
                <input type="email" id="email_empresa" name="email_empresa" required>
            </div>

            <div class="form-group">
                <label for="responsable_empresa">Responsable de empresa:</label>
                <input type="text" id="responsable_empresa" name="responsable_empresa" required>
            </div>

            <div class="form-group">
                <label for="observaciones_empresa">Observaciones o incidencias:</label>
                <textarea id="observaciones_empresa" name="observaciones_empresa" rows="4" required></textarea>
            </div>

            <div class="center-button">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </div>
</div>

<?php require("views/footer.php"); ?>