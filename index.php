
<?php
require_once('animali.php');
require_once('cat.php');
require_once('dog.php');


?>

<?php
$gatto = new gatti();
$gatto->titolo_prodotto = "Cuccia per gatti";
$gatto->immagine_prodotto = "cuccia_gatti.jpg";
$gatto->prezzo_prodotto = 25.99;
$gatto->quantita_prodotto = 10;
$gatto->tipologia_prodotto = "categoria: Cuccia per gatti";

$gatto2 = new gatti();
$gatto2->titolo_prodotto = "Mangime per gatti";
$gatto2->immagine_prodotto = "mangimeper gatti.jpeg";
$gatto2->prezzo_prodotto =34.99;
$gatto2->quantita_prodotto = 23;
$gatto2->tipologia_prodotto = "categoria: Mangime per gatti";

$gatto3 = new gatti();
$gatto3->titolo_prodotto = "Giochi per gatti";
$gatto3->immagine_prodotto = "giochi gatti.jpeg";
$gatto3->prezzo_prodotto =34.99;
$gatto3->quantita_prodotto = 13;
$gatto3->tipologia_prodotto = "categoria: Giochi per gatti";



$cane1 = new cani();
$cane1->titolo_prodotto = "Mangime per cani";
$cane1->immagine_prodotto = "mangime_cani.jpeg";
$cane1->prezzo_prodotto = 12.99;
$cane1->quantita_prodotto = 20;
$cane1->tipologia_prodotto = "categoria: Mangime per cani";

$cane2 = new cani();
$cane2->titolo_prodotto = "Giochi per cane";
$cane2->immagine_prodotto = "gioco_cane.jpeg";
$cane2->prezzo_prodotto = 20.99;
$cane2->quantita_prodotto = 18;
$cane2->tipologia_prodotto = "categoria: Giochi per cani";


$cane3 = new cani();
$cane3->titolo_prodotto = "Cuccia per cani";
$cane3->immagine_prodotto = "cuccia_cane.jpeg";
$cane3->prezzo_prodotto = 20.99;
$cane3->quantita_prodotto = 18;
$cane3->tipologia_prodotto = "categoria: Cuccie per cani";








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


echo '<div class="card">';
echo '<h2>' . $gatto->titolo_prodotto . '</h2>';
echo '<img src="' . $gatto->immagine_prodotto . '">';
echo '<p>' . $gatto->categoria_prodotto . ' - ' . $gatto->tipologia_prodotto . '</p>';
echo '<p>Prezzo: ' . $gatto->prezzo_prodotto . '€</p>';
echo '<p>Disponibilità: ' . $gatto->quantita_prodotto . '</p>';
echo '</div>';

echo '<div class="card">';
echo '<h2>' . $gatto2->titolo_prodotto . '</h2>';
echo '<img src="' . $gatto2->immagine_prodotto . '">';
echo '<p>' . $gatto2->categoria_prodotto . ' - ' . $gatto2->tipologia_prodotto . '</p>';
echo '<p>Prezzo: ' . $gatto2->prezzo_prodotto . '€</p>';
echo '<p>Disponibilità: ' . $gatto2->quantita_prodotto . '</p>';
echo '</div>';

echo '<div class="card">';
echo '<h2>' . $gatto3->titolo_prodotto . '</h2>';
echo '<img src="' . $gatto3->immagine_prodotto . '">';
echo '<p>' . $gatto3->categoria_prodotto . ' - ' . $gatto3->tipologia_prodotto . '</p>';
echo '<p>Prezzo: ' . $gatto3->prezzo_prodotto . '€</p>';
echo '<p>Disponibilità: ' . $gatto3->quantita_prodotto . '</p>';
echo '</div>';









echo '<div class="card">';
echo '<h2>' . $cane1->titolo_prodotto . '</h2>';
echo '<img src="' . $cane1->immagine_prodotto . '">';
echo '<p>' . $cane1->categoria_prodotto . ' - ' . $cane1->tipologia_prodotto . '</p>';
echo '<p>Prezzo: ' . $cane1->prezzo_prodotto . '€</p>';
echo '<p>Disponibilità: ' . $cane1->quantita_prodotto . '</p>';
echo '</div>';

echo '<div class="card">';
echo '<h2>' . $cane2->titolo_prodotto . '</h2>';
echo '<img src="' . $cane2->immagine_prodotto . '">';
echo '<p>' . $cane2->categoria_prodotto . ' - ' . $cane2->tipologia_prodotto . '</p>';
echo '<p>Prezzo: ' . $cane2->prezzo_prodotto . '€</p>';
echo '<p>Disponibilità: ' . $cane2->quantita_prodotto . '</p>';
echo '</div>';

echo '<div class="card">';
echo '<h2>' . $cane3->titolo_prodotto . '</h2>';
echo '<img src="' . $cane3->immagine_prodotto . '">';
echo '<p>' . $cane3->categoria_prodotto . ' - ' . $cane3->tipologia_prodotto . '</p>';
echo '<p>Prezzo: ' . $cane3->prezzo_prodotto . '€</p>';
echo '<p>Disponibilità: ' . $cane3->quantita_prodotto . '</p>';
echo '</div>';


?>
</body>
</html>



<style>
    img{
        max-width: 200px;
    }

</style>
