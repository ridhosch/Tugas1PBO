<?php
require_once 'Mahasiswa.php';

class MahasiswaInternational extends Mahasiswa {
    private string $negaraAsal;

    public function __construct(
        string $nama = "Belum Diisi",
        string $nim = "Belum Diisi",
        $umur = 0,
        string $negaraAsal = "Belum Diisi"
    ) {
        // Java memiliki constructor (nama, nim, negara) dan
        // (nama, nim, umur, negara). PHP memakai satu constructor
        // dengan parameter fleksibel untuk meniru keduanya.
        if (is_string($umur)) {
            $negaraAsal = $umur;
            $umur = 0;
        }

        parent::__construct($nama, $nim, (int) $umur);
        $this->negaraAsal = $negaraAsal;
    }

    public function getNegaraAsal(): string {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void {
        $this->negaraAsal = $negaraAsal;
    }

    public function tampilkanInfo(): void {
        parent::tampilkanInfo();
        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}
