<?php
class Connection {
    public function __construct() {
        echo "Koneksi dibuka\n";
    }

    public function __destruct() {
        echo "Koneksi ditutup\n";
    }
}

$c = new Connection();
// unset($c);
echo "Selesai\n";
