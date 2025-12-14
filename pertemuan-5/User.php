<?php

// =======================
// CLASS PARENT
// =======================
class User {
    // protected → bisa diwariskan ke class turunan
    protected string $nama;
    protected string $email;

    public function __construct(string $nama, string $email) {
        $this->nama  = $nama;
        $this->email = $email;
    }

    public function login(): void {
        echo "{$this->nama} berhasil login.\n";
    }

    /*
    ======================
    EKSPERIMEN (JANGAN DIPAKAI)
    ======================
    Jika $nama diubah menjadi private:

    private string $nama;

    Maka class Admin akan ERROR karena
    property private tidak diwariskan.
    */
}

// =======================
// CLASS CHILD
// =======================
class Admin extends User {

    // method hasil pewarisan + penggunaan property protected
    public function hapusUser(string $target): void {
        echo "{$this->nama} menghapus akun {$target}.\n";
    }

    // method baru di child class (eksperimen tambahan)
    public function resetPassword(string $target): void {
        echo "Password {$target} berhasil direset oleh {$this->nama}.\n";
    }
}

// =======================
// EKSEKUSI PROGRAM
// =======================
$admin = new Admin("Iwan", "iwan@abc.com");

// method dari parent
$admin->login();

// method dari child
$admin->hapusUser("Budi");
$admin->resetPassword("Budi");
