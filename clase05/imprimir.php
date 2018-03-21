<?php
$data = $_GET;
var_dump($data);

foreach ($data as $key => $value) {
  if ($key == "hobbie") {
    foreach ($data[$key] as $value) {
      echo $value;
    }
  }
  echo "$key es igual a <em>$value</em> <br>";
}
// var_dump($_GET);

foreach ($data as $key => $value) {
  if (is_array($value)) {
    echo "<p> $key";
    foreach ($value as $hobbie) {
      echo "<em> $hobbie </em>";
    }
    echo "</p>";
  } else {
    echo "<p>$key: $value <br>";
  }
}

?>
