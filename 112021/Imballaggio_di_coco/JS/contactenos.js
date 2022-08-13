"use strict";
$(document).ready(function () {
  /**
   * vector de todas las filas de la db
   */
  $("#btnEditarDB").hide();
  var registros = [];
  var id;
  /*** CRUD -> CREATE: GUARDAR INFO ***/
  $(document).on("click", "#btnGuardar", function () {
    let nombre_completo = $("#nombre_completo").val();
    let correo_electronico = $("#correo_electronico").val();
    let fecha_nacimiento = $("#fecha_nacimiento").val();
    let password = $("#password").val();
    //creamos un objeto tipo json clave-valor=>
    let usuarios = {
      nombre_completo: nombre_completo,
      correo_electronico: correo_electronico,
      fecha_nacimiento: fecha_nacimiento,
      password: password,
    };
    $.ajax({
      type: "POST",
      url: "crud/create.php",
      data: usuarios,
    })
      .done(function (res) {
        //res es la respuesta que se tiene del crud
        Swal.fire({
          icon: "success",
          title: "DATOS GUARDADOS",
          text: "Los datos se guardaron de forma correcta!",
        });
        //Limpiamos los campos
        $("#nombre_completo").val("");
        $("#correo_electronico").val("");
        $("#fecha_nacimiento").val("");
        $("#password").val("");
        select(); //Actualizamos la tabla
      })
      .fail(function (res) {
        Swal.fire({
          icon: "error",
          title: "DATOS NO GUARDADOS",
          text: "Los datos no se pudieron guardar!!!",
        });
      });
  });

  //**** CRUD -> READ => SELECT: MOSTRAR INFORMACION *****/
  function select() {
    $("#tBodyUsuarios").html(""); //limpiamos la tabla
    $.ajax({
      url: "crud_usuarios/selectAll.php",
    })
      .done(function (res) {
        //Si el selectAll funciona, debe mostrar toda la info de la db
        //toma la respuesta del php y la convierte a un objeto tipo JSON
        /**
         * Guarda toda la informacion de la db
         */
        var json = JSON.parse(res); //toda la info de la db en filas
        //debemos recorrer la matriz de la db, buscando mostrar todas las filas
        registros = json;
        //para recorrer matriz usamos ciclos
        //console.log(json);
        for (let i = 0; i < json.length; i++) {
          $("#tBodyUsuarios").append(
            //json[0] tiene toda la info de la 1ra fila
            `<tr>
            <td>${json[i].id}</td>
            <td>${json[i].nombre_completo}</td>
            <td>${json[i].correo_electronico}</td>
            <td>${json[i].fecha_nacimiento}</td>
            <td>${json[i].password}</td>
            <td>
              <button type="button" class="btn btn-info" id="btnEditar" data-row="${i}" data-id="${json[i].id}">EDITAR</button>
            </td>
            <td>
              <button type="button" class="btn btn-danger" id="btnEliminar" data-id="${json[i].id}">ELIMINAR</button>
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

  //**** CRUD -> DELETE => ELIMINAR INFORMACION *****/
  //UNA FUNCION QUE CUANDO SE DE CLICK EN ELIMINAR MUESTRE UN ALERT
  $(document).on("click", "#btnEliminar", function () {
    //Swal.fire("Any fool can use a computer");
    //data-id es la pk de la db
    let id = $(this).data("id"); //el btn seleccionado lee el data-id
    let usuarios = {
      id: id,
    };
    Swal.fire({
      title: "Estas Seguro de Eliminar?",
      text: "No podras revertir esta accion!",
      icon: "warning",
      showCancelButton: true,
      cancelButtonText: "Cancelar",
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminalo!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "POST",
          url: "crud_usuarios/delete.php",
          data: usuarios, //json persona con id
        })
          .done(function (res) {
            //res es la respuesta que se tiene del crud
            Swal.fire({
              icon: "success",
              title: "DATOS ELIMINADOS",
              text: "Los datos se eliminaron de forma correcta!",
            });
            select(); //Actualizamos la tabla
          })
          .fail(function (res) {
            Swal.fire({
              icon: "error",
              title: "DATOS NO ELIMINADOS",
              text: "Los datos no se pudieron eliminar!!!",
            });
          });
      }
    });
  });

  //**** CRUD -> EDIT => ACTUALIZAR LA INFORMACION FORMULARIO *****/
  $(document).on("click", "#btnEditar", function () {
    $("#btnEditarDB").show();
    //Swal.fire("Any fool can use a computer");
    let fila = $(this).data("row");
    //console.log(fila);//muestra fila que se dio click de la tabla
    id = registros[fila].id; //en la fila en la que estoy necesito el id
    //console.log(id);
    /*busca en el vector de registros(que viene del json en la
      funcion select), los atributos que correspondan al id de la
      fila*/
    $("#nombre_completo").val(registros[fila].nombre_completo);
    $("#correo_electronico").val(registros[fila].correo_electronico);
    $("#fecha_nacimiento").val(registros[fila].fecha_nacimiento);
    $("#password").val(registros[fila].password);
  });

  //**** CRUD -> EDIT => ACTUALIZAR LA INFORMACION DB *****/
  $(document).on("click", "#btnEditarDB", function () {
    //Swal.fire("Any fool can use a computer");
    let nombre_completo = $("#nombre_completo").val();
    let correo_electronico = $("#correo_electronico").val();
    let fecha_nacimiento = $("#fecha_nacimiento").val();
    let password = $("#password").val();
    //creamos un objeto tipo json clave-valor=>
    console.log(nombre_completo);
    let usuarios = {
      id: id,
      nombre_completo: nombre_completo,
      correo_electronico: correo_electronico,
      fecha_nacimiento: fecha_nacimiento,
      password: password,
      
    };
    console.log(password);
    $.ajax({
      type: "POST",
      url: "crud_usuarios/edit.php",
      data: usuarios,
    })
      .done(function (res) {
        //res es la respuesta que se tiene del crud
        Swal.fire({
          icon: "success",
          title: "DATOS EDITADOS",
          text: "Los datos se editaron de forma correcta!",
        });
        //Limpiamos los campos
        $("#nombre_completo").val("");
        $("#correo_electronico").val("");
        $("#fecha_nacimiento").val("");
        $("#password").val("");
        $("#btnEditarDB").hide();
        select(); //Actualizamos la tabla
      })
      .fail(function (res) {
        Swal.fire({
          icon: "error",
          title: "DATOS NO SE EDITARON",
          text: "Los datos no se pudieron editar!!!",
        });
      });
  });
});
