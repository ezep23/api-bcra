<main>
  <hgroup>
    <?php 
    foreach($data as $index => $item) {
      echo "Ítem $index:<br>";
      echo "Fecha: " . $item["d"] . "<br>";  
      echo "Nombre: " . $item["e"] . "<br>";   
      echo "Tipo: " . $item["t"] . "<br>";     
      echo "<hr>";
    } 
    ?>
  </hgroup>
</main>