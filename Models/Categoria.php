<?php
 class Categoria{
 private $cid;
 private $nomec;
 
 public function __contruct ($cid,$nomec){
 $this -> cid = $cid;       
 $this -> nomec = $nomec;
    }

 public function Criatag(){
    require "./conect.php";
        $sql = $vai -> prepare("INSERT INTO categoria (nomec) VALUES (:nc)");
        $vsql->bindParam(":nc", $this -> nomec);
            return $vsql -> execute(); 
 }
public function Listaga(){
    require "./conect.php";
     $vsql = $vai -> prepare("SELECT nomec FROM categoria WHERE cid = :cid");
     $vsql->bindParam(":cid", $this -> cid);
         return $vsql -> fetch(); 
}
public function Corritag(){
    require "./conect.php";
    $vsql = $vai -> prepare("UPDATE categoria SET nomec = :nc WHERE cid = :cid");
    $vsql ->bindParam(":nomec", $this -> nomec);
    $vsql ->bindParam(":cid", $this -> cid);
       return $vsql -> execute();
}
public function Losertag(){ // só consigo imaginar dois motivos para ela e um se resolve com Corritag
    $vsql = $vai -> prepare("DELETE FROM categoria WHERE cid = :cid");
    $vsql ->bindParam(":nomec", $this -> nomec);
    $vsql ->bindParam(":cid", $this -> cid);
       return $vsql -> execute();
}

 }
?>