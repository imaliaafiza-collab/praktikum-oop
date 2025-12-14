<?php
class Book {
    public function __construct(
        public private(set) string $title,
        public protected(set) string $author
    ) {}
}

// =====================
// Subclass
class Ebook extends Book {
    public function changeAuthor(string $newAuthor): void {
        $this->author = $newAuthor; // ✅ BOLEH (protected setter)
        // $this->title = "Judul Baru"; // ❌ ERROR (private setter)
    }
}

// =====================
// Penggunaan
$bk = new Book(title: "How to PHP", author: "Ada");
echo $bk->title . PHP_EOL;   // Bisa dibaca
echo $bk->author . PHP_EOL;  // Bisa dibaca

$ebook = new Ebook(title: "OOP PHP", author: "Budi");
echo "Sebelum: " . $ebook->author . PHP_EOL;

$ebook->changeAuthor("Sari");
echo "Sesudah: " . $ebook->author . PHP_EOL;


