<?php
class produto{
    private $id;
    private $nomep;
    private $preco;
    private $desi;
    

    public function __contruct ($nomep, $preco, $desi){
        $this -> nomep = $nomep;
        $this -> preco = $preco;
        $this -> desi = $desi;
    }
//caramba tudo em um é muito mais facil!!! E menos espaço
    public function Sapo(){ //inserir
        require "./conect.php";
        $sql = $vai -> prepare("INSERT INTO produto (nomep, preco, desi) VALUES (:n, :p, :ds)");
        $stmt->bindParam(":n", $this -> nomep);
        $stmt->bindParam(":p", $this -> preco);
        $stmt->bindParam(":ds", $this -> desi);
         return $stmt -> execute(); 
    }
    
    public function Olhada(){
        require "./conect.php";
        $vsql = $vai -> prepare("SELECT nomep, preco, desi FROM produto WHERE id = :id");
        $vsql->bindParam(":id", $this -> id);
         return $vsql -> fetch(); 
    }

   // public function sets e gets? DAO?
    
}
?>