$(document).ready(function () { 
  //vector de todas las fiñas de la db
  $("#btnEditarDB").hide();//ocultamos el boton de editar
  var registros = [];//guarda todas las filas, vector de filas
  var id;
  /*** CRUD -> CREATE: GUARDAR INFO ***/
  $(document).on("click", "#btnGuardar", function () {
    let cedula = $("#cedula").val();
    let nombres = $("#nombres").val();
    let apellidos = $("#apellidos").val();
    //creamos un objeto tipo json clave-valor=>
    let persona = {
      cedula: cedula,
      nombres: nombres,
      apellidos: apellidos,
    };

    $.ajax({
      type: "POST",
      url: "../crud/create.php",
      data: persona,
    })
      .done(function (res) {
        //res es la respuesta que se tiene del crud(php)
        Swal.fire({
          icon: "success",
          title: "DATOS GUARDADOS",
          text: "Los datos se guardaron de forma correcta!",
        });
        /**para que los objetos queden nulo */
        $("#cedula").val("");
        $("#nombres").val("");
        $("#apellidos").val("");
        select();//actualizamos tabla
      })
      .fail(function (res) {
        Swal.fire({
          icon: "error",
          title: "DATOS NO GUARDADOS",
          text: "Los datos no se pudieron guardar!!!",
        });
      });
  });

  //**** CRUD -> SELECT: MOSTRAR INFORMACION *****/
   function select(){
     $("#tBodyPersonas").html("");//limpiamos la tabla
     $.ajax({//*ajax no necesita recargar la pagina para mostrar la informacion
      url: "../crud/selectAll.php",
    })
      .done(function (res) {
        //si el selectAll funciona,debe mostrar toda la info de la db
        //toma la resdpuesta del php y la convierte a un objeto 
        var json = JSON.parse(res);//toda la info de la db. parse convierte el res a un objeto tipo json
        //debemos recorrer la matriz de la db, busacando mostrar todas las filas
        registros = json;
        //para recorrer matriz usamos ciclos
        //console.log(json);
        for(let i = 0; i < json.length; i++){
          $("#tBodyPersonas").append(
            //json[0] tiene toda la info de la 1ra fila            
           `<tr>
            <td>${json[i].id}</td>
            <td>${json[i].cedula}</td>
            <td>${json[i].nombres}</td>
            <td>${json[i].apellidos}</td>
            <td>
              <button type="button" class="btn btn-info" id="btnEditar" data-row="${i}" data-id="${json[i].id}">EDITAR</button>
            </td>
            <td>
              <button type="button" class="btn btn-danger" id="btnEliminar"  data-id="${json[i].id}">ELIMINAR</button>
            </td>
          </tr>` 
          );
        }
      })
      .fail(function (res) {
        //sino funciona debe generar un error
        Swal.fire({
          icon: "error",
          title: "NO SE CARGARON LOS DATOS",
          text: "Los datos de la DB no se hallaron!!!",
        });
        });
   }

   //llamamos la funcion
   select();

   //jquery se usa con $()
   //** CRUD -> Delete => Eliminar informacion */
   //uana funcion que cuando se de click en eliminar muestre un alert
   $(document).on("click", "#btnEliminar", function(){
     //swal.fire("Any fool can use a computer")
     //data-id es la fk de la db
     let id = $(this).data("id");//con la palabara this se hace referencia al boton btnEliminar, el btn lee el id
     var persona = {
       id : id,
     };
     Swal.fire({
      title: 'Esta Seguro de Eliminar',
      text: "No podras revertir esta accion!!",
      icon: 'warning',
      showCancelButton: true,
      cancelButtonText:"cancelar",
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "POST",
          url: "../crud/delete.php",
          data: persona,//json personas con id
        })
          .done(function (res) {
            //res es la respuesta que se tiene del crud(php)
            Swal.fire({
              icon: "success",
              title: "DATOS ELIMINADOS",
              text: "Los datos se eliminaron de forma correcta!",
            });
            select();//actualizamos tabla
          })
          .fail(function (res) {
            Swal.fire({
              icon: "error",
              title: "DATOS NO ELIMINADOS",
              text: "Los datos no se pudieron eliminar!!!",
            });
          });
      }
    })
   });


   //*** CRUD -> EDIT => ACTUALIZAR LA INFORMACION  DEL FORMULARIO***/
   $(document).on("click","#btnEditar", function(){ 
    $("#btnEditarDB").show();//para que aparezca el editar
    $("#btnGuardar").hide();
    //Swal.fire('Any fool can use a computer');
    let fila = $(this).data("row");//encontramos la fila
    id = registros[fila].id;//obtenemos el id que queremos editar
    $("#cedula").val(registros[fila].cedula);//[fila] seleccion donde le de click en el boton 
    $("#nombres").val(registros[fila].nombres);
    $("#apellidos").val(registros[fila].apellidos);
   })


   //*** CRUD -> EDIT => ACTUALIZAR LA INFORMACION  DE LA DB***/
   $(document).on("click", "#btnEditarDB", function () {
     //swal.fire("Actualizar");
    let cedula = $("#cedula").val();
    let nombres = $("#nombres").val();
    let apellidos = $("#apellidos").val();
    //creamos un objeto tipo json clave-valor=>
    let persona = {
      id: id,
      cedula: cedula,
      nombres: nombres,
      apellidos: apellidos,
    };

    $.ajax({
      type: "POST",
      url: "../crud/edit.php",
      data: persona,
    })
      .done(function (res) {
        //res es la respuesta que se tiene del crud(php)
        Swal.fire({
          icon: "success",
          title: "DATOS EDITADOS",
          text: "Los datos se editaron de forma correcta!",
        });
        /**para que los objetos queden nulo */
        $("#cedula").val("");
        $("#nombres").val("");
        $("#apellidos").val("");
        $("#btnEditarDB").hide();
        $("#btnGuardar").show();
        select();//actualizamos tabla
      })
      .fail(function (res) {
        Swal.fire({
          icon: "error",
          title: "DATOS NO EDITAODS",
          text: "Los datos no se pudieron editar!!!",
        });
      });
   });
});
