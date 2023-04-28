<?php

$sql = "SELECT * FROM user";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $USER_id = $row["id"];
    $USER_nom = $row["nom"];
    $USER_prenom = $row["prenom"];
    $USER_statut = $row["statut"];
    $USER_description = $row["description"];
    $USER_description2 = $row["description2"];
    $USER_portable = $row["portable"];
    $USER_mail = $row["mail"];
    $USER_pays = $row["pays"];
    $USER_ville = $row["ville"];
    $USER_linkedin = $row["linkedin"];
    $USER_github = $row["github"];
    $USER_twitter = $row["twitter"];
    $USER_facebook = $row["facebook"];
    $USER_instagram = $row["instagram"];
    $USER_nb_failles =  $row["nb_failles"];
    $USER_nb_competitions =  $row["nb_competitions"];
    $USER_nb_outils =  $row["nb_outils"];

    // Faites quelque chose avec les données récupérées
  }
} else {
  echo "0 résultats";
}

?>