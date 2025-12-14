<?php

class Counter {
    public static int $count = 0;
    public const LABEL = "Jumlah objek";

    public function __construct() {
        self::$count++;
    }

    public static function reset() {
        self::$count = 0;
    }
}

// Membuat object untuk menaikkan counter
new Counter();
new Counter();
new Counter();

// Menampilkan hasil
echo Counter::LABEL . ": " . Counter::$count . PHP_EOL;

// Reset counter
Counter::reset();

// Menampilkan hasil setelah reset
echo Counter::LABEL . " setelah reset: " . Counter::$count;