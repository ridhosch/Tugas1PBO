<?php
require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Car extends Vehicle implements Movable, Fuelable {
    public function move(): void {
        echo $this->name . " bergerak di jalan.\n";
    }

    public function refuel(): void {
        echo $this->name . "Isi bahan bakar mobil\n";
    }
}
