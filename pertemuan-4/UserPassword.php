<?php
// Praktikum E — Data Sensitif (Setter tanpa Getter)
// File: UserPassword.php

class User {
    private string $hashedPassword; // Password disimpan dalam bentuk hash

    // Setter untuk password → disimpan dalam bentuk hash
    public function setPassword(string $password): void {
        $this->hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    }

    // Tidak ada getter untuk password → read-only dari luar
}

// =====================
// Penggunaan
$user = new User();
$user->setPassword("rahasia123");

// Tidak ada cara untuk membaca password asli dari luar
echo "Password disimpan dengan aman (hash tidak ditampilkan)\n";

// =====================
// Eksperimen tambahan
// Hanya untuk eksperimen, biasanya jangan dilakukan di kode nyata
// Gunakan Reflection untuk melihat hash
$reflection = new ReflectionClass($user);
$prop = $reflection->getProperty('hashedPassword');
$prop->setAccessible(true);
echo "Hash password (eksperimen): " . $prop->getValue($user) . "\n";

// Coba panggil getter yang tidak ada → akan error
// echo $user->getPassword(); // ❌ Error: Call to undefined method
