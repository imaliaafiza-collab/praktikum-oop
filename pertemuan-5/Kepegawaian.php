<?php

// =======================
// LEVEL 1 (PARENT)
// =======================
class Pegawai {
    protected string $nama;
    protected float $gajiDasar;

    public function __construct(string $nama, float $gajiDasar) {
        $this->nama = $nama;
        $this->gajiDasar = $gajiDasar;
    }

    public function hitungGaji(): float {
        return $this->gajiDasar;
    }
}

// =======================
// LEVEL 2 (CHILD)
// =======================
class PegawaiTetap extends Pegawai {
    protected float $tunjanganTetap = 1500000;

    public function hitungGaji(): float {
        return parent::hitungGaji() + $this->tunjanganTetap;
    }
}

// =======================
// LEVEL 3 (GRANDCHILD)
// =======================
class Manajer extends PegawaiTetap {
    protected float $tunjanganJabatan = 2000000;

    public function hitungGaji(): float {
        return parent::hitungGaji() + $this->tunjanganJabatan;
    }
}

// =======================
// EKSEKUSI
// =======================
$dina  = new PegawaiTetap("Dina", 5000000);
$faris = new Manajer("Faris", 7000000);

echo "Gaji Dina: Rp" . $dina->hitungGaji() . "\n";
echo "Gaji Faris: Rp" . $faris->hitungGaji() . "\n";
