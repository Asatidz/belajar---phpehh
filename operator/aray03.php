<?php
// array 2 dimensi
$siswa =[
"nama" =>"ruguhono",
"kelas" =>"06",
"alamat" => [
    "desa" => "balerejo",
    "kec" => "kebospai",
    "kab" => "madiun",
]
];
echo $siswa["nama"].PHP_EOL;
echo $siswa["kelas"].PHP_EOL;
echo $siswa["alamat"]["desa"].PHP_EOL;
echo $siswa["alamat"]["kec"].PHP_EOL;
echo $siswa["alamat"]["kab"].PHP_EOL;

?>