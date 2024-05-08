<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['krompir'])){
        $ime = $_POST['ime'];
        $priimek = $_POST['ime'];
        $kraj = $_POST['ime'];
        $hisna_st = $_POST['ime'];
        $mesto = $_POST['ime'];
        $postna = $_POST['ime'];
        $vrsta = $_POST[''];
        $teza = $_POST[''];

        $query_mesto = "INSERT INTO MESTO(mesto, postna_stevilka) 
        VALUES('$mesto','$postna')";
        $query_naslov = "INSERT INTO NASLOV(kraj, hisna_st, TK_mesto)
        VALUES()"
    }
    

}
?>