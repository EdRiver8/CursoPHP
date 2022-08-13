// ************** USO FETCH CON ENVIO DE DATOS A PHP ********************
//traemos todo lo que tenga el formulario y lo guardamos en una variable
var formulario = document.getElementById("formulario");
var response = document.getElementById("response");

formulario.addEventListener("submit", function (e) {
  //evita que se procese el formulario por el navegador (metodo get, muestra datos en la url) por el uso del 'submit'
  e.preventDefault();
  //sino se pone la linea anterior, se envian datos y no se ejecuta las lineas sgtes
  console.log("Me diste click!");

  //procesamos toda la informacion del formulario
  //formdata = conjunto de key/value para el formulario, donde el key viene del atributo name y value, lo que tenga el input
  var data = new FormData(formulario);
  console.log(data); //muestra todo el objeto 'data'
  console.log(data.get("user")); //muestra el valor de la clave 'user' dentro de 'data'
  console.log(data.get("passw"));

  fetch("post.php", {
    method: "POST",
    body: data, //cuerpo del msj a enviar al php
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data); //data que envia la respuesta del php
      if (data == "error") {
        response.innerHTML = `
        <div class="alert alert-danger" role="alert">
            Llena todos los campos
        </div>
        `;
      } else {
        response.innerHTML = `
        <div class="alert alert-primary" role="alert">
            ${data}
        </div>
        `;
      }
    });
});
