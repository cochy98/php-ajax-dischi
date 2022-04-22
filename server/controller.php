<?php
/* Includo la pagina che contiene tutti i dati, al suo interno è presente l'array che andrò ad utilizzare */
include_once __DIR__ . '/data.php';
/* Specifico il tipo di contenuto che sto per creare */
header('Content-Type: application/json');

/* Trasformo l'array in un file json, ho creato la mia API */
echo json_encode(
    [
      'results' =>  $discs,
      'length' => count($discs)
    ]);
?>
