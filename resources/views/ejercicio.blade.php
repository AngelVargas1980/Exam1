<?php
$edad=60;
    if ($edad<18){
        echo "Es menor de edad";

        else {
            echo "es mayor de edad";
        }
    }




$dia= "miercoles";

    switch ($dia) {

        case "lunes";
            echo "hoy es lunes";
            break;


        case "martes";
            echo "hoy es martes";
            break;

        case "miercoles";
            echo "hoy es miercoles";
            break;

        case "jueves";
            echo "hoy es jueves";
            break;
    }



$i = 1;
    while ($i <= 10){
        echo  $i . "<br>";
            $i++;

    }



$i = 1;
do {
    echo  $i . "<br>";
    $i++;

}while ($i <= 10);

for/each
for($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

$frutas = array("manzana", "naranja", "platano");

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
