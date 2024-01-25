$(document).ready(function () {
    llenarTabla();
});

function llenarTabla() {
    $.ajax({
        url: "inc/obtenerdata.php"
    })
            .done(function (msg) {
                //console.log(msg)
                $("#table").bootstrapTable("load", msg.datos);

            })
            .fail(function (msg) {
                alert("Hubo un problema");
            });
}