<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 30);
$subWeapon = new Gun("Mosin-Nagant", 5);

$mainWeapon->relaod();
$subWeapon->relaod();

$mainWeapon->fire();
$subWeapon->fire();

// 現在の状態を表示
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
