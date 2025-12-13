<?php

require "User.php";

$u = new User();      // membuat object dari class User
$u->name = "Rani";   // mengisi nilai properti name
echo $u->sayHello(); // memanggil method sayHello
