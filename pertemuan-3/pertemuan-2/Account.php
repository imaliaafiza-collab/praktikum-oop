<?php

class Account {
    public string $owner;
    protected float $balance;
    private string $pin;

    public function __construct(string $owner, float $balance, string $pin) {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->pin = $pin;
    }

    public function getBalance(string $pin): float {
        if ($pin === $this->pin) {
            return $this->balance;
        }
        throw new Exception("PIN salah");
    }
}