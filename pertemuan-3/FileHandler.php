<?php
class FileHandler {
    private $handle;

    public function __construct(string $filename) {
        echo "Membuka file...\n";
        $this->handle = fopen($filename, "w");

        // Cek jika fopen gagal
        if (!$this->handle) {
            throw new Exception("Gagal membuka file: $filename");
        }
    }

    public function write(string $text) {
        fwrite($this->handle, $text);
    }

    public function __destruct() {
        echo "Menutup file...\n";
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}

// Contoh penggunaan
try {
    $f = new FileHandler("C:/Windows/System32/output.txt");

    $f->write("Halo, ini baris pertama\n");
    $f->write("Ini baris kedua\n");
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
