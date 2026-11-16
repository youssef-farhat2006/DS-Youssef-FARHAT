<?php
require_once 'config.php';
require_once 'functions.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
<title> clinique </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$patients=[
    ["age"=>70,"nom"=>"Benali Sara","cc"=>"CARDIO","nv"=>"Urgence absolue",],
    ["age"=>45,"nom"=>"Trabelsi Ahmed","cc"=>"DERMA","nv"=>"Urgence relative",],
    ["age"=>8,"nom"=>"Jlassi Amina","cc"=>"PEDIATRIE","nv"=>"Consultation standard",],
    ["age"=>68,"nom"=>"Ayari Karim","cc"=>"CARDIO","nv"=>"Consultation standard",],

];
$facture=0;
foreach ($patients as $patient){
    $facture=calculerFacture ($TARIF_BASE_CONSULTATION,$patient["age"]);
    $badge=getBadgeService ($patient["cc"]);
    

}
?>