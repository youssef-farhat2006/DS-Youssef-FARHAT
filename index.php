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
    $niveau_u=getLibelleUrgence ($patient["nv"]);

}
?>
<div class="card">
    <h2>
            <?php echo $patient["nom"];
            echo $patient["age"] ?>
        </h2>

        <p>
            niveau d'urgence : <?php echo $patient["nv"]; ?>
        </p>

        <p>
            facture estimee : <?php echo $facture; ?> TND
        </p>
</div>
<?php
$urgence=filtrerUrgences ( $patients);
?>
<h3>Recapitulatif</h3>
<p>
    Nombre total de patient : <?php echo count($patients); ?>
</p>
<h4>urgence absolues (ROUGE)</h4>
<p>
    <?php echo ($urgence) " - service :" ($patient["cc"])
</p>
</body>
</html>
