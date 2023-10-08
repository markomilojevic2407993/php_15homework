<?php   


$baza=mysqli_connect('localhost', 'root', '', 'web_shop');




if(!isset($_POST['ime']) || empty($_POST['ime']) ){
    echo'Parametri opisa nisu uneti';
}


if(!isset($_POST['opis']) || empty($_POST['opis']) ){
    echo'Parametri opisa nisu uneti';
}

if(!isset($_POST['cena']) || empty($_POST['cena']) ){
    echo'Parametri opisa nisu uneti';
}

if(!isset($_POST['slika']) || empty($_POST['slika']) ){
    echo'Parametri opisa nisu uneti';
}

if(!isset($_POST['kolicina']) || empty($_POST['kolicina']) ){
    echo'Parametri opisa nisu uneti';
}


$ime=$_POST['ime'];
$opis=$_POST['opis'];
$cena=$_POST['cena'];
$slika=$_POST['slika'];
$kolicina=$_POST['kolicina'];



$unosProizvoda=$baza->query("INSERT INTO proizvodi(ime, opis, cena, slika, kolicina) VALUES ('$ime', '$opis',$cena, '$slika', $kolicina)");









?>