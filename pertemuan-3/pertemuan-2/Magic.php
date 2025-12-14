<?php

class Magic {
    // Dipanggil ketika memanggil method yang tidak ada
    public function __call($name, $args) {
        return "Method '$name' dipanggil dengan argumen: " . implode(", ", $args);
    }

    // Dipanggil ketika object diperlakukan sebagai string
    public function __toString(): string {
        return "Ini adalah objek Magic";
    }
}

$m = new Magic();

// Memanggil method yang tidak didefinisikan
echo $m->hello("Rani", 25);
echo PHP_EOL;

// Menampilkan object sebagai string
echo $m;