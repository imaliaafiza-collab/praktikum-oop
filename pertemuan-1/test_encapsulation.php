<?php

require "Validator_Encapsulation.php";

$val = new Validator_Encapsulation($_GET);

// ❌ Akses langsung property protected
$val->_inputType = $_GET;
