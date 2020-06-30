<?php
$str1 = "la matrîse des fondamentaux du 
code et de la programmation dans les domaines 
du business, du marketing et de la communication 
est un avantage sérieux et utile."
?>

<p>
<?php
echo "La chaîne str1 contient ";
echo strlen ($str1);
echo " caractères.";
?>
</p>

<p>
<?php
echo "La chaîne str1 contient ";
echo str_word_count ($str1);
echo " mots.";
?>
</p>

<p>
<?php
 echo strtolower($str1)
?>
</p>

<p>
<?php
 echo strtoupper($str1)
?>
</p>

<p>
<?php
 echo str_shuffle($str1)
?>
</p>

<p>
<?php
 $recherche = 'la';
 $remplacement = 'LA';
 echo str_replace($recherche,$remplacement,$str1);
?>
</p>

<p>
<?php
 $str1 = substr($str1,0, -34);
 echo $str1;
?>
</p>


