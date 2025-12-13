<?php

class Validator
{
    private array $errors = [];

    public function checkTextLength(string $field, string $value, int $min, int $max): void
    {
        $length = strlen($value);

        if ($length < $min || $length > $max) {
            $this->errors[$field][] =
                "$field harus memiliki panjang $min sampai $max karakter";
        }
    }

    public function checkEmail(string $field, string $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = "Format email tidak valid";
        }
    }

    public function fails(): bool
    {
        return !empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }
}
