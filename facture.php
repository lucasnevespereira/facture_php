<?php 


$entete= array ('Réference', 'Libelé', 'Prix', 'Quantité', 'Unité', 'Prix Total HT');

$facture = mt_rand (1,500);



$alphabet = "abcdefghijklmnopqrstuvwxyz";
$alphabet = strtoupper ($alphabet);

$client = array(

    "nom" =>"BECHET Thomas" , 
    "adresse" => "22 Rue Maurice Braunstein, <br> 78200 Limay" , 
    "tel" => "0628769132" , 
    "email" => "tombechet@gmail.com"
    );

$tableau = array (
array (
    //Clé =>  Valeur
    "ref" => mt_rand (200,10000),
    "lib" => " Guitare Folk Électro-Acoustique \"Fender CD-60\"",
    "prix" => 160,
    "quant" => mt_rand (1,50),
    "unite" => "U",
),
array (
    //Clé =>  Valeur
    "ref" => mt_rand (200,10000),
    "lib" => " Housse Guitare \"Tobago Serie 20\"",
    "prix" => 20,
    "quant" => mt_rand (1,50),
    "unite" => "U",
),

array (
    //Clé =>  Valeur
    "ref" => mt_rand (200,10000),
    "lib" => " Jeux de cordes Nylon \"D'Addario And Co\"",
    "prix" => 4.90,
    "quant" => mt_rand (1,50),
    "unite" => "U",
),
array (
    //Clé =>  Valeur
    "ref" => mt_rand (200,10000),
    "lib" => " Câbles Microphone \"STAGG 3M\"",
    "prix" => 8.50,
    "quant" => mt_rand (1,50),
    "unite" => "U",
),
array (
    //Clé =>  Valeur
    "ref" => mt_rand (200,10000),
    "lib" => " Micro \" SHURE 55SH T2 Unidyne II\" ",
    "prix" => 59,
    "quant" => mt_rand (1,50),
    "unite" => "U",
)
);
date_default_timezone_set ("Europe/Paris");
$date = date("d-m-Y");
$date = str_replace ("-","/",$date);
$heure = date ("H:i");


?>

<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
        <meta name="description" content="Correction de l'exercice 14"/>
        <link rel="stylesheet" type="text/css" href="phpfacture.css" />
    </head>
    <body>
    <div class="facture">
            <div class="header">
                <div class="company">
                        <img src="https://s3.ap-south-1.amazonaws.com/kinbechnepal.com/profile/a7d1f5c71de5.jpg" alt="">
                        <div class="adress">
                            <h5> Grace Music Store</h5>
                            <p>31 Rue Pierre Curie,<br> 78930 Guerville <br> Tél: 0134568745 <br> Email: gracemstore@gmail.com</p>
                        </div>
                </div>
                <div class="button">
                    <form>
                        <input type="button" value="Imprimer" onClick="window.print()" class="print">
                    </form>
                </div>
                <div class="contact">
                    <?php
                        echo ("<p>");

                        echo("<span><b>".$client["nom"]."</b> </span>");
                        echo("<br> <br> ".$client["adresse"]);
                        echo("<br> <br> Tél: ".$client["tel"] ."<br> Email:".$client["email"]);
                        
                        echo("</p>");
                    ?>
                </div>
                    <h3>Facture N° <?php echo $facture ?></h3>
                    <div class="date">
                        <h4> <?php echo ("Le ".$date." à <em>".$heure."</em>") ?></h4>
                    </div>
            </div>
            <table>
                <?php
                echo ("<tr>");
                for ($i=0;  $i < count($entete);  $i++)

                {
                    echo ("<th>".$entete[$i]."</th>");
                }
                
                echo ("</tr>");

                foreach ($tableau as $valeur) {
                    echo ("<tr>");
                    echo ("<td>".$alphabet[rand(0,25)].$valeur["ref"]."</td>");
                    echo ("<td>".$valeur["lib"]."</td>");
                    echo ("<td>".$valeur["prix"]."€</td>");
                    echo ("<td>".$valeur["quant"]."</td>");
                    echo ("<td>".$valeur["unite"]."</td>");
                    echo ("<td>".$valeur["prix"]*$valeur["quant"]."€</td>");
                    echo ("</tr>");
                }

                foreach($tableau as $valeur) {
                    $totalht += $valeur["prix"]*$valeur["quant"];

                }

                $totalttc = $totalht * 1.2;
                ?>
            </table>
            <div class="container">
                <div class="total">
                    <div class="ht"> 
                    
                        <p> Total HT : <?php echo ($totalht."€"); ?> </p>
                    
                    </div>
                    <div class="tva">

                        <p> TVA : 20% </p>

                    </div>
                    <div class="ttc">

                        <p> Total TTC : <br>  <?php echo ($totalttc."€"); ?> </p>

                    </div>
                </div>
            </div>
            <footer class="footer">
                <p> En cas de retard de paiement, seront exigibles, conformément à l’article L 441-6 du code de commerce, une
            indemnité calculée sur la base de trois fois le taux de l’intérêt légal en vigueur ainsi qu’une indemnité
            forfaitaire pour frais de recouvrement de 40 euros et ensuite tu peux mettre <br><br> 92 Rue de La Paix, Villeneuve La Garenne, 92339 CEDEX <br><br> Tel: 0132675435 <br>SIRET: 802 954 785 <br> ID TVA: FR 31 734820078
            </p>
                
            </footer>
        </div>
    </body>
</html>

