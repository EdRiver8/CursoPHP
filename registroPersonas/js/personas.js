"use strict";

//funcion principal, siempre se ejecuta al cargar el nav
$(document).ready(function () {
  $("#btnEditar").hide();

  //VARIABLES GLOBALES
  var registros = [];
  var id;

  /*******************GUARDAR INFORMACION************************/
  $(document).on("click", "#btnGuardar", function (e) {
    var cedula = $("#cedula").val();
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();

    //los datos que se van a pasar por medio de ajax al servicio create
    var persona = {
      cedula: cedula,
      nombres: nombres,
      apellidos: apellidos,
    };
    //para usar ajax, se necesita la libreria jquery cdn
    /*
        $.ajax({
            //se le envian los sgtes parametros
            type:'POST', //el metodo en que se envia la input
            url: 'services/create.php',//el lugar donde esta el servicio a consumir
            data: persona, //la informacion que se va a enviar
            success:function(result){
                //data es la respuesta que vamos a obtener
                //usamos sweetalert2                
                if(result == 1){
                    //si la respuesta al guardar es positiva, haga
                    Swal.fire({ 
                        icon: 'success',
                        title: 'DATOS GUARDADOS',
                        text: 'La informacion se almaceno en la DB'
                      })
                }else if(result == 0){
                    //sino...
                    Swal.fire({
                        icon: 'error',
                        title: 'DATOS NO GUARDADOS',
                        text: 'La informacion no se pudo almacenar en la DB'
                      })
                }else {
                    Swal.fire({
                    icon: 'error',
                    title: 'Joder!!!',
                    text: 'La informacion no se pudo almacenar en la DB'
                  })
                }
                
            }
        })*/
    $.ajax({
      //se le envian los sgtes parametros
      type: "POST", //el metodo en que se envia la input
      url: "services/create.php", //el lugar donde esta el servicio a consumir
      data: persona, //la informacion que se va a enviar
    })
      .done(function (result) {
        //result, es lo que retorna el servicio a consumir, create.php
        Swal.fire({
          icon: "success",
          title: "DATOS GUARDADOS",
          text: "La informacion se almaceno en la DB",
        });
        //borrar datos del formulario
        $("#cedula").val("");
        $("#nombres").val("");
        $("#apellidos").val("");
        //actualiza la tabla con la informacion
        select();
      })
      .fail(function (result) {
        Swal.fire({
          icon: "error",
          title: "DATOS NO GUARDADOS",
          text: "La informacion no se pudo almacenar en la DB",
        });
      });
  });

  /*****************MOSTRAR INFORMACION **********************/
  function select() {
    //limpia toda la info que existe en la tabla
    $("#tBody").html("");
    $.ajax({
      //se le envian los sgtes parametros
      type: "POST", //el metodo en que se envia la input
      url: "services/selectAll.php", //el lugar donde esta el servicio a consumir
    })
      .done(function (result) {
        //result, retorna lo de selectAll.php, toda la info de la db
        //muestra toda la info por consola
        //console.log(result);

        var json = JSON.parse(result);
        //recorrer toda la informacion de los JSON
        registros = json; //registros va a almacenar todas las filas de datos de la db
        for (let i = 0; i < json.length; i++) {
          $("#tBody").append(
            "<tr><td>" +
              json[i].id +
              "</td></td>" +
              "<td>" +
              json[i].cedula +
              "</td>" +
              "<td>" +
              json[i].nombres +
              "</td>" +
              "<td>" +
              json[i].apellidos +
              "</td>" +
              '<td><button type="button" class="btnEditar btn btn-info btn-sm" data-flag = "' +
              i +
              '" data-id="' +
              json[i].id +
              '">EDITAR</button>' +
              '<button type="button" class="btnEliminar btn btn-danger btn-sm" data-id="' +
              json[i].id +
              '">ELIMINAR</button>' +
              "</td></tr>"
          );
        }
      })
      .fail(function (result) {
        Swal.fire({
          icon: "error",
          title: "NO SE CARGARON LOS DATOS",
          text: "La informacion no se pudo cargar de la DB",
        });
      });
  }
  //llamado a la funcion select todo el tiempo
  select();

  /***********************ELIMINAR INFORMACION DE LA DB******************/
  $(document).on("click", ".btnEliminar", function (e) {
    let id = $(this).data("id"); //lee el data-id del select para seleccionar el boton eliminar de opciones
    var persona = {
      id: id,
    };
    //se pregunta primero si realmente se quiere eliminar la info=>
    Swal.fire({
      title: "Realmente Deseas Eliminar?",
      text: "No podras recuperar la informacion eliminada!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si",
    }).then((result) => {
      //si se confirma la eliminacion de la info =>
      if (result.isConfirmed) {
        $.ajax({
          //se le envian los sgtes parametros
          type: "POST", //el metodo en que se envia la input
          url: "services/delete.php", //el lugar donde esta el servicio a consumir
          data: persona, //la informacion que se va a enviar
        })
          .done(function (result) {
            //result, es lo que retorna el servicio a consumir, create.php
            Swal.fire({
              icon: "success",
              title: "DATOS ELIMINADOS",
              text: "La informacion se elimino de la DB",
            });
            //actualiza la tabla con la informacion despues de eliminar
            select();
          })
          .fail(function (result) {
            Swal.fire({
              icon: "error",
              title: "DATOS NO ELIMINADOS",
              text: "La informacion no se pudo eliminar de la DB",
            });
          });
      }
    });
  });

  /*******************EDTITAR LA INFO DE LA DB*********************/
  $(document).on("click", ".btnEditar", function (e) {
    $("#btnGuardar").hide();
    $("#btnEditar").show();
    //console.log(registros);//ver que tiene el json del result en la funcion select
    var posicion = $(this).data("flag"); //info del registro en pos data-flag
    id = registros[posicion].id;
    $("#cedula").val(registros[posicion].cedula);
    $("#nombres").val(registros[posicion].nombres);
    $("#apellidos").val(registros[posicion].apellidos);
  });

  $(document).on("click", "#btnEditar", function (e) {
    var cedula = $("#cedula").val();
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();

    //los datos que se van a pasar por medio de ajax al servicio create
    var persona = {
      id: id,
      cedula: cedula,
      nombres: nombres,
      apellidos: apellidos,
    };
    $.ajax({
      //se le envian los sgtes parametros
      type: "POST", //el metodo en que se envia la input
      url: "services/edit.php", //el lugar donde esta el servicio a consumir
      data: persona, //la informacion que se va a enviar
    })
      .done(function (result) {
        //result, es lo que retorna el servicio a consumir, create.php
        Swal.fire({
          icon: "success",
          title: "DATOS EDITADOS",
          text: "La informacion se almaceno en la DB",
        });
        //borrar datos del formulario
        $("#cedula").val("");
        $("#nombres").val("");
        $("#apellidos").val("");
        $("#btnGuardar").show();
        $("#btnEditar").hide();
        //actualiza la tabla con la informacion
        select();
      })
      .fail(function (result) {
        Swal.fire({
          icon: "error",
          title: "DATOS NO GUARDADOS",
          text: "La informacion no se pudo almacenar en la DB",
        });
      });
  });
});
