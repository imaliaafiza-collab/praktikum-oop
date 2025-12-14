<?php

// =======================
// CLASS PARENT
// =======================
class Produk {
    protected string $nama;
    protected int $harga;

    public function __construct(string $nama, int $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getHarga(): int {
        return $this->harga;
    }
}

// =======================
// CLASS CHILD (OVERRIDING)
// =======================
class ProdukDiskon extends Produk {
    private float $diskon;

    public function __construct(string $nama, int $harga, float $diskon) {
        parent::__construct($nama, $harga);
        $this->diskon = $diskon;
    }

    // overriding method parent
    public function getHarga(): int {
        $hargaAsli = parent::getHarga();
        return (int) ($hargaAsli * (1 - $this->diskon));
    }
}

// =======================
// CLASS TAMBAHAN (EKSPERIMEN)
// =======================
class ProdukPromo extends ProdukDiskon {
    private float $diskonTambahan = 0.05;

    public function getHarga(): int {
        $hargaDiskon = parent::getHarga();
        return (int) ($hargaDiskon * (1 - $this->diskonTambahan));
    }
}

// =======================
// EKSEKUSI
// =======================
$laptop = new ProdukDiskon("Laptop", 10000000, 0.15);
$hp     = new ProdukPromo("HP", 8000000, 0.10);

echo "Harga Laptop setelah diskon: Rp" . $laptop->getHarga() . "\n";
echo "Harga HP setelah promo: Rp" . $hp->getHarga();
