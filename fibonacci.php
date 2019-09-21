
<?php
echo "Fibonacci : ";



$a=4; //bilangan pertama kita isi 4

$b=3; //bilangan kedua kita isi 3


echo "$a $b "; //mencetak dua angka awal


for($i=1; $i<=5; $i++) //memulai pengulangan untuk mencetak 5 digit angka Fibonacci. diisi angka 3 karena ada dua bilangan awal

{

$c=$a+$b; //$c adalah bilangan yang kita cari. didapat dari penjumlahan dua bilangan sebelumnya.


$a=$b; //bilangan pertama mengambil nilai bilangan kedua

$b=$c; //bilangan kedua mengambil nilai bilangan yang dicari


echo "$c ";

echo "
$c ";

echo "$c ";//mencetak bilangan selanjutnya
}

?>