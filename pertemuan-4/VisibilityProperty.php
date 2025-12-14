<?php
// Praktikum A — Visibility Dasar pada Property

// Kelas induk
class MyClass { 
    public string $pub  = 'Public';      // Public → bisa diakses di mana saja
    protected string $prot = 'Protected'; // Protected → hanya di kelas & child
    private string $priv = 'Private';    // Private → hanya di kelas ini sendiri

    // Method untuk menampilkan semua property
    public function dump(): void { 
        echo "dump():\n";
        echo "Public: " . $this->pub . "\n";
        echo "Protected: " . $this->prot . "\n";
        echo "Private: " . $this->priv . "\n";
        echo "-----------------\n";
    } 
}

// Kelas child
class MyChild extends MyClass { 
    private string $priv = 'Private Child'; // Private baru milik child

    public function check(): void { 
        echo "check():\n";
        echo "Public (child): " . $this->pub . "\n";        // ✅ Bisa diakses
        echo "Protected (child): " . $this->prot . "\n";   // ✅ Bisa diakses
        // echo "Private (child): " . $this->priv;         // ✅ Bisa diakses, tapi ini milik child
        echo "Private (child): " . $this->priv . "\n";    // Menampilkan private child
        echo "-----------------\n";
    } 
}

// =====================
// 1) Akses property dari objek induk
$obj = new MyClass();
echo "Akses langsung objek induk:\n";
echo "Public: " . $obj->pub . "\n";   // ✅ Bisa
// echo $obj->prot; // ❌ ERROR: protected
// echo $obj->priv; // ❌ ERROR: private
echo "-----------------\n";

// Panggil method dump() untuk menampilkan semua property
$obj->dump();

// =====================
// 2) Akses property dari child class
$child = new MyChild();
$child->check();

// Panggil method dump() dari child
$child->dump(); // dump() tetap bisa mengakses private milik induk
