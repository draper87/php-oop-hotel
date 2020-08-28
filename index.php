<?php

// Partiamo dal diagramma della tabella stanze nel db hotel (usate phpmyadmin per vedere le caratteristiche della tabella) e
// creiamo una classe che rifletta la tabella stanze, poi la usiamo per stampare in pagina i dati.
// I dati anche qui non arrivano da db ma da un array.


  require_once(__DIR__ . '/Stanza.php');
  require(__DIR__ . '/database.php');

?>

<h2>Stanze albergo</h2>

<?php foreach ($stanze as $stanza): ?>
  <?php $nuova_stanza = new Stanza($stanza['id'], $stanza['room_number'], $stanza['floor'], $stanza['beds'], $stanza['created_at'], $stanza['updated_at']); ?>
  <?php $array_stanza = $nuova_stanza->stampaStanza(); ?>
  <div class="stanza">
    <ul>
      <li>Id: <?php echo $array_stanza['id']; ?></li>
      <li>Stanza numero: <?php echo $array_stanza['room_number']; ?></li>
      <li>Piano: <?php echo $array_stanza['floor']; ?></li>
      <li>Numero letti: <?php echo $array_stanza['beds']; ?></li>
      <li>Creato il: <?php echo $array_stanza['created_at']; ?></li>
      <li>Aggiornato il: <?php echo $array_stanza['updated_at']; ?></li>
    </ul>
  </div>
<?php endforeach; ?>
