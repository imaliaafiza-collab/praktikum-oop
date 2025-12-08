<?php

// VALIDASI USERNAME
$username = $_POST['username'] ?? '';

$errors = [];

if (strlen($username) < 6) {
    $errors[] = "Username minimal 6 karakter";
}

if (!empty($errors)) {
    print_r($errors);
} else {
    echo "Register berhasil!";
}