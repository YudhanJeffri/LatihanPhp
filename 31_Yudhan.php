<?php
$nama = [["Nama"=>"Satria",
"kelas"=>"RPL 1"],
["Nama"=>"Arsyi",
"kelas"=>"RPL 2"],
["Nama"=>"Dhika",
"kelas"=>"RPL 3"],
["Nama"=>"Evan",
"kelas"=>"RPL 4"],
["Nama"=>"Fabian",
"kelas"=>"RPL 5"],
["Nama"=>"Irfan",
"kelas"=>"RPL 6"]];
foreach($nama as $name){
    echo " Nama : <b>".$name["Nama"],"</b>";
    echo " Kelas: <b>".$name["kelas"], "</b><br>";
}

?>