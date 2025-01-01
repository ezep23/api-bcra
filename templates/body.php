<body>
  <header>
    <nav>
      <h1>Presidentes, ministros y sucesos economicos desde 1990</h1>
    </nav>
  </header>
  </nav>
  <section>
    <?php 
    foreach($data as $index => $item) {

      $cargo = match(true) {
        $item['t'] == 'econ' => 'Ministro de economía',
        $item['t'] == 'pres' => 'Presidente',
        $item['t'] == 'bcra' => 'Presidente del BCRA',
        default => 'no especificado'
      };
      
      
      echo "<div class='items'>" . "Fecha: " . $item["d"] . "<br>";  
      echo "Nombre: " . $item["e"] . "<br>";   
      echo "Tipo: " . $cargo . "<br>" ."</div>";
    }
    ?>
  </section>
</body>