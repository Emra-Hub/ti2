<?php
$admin = new AdminBD($cnx);

$retour = $admin->getAdmin('Jules','123');
var_dump($retour);

/*
$query = 'select * from p_ville';
$result = $cnx-> query($query);

$data = $result->fetchAll();
//var_dump($data);
$nbr=count($data);

for($i=0;$i<$nbr;$i++){
    print "<br>".$data[$i]['nom_ville']."(".$data[$i]['code_postal'].")";
}*/