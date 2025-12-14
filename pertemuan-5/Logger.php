<?php

// =======================
// INTERFACE
// =======================
interface Logger {
    public function log(string $pesan): void;
}

// =======================
// IMPLEMENTASI INTERFACE
// =======================
class FileLogger implements Logger {
    public function log(string $pesan): void {
        echo "Menulis ke file: $pesan\n";
    }
}

class ConsoleLogger implements Logger {
    public function log(string $pesan): void {
        echo "Menampilkan ke konsol: $pesan\n";
    }
}

// =======================
// EKSPERIMEN TAMBAHAN
// =======================
class DatabaseLogger implements Logger {
    public function log(string $pesan): void {
        echo "Menyimpan ke database: $pesan\n";
    }
}

// Interface tambahan
interface Formatter {
    public function format(string $pesan): string;
}

// Class dengan dua interface
class AdvancedLogger implements Logger, Formatter {
    public function log(string $pesan): void {
        echo $this->format($pesan) . "\n";
    }

    public function format(string $pesan): string {
        return "[LOG] " . $pesan;
    }
}

// =======================
// EKSEKUSI
// =======================
$lg = new ConsoleLogger();
$lg->log("Test log");

$db = new DatabaseLogger();
$db->log("Data tersimpan");

$adv = new AdvancedLogger();
$adv->log("Multi interface");
