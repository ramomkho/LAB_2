<?php
$days = 'Monday';
switch($days){
    case 'Monday':
    case 'Wednesday':
        echo("It's the beginning of the week!");
        break;
    case 'Frday':
        echo("TGIF! It's Friday!");
        break;
    case 'Sunday':
        echo("Enjoy You Weekend!");
        break;
    default:
        echo("It's a regular day.");
        break;
}