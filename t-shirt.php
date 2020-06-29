<?php
$nom_du_produit = 't-shirt simple';
$couleur = 'blanc';
$prix = 10.50;
$disponnible = true;
$quantite = 10;
 
echo "<h3>".$nom_du_produit."</h3>";
echo "<p> le nom du produit est" .$nom_du_produit."</p>";
echo "<p> il reste " .$quantite."produit en stock </p>";
echo "<p> le produit" .$nom_du_produit."est de couleur" .$couleur."</p>";
 
echo "<h4> prix </h4>";
echo "<p> acheter 3 produit couterait" .($prix* 3)."</p>";
echo "<p> acheter la totalité des produits disponnibles couterait" .($prix* $quantite)."</p>";
echo "<p> si 3 produit sont vendus alors il reste" .$quantite."produit en stock </p>";
 
if ($disponnible==true) {
    echo "<p> le produit" .$nom_du_produit."est disponible en ligne </p>";
}
 
if ($disponnible==false) { 
    echo "<p> le produit" .$nom_du_produit."n'est malheureusement pas disponible </p>"; 
}
 
if ($quantite > 5) { 
    echo "<p> il reste" .$quantite."produits en magasin </p>"; 
} 
 
if ($quantite <5) { 
    echo "<p> il ne reste plus que" .$quantite."produits en magasin </p>"; 
}
if ($quantite==1) { 
    echo "<p> il ne reste plus qu'un produit en magasin </p>"; 
}
 
if ($quantite==0) { 
    echo "<p> il ne reste plus de produit en magasin </p>"; 
}
 
?>
