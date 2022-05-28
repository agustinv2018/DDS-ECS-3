<?php

//Evaluación conceptual de situación N 3
//El ejercicio se debe resolver aplicando al menos una estructura switch.
//En un archivo index y respetando la arquitectura propuesta.
//Esperar mediante POST una variable de nombre vehículo:
//Los valores posible que puede tener vehículo son: 
//auto
//moto
//camion
//bicicleta
//monopatin
//En caso de que la variable no contenga algunos de esos valores devolver:
//“El vehículo ingresado no es correcto.”
//Sino devolver lo siguiente:
//Si ingresó auto, devolver “El precio del peaje es $100”
//Si ingresó moto, devolver “El precio del peaje es $50”
//Si ingresó camion, devolver “El precio del peaje es $200”
//Si ingresó bicicleta, devolver “El precio del peaje es $0”
//Si ingresó monopatin, devolver “El precio del peaje es $20”


$vehiculo = $_POST['vehiculo'];

switch ($vehiculo) {
    case 'auto':
        echo 'El precio del peaje es $100 ';
        break;
    case 'moto':
        echo 'El precio del peaje es $50';
        break;
    case 'camion':
        echo 'El precio del peaje es $200';
        break;
    case 'bicicleta':
        echo 'El precio del peaje es $0';
        break;
    case 'monopatin':
        echo 'El precio del peaje es $20';
        break;

    default:
        echo 'El vehículo ingresado no es correcto.';
        break;
}
