<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
      <h2>ㅤProblema: La aceleración por la fuerza de gravedad</h2>
        <p>ㅤDescripción:</p>
        <p> ¿Cuál es la aceleración por la fuerza de gravedad de la Luna, en relación con la de la Tierra?<br>
      </section>
      <section  class="esquemaProblema">
        <h2>ㅤEsquema</h2>
        <center>
        <img class="imgProblema" src="images/problema.png">
        </center>
      </section>
      <section class="formulas">
      <h2>ㅤFórmulas</h2>
        ㅤAltura Luna = h_Luna=6*h_Tierra<br>
        ㅤAltura Tierra = h_Tierra=(v_0^2)/(2 * g)
      </section>
      <section class="datos">
        <h2>ㅤDatos:</h2>
        ㅤg= 9.8 <br>
        ㅤgLuna= g/6
          
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <?php
            $mT = 81;
            $mL = 1;
            $mS = 332946 * $mT;
            $d1 = 1;
            $d0 = 400 * $d1;

            $razon = ($mT * $mS * pow($d1, 2)) / ($mL * pow($d0, 2));
        ?>
        <p>a)La aceleración por la fuerza de gravedad es:</p>
        ㅤAceleración = 9.8/6<br>
        ㅤGravedad=  gTierra/h</p>
        <button onclick="document.getElementById('resultadoA').innerHTML = '<?php echo $razon; ?>';">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
</footer> 
</section>
</body>
</html>
