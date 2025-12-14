<?php

// FINAL CLASS (TIDAK BOLEH DIWARISKAN)
final class Pembayaran {
    protected int $jumlah;
}

// =======================
// ABSTRACT CLASS
// =======================
abstract class Pembayaran {
    protected int $jumlah;

    public function __construct(int $jumlah) {
        $this->jumlah = $jumlah;
    }

    // method wajib diimplementasikan child
    abstract public function proses(): void;
}

// =======================
// CHILD CLASSES
// =======================
class TransferBank extends Pembayaran {
    public function proses(): void {
        echo "Transfer sebesar Rp{$this->jumlah} berhasil.\n";
    }
}

class EWallet extends Pembayaran {
    public function proses(): void {
        echo "Pembayaran Rp{$this->jumlah} via E-Wallet berhasil.\n";
    }
}

// =======================
// EKSPERIMEN TAMBAHAN
// =======================
class QRIS extends Pembayaran {
    public function proses(): void {
        echo "Pembayaran Rp{$this->jumlah} via QRIS berhasil.\n";
    }
}

// =======================
// EKSEKUSI
// =======================
$transaksi = [
    new TransferBank(250000),
    new EWallet(100000),
    new QRIS(50000)
];

foreach ($transaksi as $p) {
    $p->proses();
}
