<?php
require_once 'Vehicle.php';
require_once 'Fuelable.php';
require_once 'Movable.php';

class Motor extends Vehicle implements Fuelable, Movable {
    public function move(): void {
        echo $this->name . " bergerak di tanah gravel.\n";
    }

    // Java menggunakan default method refuel() dari Fuelable.
    // Di PHP interface tidak memiliki default method seperti Java,
    // sehingga implementasi ini ditulis langsung agar hasilnya tetap setara.
    public function refuel(): void {
        echo "Mengisi bahan bakar umum.\n";
    }
}
