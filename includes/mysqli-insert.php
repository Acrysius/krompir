<?php
require 'mysql-connect.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['krompir'])){
        $ime = $_POST['ime'];
        $priimek = $_POST['priimek'];
        $kraj = $_POST['naslov'];
        $hisna_st = $_POST['hisna-st'];
        $mesto = $_POST['mesto'];
        $postna = $_POST['postna'];
        $vrsta = $_POST['vrsta'];
        $teza = $_POST['teza'];

        $query_mesto = "INSERT INTO MESTO(mesto, postna_stevilka) 
        VALUES('$mesto','$postna')";
        $conn->exec($query_mesto);


        $last_id = $conn->lastInsertId();
        $queryNaslov = "INSERT INTO NASLOV(kraj, hisna_st, TK_mesto) VALUES('$kraj','$hisna_st','$last_id')";
        $conn->exec($queryNaslov);

        $last_id = $conn->lastInsertId();
    }
    

}
?>