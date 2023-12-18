<?php

include 'koneksi.php';


$name = 'bima';
$email = 'bimasandi@example.com';
$gender = 'Laki-Laki';
$date = '2023-11-21';

$sql = "INSERT INTO kedatangan (name, email, gender, date) VALUES ('$name', '$email', '$gender', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
