<?php


function beliMie($tgl, $nominal)

{
    
if ($tgl < 1 || $tgl > 30 || !is_numeric($tgl)) 
{
        
return 'Masukan tanggal yang valid';
    
}

    
if (!is_numeric($nominal) || $nominal < 0) 
{
        
return 'Masukan nominal yang valid';
    
}

    
if ($nominal < 2500) 
{
        
return 'Maaf, uangnya nggak cukup';
    
}

    
$jmlBeli = floor($nominal/2500);
    
if ($tgl%2 == 0) 
{
        $bonusAwal = $jmlBeli / 4;
    
} else 
{
        $bonusAwal = $jmlBeli / 3;
    
}

    $bonusAwal = floor($bonusAwal);
    
if ($tgl%5 == 0) 
{
        if ($bonusAwal%2 == 0) 
{
            $bonusAkhir = $bonusAwal * 10;
        
} else 
{
            $bonusAkhir = $bonusAwal * 5;
        
}
    
}

    
return "Kamu dapat bonus " . ($jmlBeli + $bonusAkhir) . " mie";

}


$tgl = readline('Masukan tanggal pembelian: ');

$nominal = readline('Masukan nominal pembelian: ');

echo beliMie($tgl, $nominal);
?>