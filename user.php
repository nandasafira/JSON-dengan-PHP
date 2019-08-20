<?php

$array = 
    Array (
    "0" => Array (
        "id" => "01",
        "nama" => "Himmah Aulia",
        "jenis kelamin" => "Perempuan",
        "pekerjaan" => "Web Designer"
    ),
    "1" => Array (
        "id" => "02",
        "nama" => "Isa Narendra",
        "jenis kelamin" => "Laki-laki",
        "pekerjaan" => "Web Administrator"
    ),
    "2" => Array (
        "id" => "03",
        "nama" => "Cetta Bagyo",
        "jenis kelamin" => "Laki-laki",
        "pekerjaan" => "Database Administrator"
    ),
    "3" => Array (
        "id" => "04",
        "nama" => "Zihni Fatih",
        "jenis kelamin" => "Laki-laki",
        "pekerjaan" => "Software Engineer "
    ),
    "4" => Array (
        "id" => "05",
        "nama" => "Akhdan Bayhaqi",
        "jenis kelamin" => "Laki-laki",
        "pekerjaan" => "Web Developer"
    )
);

$json = json_encode(array('murid' => $array));
 
echo $json;

?>