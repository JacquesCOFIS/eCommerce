<?php

//Debut html header
$header = '
<div id="header">
    <div id="title">
        <h1 class="title_item"> BIENVENU </h1>';


if(isset($_SESSION['mail'])){

}else{
// Fomulaire de connection
    $header .= '<form class="title_item" method="post" action="'.ROOT.'/?action=user&type=connect" >
            <input class="title_ite input" type="text" name="pseudo" placeholder="pseudo">
            <input class="title_ite input" type="password" name="mdp"placeholder="mdp">
            <input class="title_ite input submit" type="submit">
        </form>';
}

//Nav header
$header .= '
 </div>
    <div id="nav">
        <ul>
            <li><a href="'.ROOT.'/?action=article&type=getAllArticle"><div> Tous les articles</div></a></li>
            <li><a href="'.ROOT.'/?action=article&type=getAllArticle&category=fresh"><div> Produits Frais </div></a></li>
            <li><a href="'.ROOT.'/?action=article&type=getAllArticle&category=drink"><div> Boissons </div></a></li>
            <li><a href="'.ROOT.'/?action=article&type=getAllArticle&category=foodCupboard"><div> Alimentaires </div></a></li>
            <li><a href="'.ROOT.'/?action=article&type=getAllArticle&category=frozen"><div> Surgelés </div></a></li>
        </ul>    
    </div>
</div>
';

return $header  ;