<?php
    // PER LEGGERE IL CONTENUTO DEL FILE JSON
    $json = file_get_contents('disc-list.json');

    // stringa per convertire il file in json
    header('Content-Type: application/json');

    // Stampo il contenuto del file
    echo $json;