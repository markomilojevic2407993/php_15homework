<?php   
$baza=mysqli_connect('localhost', 'root', '', 'web_shop');






if(!isset($_POST['ime']) || empty($_POST['ime']) ){
    echo'Parametri opisa nisu uneti';
}

$ime=$_POST['ime'];
$opis=$_POST['ime'];


$rezultat=$baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$ime%' OR opis LIKE '%$opis%'");


if($rezultat->num_rows > 0){
    echo "Uspesno nadjen rezultat, sadrzi u :".$rezultat->num_rows." proizvoda";
}else {
    echo  "Rezultat nije nadjen";
}


?>