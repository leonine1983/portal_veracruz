<?php

define ("min", 10);
define ("max", 40);

$idade = 702;

echo "Idade máxima é ".max."<br>";
echo "Idade mínima é ".min."<br>";

if ($idade > min && $idade < max ) {
	echo "Esse garoto é jovem";}
	else { 
	echo "Achamos melhor que ele fique em casa por causa da COVID";}

?>

<?php

$cont = 0;
while ($cont < 100){
	if ($cont >50 && $cont<79){
		echo "<br>".$cont;}
	$cont++;
	}


?>