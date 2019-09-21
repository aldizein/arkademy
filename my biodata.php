<?php
function getDataJSON($name__,$age__,$address__,$hobbies__,$is_married__,$school__,$skill__,$interest_in_coding__)

{

$data = array(
		
'name' => $name__,

'age'   => $age__,
		
'address' => $address__,
		
'hobbies' => $hobbies__,
		
'is_married' => $is_married__,
		
'school' => $school__,
		
'skills' => $skill__,
		
'interest_in_coding' => $interest_in_coding__,

);

	
return json_encode($data);

}


$nama = "Aldi Zein Pratama";

$umur = "21";

$alamat = "Jl.H.Japat 1, RT 06, RW 01, No.B-20, Kel.Abadijaya, Kec.Sukmajaya. Depok, Jawa Barat";

$hoby = array("kulineran","travelling","nge-game");
$menikah = false;

$sekolah = array(
	'highSchool' => "SMK Ganesa Satria 1",
	'university' => "Bina Sarana Informatika"
);


$kemampuan = array(
    'Backend Developer' => "Beginner",
    'Website Developer' => "Beginner",
    );

$ketertarikan = true;


echo getDataJSON($nama,$umur,$alamat,$hoby,$menikah,$sekolah,$kemampuan, $ketertarikan);





?>