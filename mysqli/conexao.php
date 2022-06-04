<?php
$localhost = "localhost:33";
$username = "root";
$senha = "";
$bd = "tema";
$table = "mysql";
$dtb = "show databases";


$BancoDeDados = mysqli_connect($localhost, $username, $senha);
mysqli_select_db($BancoDeDados, $bd);
$query = "SELECT * FROM $table";
$base = "SELECT * FROM $dtb";
$resultado = mysqli_query($BancoDeDados, $query);

if($resultado){ 
    while($row = mysqli_fetch_array($resultado)){
        echo "Conexão bem sucedida!"."<br/>";
        $nome = $row["nome"]; 
        echo "Nome: ".$nome."<br/>";
        $idade = $row["idade"];
        echo "Idade: ".$idade."<br/>";
        $email = $row["email"];
        echo "Email: ".$email."<br/>";
        
        //echo "Database: ".$bd."<br/>";
        echo "---------------------------------------------------------";

    }



}else{
    echo "Conexão mal sucedida com ".$bd."<br/>";
}

?>