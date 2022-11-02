<?php
    // serialize, unserialize, json_enconde, json_decode

    $capitales = [
        "spain" => "Madrid",
        "italy" => "Roma"
    ];

    $infotrans = ""; //información trans
    $infonotrans = ""; //información de vuelta a la original


    echo "<pre>"; // Para darle formato
    $infotrans = serialize($capitales);
    echo "<br>Información serializada: ";
    var_dump($infotrans);

    $infonotrans = unserialize($infotrans);
    echo "<br>Información Deserializada: ";
    var_dump($infonotrans);

    echo "<pre>";
    
    // Con JSON
    $infotrans = json_encode($capitales);
    echo "<br>Información en JSON: ";
    var_dump($infotrans);

    $infonotrans = json_decode($infotrans);
    echo "<br>Información original desde JSON: ";
    var_dump($infonotrans);