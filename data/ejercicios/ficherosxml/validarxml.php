<?php
    $dept = new DOMDocument(); // Crea un DOM nuevo para el xml
    $dept->load("empleados.xml"); // Carga el xml en el nuevo DOM
    $respuesta = $dept->schemaValidate("departamento.xsd"); // Valida el xml con el xsd

    echo ($respuesta)?"Documento válido":"Documento no válido"; // Condición ternaria