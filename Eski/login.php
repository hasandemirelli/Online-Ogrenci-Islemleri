
<?php


try{
    $baglanti = new PDO("mysql:host=127.0.0.1:3306;dbname=ogrenci","root","12345");
} catch(PDOException $e){
    print $e->getMessage();
}
session_start();



$email=filter_input(INPUT_POST, 'email');
$password=filter_input(INPUT_POST, 'password');

$sorgu = $baglanti -> query("SELECT * FROM ogr_table WHERE  ogr_tc =$password && ogr_mail='$email'" ) -> fetch(PDO:: FETCH_ASSOC);
	if($sorgu){
		
		header ("Location:anasayfa.php"); 
	}
	else{
		
		header ("Location:index.php"); 
		
	}
	
	
?>

