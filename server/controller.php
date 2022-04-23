<?php
/* Includo la pagina che contiene tutti i dati, al suo interno è presente l'array che andrò ad utilizzare */
include_once __DIR__ . '/data.php';

# Mi creo un array di comodo, dove vado ad inserire i dischi che soddisfano la ricerca
$filteredDiscs = [];

/* Specifico il tipo di contenuto che sto per creare */
header('Content-Type: application/json');

/* Se ricevo tramite GET il genere da filtrare */
if((isset($_GET['genre'])) && ($_GET['genre'] != '')){

  # Ciclo per tutto l'array dei dischi
  foreach ($discs as $disc) {
    # Se il genere del disco attuale corrisponde al genere ricevuto via GET allora.. (da notare che le stringhe genere sono state convertite in minuscolo, infatti PHP è case sensitive)
    if(strtolower($disc['genre']) == strtolower($_GET['genre'])){
      # ..Allora inserisco il disco nella lista dei dischi filtrati
      $filteredDiscs[] = $disc;
    }
  }
  /* Trasformo l'array dei dischi filtrati in un file json, ho creato la mia API */
  echo json_encode(
    [
      'results' =>  $filteredDiscs,
      'length' => count($filteredDiscs)
    ]);

} else {
  /* Altrimenti trasformo l'array contenente tutti i dischi in un file json, ho creato la mia API */
  echo json_encode(
      [
        'results' =>  $discs,
        'length' => count($discs)
      ]);
}

?>
