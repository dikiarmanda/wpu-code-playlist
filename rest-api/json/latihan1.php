<?php

$mahasiswa = [
  [
    "nama" => "Diki Armanda",
    "nim" => "201080200001",
    "email" => "dikiarmanda@umsida.ac.id"
  ],
  [
    "nama" => "Diki Armanda",
    "nim" => "201080200001",
    "email" => "dikiarmanda@umsida.ac.id"
  ]
];

$dbh = new PDO("mysql:host=localhost;dbname=rest_api", "root", "");
$db = $dbh->prepare("SELECT * FROM mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;