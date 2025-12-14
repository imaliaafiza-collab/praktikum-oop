<?php
class Product {
    private string $sku; // Property private, hanya bisa diakses dalam kelas

    // Constructor untuk inisialisasi SKU saat objek dibuat
    public function __construct(string $sku) {
        $this->sku = $sku;
    }

    // Getter untuk membaca SKU
    public function setSku(string $sku): void {
    $this->sku = $sku;
}

}

// =====================
// Penggunaan
$p = new Product("SKU-001");
echo "SKU produk: " . $p->getSku() . "\n"; // Output: SKU-001
