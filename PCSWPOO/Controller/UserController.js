"use strict";

$(document).ready(function () {
  $("#btnEditar").hide();

  function select() {
    //limpia toda la info que existe en la tabla
    $("#tBody").html("");
    $.ajax({
      //se le envian los sgtes parametros
      type: "POST", //el metodo en que se envia la input
      url: "Controller/UsersController.php", //el lugar donde esta el servicio a consumir
    })
      .done(function (result) {
        console.log(result);
        var json = JSON.parse(result);
        //recorrer toda la informacion de los JSON
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
              '<td><button type="button" class="btnEditar btn btn-info btn-sm" data-id="' +
              json[i].id +
              '">EDITAR</button>' +
              '<button type="button" class="btnEliminar btn btn-danger btn-sm" data-id="' +
              json[i].id +
              '">ELIMINAR</button>' +
              "</td></tr>"
          );
        }
      })
      .fail(function (result) {});
  }
  //llamado a la funcion select
  select();
});
