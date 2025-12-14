<?php
class User {
    private string $email; // Property private

    // Setter dengan validasi dan normalisasi
    public function setEmail(string $email): void {
        // Validasi format email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Format email tidak valid");
        }
        // Normalisasi → huruf kecil
        $this->email = strtolower($email);
    }

    // Getter
    public function getEmail(): string {
        return $this->email;
    }
}

// =====================
// Penggunaan
$user = new User();

// 1) Input email valid
$user->setEmail("TEST@MAIL.com");
echo "Email setelah normalisasi: " . $user->getEmail() . "\n"; // Output: test@mail.com

// 2) Eksperimen input invalid
try {
    $user->setEmail("abc"); // ❌ Invalid → akan muncul exception
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

// 3) Eksperimen input lain
$user->setEmail("USER@DOMAIN.COM");
echo "Email setelah normalisasi: " . $user->getEmail() . "\n"; // Output: user@domain.com
