<?php

$pdo = new PDO ("mysql:host=localhost;dbname=rallye", 'root' ,'');

class Database {

public static function Connection(){
    $pdo = new PDO ("mysql:host=localhost;dbname=rallye", 'root' ,'');
    return $pdo ;}
}
// --------------- Liste des requetes MySQL -----------------

// CREATE INSERT into database : 
/*
$req = $pdo->prepare("INSERT INTO race (id_car, pilot, speed, cap, tyreshealth) VALUES (null,? , ?, ?, ?)");
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute($Rallye_Car_Valentin->_pilot,$Rallye_Car_Valentin->_speed, $Rallye_Car_Valentin->_cap, $Rallye_Car_Valentin->_tyreshealth);

// UPDATE from database : 

$requete = $pdo->prepare("SELECT * FROM race WHERE id_car = ?");
$requete->execute([$_GET['id_car']]);
$car = $requete->fetch(PDO::FETCH_ASSOC);

// DELETE from database : 

$requete = $pdo->prepare('SELECT * FROM race WHERE id_car = ?');
$requete->execute([$_GET['id_car']]);
$car = $requete->fetch(PDO::FETCH_ASSOC);
$pdo->prepare('DELETE FROM race WHERE id_car = ?')->execute([$_GET['id_car']]);

// READ SELECT from datase : 
$requete = $pdo->query("SELECT * FROM race");
$cars = $requete->fetchAll(PDO::FETCH_ASSOC);
*/
?>