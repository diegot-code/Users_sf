<?php

$data = 'SecretPassword123';
$hashed_data_md5 = md5($data);
echo "Hashed using md5(): " . $hashed_data_md5;
echo '<br>';

$password = 'SecretPassword123';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo "Hashed using password_hash(): " . $hashed_password;
echo '<br>';

$value = 'SensitiveData456';
$hashed_value = hash('sha256', $value);
echo "Hashed using hash(): " . $hashed_value;
echo '<br>';

$pvalue = 'Confidential123';
$salt = 'salt';
$hashed_value_crypt = crypt($pvalue, $salt);
echo "Hashed using crypt(): " . $hashed_value_crypt;



?>