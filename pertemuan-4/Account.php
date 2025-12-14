<?php
// Praktikum B — Getter & Setter
// File: Account.php

class Account {
    private float $balance = 0; // Balance hanya bisa diakses di dalam kelas

    // Getter untuk membaca saldo
    public function getBalance(): float {
        return $this->balance;
    }

    // Setter dengan validasi
    public function setBalance(float $amount): void {
        if ($amount >= 0) {
            $this->balance = $amount;
        } else {
            throw new InvalidArgumentException("Saldo tidak boleh negatif");
        }
    }

    // Setter tanpa validasi (eksperimen tambahan)
    public function setBalanceUnsafe(float $amount): void {
        $this->balance = $amount;
    }
}

// =====================
// 2) Menguji nilai valid dan negatif
$acc = new Account();

echo "=== Nilai Valid ===\n";
$acc->setBalance(50000);
echo "Saldo saat ini: " . $acc->getBalance() . "\n"; // Output: 50000

echo "\n=== Nilai Negatif ===\n";
try {
    $acc->setBalance(-10); // ❌ Akan memunculkan exception
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// =====================
// 3) Eksperimen tambahan

// 3a) Akses langsung property private (tidak diperbolehkan)
// echo $acc->balance; // ❌ Error jika dijalankan
echo "\nAkses langsung property private: tidak bisa, harus melalui getter\n";

// 3b) Menggunakan setter tanpa validasi
echo "\n=== Setter Tanpa Validasi ===\n";
$acc->setBalanceUnsafe(-1000); // Bisa mengubah balance negatif
echo "Saldo sekarang (unsafe): " . $acc->getBalance() . "\n";