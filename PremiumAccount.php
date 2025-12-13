<?php

require "Account.php";

class PremiumAccount extends Account {
    public function debugBalance() {
        return $this->balance; // BOLEH karena protected
    }
}

$pacc = new PremiumAccount("Rani", 10000, "1234");
echo $pacc->debugBalance();
