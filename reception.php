<?php 

for($i=0;$i<count($_FILES['monfichier']['name']);$i++){
if($_FILES['monfichier']['error'][$i]==2){//echo("<script>alert('Erreur de taille.');</script>");
echo "<h3>problème de taille!</h3>";
//header('Location: index.php');
}

/*echo $_FILES['monfichier']['name'][$i]."<br />";
echo $_FILES['monfichier']['type'][$i]."<br />";
echo $_FILES['monfichier']['tmp_name'][$i]."<br />";
echo $_FILES['monfichier']['size'][$i]."<br />";
echo $_FILES['monfichier']['error'][$i]."<br />";*/
$extensions_valides=array('jpg','png','gif','jpeg');
if(!in_array(substr(strrchr(strtolower($_FILES['monfichier']['name'][$i]),'.'),1),$extensions_valides)){
echo "<h1>Le fichier n'est pas une image!</h1>";
}else{
	$___id=md5(uniqid(rand(),true)).".".substr(strrchr(strtolower($_FILES['monfichier']['name'][$i]),'.'),1);
	/*$dim=getimagesize($_FILES['monfichier']['tmp_name'][$i]);
	$dim[0]='160';
	$dim[1]='160';*/
	$res=move_uploaded_file($_FILES['monfichier']['tmp_name'][$i], "./images/".$___id);
	if($res){echo "Réussi"; echo "<img src='./images/".$___id."' width='50' />";}else{echo "Echoué";}
}
/*
substr($string,$k); // ignore les $k premiers caractères de $string.
strrchr($string,$cara); // renvoi la dernière partie de $string quand-on trouve le caractère $cara.
strtolower($string); // mettre la chaîne de caractère $string en miniscules.
in_array($val,$tab); // renvoi true, si la valeur $val est existe comme une valeur de $tab.
$dim=getimagesize($image); // renvoi les dimensions d'image dans un tableau $dim tq: $dim[0] est la largeur(width), et $dim[1] est l'hauteur (height).
*/
/*echo "<h1>Le titre du fichier est: ".$_POST['titre']."</h1><br />";
echo "<h1>La Déscription du fichier est: ".$_POST['description']."</h1>";*/
}

?>