function getEjemplar(id) {
    var ejemplar_id = $("#" + id).val();
    $.ajax({
        url: '/alquiler/getEjemplares/' + ejemplar_id,
        data: 'ejemplar_id =' + ejemplar_id,
        success: function(respuesta) {
            // $("#titulo").val(respuesta.titulo);
            // $("#productora").val(respuesta.productora);
            // $("#id").val(respuesta.id);
            // $("#director").val(respuesta.director);
            $.each(response, function(i, member) {
                for (var i in member) {
                    console.log(member);
                    $('#table_ejemplares').append("<tr><td>" + member + "</td><td>" + member + "</td><td>" + member + "</td><td>" + member + "</td></tr>");
                }
            });
        },
        error: function() {
            console.log("No se ha podido obtener la información");
        }
    });
}

$('#pelicula_id').on('change', function() {
    getEjemplar(id);
});

// $('#usuario_id').on('change', function() {
//     encontrarAgendas();
// });


// $(function() {

//     $('#admisiones').DataTable({
//         'language': {
//             'url': '//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
//         },
//         "scrollX": true
//     });

//     //setear fecha por defecto la actual
//     var now = new Date();
//     var day = ("0" + now.getDate()).slice(-2);
//     var month = ("0" + (now.getMonth() + 1)).slice(-2);
//     var today = now.getFullYear() + "-" + (month) + "-" + (day);

//     $('#fecha').val(today);
//     cantidadConsultorios();
//     getSedes();

// });