<?php
/*
        1ro el levantamiento de requisitos => historias de usuario, entrevistas
            diseño uml => tablas para salvar la info
        2do Mockup, como se puede ver la interface con la que va actuar el usuario
        3ro codificar => Frontend (html, css, js), Backend(repositorio - bd)
        4to pruebas => se ejecutan test al desarrollo
        5to despliegue => hosting, habilitar y permiter que el usuario la manipule
    */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <section id="contenido">
    <h1 class = 'text-center'>PERSONAS</h1>
    <form action="personas.php" method="post">
      <div class="mb-3">
        <label class="form-label">CEDULA</label>
        <input type="text" class="form-control" name="cedula" require>
      </div>
      <div class="mb-3">
        <label class="form-label">NOMBRES</label>
        <input type="text" class="form-control" name="nombres" require>
      </div>
      <div class="mb-3">
        <label class="form-label">APELLIDOS</label>
        <input type="text" class="form-control" name="apellidos" require>
      </div>
      <button type="submit" class="btn btn-success" name="btnGuardar">GUARDAR</button>
    </form>
  </section>

  <?php
    if(isset($_POST['btnGuardar'])){
      include "../config/db.php";
      include "../crud/selectOne.php";
    }
  ?>

</body>

</html>