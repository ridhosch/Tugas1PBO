<?php
require_once 'Dokter.php';
require_once 'Pemain.php';
require_once 'Tim.php';
require_once 'Buku.php';

// ASOSIASI
$dokter = new Dokter("Dr. Andi");
$pasien = new Pasien("Budi");

$dokter->merawat($pasien);

// AGREGASI
$pemain1 = new Pemain("Eko");
$pemain2 = new Pemain("Dina");

$tim = new Tim("Garuda", [$pemain1, $pemain2]);
$tim->tampilkanPemain();

// KOMPOSISI
$buku = new Buku("Belajar Java");
$buku->tampilkanBab();

// Jika buku dihancurkan, bab juga tidak digunakan lagi melalui objek buku.
$buku = null;
