<?php

function generatePassword($length) {
    $dataSet = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%^&*()_+";
    $password = substr(str_shuffle($dataSet), 0, $length);
    echo $password;
}
generatePassword(12);
