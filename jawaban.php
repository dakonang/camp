<?php

//no1
function biodata()
{
$data = [
'nama' => 'danang',
'alamat' => 'klaten',
'hobi' => 'game',
'is_marrid' => 'belum',
'scholl' => 'smk',
'skill' => [
"php","css"
]
];
	echo json_encode($data);
}

//biodata();









//no2
$username="qwerttyr";
$pass= "aqdgjkkq";
function validasi($username, $pass)
{
	
	if($username == "")
	{
		echo ('user kosong');
	}
	else if($password = "")
	{
		echo ('pass');
	}
	else if(strlen($username) !==8)
	{
		echo ('harus 8');
	} else if(strlen($pass) < 8)
	{
		echo ('min 8');
	}
	else
	{
		return true;
	}
}
	
validasi($username, $pass);









//no 3
function gambar($total)
{
	
	$setengah 	 = floor($total / 2); //2
	$tengah  = $setengah +1;
	$char1 		 = '=';
	$char2 		 = '*';

echo '<div style="font:bold 16px courier new; line-height:10px">';
// loop baris
for ($row = 1; $row <= $total; $row++)
{
	for ($col = 1; $col <= $total; $col++)
	{
		$char =	$col > 1 && $col <= ($total - 1)&& $row !== 3 ? $char2 : $char1;
		
		echo $char;
	}
	echo '<br/>';
}
echo '</div>';
}

//gambar(5);






//no 4
$data = [
["Joko","Rizal","Sanusi","Bowo","koko","Jowo","Susi","Wowo","Anusi","Vida"],
["a", "x", "h"],
["Joko","Bowo","Sanusi","Bowo","Sanusi"]
];
function a($data)
{
	sort($data);
	foreach($data as $d=>$val)
	{
		sort($val);
		print_r($val);
	}
}

//a($data);










//5
function kode($a)
{
	return md5($a);
}
	
//echo kode(4);


	
	