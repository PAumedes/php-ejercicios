<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
  </head>
  <body>
    <form action="imprimir.php" method="get">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre">
      <br>
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email">
      <br>
      <p>¿Qué hobbies tenés?</p>
      <input type="checkbox" name="hobbie[]" value="foto"> Me gusta la fotografía<br>
      <input type="checkbox" name="hobbie[]" value="baile" checked> Me gusta bailar<br>
      <input type="checkbox" name="hobbie[]" value="pintar" checked> Me gusta pintar<br>
      <p>Género</p>
      <input type="radio" name="genre" value="Male" checked> Hombrer<br>
      <input type="radio" name="genre" value="Female" checked> Mujer<br>
      <p>¿Cómo dormiste anoche?</p>
      <select name="dormiste">
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
       <option value="10">10</option>
      </select>
      <button type="submit">Dale caña</button>
    </form>
  </body>
</html>

<?php  ?>
