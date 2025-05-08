<?php
use Zmrq\Ektp\eKTP;

require_once "./vendor/autoload.php";

$ktp = new eKTP;

var_dump(
    $ktp->nik,
    $ktp->user->bornCity,
    $ktp->province->name
);
