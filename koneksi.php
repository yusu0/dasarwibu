<?php
$host     = 'localhost';
$user     = '318506'; // diisi dengan user database kalian biasanya
                    // defaultnya bernama root jika kita belum 
                    // merubahnya
$password = 'kukubimax23';  //diisi dengan password database kalian biasanya
                 // defaultnya kosong
$db       = '318506'; //diisi dengan nama database kalian
 
$con = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());
?>