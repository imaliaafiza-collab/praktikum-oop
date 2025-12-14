<?php

class Demo {
    private array $data = [];

    // Dipanggil saat membaca property yang tidak ada / tidak bisa diakses
    public function __get($name) {
        echo "Membaca property '$name'\n";
        return $this->data[$name] ?? null;
    }

    // Dipanggil saat mengisi property yang tidak ada / tidak bisa diakses
    public function __set($name, $value) {
        echo "Mengisi property '$name' dengan nilai: ";
        var_dump($value);
        $this->data[$name] = $value;
    }

    // Dipanggil saat memanggil method yang tidak ada
    public function __call($name, $args) {
        echo "Method '$name' dipanggil dengan argumen:\n";
        print_r($args);
    }
}

// =====================
// Penggunaan Dasar
$obj = new Demo();

echo "=== SET PROPERTY ===\n";
$obj->foo = 123;           // __set dipanggil
$obj->bar = "hello";       // __set dipanggil
$obj->arr = [1, 2, 3];     // __set dipanggil (tipe array)

echo "\n=== GET PROPERTY ===\n";
echo $obj->foo . "\n";     // __get dipanggil
echo $obj->bar . "\n";     // __get dipanggil
var_dump($obj->arr);       // __get dipanggil

echo "\n=== CALL METHOD ===\n";
$obj->testMethod("tes");   // __call dipanggil
$obj->hitung(1, 2, 3);     // __call dipanggil

echo "\n=== AKSES PROPERTY TIDAK ADA ===\n";
var_dump($obj->unknown);   // __get dipanggil
