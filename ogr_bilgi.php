<?php


try{
    $baglanti = new PDO("mysql:host=127.0.0.1:3306;dbname=ogrenci","root","12345");
} catch(PDOException $e){
    print $e->getMessage();
}
//include 'login.php';
//$email=filter_input(INPUT_POST, 'email');
//$password=filter_input(INPUT_POST, 'password');

$sorgu = $baglanti -> query("SELECT * FROM ogr_table WHERE ogr_tc = $SESSION[password]" );

	if($sorgu){
		print_r($sorgu -> fetch(PDO:: FETCH_ASSOC));
	}
	else{
		echo "KART BİLGİSİ BULUNAMADI !!"; 
	}
	
	
?>