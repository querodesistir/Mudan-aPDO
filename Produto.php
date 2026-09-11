<?php
class produto{
    private  $id;
    private  $nomep;
    private  $preco;
    private  $desi;
    

    public function __contruct ( $nomep, $preco,  $desi){
        $this -> nomep = $nomep;
        $this -> preco = $preco;
        $this -> desi = $desi;
    }

    public function setNop($nomep){
        $this ->nomep;
    }
   public function setPreco($preco){
     if($preco<= 0){
        echo "pode passar mas ";
        throw new Exception('preco menor que 0'); 
    }
    $this->preco = $preco;
   }
   public function getDesi() {
     return $this->desi;
   }

   public function getNop() {
    return $this -> nomep;
   }
   public function getPreco(){
    return $this -> preco;
   }
    public function Sapo(){ //inserir
        require "./conect.php";
        $sql = $pdo -> prepare("INSERT INTO produto (nomep, preco, desi) VALUES (:n, :p, :ds)");
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

    public function Mudada(){
        require "./conect.php";
        $prepara = $vai->prepare("UPDATE produto SET preco VALUES :p WHERE id = :id");
        return $prepara->execute([
                ':p' => $preco,
                ':id' => $id
             ]);
    }
    public function Adeus(){
        require "./conect.php";
        $bora = $vai->prepare("DELETE produto WHERE id = :id");
        return $bora->execute([
            ':'
        ])
    }
}
?>
