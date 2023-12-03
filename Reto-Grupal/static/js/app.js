document.addEventListener("DOMContentLoaded", function() {
var anadirAlumno = document.getElementById("anadirAlumno");
anadirAlumno.addEventListener("click", function(){
    window.location.href="DatosAlumno.php";
})});

document.addEventListener("DOMContentLoaded", function() {
var anadirEmpresa = document.getElementById("anadirEmpresa");
anadirEmpresa.addEventListener("click", function(){
    window.location.href="DatosEmpresa.php";
})});


var botonEdit = document.getElementById('anadir');
var dialogoModal = document.getElementById('editActivityForm');
var botonGuardar = document.getElementById('saveActivityChanges');

function openDialog(){
    dialogoModal.showModal();
}

botonEdit.addEventListener('click', openDialog)

botonGuardar.addEventListener('click', function(){
    dialogoModal.close();
});