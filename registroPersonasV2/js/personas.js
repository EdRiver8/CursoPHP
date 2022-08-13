"use strict";

$(document).ready(function(){

   $('#btnEditar').hide();

    $(document).on('click','#btnGuardar', function(e){
        var cedula = $('#cedula').val();
        var nombres = $('#nombres').val();
        var apellidos = $('#apellidos').val();

        //los datos que se van a pasar por medio de ajax al servicio create
        var persona = {
            'cedula': cedula,
            'nombres': nombres,
            'apellidos': apellidos
        }
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
            type:'POST', //el metodo en que se envia la input
            url: 'services/create.php',//el lugar donde esta el servicio a consumir
            data: persona, //la informacion que se va a enviar
        })
        .done(function(result){//result, es lo que retorna el servicio a consumir, create.php
            Swal.fire({ 
                icon: 'success',
                title: 'DATOS GUARDADOS',
                text: 'La informacion se almaceno en la DB'
              });
            //borrar datos del formulario
            $('#cedula').val('');
            $('#nombres').val('');
            $('#apellidos').val('');
            //actualiza la tabla con la informacion
            select();
        })
        .fail(function(result){
            Swal.fire({
                icon: 'error',
                title: 'DATOS NO GUARDADOS',
                text: 'La informacion no se pudo almacenar en la DB'
              })
        })
    })

    function select(){
        //limpia toda la info que existe en la tabla
        $('#tBody').html('');
        $.ajax({
            //se le envian los sgtes parametros
            type:'POST', //el metodo en que se envia la input
            url: 'services/selectAll.php',//el lugar donde esta el servicio a consumir
        })
        .done(function(result){//result, retorna lo de selectAll.php, toda la info de la db
            //muestra toda la info por consola
            //console.log(result);
            
            var json = JSON.parse(result);
            //recorrer toda la informacion de los JSON
            for (let i = 0; i < json.length; i++) {
                $('#tBody').append('<tr><td>' + json[i].id + '</td></td>' + 
                '<td>' + json[i].cedula + '</td>' +
                '<td>' + json[i].nombres + '</td>' +
                '<td>' + json[i].apellidos + '</td>' +
                '<td><button type="button" class="btnEditar btn btn-info btn-sm" data-id="'+json[i].id+'">EDITAR</button>'+
                '<button type="button" class="btnEliminar btn btn-danger btn-sm" data-id="'+json[i].id+'">ELIMINAR</button>' +
                '</td></tr>');         
            }
        })
        .fail(function(result){

        })
    }
    //llamado a la funcion select
    select();

    //eliminar informacion de la db
    $(document).on('click','.btnEliminar', function(e){
        let codigo = $(this).data('id');//lee el data-id del select
        var persona = {
            'id':id
        }
        $.ajax({
            //se le envian los sgtes parametros
            type:'POST', //el metodo en que se envia la input
            url: 'services/delete.php',//el lugar donde esta el servicio a consumir
            data: persona, //la informacion que se va a enviar
        })
        .done(function(result){//result, es lo que retorna el servicio a consumir, create.php
            Swal.fire({ 
                icon: 'success',
                title: 'DATOS ELIMINADOS',
                text: 'La informacion se elimino de la DB'
              });
            //borrar datos del formulario
            $('#cedula').val('');
            $('#nombres').val('');
            $('#apellidos').val('');
            //actualiza la tabla con la informacion
            select();
        })
        .fail(function(result){
            Swal.fire({
                icon: 'error',
                title: 'DATOS NO ELIMINADOS',
                text: 'La informacion no se pudo eliminar de la DB'
              })
        })
    })
})