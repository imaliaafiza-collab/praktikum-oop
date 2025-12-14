<?php

// Anonymous class sederhana
$logger = new class {
    public function log(string $message) {
        echo "[LOG] $message" . PHP_EOL;
    }
};

$logger->log("Sistem berjalan");

echo PHP_EOL;

//============================
//Anonymous class dengan property & constructor
//============================
$logger2 = new class ("INFO") {
    public function __construct(public string $level) {}

    public function log(string $msg) {
        echo "[$this->level] $msg" . PHP_EOL;
    }
};

$logger2->log("Aplikasi siap digunakan");