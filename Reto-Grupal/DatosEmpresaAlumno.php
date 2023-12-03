<?php require("views/header.php"); ?>

<div class="foto">
        <div class="imagen">
            <img src="static/img/Centro2.png" alt="">
        </div>

    <div class="container">
        <h2>Datos Empresa</h2>
        <form action="procesar_formulario.php" method="post">
            <div class="form-group">
                <p>Nombre de la empresa: Accenture</p>
            </div>

            <div class="form-group">
                <p>Teléfono: 952315312</p>
            </div>

            <div class="form-group">
                <p>Email: AccentureInfo@accenture.com</p>
            </div>

            <div class="form-group">
                <p>Responsable de empresa: Beatriz Gil González</p>
            </div>


        </form>
    </div>
</div>

<?php require("views/footer.php"); ?>