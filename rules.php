<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <title>Aquart Synchro</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

  <?php require 'components/navegation.php' ?>

  <!--<h3>Terminologia</h3>-->

  <!--<h3>Movimientos acrobaticos</h3>-->

<div class="translate-y-20">

<div class="m-0  bg-[#00FFFF] md:grid grid-cols-4" >
<h2 class="col-start-1 col-end-5">Clasificacion</h2>

<h3 class="col-start-1 col-end-5">Grupos y subgrupos</h3>

<div class="text-center">

  <h4>Grupo A (Volando)</h4>
  <p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aperiam
  doloremque libero optio officiis provident voluptas excepturi dolore
  corrupti totam odit, expedita ipsum ad ea nemo eos, laborum quae officia.
  </p>
  <h5 class="m-0">Saltos</h5>
  <h5 class="m-0">Lanzamiento</h5>

</div>
<div class="text-center">

<h4>Grupo B (Equilibrio)</h4>
<p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aperiam
  doloremque libero optio officiis provident voluptas excepturi dolore
  corrupti totam odit, expedita ipsum ad ea nemo eos, laborum quae officia.
</p>
<h5 class="m-0">Apilado</h5>
<h5 class="m-0">Levantamiento</h5>
</div>

<div class="text-center">
<h4>Grupo C (Combinado)</h4>
<p >
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aperiam
  doloremque libero optio officiis provident voluptas excepturi dolore
  corrupti totam odit, expedita ipsum ad ea nemo eos, laborum quae officia.
</p>
<h5 class="m-0">Encima de un sorporte</h5>
<h5 class="m-0">Saltos a un soporte</h5>
<h5 class="m-0">Otros (No estan en grupo A, B, P)</h5>
</div>

<div class="text-center">
<h4>Grupo P (Plataforma)</h4>
<p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aperiam
  doloremque libero optio officiis provident voluptas excepturi dolore
  corrupti totam odit, expedita ipsum ad ea nemo eos, laborum quae officia.
</p>
<h5 class="m-0">Estandares</h5>
<h5 class="m-0">Flotantes</h5>
</div>

</div>


<h3>
  EL ALGORITMO PARA CALCULAR EL GRADO DE DIFICULTAD DE CADA ACROBÁTICO
  MOVIMIENTO:
</h3>
C + D + P + S + R + T + B = DD

<ul>
  <li>C - Construcción</li>
  <li>D - Dirección (solo GRUPO A y C)</li>
  <li>P - Posición/s</li>
  <li>S: Área de soporte y tipo de conexión (solo GRUPO B y P)</li>
  <li>R - Rotación de la base de la construcción (GRUPOS B, C y P)</li>
  <li>T: El plano y el grado de rotación (solo GRUPOS A y C)</li>
  <li>B - Bonificación</li>
  <li>DD - Grado de dificultad</li>
</ul>


</div>
<?php require 'components/footer.php' ?>
  </body>
</html>