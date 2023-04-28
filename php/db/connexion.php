<?php
  $host_name = 'localhost';
  $database = 'nathanel';
  $user_name = 'root';
  $password = '';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    echo '<p>La connexion au serveur MySQL a échoué: '. $link->connect_error .'</p>';
  } else {
    //echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
  }
?>